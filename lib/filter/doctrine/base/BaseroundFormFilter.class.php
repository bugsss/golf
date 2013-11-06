<?php

/**
 * round filter form base class.
 *
 * @package    Golf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseroundFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'player_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tees_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'event_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Event'), 'add_empty' => true)),
      'rating'      => new sfWidgetFormFilterInput(),
      'slope'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'holes_score' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'holes_hcp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_score' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'round_hcp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bet_hcp'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saved'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'player_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tees_id'     => new sfValidatorPass(array('required' => false)),
      'event_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Event'), 'column' => 'event_id')),
      'rating'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'slope'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'holes_score' => new sfValidatorPass(array('required' => false)),
      'holes_hcp'   => new sfValidatorPass(array('required' => false)),
      'total_score' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'round_hcp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bet_hcp'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'saved'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('round_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'round';
  }

  public function getFields()
  {
    return array(
      'round_id'    => 'Number',
      'player_id'   => 'Number',
      'tees_id'     => 'Text',
      'event_id'    => 'ForeignKey',
      'rating'      => 'Number',
      'slope'       => 'Number',
      'holes_score' => 'Text',
      'holes_hcp'   => 'Text',
      'total_score' => 'Number',
      'round_hcp'   => 'Number',
      'bet_hcp'     => 'Number',
      'saved'       => 'Boolean',
    );
  }
}
