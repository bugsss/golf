<?php

/**
 * player form base class.
 *
 * @method player getObject() Returns the current form's model object
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseplayerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'player_id'          => new sfWidgetFormInputHidden(),
      'first_name'         => new sfWidgetFormInputText(),
      'last_name'          => new sfWidgetFormInputText(),
      'email'              => new sfWidgetFormInputText(),
      'password'           => new sfWidgetFormInputText(),
      'gender'             => new sfWidgetFormInputText(),
      'handicap'           => new sfWidgetFormInputText(),
      'usga_index'         => new sfWidgetFormInputText(),
      'is_user'            => new sfWidgetFormInputText(),
      'state'              => new sfWidgetFormInputText(),
      'city'               => new sfWidgetFormInputText(),
      'home_course:{ type' => new sfWidgetFormInputText(),
      'created'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'player_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('player_id')), 'empty_value' => $this->getObject()->get('player_id'), 'required' => false)),
      'first_name'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'last_name'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'email'              => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'password'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'gender'             => new sfValidatorPass(array('required' => false)),
      'handicap'           => new sfValidatorNumber(array('required' => false)),
      'usga_index'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'is_user'            => new sfValidatorInteger(array('required' => false)),
      'state'              => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'city'               => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'home_course:{ type' => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'created'            => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('player[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'player';
  }

}
