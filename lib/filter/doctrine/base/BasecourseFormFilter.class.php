<?php

/**
 * course filter form base class.
 *
 * @package    Golf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasecourseFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tees_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'CourseName'                => new sfWidgetFormFilterInput(),
      'StreetAddress'             => new sfWidgetFormFilterInput(),
      'City'                      => new sfWidgetFormFilterInput(),
      'StateorRegion'             => new sfWidgetFormFilterInput(),
      'Zip'                       => new sfWidgetFormFilterInput(),
      'County'                    => new sfWidgetFormFilterInput(),
      'PhoneNumber'               => new sfWidgetFormFilterInput(),
      'FaxNumber'                 => new sfWidgetFormFilterInput(),
      'URL'                       => new sfWidgetFormFilterInput(),
      'TotalHoles'                => new sfWidgetFormFilterInput(),
      'architects'                => new sfWidgetFormFilterInput(),
      'YearBuiltFounded'          => new sfWidgetFormFilterInput(),
      'StatusPublicPrivateResort' => new sfWidgetFormFilterInput(),
      'GuestPolicy'               => new sfWidgetFormFilterInput(),
      'EmailAddress'              => new sfWidgetFormFilterInput(),
      'TeeNumber'                 => new sfWidgetFormFilterInput(),
      'teename'                   => new sfWidgetFormFilterInput(),
      'Par'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Holes'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Rating'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Slope'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_1'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_1'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_1'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_2'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_2'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_2'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_3'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_3'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_3'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_4'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_4'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_4'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_5'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_5'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_5'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_6'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_6'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_6'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_7'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_7'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_7'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_8'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_8'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_8'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_9'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_9'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_9'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_10'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_10'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_10'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_11'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_11'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_11'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_12'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_12'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_12'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_13'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_13'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_13'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_14'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_14'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_14'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_15'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_15'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_15'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_16'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_16'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_16'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_17'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_17'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_17'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Par_18'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Yards_18'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Hdcp_18'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Tot_in_par'                => new sfWidgetFormFilterInput(),
      'Tot_in_yards'              => new sfWidgetFormFilterInput(),
      'Length'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitude'                  => new sfWidgetFormFilterInput(),
      'longitude'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tees_id'                   => new sfValidatorPass(array('required' => false)),
      'CourseName'                => new sfValidatorPass(array('required' => false)),
      'StreetAddress'             => new sfValidatorPass(array('required' => false)),
      'City'                      => new sfValidatorPass(array('required' => false)),
      'StateorRegion'             => new sfValidatorPass(array('required' => false)),
      'Zip'                       => new sfValidatorPass(array('required' => false)),
      'County'                    => new sfValidatorPass(array('required' => false)),
      'PhoneNumber'               => new sfValidatorPass(array('required' => false)),
      'FaxNumber'                 => new sfValidatorPass(array('required' => false)),
      'URL'                       => new sfValidatorPass(array('required' => false)),
      'TotalHoles'                => new sfValidatorPass(array('required' => false)),
      'architects'                => new sfValidatorPass(array('required' => false)),
      'YearBuiltFounded'          => new sfValidatorPass(array('required' => false)),
      'StatusPublicPrivateResort' => new sfValidatorPass(array('required' => false)),
      'GuestPolicy'               => new sfValidatorPass(array('required' => false)),
      'EmailAddress'              => new sfValidatorPass(array('required' => false)),
      'TeeNumber'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'teename'                   => new sfValidatorPass(array('required' => false)),
      'Par'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Holes'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Rating'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'Slope'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_1'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_1'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_1'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_2'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_2'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_2'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_3'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_3'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_3'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_4'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_4'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_4'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_5'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_5'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_5'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_6'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_6'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_6'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_7'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_7'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_7'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_8'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_8'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_8'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_9'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_9'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_9'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_10'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_10'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_10'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_11'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_11'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_11'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_12'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_12'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_12'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_13'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_13'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_13'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_14'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_14'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_14'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_15'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_15'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_15'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_16'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_16'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_16'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_17'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_17'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_17'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Par_18'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Yards_18'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Hdcp_18'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Tot_in_par'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Tot_in_yards'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Length'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'latitude'                  => new sfValidatorPass(array('required' => false)),
      'longitude'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('course_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'course';
  }

  public function getFields()
  {
    return array(
      'course_id'                 => 'Text',
      'tees_id'                   => 'Text',
      'CourseName'                => 'Text',
      'StreetAddress'             => 'Text',
      'City'                      => 'Text',
      'StateorRegion'             => 'Text',
      'Zip'                       => 'Text',
      'County'                    => 'Text',
      'PhoneNumber'               => 'Text',
      'FaxNumber'                 => 'Text',
      'URL'                       => 'Text',
      'TotalHoles'                => 'Text',
      'architects'                => 'Text',
      'YearBuiltFounded'          => 'Text',
      'StatusPublicPrivateResort' => 'Text',
      'GuestPolicy'               => 'Text',
      'EmailAddress'              => 'Text',
      'TeeNumber'                 => 'Number',
      'teename'                   => 'Text',
      'Par'                       => 'Number',
      'Holes'                     => 'Number',
      'Rating'                    => 'Number',
      'Slope'                     => 'Number',
      'Par_1'                     => 'Number',
      'Yards_1'                   => 'Number',
      'Hdcp_1'                    => 'Number',
      'Par_2'                     => 'Number',
      'Yards_2'                   => 'Number',
      'Hdcp_2'                    => 'Number',
      'Par_3'                     => 'Number',
      'Yards_3'                   => 'Number',
      'Hdcp_3'                    => 'Number',
      'Par_4'                     => 'Number',
      'Yards_4'                   => 'Number',
      'Hdcp_4'                    => 'Number',
      'Par_5'                     => 'Number',
      'Yards_5'                   => 'Number',
      'Hdcp_5'                    => 'Number',
      'Par_6'                     => 'Number',
      'Yards_6'                   => 'Number',
      'Hdcp_6'                    => 'Number',
      'Par_7'                     => 'Number',
      'Yards_7'                   => 'Number',
      'Hdcp_7'                    => 'Number',
      'Par_8'                     => 'Number',
      'Yards_8'                   => 'Number',
      'Hdcp_8'                    => 'Number',
      'Par_9'                     => 'Number',
      'Yards_9'                   => 'Number',
      'Hdcp_9'                    => 'Number',
      'Par_10'                    => 'Number',
      'Yards_10'                  => 'Number',
      'Hdcp_10'                   => 'Number',
      'Par_11'                    => 'Number',
      'Yards_11'                  => 'Number',
      'Hdcp_11'                   => 'Number',
      'Par_12'                    => 'Number',
      'Yards_12'                  => 'Number',
      'Hdcp_12'                   => 'Number',
      'Par_13'                    => 'Number',
      'Yards_13'                  => 'Number',
      'Hdcp_13'                   => 'Number',
      'Par_14'                    => 'Number',
      'Yards_14'                  => 'Number',
      'Hdcp_14'                   => 'Number',
      'Par_15'                    => 'Number',
      'Yards_15'                  => 'Number',
      'Hdcp_15'                   => 'Number',
      'Par_16'                    => 'Number',
      'Yards_16'                  => 'Number',
      'Hdcp_16'                   => 'Number',
      'Par_17'                    => 'Number',
      'Yards_17'                  => 'Number',
      'Hdcp_17'                   => 'Number',
      'Par_18'                    => 'Number',
      'Yards_18'                  => 'Number',
      'Hdcp_18'                   => 'Number',
      'Tot_in_par'                => 'Number',
      'Tot_in_yards'              => 'Number',
      'Length'                    => 'Number',
      'latitude'                  => 'Text',
      'longitude'                 => 'Text',
    );
  }
}
