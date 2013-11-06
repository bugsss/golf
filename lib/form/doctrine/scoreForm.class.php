<?php

/**
 * course form.
 *
 * @package    Golf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class scoreForm extends BaseplayerForm
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
                $this['image'],
                $this['password'],
                $this['is_user'],
                $this['created_at'],
                $this['home_course']
                
            );
        
        $this->widgetSchema['score_date'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));
        $this->widgetSchema['score'] = new sfWidgetFormInput( array (), array ( 'class' => "customInput validate[required]" ));

        $states = array(    "" => "Select state", 
                            "AL" => "Alabama", "AK" => "Alaska", "AZ" => "Arizona", "AR" => "Arkansas", "CA" =>	"California", "CO" => "Colorado", "CT" => "Connecticut",
                            "DE" => "Delaware", "FL" =>	"Florida", "GA" => "Georgia", "HI" => "Hawaii", "ID" => "Idaho", "IL" => "Illinois", "IN" => "Indiana", "IA" =>	"Iowa",
                            "KS" => "Kansas", "KY" => "Kentucky[C]", "LA" => "Louisiana", "ME" => "Maine", "MD" => "Maryland", "MA" => "Massachusetts[D]", "MI" => "Michigan",
                            "MN" => "Minnesota", "MS" => "Mississippi", "MO" => "Missouri", "MT" => "Montana", "NE" => "Nebraska", "NV" => "Nevada", "NH" => "New Hampshire",
                            "NJ" => "New Jersey", "NM" => "New Mexico", "NY" => "New York", "NC" => "North Carolina", "ND" => "North Dakota", "OH" => "Ohio", "OK" => "Oklahoma",
                            "OR" => "Oregon", "PA" => "Pennsylvania[E]", "RI" => "Rhode Island[F]", "SC" => "South Carolina", "SD" => "South Dakota", "TN" => "Tennessee", "TX"	 => "Texas",
                            "UT" => "Utah", "VT" => "Vermont", "VA" => "Virginia[G]", "WA" => "Washington", "WV" => "West Virginia", "WI" => "Wisconsin", "WY" => "Wyoming"
                        );
        
        $this->widgetSchema['state'] = new sfWidgetFormChoice(
                                            array(
                                                    'choices'   => $states, 
                                                    'multiple'  => false, 
                                                    'expanded'  => false
                                                ), array ( 'class' => "customSelect validate[required]" ));
        $this->widgetSchema['course'] = new sfWidgetFormChoice(
                                            array(
                                                    'choices'   => array( "" => "Select course"), 
                                                    'multiple'  => false, 
                                                    'expanded'  => false
                                                ), array ( 'class' => "customSelect validate[required]" ));
        $this->widgetSchema['teese'] = new sfWidgetFormChoice(
                                            array(
                                                    'choices'   => array( "" => "Select tees" ), 
                                                    'multiple'  => false, 
                                                    'expanded'  => false
                                                ), array ( 'class' => "customSelect validate[required]" ));
        
        $this -> validatorSchema['score_date'] = new sfValidatorDate();
        $this -> validatorSchema['state'] = new sfValidatorString();
        $this -> validatorSchema['course'] = new sfValidatorString();
        $this -> validatorSchema['teese'] = new sfValidatorString();
        $this -> validatorSchema['score'] = new sfValidatorInteger();

        $this->widgetSchema->setNameFormat('score[%s]');
        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

        $this->validatorSchema->setOption('allow_extra_fields', true);
        $this->validatorSchema->setOption('filter_extra_fields', false);
    }
}
