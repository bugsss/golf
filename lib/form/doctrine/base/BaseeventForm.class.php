<?php

/**
 * event form base class.
 *
 * @method event getObject() Returns the current form's model object
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseeventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'event_id'   => new sfWidgetFormInputHidden(),
      'player_id'  => new sfWidgetFormInputText(),
      'course_id'  => new sfWidgetFormInputText(),
      'event_name' => new sfWidgetFormInputText(),
      'event_date' => new sfWidgetFormInputText(),
      'start_hole' => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'event_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('event_id')), 'empty_value' => $this->getObject()->get('event_id'), 'required' => false)),
      'player_id'  => new sfValidatorInteger(),
      'course_id'  => new sfValidatorString(array('max_length' => 20)),
      'event_name' => new sfValidatorString(array('max_length' => 100)),
      'event_date' => new sfValidatorPass(),
      'start_hole' => new sfValidatorInteger(),
      'status'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'event';
  }

}
