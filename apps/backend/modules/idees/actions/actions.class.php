<?php

/**
* idees actions.
*
* @package picadmin
* @subpackage idees
* @author Your name here
* @version SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
*/
class ideesActions extends sfActions
{
 /**
* Executes index action
*
* @param sfRequest $request A request object
*/
  public function executeIndex(sfWebRequest $request)
  {
    //On instancie un objet idéees
    $idee = new Idee();
    $this->listeIdee = $idee->getListeIdeeALl();

//$this->forward('default', 'module');
  }
}


