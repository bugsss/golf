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
	}
        
}
