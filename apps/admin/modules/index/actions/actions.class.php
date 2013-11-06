<?php

/**
 * index actions.
 *
 **** @package    divi
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
            $this->sign_in_form = new sfGuardFormSignin();
	}
	
	public function executeSignin ( sfWebRequest $request )
	{
		$this->forward404Unless($request->isMethod('put'));
		$this->sign_in_form = new sfGuardFormSignin();
		$this->processSignin( $request, $this->sign_in_form );
		return sfView::NONE;
	}

	protected function processSignin ( sfWebRequest $request, sfForm $form )
	{
		$valori_form = $request->getParameter( $form->getName() );
                $user = sfGuardUserTable::getInstance()->findOneByUsername( $valori_form['username'] );
                if( $user instanceof sfGuardUser )
                {
                    $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
//                    $json = array ( );
                    if ( $form->isValid() )
                    {
                            $values = $form->getValues();
                            $this->getUser()->signin( $values['user'], array_key_exists( 'remember', $values ) ? $values['remember'] : false );
                            $user = $this->getUser();
                            $user->setCulture( sfConfig::get( 'app_default_language' ) );
//                            $user_id = $user->getGuardUser()->getId();

                            foreach($user->getAttributeHolder()->getAll() as $key => $value)
                            {
                               $user->setAttribute($key, NULL);
                            }
                            $this->redirect( "@loggedin_homepage" );
                    }
                    else 
                    {
                        var_dump( $form->getErrorSchema()->__toString() );
                    }
                }
                $this->redirect( '@homepage' );
	}


	public function executeHome ( sfWebRequest $request )
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

}
