<?php

/**
 * player form.
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class playerForm extends BaseplayerForm
{
    public function configure()
    {
        unset(
                $this['handicap'],
                $this['image'],
                $this['password'],
                $this['is_user'],
                $this['is_admin'],
                $this['created_at']

            );


        $this->widgetSchema['first_name'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['last_name'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['email'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['home_course_name'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));

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
                                                ), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['city'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
//        $this->widgetSchema['handicap'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['gender'] = new sfWidgetFormChoice(
                                            array(
                                                    'choices'   => array( "" => "Select gender", "male" => "Male", "female" => "Female"), 
                                                    'multiple'  => false, 
                                                    'expanded'  => false
                                                ), array ( 'class' => "customInput validate[required]" ));
//        $this -> validatorSchema['first_name'] = new sfValidatorString();
//        $this -> validatorSchema['last_name'] = new sfValidatorString();
//        $this -> validatorSchema['state'] = new sfValidatorString();
//        $this -> validatorSchema['city'] = new sfValidatorString();
//        $this -> validatorSchema['handicap'] = new sfValidatorString();
//        $this -> validatorSchema['gender'] = new sfValidatorString();
//        $this -> validatorSchema['home_course'] = new sfValidatorString();


        $this -> validatorSchema['email'] = new sfValidatorAnd(array(
                    new sfValidatorEmail(),
                    new sfValidatorCallback(array("callback" => array($this, 'checkEmail')))
        ));


        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

        $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
                        new sfValidatorCallback( array ('callback' => array ($this, 'checkNewPass'))))));

        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }

    public function checkEmail($validator, $values)
    {
        $nr_of_same_usernames = Doctrine::getTable("player")
                            ->createQuery()
                            ->where(" email =  ? ", trim($values['email']))
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
