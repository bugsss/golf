<?php

/**
 * palyer form.
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactusForm extends BaseplayerForm
{
  public function configure()
  {
        unset(
                $this['first_name'],
                $this['last_name'],
                $this['email'],
                $this['password'],
                $this['gender'],
                $this['handicap'],
                $this['usga_index'],
                $this['is_user'],
                $this['state'],
                $this['city'],
                $this['created_at'],
                $this['home_course']
        );    
        
        $this->widgetSchema['email'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['name'] = new sfWidgetFormInput( array(), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['message'] = new sfWidgetFormTextarea( array(), array ( 'class' => "customTextarea validate[required]" ));
    
        $this->widgetSchema->setLabels(array(
                'email'     =>	'Email',
                'name'      =>	'Name',
                'message'   =>	'Message',
                
        ));
        $this -> validatorSchema['name'] = new sfValidatorString();
        $this -> validatorSchema['message'] = new sfValidatorString();
        $this -> validatorSchema['email'] = new sfValidatorEmail();


        $this->widgetSchema->setNameFormat('contactus[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }
}
