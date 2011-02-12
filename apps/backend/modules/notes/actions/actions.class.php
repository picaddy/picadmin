<?php

/**
 * notes actions.
 *
 * @package    picadmin
 * @subpackage notes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class notesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
        //On va aller chercher toutes les notes de l'utilisateur connecté
        $utilisateur = new Utilisateur();
        $this->liste_note = $utilisateur->getUserNotes($this->getUser()->getAttribute('idUtilisateur'));

        
  }
}
