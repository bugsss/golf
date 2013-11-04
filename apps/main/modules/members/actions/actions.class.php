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
            $this->cform = new CredentialForm( $this->user );
            if( $request->getParameter( $this->pform->getName() ) )
            {
                $this->processProfile( $request, $this->pform );
                $this->getUser()->setFlash("select_tab", "account");
            }

            $this->cform = new CredentialForm( $this->user );
            if( $request->getParameter( $this->cform->getName() ) )
            {
                $this->processCredentials( $request, $this->cform );
                $this->getUser()->setFlash("select_tab", "password");
            }
	}
        
        public function executeGetCourses( sfWebRequest $request )
        {
            $this->rendertext( json_encode( courseTable::getCourseList( $request->getParameter("term") ) ) );
            return sfView::NONE;            
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
		$valori_form = $request->getParameter( $form->getName() );
//var_dump($valori_form);
                $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                $user = $this->getUser()->getAttribute("user");
                if ( $form->isValid() )
                {
                    $user->setPassword( $valori_form["old_password"] );
                    $user->save();
                }
	}
}
