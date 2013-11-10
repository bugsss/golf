<?php

/**
 * player form.
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class credentialForm extends BaseplayerForm
{
    public function configure()
    {
        unset(
                $this['first_name'],
                $this['last_name'],
                $this['email'],
                $this['home_course_name'],
                $this['state'],
                $this['city'],
                $this['handicap'],
                $this['gender'],
                $this['image'],
                $this['is_user'],
                $this['is_admin'],
                $this['created_at']
            );


        $this->widgetSchema['old_password'] = new sfWidgetFormInputPassword( array(), array ( 'autocomplete' => 'off', 'class' => "customInput validate[required]" ));
        $this->widgetSchema['new_password'] = new sfWidgetFormInputPassword( array(), array ( 'autocomplete' => 'off', 'class' => "customInput validate[required]" ));
        $this->widgetSchema['confirm_password'] = new sfWidgetFormInputPassword( array (), array( 'autocomplete' => 'off', 'class' => "customInput validate[required]" ) );
        $this->widgetSchema->setLabels(array(
                'confirm_password'		=>	'Retype password'
        ));
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

        $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
                        new sfValidatorCallback( array ('callback' => array ($this, 'checkNewPass')) ),
                        new sfValidatorCallback( array ('callback' => array ($this, 'checkOldPass')) ),
            )));

        $this->widgetSchema->setNameFormat('credential[%s]');
        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }

    public function checkNewPass($validator, $values)
    {
        if ($values['new_password'] == '' || $values['confirm_password'] == '')
        {
            $error = new sfValidatorError($validator, 'You must fill both the "New password" and "Confirm password" fields.');
            throw new sfValidatorErrorSchema($validator, array ('password'=>$error));
        }
        if ($values['new_password'] != $values['confirm_password'])
        {
            $error = new sfValidatorError($validator, 'The password which you entered doesn\'t match <br />with the password from the re-type field. <br />Please make sure you enter the same password <br />in both fields.');
            throw new sfValidatorErrorSchema($validator, array ('new_password'=>$error));
        }
        return $values;
    }

    public function checkOldPass($validator, $values)
    {
        if ($values['old_password'] == '' )
        {
            $error = new sfValidatorError($validator, 'You must fill the "Old password" field.');
            throw new sfValidatorErrorSchema($validator, array ('password'=>$error));
        }
        $user = sfContext::getInstance()->getUser()->getAttribute("user");
        if ($values['old_password'] != $user->getPassword() )
        {
            $error = new sfValidatorError($validator, 'Invalid old password.');
            throw new sfValidatorErrorSchema($validator, array ('old_password'=>$error));
        }
        return $values;
    }
    
    public function getName()
    {
        return "credential";
    }

}
