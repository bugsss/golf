<?php

/**
 * members actions.
 *
 * @package    golf
 * @subpackage main
 * @author     Bugs
 */
class membersActions extends sfActions
{
        public function preExecute()
        {
            $this->getUser()->setAttribute('selected_menu', "members");
        }

	/**
	 * Executes members action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex ( sfWebRequest $request )
	{
            $this->user = $this->getUser()->getAttribute("user");
            $this->pform = new PlayerForm( $this->user );
            $this->getUser()->setFlash("select_tab", "score");
                    
            if( $request->getParameter( $this->pform->getName() ) )
            {
                $this->processProfile( $request, $this->pform );
                $this->getUser()->setFlash("select_tab", "account");
            }

            $this->cform = new CredentialForm( $this->user );
            if( $request->getParameter( $this->cform->getName() ) )
            {
                $this->c_errors = $this->processCredentials( $request, $this->cform );
                $this->getUser()->setFlash("select_tab", "password");
            }

            $this->fform = new FotoForm( $this->user );
            if( $request->getParameter( $this->fform->getName() ) )
            {
                if( !$this->processFoto( $request, $this->fform ) ) $this->getUser()->setFlash("show_file_upload", true );
                else $this->getUser()->setFlash("show_file_upload", null );
            }
            
            $this->scform = new UpCourseForm( $this->user );
            if( $request->getParameter( $this->scform->getName() ) )
            {
                if( !$this->processCourse( $request, $this->scform ) ) $this->getUser()->setFlash("select_tab", "scourse");
                else $this->getUser()->setFlash("show_course_upload", null );
            }
            
            $this->sform = new ScoreForm();
            if( $request->getParameter( $this->sform->getName() ) )
            {
                if( !$this->processScore( $request, $this->sform ) ) $this->getUser()->setFlash("show_add_score", true );
                else $this->getUser()->setFlash("show_add_score", null );
            }
	}
        
        public function executeGetCourses( sfWebRequest $request )
        {
            $this->rendertext( json_encode( courseTable::getCourseList( $request->getParameter("term") ) ) );
            return sfView::NONE;            
        }
        
        public function executeGetStateCourses( sfWebRequest $request )
        {
            $this->rendertext( json_encode( courseTable::getStateCourseList( $request->getParameter("term") ) ) );
            return sfView::NONE;            
        }
        
        public function executeGetCourseTees( sfWebRequest $request )
        {
            $this->rendertext( json_encode( courseTable::getCourseTeesList( $request->getParameter("term") ) ) );
            return sfView::NONE;            
        }
        
        public function executeGetScores( sfWebRequest $request )
        {
//            if ($request->isMethod('post')) {
                $this->rendertext( json_encode( $this->getUser()->getAttribute("user")->getScores() ) );
                return sfView::NONE;
//            }
//            else $this->redirect404 ();
                
        }
        
	protected function processProfile ( sfWebRequest $request, sfForm $form )
	{
		$valori_form = $request->getParameter( $form->getName() );
//var_dump($valori_form);
                $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                $hc = "";
                if( isset($valori_form['home_course_name']) )
                {
                    $hc = explode( "(", $valori_form['home_course_name'] );
                    $hc = trim( substr( $hc[1], 0, -1 ) );
                }
                $user = $this->getUser()->getAttribute("user");
                if( $user->getFirstName()       != $valori_form['first_name']   && trim( $valori_form['first_name'] ) != "" )   $user->setFirstName( $valori_form['first_name'] );
                if( $user->getLastName()        != $valori_form['last_name']    && trim( $valori_form['last_name'] ) != "" )    $user->setLastName( $valori_form['last_name'] );
                if( $user->getCity()            != $valori_form['city']         && trim( $valori_form['city'] ) != "" )         $user->setCity( $valori_form['city'] );
                if( $user->getState()           != $valori_form['state']        && trim( $valori_form['state'] ) != "" )        $user->setState( $valori_form['state'] );
                if( $user->getGender()          != $valori_form['gender']       && trim( $valori_form['gender'] ) != "" )       $user->setGender( $valori_form['gender'] );
//                if( $user->getPassword()        != $valori_form['new_password'] && trim( $valori_form['new_password'] ) != ""  && $valori_form['new_password'] == $valori_form['confirm_password'] )   $user->setPassword( $valori_form['new_password'] );
                if( $user->getEmail()           != $valori_form['email']        && trim( $valori_form['email'] ) != "" )        $user->setEmail( $valori_form['email'] );
                if( $user->getHomeCourse()      != $hc                          && trim( $hc ) != "" )                          $user->setHomeCourse( $hc );
                if( $user->getHomeCourseName()  != $valori_form['home_course_name']  && trim( $valori_form['home_course_name'] ) != "" )  $user->setHomeCourseName( trim( $valori_form['home_course_name'] ) );
                $user->save();
	}

	protected function processCredentials ( sfWebRequest $request, sfForm $form )
	{
                $errors = array();
		$valori_form = $request->getParameter( $form->getName() );
                $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                $user = $this->getUser()->getAttribute("user");
                if ( $form->isValid() )
                {
                    $user->setPassword( $valori_form["new_password"] );
                    $user->save();
                }
                else
                {   
                    foreach($form->getErrorSchema()->getErrors() as $key => $value) {
                        $errors[$key] = $value->__toString();
                    }
                }
                return $errors;
//                else
//                {
//                    var_dump( $form->getErrorSchema()->__toString() );die("aaaaaaaaaaaaaaaaaaaaaaaa");
//                }
                
	}

        protected function processFoto(sfWebRequest $request, sfForm $form)
        {
            $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid())
            {
                $form->save();
                return true;
            }
            else 
            {
                //var_dump( $form->getErrorSchema()->__toString() );
            }
            return false;
        }
        
        protected function processCourse(sfWebRequest $request, sfForm $form)
        {
            $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid())
            {
//                $form->save();
                return true;
            }
            else 
            {
                //var_dump( $form->getErrorSchema()->__toString() );
            }
            return false;
        }
        
        protected function processScore(sfWebRequest $request, sfForm $form)
        {
            $valori_form = $request->getParameter( $form->getName() );
            $form->bind($request->getParameter($form->getName()) );
            if ($form->isValid())
            {
//set @player_id=48;    --from login
//set @course_id='AZ-339'; -- from course table
//set @tee_id='AZ-339-1';  -- from course table
//set @rating=70.7;  --from course table
//set @slope=121;  --from course table
//set @date=current_timestamp();  --entry from player
//set @score=82;  -- entry from player
// 
//--Run those sql statement
//insert into event(player_id,event_name,event_date,start_hole,status,course_id) values(@player_id,'Manual Entry',@date,1,-1,@course_id);
//insert into round(event_id,tees_id,player_id,rating,slope,total_score,round_hcp,saved)
// values(last_insert_id(), @tee_id,@player_id,@rating,@slope,@score, 113*(@score-@rating)/@slope, 1); 
                $user = $this->getUser()->getAttribute("user");
                $course = courseTable::getInstance()->findOneBy( "tees_id", $valori_form["teese"] );
                $event = new Event();
                    $event->setPlayerId( $user->getPlayer_id() );
                    $event->setEventName( $valori_form["score_date"] ) ;
                    $event->setEventDate( $valori_form["score_date"] ." ". date("H:i:s") );
                    $event->setStartHole(1);
                    $event->setStatus(-1);
                    $event->setCourseId( $course->getCourseId() );
                $event->save();
                
                $round = new Round();
                    $round->setEventId( $event->getEventId() );
                    $round->setTeesId( $valori_form['teese'] );
                    $round->setPlayerId( $user->getPlayerId() );
                    $round->setRating( $course->getRating() );
                    $round->setSlope( $course->getSlope() );
                    $round->setTotalScore( $valori_form["score"] );
                    $round->setRoundHcp( 113*( (int)$valori_form["score"] - $course->getRating() )/$course->getSlope() );
                    $round->setSaved(1);
                $round->save();
                return true;
            }
            else 
            {
                var_dump( $form->getErrorSchema()->__toString() );
            }
            return false;
        }
        
}

