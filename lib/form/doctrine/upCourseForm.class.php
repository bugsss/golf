<?php

/**
 * player form.
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class upCourseForm extends BaseplayerForm
{
    public function configure()
    {
        unset(
                $this['first_name'],
                $this['last_name'],
                $this['email'],
                $this['home_course_name'],
                $this['state'],
                $this['city'],
                $this['handicap'],
                $this['gender'],
                $this['password'],
                $this['is_user'],
                $this['is_admin'],
                $this['created_at']
            );

        $this->setWidget('image', new sfWidgetFormInputFile( array(), array ( 'class' => "customInput validate[required]" ) ));
//        $this->widgetSchema['image'] = new sfWidgetFormInputFile( array(), array ( 'autocomplete' => 'off', 'class' => "customInput validate[required]" ));
        $this -> validatorSchema['image'] = new sfValidatorFile(
                array(
                    'required' => true,
                    'max_size' => 1500000,
                    'path' => sfConfig::get('sf_upload_dir') . '/course_images',
                    'mime_types' => 'web_images'
                ),
                array( // messages
                    'required'   => 'Please select am image file to upload',
                    'max_size'   => sprintf('The file is too big (max allowed 1,5 MB).'),
                    'mime_types' => 'The file type is not allowed (%mime_type%).'
                )
        );
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

        $this->widgetSchema->setNameFormat('upcourse[%s]');
        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }
}
