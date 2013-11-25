<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/
class RegistrationForm extends BaseplayerForm
{
    public function configure()
    {
        unset(
                $this['home_course_name'],
                $this['handicap'],
                $this['image'],
                $this['is_user'],
                $this['is_admin'],
                $this['created_at']

            );


        $this->widgetSchema['first_name'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['last_name'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['email'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required, custom[email]]" ));
        $this->widgetSchema['password'] = new sfWidgetFormInputPassword( array(), array ( 'autocomplete' => 'off', 'class' => "customInput validate[required]" ));
        $this->widgetSchema['re_password'] = new sfWidgetFormInputPassword( array (), array( 'autocomplete' => 'off', 'class' => "customInput validate[required]" ) );

        $states = array(    "" => "Select state", 
                            "AL" => "Alabama", "AK" => "Alaska", "AZ" => "Arizona", "AR" => "Arkansas", "CA" =>	"California", "CO" => "Colorado", "CT" => "Connecticut",
                            "DE" => "Delaware", "FL" =>	"Florida", "GA" => "Georgia", "HI" => "Hawaii", "ID" => "Idaho", "IL" => "Illinois", "IN" => "Indiana", "IA" =>	"Iowa",
                            "KS" => "Kansas", "KY" => "Kentucky[C]", "LA" => "Louisiana", "ME" => "Maine", "MD" => "Maryland", "MA" => "Massachusetts[D]", "MI" => "Michigan",
                            "MN" => "Minnesota", "MS" => "Mississippi", "MO" => "Missouri", "MT" => "Montana", "NE" => "Nebraska", "NV" => "Nevada", "NH" => "New Hampshire",
                            "NJ" => "New Jersey", "NM" => "New Mexico", "NY" => "New York", "NC" => "North Carolina", "ND" => "North Dakota", "OH" => "Ohio", "OK" => "Oklahoma",
                            "OR" => "Oregon", "PA" => "Pennsylvania[E]", "RI" => "Rhode Island[F]", "SC" => "South Carolina", "SD" => "South Dakota", "TN" => "Tennessee", "TX"	 => "Texas",
                            "UT" => "Utah", "VT" => "Vermont", "VA" => "Virginia[G]", "WA" => "Washington", "WV" => "West Virginia", "WI" => "Wisconsin", "WY" => "Wyoming"
                        );
        
        $this->widgetSchema['state'] = new sfWidgetFormChoice(
                                            array(
                                                    'choices'   => $states, 
                                                    'multiple'  => false, 
                                                    'expanded'  => false
                                                ), array ( 'class' => "customSelect validate[required]" ));
        $this->widgetSchema['city'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['gender'] = new sfWidgetFormChoice(
                                            array(
                                                    'choices'   => array( "" => "Select gender", "m" => "Male", "f" => "Female"), 
                                                    'multiple'  => false, 
                                                    'expanded'  => false
                                                ), array ( 'class' => "customSelect validate[required]" ));
        $this->widgetSchema->setLabels(array(
                're_password'		=>	'Retype password'
        ));
        $this -> validatorSchema['first_name'] = new sfValidatorString();
        $this -> validatorSchema['last_name'] = new sfValidatorString();
        $this -> validatorSchema['state'] = new sfValidatorString();
        $this -> validatorSchema['city'] = new sfValidatorString();
        $this -> validatorSchema['gender'] = new sfValidatorString();
        $this -> validatorSchema['password'] = new sfValidatorString();
        $this -> validatorSchema['re_password'] = new sfValidatorString();


        $this -> validatorSchema['email'] = new sfValidatorAnd(array(
                    new sfValidatorEmail(),
                    new sfValidatorCallback(array("callback" => array($this, 'checkEmail')))
        ));


        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

        $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
                        new sfValidatorCallback( array ('callback' => array ($this, 'checkNewPass'))))));
        
        $this->widgetSchema->setNameFormat('registration[%s]');
        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }

    public function checkNewPass($validator, $values)
    {
        if ($values['password'] == '' || $values['re_password'] == '')
        {
            $error = new sfValidatorError($validator, 'You must fill both the "Password" and "Re password" fields.');
            throw new sfValidatorErrorSchema($validator, array ('password'=>$error));
        }
        if ($values['password'] != $values['re_password'])
        {
            $error = new sfValidatorError($validator, 'The password which you entered doesn\'t match <br />with the password from the re-type field. <br />Please make sure you enter the same password <br />in both fields.');
            throw new sfValidatorErrorSchema($validator, array ('password'=>$error));
        }
        return $values;
    }

    public function checkEmail($validator, $values)
    {
        $nr_of_same_usernames = Doctrine::getTable("player")
                            ->createQuery()
                            ->where(" email =  ? ", trim($values))
                            ->count();
        if( $nr_of_same_usernames > 0 )
        {
            $error = new sfValidatorError($validator, 'This is email address is already used.');
            throw new sfValidatorErrorSchema($validator, array ('email'=>$error));
        }

        return $values;
    }

    public function check_email_address($email)
    {
        if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email))
        {
            return false;
        }

        $email_array = explode("@", $email);
        $local_array = explode(".", $email_array[0]);
        for ($i = 0; $i < sizeof($local_array); $i++)
        {
            if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
            {
                return false;
            }
        }
        if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1]))
        {
            $domain_array = explode(".", $email_array[1]);
            if (sizeof($domain_array) < 2)
            {
                return false;
            }
            for ($i = 0; $i < sizeof($domain_array); $i++)
            {
                if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i]))
                {
                    return false;
                }
            }
        }
        return true;
    }
}
?>
