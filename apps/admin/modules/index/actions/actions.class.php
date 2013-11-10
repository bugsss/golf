<?php

/**
 * index actions.
 *
 **** @package    golf
 * @subpackage index
 * @author     Bugs
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class indexActions extends sfActions
{
        public function preExecute()
        {
        }

	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex ( sfWebRequest $request )
	{
            if( $this->getUser()->isAuthenticated() ) $this->redirect('@loggedin_homepage');
            $this->sign_in_form = new loginForm();
            if( $request->isMethod('put') ) $this->errors = $this->processSignin( $request, $this->sign_in_form );

	}
	
	public function executeSignin ( sfWebRequest $request )
	{
		$this->forward404Unless($request->isMethod('put'));
		$this->sign_in_form = new loginForm();
		$this->processSignin( $request, $this->sign_in_form );
		return sfView::NONE;
	}

	public function executeSignout ( sfWebRequest $request )
	{
                $this->getUser()->setAuthenticated(false);
                $this->getUser()->setAttribute("user", null);
                $this->redirect( '@homepage' );
	}


	public function executeDashboard ( sfWebRequest $request )
	{
//            log_listTable::insertIntoLog( 'index', '404', "Error404 for: {$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" );
	}

	public function execute403 ( sfWebRequest $request )
	{
//            log_listTable::insertIntoLog( 'index', '404', "Error404 for: {$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" );
	}

	public function execute404 ( sfWebRequest $request )
	{
//            log_listTable::insertIntoLog( 'index', '404', "Error404 for: {$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" );
	}

	public function execute405 ( sfWebRequest $request )
	{
//            log_listTable::insertIntoLog( 'index', '404', "Error404 for: {$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" );
	}

	public function execute500 ( sfWebRequest $request )
	{
//            log_listTable::insertIntoLog( 'index', '404', "Error404 for: {$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" );
	}

	public function execute503 ( sfWebRequest $request )
	{
//            log_listTable::insertIntoLog( 'index', '404', "Error404 for: {$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" );
	}

        
	protected function processSignin ( sfWebRequest $request, sfForm $form )
	{
		$valori_form = $request->getParameter( $form->getName() );
                $errors = "";

//var_dump($valori_form);
                $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
                if ( $form->isValid() )
                {
                    $user = playerTable::getUser( $valori_form['email'] );
                    if( $user instanceof player )
                    {
                        if( $user->getPassword() == $valori_form['password'] )
                        {
                            if( $user->getIsAdmin() == 1 )
                            {
                                $this->getUser()->setAuthenticated(true);
                                $this->getUser()->setAttribute("user", $user);
                                $this->getUser()->addCredential("admin");
                                $this->redirect("@loggedin_homepage");
                            }
                            else $errors .= "Invalid credentials. ";
                        }
                        else $errors .= "Invalid username/password.";
                    }
                    else $errors .= "Invalid username/password.";
                }
                else
                {
                    foreach($form->getErrorSchema()->getErrors() as $key => $value) {
                        if( $key == "email") $error .= "Username is requeired. ";
                        if( $key == "password") $error .= "Password is requeired. ";
                    }
                }
                return $errors;
	}

}
