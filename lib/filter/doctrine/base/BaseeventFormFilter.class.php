<?php

/**
 * event filter form base class.
 *
 * @package    Golf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseeventFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'player_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'course_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'event_name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'event_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'start_hole' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'player_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'course_id'  => new sfValidatorPass(array('required' => false)),
      'event_name' => new sfValidatorPass(array('required' => false)),
      'event_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'start_hole' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('event_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'event';
  }

  public function getFields()
  {
    return array(
      'event_id'   => 'Number',
      'player_id'  => 'Number',
      'course_id'  => 'Text',
      'event_name' => 'Text',
      'event_date' => 'Date',
      'start_hole' => 'Number',
      'status'     => 'Number',
    );
  }
}
