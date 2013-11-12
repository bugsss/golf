<?php

/**
 * blogs filter form base class.
 *
 * @package    Golf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseblogsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'metadescription' => new sfWidgetFormFilterInput(),
      'metakeywords'    => new sfWidgetFormFilterInput(),
      'content'         => new sfWidgetFormFilterInput(),
      'filename'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'active'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'deleted'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'publish_date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'title'           => new sfValidatorPass(array('required' => false)),
      'metadescription' => new sfValidatorPass(array('required' => false)),
      'metakeywords'    => new sfValidatorPass(array('required' => false)),
      'content'         => new sfValidatorPass(array('required' => false)),
      'filename'        => new sfValidatorPass(array('required' => false)),
      'active'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'deleted'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'publish_date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('blogs_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'blogs';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'title'           => 'Text',
      'metadescription' => 'Text',
      'metakeywords'    => 'Text',
      'content'         => 'Text',
      'filename'        => 'Text',
      'active'          => 'Boolean',
      'deleted'         => 'Boolean',
      'publish_date'    => 'Date',
    );
  }
}
