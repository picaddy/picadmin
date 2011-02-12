<?php

/**
 * main actions.
 *
 * @package    adminpicaddy
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request) {
      
    //On va chercher tous les projets de l'utilisateur connecté
    $utilisateur = new Utilisateur();
    $this->utilisateur = $utilisateur->getUserProjects($this->getUser()->getAttribute('idUtilisateur'));
  }
}
