<?php

/**
 * parametrages actions.
 *
 * @package    picadmin
 * @subpackage parametrages
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class parametragesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   // $this->forward('default', 'module');
  }



  public function executeIndexStatut(sfWebRequest $request)
  {
      //On va lister tous les status selon leur type
      $statut = new Statut();
      $this->liste_statut = $statut->getStatutAll();
  }

  public function executeIndexProjetType(sfWebRequest $request)
  {
      //On va lister tous les types de projets
      $type_projet = new ProjetType();
      $this->liste_type = $type_projet->getProjetTypeAll();
  }

  public function executeIndexUtilisateur(sfWebRequest $request)
  {
      //On va aller chercher tous les utilisateurs
      $utilisateur = new Utilisateur();
      $this->liste_utilisateur = $utilisateur->getUserAll();
      
      //Ainsi que les groupes
      $groupe = new Groupe();
      $this->liste_groupe = $groupe->getGroupeAll();
  }
}
