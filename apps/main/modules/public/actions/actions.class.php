<?php

/**
 * public actions.
 *
 * @package    golf
 * @subpackage main
 * @author     Bugs
 */
class publicActions extends sfActions
{
        public function preExecute()
        {
        }

	/**
	 * Executes public action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "");
	}
        
	public function executeAbout ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "about");
	}
        
	public function executePress ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "press");
            $this->articles = blogsTable::getArticles();
	}
        
	public function executeProducts ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "products");
	}
        
	public function executeSupport ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "support");
	}
        
	public function executeHowTo ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "support");
	}
        
//	public function executeSubmitAcourse ( sfWebRequest $request )
//	{
//            $this->getUser()->setAttribute('selected_menu', "support");
//	}
        
	public function executeContactUs ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "support");
            $this->form = new ContactusForm();
            if( $this->getUser()->hasFlash("conatct_message" ) ) $this->errors = "sent";
            if( $request->getParameter( $this->form->getName() ) ) $this->errors = $this->processContactUs( $request, $this->form );
	}
        
	public function executeLogin ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "login");
            $this->form = new LoginForm();
            if( $request->getParameter( $this->form->getName() ) ) $this->errors = $this->processSignin( $request, $this->form );
	}
        
	public function executeLogout ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "login");
            $this->getUser()->setAuthenticated(false);
            $this->redirect('@homepage');
	}
        
	public function executeForgot ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "login");
            $this->form = new ForgotForm();
            if( $request->getParameter( $this->form->getName() ) ) $this->f_errors = $this->processForgot( $request, $this->form );
	}
        
	public function executeRegistration ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "login");
            $this->form = new RegistrationForm();
            if( $request->getParameter( $this->form->getName( $this->user) ) ) $this->errors = $this->processRegistration( $request, $this->form );
	}
        

    
	protected function processForgot ( sfWebRequest $request, sfForm $form )
	{
		$valori_form = $request->getParameter( $form->getName() );
                $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                if ( $form->isValid() )
                {
                    $user = playerTable::getInstance()->findOneBy( "email", $valori_form["email"] );
                    $From = "no-replay@golfgameskeeper.com";
                    $FromName = "GolfGamesKeeper";
                    $Body = "Your password: {$user->getPassword()}";
                    $message = $this->getMailer()->compose(array($From => $FromName), $valori_form["email"], 'www.golfgamekeeper - Password reminder', $Body);
                    $this->getMailer()->send( $message );
                    return $valori_form["email"];
                }
                else
                {   
                    $errors = array();
                    foreach($form->getErrorSchema()->getErrors() as $key => $value) {
                        $errors[$key] = "Invalid email adress.";
                    }
                    return $errors;
                }
	}

	protected function processRegistration ( sfWebRequest $request, sfForm $form )
	{
		$valori_form = $request->getParameter( $form->getName() );
//var_dump($valori_form);
                $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                if ( $form->isValid() )
                {
                    $user = new player();
                    $user->setFirstName( $valori_form['first_name'] );
                    $user->setLastName( $valori_form['last_name'] );
                    $user->setCity( $valori_form['city'] );
                    $user->setState( $valori_form['state'] );
                    $user->setGender( $valori_form['gender'] );
                    $user->setPassword( $valori_form['password'] );
                    $user->setEmail( $valori_form['email'] );
                    $user->save();
                    
                    $this->getUser()->setAuthenticated(true);
                    $this->getUser()->setAttribute("user", $user);
                    $this->getUser()->setFlash("select_tab", "account");
                    $this->redirect("@members");
                }
                else
                {   
                    $errors = array();
                    foreach($form->getErrorSchema()->getErrors() as $key => $value) {
                        $message = $value->getMessage();
                        if( strstr( $message, "[" ) ){
                            $message = explode("[", $message );
                            $message = explode("]", $message[1] );
                            $message = $message[0];
                        }
                        $errors[$key] = $message;
                    }
                    return $errors;
                }
	}

	protected function processSignin ( sfWebRequest $request, sfForm $form )
	{
                $errors = array();
		$valori_form = $request->getParameter( $form->getName() );
//var_dump($valori_form);
                $user = playerTable::getUser( $valori_form['email'] );
                if( $user instanceof player )
                {
                    $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                    if ( $form->isValid() )
                    {
                        if( $user->getPassword() == $valori_form['password'] )
                        {
                                $this->getUser()->setFlash("new_register", true);
                                $this->getUser()->setAuthenticated(true);
                                $this->getUser()->setAttribute("user", $user);
                                $this->redirect("@members");
                        }
                        else $errors["Username"] = "Invalid username/password.";
                    }
                    else
                    {
                        $errors["Username"] = "Invalid username/password.";
                    }
                }
                else $errors["Username"] = "Invalid username/password.";
                return $errors;
	}

        protected function processContactUs( sfWebRequest $request, sfForm $form )
        {
		$valori_form = $request->getParameter( $form->getName() );
                $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                if ( $form->isValid() )
                {
                    $From = substr( $valori_form['email'], 0, 60);
                    $FromName = $valori_form['name'];
                    $Body = "From: " . $FromName . "\n" . "Mail address: " . $From . "\n\n\n Message: " . $valori_form['message'];
                    $message = $this->getMailer()->compose(array($From => $FromName), trim("arpad.rozsnyai@gmail.com"), 'www.golfgamekeeper - ' . $FromName, $Body);
                    $this->getMailer()->send( $message );
                    $this->getUser()->setFlash("conatct_message", "sent");
                    $this->redirect("@contact_us");
                }
                else
                {   
                    $errors = array();
                    foreach($form->getErrorSchema()->getErrors() as $key => $value) {
                        $errors[$key] = $value->__toString();
                    }
                    return $errors;
                }
        }

}
