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
	}
        
	public function executeSupport ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "support");
	}
        
	public function executeHowTo ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "support");
	}
        
	public function executeSubmitAcourse ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "support");
	}
        
	public function executeContactUs ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "support");
	}
        
	public function executeLogin ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "login");
            $this->form = new LoginForm();
            if( $request->getParameter( $this->form->getName() ) ) $this->processSignin( $request, $this->form );
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
            $this->getUser()->setAuthenticated(false);
	}
        
	public function executeRegistration ( sfWebRequest $request )
	{
            $this->getUser()->setAttribute('selected_menu', "login");
            $this->form = new RegistrationForm();
            if( $request->getParameter( $this->form->getName() ) ) $this->processRegistration( $request, $this->form );
	}
        
        
	protected function processRegistration ( sfWebRequest $request, sfForm $form )
	{
		$valori_form = $request->getParameter( $form->getName() );
//var_dump($valori_form);
                $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                if ( $form->isValid() )
                {
                    $user = new player();
                    $user->setCity( $valori_form['city'] );
                    $user->setState( $valori_form['state'] );
                    $user->setGender( $valori_form['gender'] );
                    $user->setPassword( $valori_form['password'] );
                    $user->setEmail( $valori_form['email'] );
                    $user->save();
                    $user->setFirst( $valori_form['first_name'] );
                    $user->setLast( $valori_form['last_name'] );
                    
                    $this->getUser()->setAuthenticated(true);
                    $this->getUser()->setFlash("new_register", true);
                    $this->redirect("@members");
                }
	}

	protected function processSignin ( sfWebRequest $request, sfForm $form )
	{
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
                                $this->getUser()->setAuthenticated(true);
                                $this->redirect("@members");
                        }
                        else
                        {
                        }
                    }
                }
                else
                {
                    $json['status'] = 0;
                    $json['message'] = "Login failed2";
                    $json['message2'] = $form->getErrorSchema()->__toString();
                }
	}

        
}
