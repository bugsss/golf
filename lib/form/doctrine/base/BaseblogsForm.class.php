<?php

/**
 * blogs form base class.
 *
 * @method blogs getObject() Returns the current form's model object
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseblogsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'title'           => new sfWidgetFormInputText(),
      'metadescription' => new sfWidgetFormInputText(),
      'metakeywords'    => new sfWidgetFormInputText(),
      'content'         => new sfWidgetFormInputText(),
      'filename'        => new sfWidgetFormInputText(),
      'active'          => new sfWidgetFormInputCheckbox(),
      'deleted'         => new sfWidgetFormInputCheckbox(),
      'publish_date'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'           => new sfValidatorString(array('max_length' => 150)),
      'metadescription' => new sfValidatorPass(array('required' => false)),
      'metakeywords'    => new sfValidatorPass(array('required' => false)),
      'content'         => new sfValidatorPass(array('required' => false)),
      'filename'        => new sfValidatorString(array('max_length' => 200)),
      'active'          => new sfValidatorBoolean(array('required' => false)),
      'deleted'         => new sfValidatorBoolean(array('required' => false)),
      'publish_date'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('blogs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'blogs';
  }

}
