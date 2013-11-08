<?php

/**
 * player filter form base class.
 *
 * @package    Golf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseplayerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'first_name'       => new sfWidgetFormFilterInput(),
      'last_name'        => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(),
      'password'         => new sfWidgetFormFilterInput(),
      'gender'           => new sfWidgetFormFilterInput(),
      'handicap'         => new sfWidgetFormFilterInput(),
      'usga_index'       => new sfWidgetFormFilterInput(),
      'is_user'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_admin'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'state'            => new sfWidgetFormFilterInput(),
      'city'             => new sfWidgetFormFilterInput(),
      'home_course'      => new sfWidgetFormFilterInput(),
      'home_course_name' => new sfWidgetFormFilterInput(),
      'image'            => new sfWidgetFormFilterInput(),
      'created'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'first_name'       => new sfValidatorPass(array('required' => false)),
      'last_name'        => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'password'         => new sfValidatorPass(array('required' => false)),
      'gender'           => new sfValidatorPass(array('required' => false)),
      'handicap'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usga_index'       => new sfValidatorPass(array('required' => false)),
      'is_user'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_admin'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'state'            => new sfValidatorPass(array('required' => false)),
      'city'             => new sfValidatorPass(array('required' => false)),
      'home_course'      => new sfValidatorPass(array('required' => false)),
      'home_course_name' => new sfValidatorPass(array('required' => false)),
      'image'            => new sfValidatorPass(array('required' => false)),
      'created'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('player_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'player';
  }

  public function getFields()
  {
    return array(
      'player_id'        => 'Number',
      'first_name'       => 'Text',
      'last_name'        => 'Text',
      'email'            => 'Text',
      'password'         => 'Text',
      'gender'           => 'Text',
      'handicap'         => 'Number',
      'usga_index'       => 'Text',
      'is_user'          => 'Number',
      'is_admin'         => 'Number',
      'state'            => 'Text',
      'city'             => 'Text',
      'home_course'      => 'Text',
      'home_course_name' => 'Text',
      'image'            => 'Text',
      'created'          => 'Date',
    );
  }
}
