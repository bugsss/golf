<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/
class ForgotForm extends BaseplayerForm
{
    public function configure()
    {
        unset(
                $this['first_name'],
                $this['last_name'],
                $this['home_course_name'],
                $this['state'],
                $this['city'],
                $this['handicap'],
                $this['gender'],
                $this['password'],
                $this['is_user'],
                $this['is_admin'],
                $this['created_at']
            );


        $this->widgetSchema['email'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));


        $this -> validatorSchema['email'] = new sfValidatorAnd(array(
                    new sfValidatorEmail(),
                    new sfValidatorCallback(array("callback" => array($this, 'checkEmail')))
        ));


        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

        $this->widgetSchema->setNameFormat('forgot[%s]');
        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }

    public function checkEmail($validator, $value)
    {
        $nr_of_same_usernames = Doctrine::getTable("player")
                            ->createQuery()
                            ->where(" email =  ? ", trim($value))
                            ->count();
        if( $nr_of_same_usernames == 0 )
        {
            $error = new sfValidatorError($validator, 'Invalid email addressss.');
            throw new sfValidatorErrorSchema($validator, array ('email'=>$error));
        }

        return $value;
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