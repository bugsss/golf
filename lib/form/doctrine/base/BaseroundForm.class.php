<?php

/**
 * round form base class.
 *
 * @method round getObject() Returns the current form's model object
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseroundForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'round_id'    => new sfWidgetFormInputHidden(),
      'player_id'   => new sfWidgetFormInputText(),
      'tees_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Course'), 'add_empty' => false)),
      'event_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Event'), 'add_empty' => false)),
      'rating'      => new sfWidgetFormInputText(),
      'slope'       => new sfWidgetFormInputText(),
      'holes_score' => new sfWidgetFormInputText(),
      'holes_hcp'   => new sfWidgetFormInputText(),
      'total_score' => new sfWidgetFormInputText(),
      'round_hcp'   => new sfWidgetFormInputText(),
      'bet_hcp'     => new sfWidgetFormInputText(),
      'saved'       => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'round_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('round_id')), 'empty_value' => $this->getObject()->get('round_id'), 'required' => false)),
      'player_id'   => new sfValidatorInteger(),
      'tees_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Course'))),
      'event_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Event'))),
      'rating'      => new sfValidatorNumber(array('required' => false)),
      'slope'       => new sfValidatorInteger(array('required' => false)),
      'holes_score' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'holes_hcp'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'total_score' => new sfValidatorInteger(array('required' => false)),
      'round_hcp'   => new sfValidatorNumber(array('required' => false)),
      'bet_hcp'     => new sfValidatorInteger(array('required' => false)),
      'saved'       => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('round[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'round';
  }

}
