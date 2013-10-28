<?php

/**
 * palyer form.
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginForm extends BaseplayerForm
{
  public function configure()
  {
        unset(
                $this['first_name'],
                $this['last_name'],
                $this['gender'],
                $this['handicap'],
                $this['usga_index'],
                $this['is_user'],
                $this['state'],
                $this['city'],
                $this['created_at'],
                $this['home_course']
        );    
        
        $this->widgetSchema['email'] = new sfWidgetFormInput( array (), array ( 'class' => "validate[required]" ));
        $this->widgetSchema['password'] = new sfWidgetFormInputPassword( array(), array ( 'autocomplete' => 'off', 'class' => "validate[required]" ));
    
        $this->widgetSchema->setLabels(array(
                'email'     =>	'Email',
                'password'  =>	'Password'
        ));
        $this -> validatorSchema['password'] = new sfValidatorString();
        $this -> validatorSchema['email'] = new sfValidatorEmail();


        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }
}
