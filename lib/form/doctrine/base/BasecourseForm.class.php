<?php

/**
 * course form base class.
 *
 * @method course getObject() Returns the current form's model object
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasecourseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'course_id'                 => new sfWidgetFormInputHidden(),
      'tees_id'                   => new sfWidgetFormInputText(),
      'CourseName'                => new sfWidgetFormInputText(),
      'StreetAddress'             => new sfWidgetFormInputText(),
      'City'                      => new sfWidgetFormInputText(),
      'StateorRegion'             => new sfWidgetFormInputText(),
      'Zip'                       => new sfWidgetFormInputText(),
      'County'                    => new sfWidgetFormInputText(),
      'PhoneNumber'               => new sfWidgetFormInputText(),
      'FaxNumber'                 => new sfWidgetFormInputText(),
      'URL'                       => new sfWidgetFormInputText(),
      'TotalHoles'                => new sfWidgetFormInputText(),
      'architects'                => new sfWidgetFormInputText(),
      'YearBuiltFounded'          => new sfWidgetFormInputText(),
      'StatusPublicPrivateResort' => new sfWidgetFormInputText(),
      'GuestPolicy'               => new sfWidgetFormInputText(),
      'EmailAddress'              => new sfWidgetFormInputText(),
      'TeeNumber'                 => new sfWidgetFormInputText(),
      'teename'                   => new sfWidgetFormInputText(),
      'Par'                       => new sfWidgetFormInputText(),
      'Holes'                     => new sfWidgetFormInputText(),
      'Rating'                    => new sfWidgetFormInputText(),
      'Slope'                     => new sfWidgetFormInputText(),
      'Par_1'                     => new sfWidgetFormInputText(),
      'Yards_1'                   => new sfWidgetFormInputText(),
      'Hdcp_1'                    => new sfWidgetFormInputText(),
      'Par_2'                     => new sfWidgetFormInputText(),
      'Yards_2'                   => new sfWidgetFormInputText(),
      'Hdcp_2'                    => new sfWidgetFormInputText(),
      'Par_3'                     => new sfWidgetFormInputText(),
      'Yards_3'                   => new sfWidgetFormInputText(),
      'Hdcp_3'                    => new sfWidgetFormInputText(),
      'Par_4'                     => new sfWidgetFormInputText(),
      'Yards_4'                   => new sfWidgetFormInputText(),
      'Hdcp_4'                    => new sfWidgetFormInputText(),
      'Par_5'                     => new sfWidgetFormInputText(),
      'Yards_5'                   => new sfWidgetFormInputText(),
      'Hdcp_5'                    => new sfWidgetFormInputText(),
      'Par_6'                     => new sfWidgetFormInputText(),
      'Yards_6'                   => new sfWidgetFormInputText(),
      'Hdcp_6'                    => new sfWidgetFormInputText(),
      'Par_7'                     => new sfWidgetFormInputText(),
      'Yards_7'                   => new sfWidgetFormInputText(),
      'Hdcp_7'                    => new sfWidgetFormInputText(),
      'Par_8'                     => new sfWidgetFormInputText(),
      'Yards_8'                   => new sfWidgetFormInputText(),
      'Hdcp_8'                    => new sfWidgetFormInputText(),
      'Par_9'                     => new sfWidgetFormInputText(),
      'Yards_9'                   => new sfWidgetFormInputText(),
      'Hdcp_9'                    => new sfWidgetFormInputText(),
      'Par_10'                    => new sfWidgetFormInputText(),
      'Yards_10'                  => new sfWidgetFormInputText(),
      'Hdcp_10'                   => new sfWidgetFormInputText(),
      'Par_11'                    => new sfWidgetFormInputText(),
      'Yards_11'                  => new sfWidgetFormInputText(),
      'Hdcp_11'                   => new sfWidgetFormInputText(),
      'Par_12'                    => new sfWidgetFormInputText(),
      'Yards_12'                  => new sfWidgetFormInputText(),
      'Hdcp_12'                   => new sfWidgetFormInputText(),
      'Par_13'                    => new sfWidgetFormInputText(),
      'Yards_13'                  => new sfWidgetFormInputText(),
      'Hdcp_13'                   => new sfWidgetFormInputText(),
      'Par_14'                    => new sfWidgetFormInputText(),
      'Yards_14'                  => new sfWidgetFormInputText(),
      'Hdcp_14'                   => new sfWidgetFormInputText(),
      'Par_15'                    => new sfWidgetFormInputText(),
      'Yards_15'                  => new sfWidgetFormInputText(),
      'Hdcp_15'                   => new sfWidgetFormInputText(),
      'Par_16'                    => new sfWidgetFormInputText(),
      'Yards_16'                  => new sfWidgetFormInputText(),
      'Hdcp_16'                   => new sfWidgetFormInputText(),
      'Par_17'                    => new sfWidgetFormInputText(),
      'Yards_17'                  => new sfWidgetFormInputText(),
      'Hdcp_17'                   => new sfWidgetFormInputText(),
      'Par_18'                    => new sfWidgetFormInputText(),
      'Yards_18'                  => new sfWidgetFormInputText(),
      'Hdcp_18'                   => new sfWidgetFormInputText(),
      'Tot_in_par'                => new sfWidgetFormInputText(),
      'Tot_in_yards'              => new sfWidgetFormInputText(),
      'Length'                    => new sfWidgetFormInputText(),
      'latitude'                  => new sfWidgetFormInputText(),
      'longitude'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'course_id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('course_id')), 'empty_value' => $this->getObject()->get('course_id'), 'required' => false)),
      'tees_id'                   => new sfValidatorString(array('max_length' => 64)),
      'CourseName'                => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'StreetAddress'             => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'City'                      => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'StateorRegion'             => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'Zip'                       => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'County'                    => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'PhoneNumber'               => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'FaxNumber'                 => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'URL'                       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'TotalHoles'                => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'architects'                => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'YearBuiltFounded'          => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'StatusPublicPrivateResort' => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'GuestPolicy'               => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'EmailAddress'              => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'TeeNumber'                 => new sfValidatorInteger(array('required' => false)),
      'teename'                   => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'Par'                       => new sfValidatorInteger(),
      'Holes'                     => new sfValidatorInteger(),
      'Rating'                    => new sfValidatorNumber(),
      'Slope'                     => new sfValidatorInteger(),
      'Par_1'                     => new sfValidatorInteger(),
      'Yards_1'                   => new sfValidatorInteger(),
      'Hdcp_1'                    => new sfValidatorInteger(array('required' => false)),
      'Par_2'                     => new sfValidatorInteger(),
      'Yards_2'                   => new sfValidatorInteger(),
      'Hdcp_2'                    => new sfValidatorInteger(array('required' => false)),
      'Par_3'                     => new sfValidatorInteger(),
      'Yards_3'                   => new sfValidatorInteger(),
      'Hdcp_3'                    => new sfValidatorInteger(array('required' => false)),
      'Par_4'                     => new sfValidatorInteger(),
      'Yards_4'                   => new sfValidatorInteger(),
      'Hdcp_4'                    => new sfValidatorInteger(array('required' => false)),
      'Par_5'                     => new sfValidatorInteger(),
      'Yards_5'                   => new sfValidatorInteger(),
      'Hdcp_5'                    => new sfValidatorInteger(array('required' => false)),
      'Par_6'                     => new sfValidatorInteger(),
      'Yards_6'                   => new sfValidatorInteger(),
      'Hdcp_6'                    => new sfValidatorInteger(array('required' => false)),
      'Par_7'                     => new sfValidatorInteger(),
      'Yards_7'                   => new sfValidatorInteger(),
      'Hdcp_7'                    => new sfValidatorInteger(array('required' => false)),
      'Par_8'                     => new sfValidatorInteger(),
      'Yards_8'                   => new sfValidatorInteger(),
      'Hdcp_8'                    => new sfValidatorInteger(array('required' => false)),
      'Par_9'                     => new sfValidatorInteger(),
      'Yards_9'                   => new sfValidatorInteger(),
      'Hdcp_9'                    => new sfValidatorInteger(array('required' => false)),
      'Par_10'                    => new sfValidatorInteger(),
      'Yards_10'                  => new sfValidatorInteger(),
      'Hdcp_10'                   => new sfValidatorInteger(array('required' => false)),
      'Par_11'                    => new sfValidatorInteger(),
      'Yards_11'                  => new sfValidatorInteger(),
      'Hdcp_11'                   => new sfValidatorInteger(array('required' => false)),
      'Par_12'                    => new sfValidatorInteger(),
      'Yards_12'                  => new sfValidatorInteger(),
      'Hdcp_12'                   => new sfValidatorInteger(array('required' => false)),
      'Par_13'                    => new sfValidatorInteger(),
      'Yards_13'                  => new sfValidatorInteger(),
      'Hdcp_13'                   => new sfValidatorInteger(array('required' => false)),
      'Par_14'                    => new sfValidatorInteger(),
      'Yards_14'                  => new sfValidatorInteger(),
      'Hdcp_14'                   => new sfValidatorInteger(array('required' => false)),
      'Par_15'                    => new sfValidatorInteger(),
      'Yards_15'                  => new sfValidatorInteger(),
      'Hdcp_15'                   => new sfValidatorInteger(array('required' => false)),
      'Par_16'                    => new sfValidatorInteger(),
      'Yards_16'                  => new sfValidatorInteger(),
      'Hdcp_16'                   => new sfValidatorInteger(array('required' => false)),
      'Par_17'                    => new sfValidatorInteger(),
      'Yards_17'                  => new sfValidatorInteger(),
      'Hdcp_17'                   => new sfValidatorInteger(array('required' => false)),
      'Par_18'                    => new sfValidatorInteger(),
      'Yards_18'                  => new sfValidatorInteger(),
      'Hdcp_18'                   => new sfValidatorInteger(array('required' => false)),
      'Tot_in_par'                => new sfValidatorInteger(array('required' => false)),
      'Tot_in_yards'              => new sfValidatorInteger(array('required' => false)),
      'Length'                    => new sfValidatorInteger(),
      'latitude'                  => new sfValidatorPass(array('required' => false)),
      'longitude'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('course[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'course';
  }

}
