<?php

/**
 * blogs form.
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class blogsForm extends BaseblogsForm
{
  public function configure()
  {
        unset(
//                $this['id'],
                $this['metadescription'],
                $this['metakeywords'],
                $this['filename'],
                $this['deleted']
            );
        
        $this->widgetSchema['title'] = new sfWidgetFormInput( array (), array ( 'class' => "validate[required]" ));
        $this->widgetSchema['publish_date'] = new sfWidgetFormInput( array (), array ( 'class' => "datepicker validate[required]" ));
        $this->widgetSchema['content'] = new sfWidgetFormTextarea( array (), array ( 'class' => "wysiwyg validate[required]" ));
        
        $this -> validatorSchema['publish_date'] = new sfValidatorDate();
        $this -> validatorSchema['title'] = new sfValidatorString();
        $this -> validatorSchema['content'] = new sfValidatorString();

        $this->widgetSchema->setNameFormat('blog[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }
}
