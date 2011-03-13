<?php

/**
* projets actions.
*
* @package picadmin
* @subpackage projets
* @author Your name here
* @version SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
*/
class projetsActions extends sfActions
{
 /**
* Executes index action
*
* @param sfRequest $request A request object
*/
  public function executeIndex(sfWebRequest $request)
  {
    $this->objet_projet = new Projet();
  }

  /**
*
* @param sfRequest $request
*/
  public function executeIndexProjet(sfWebRequest $request)
  {
      $this->projet = Projet::getProjetById($request->getParameter('id'));

      $this->utilisateurs = $this->projet->getProjetToUtilisateur();
      $this->listeTaches = $this->projet->getTachesToProjets();
      $this->listeIdees = $this->projet->getProjetToIdee();
      $this->listeBugs = $this->projet->getProjetToBug();
      $this->listeDocuments = $this->projet->getProjetToDocument();
  }

  public function executeIndexTaches(sfWebRequest $request)
  {
      $this->projet = Projet::getProjetById($request->getParameter('id'));
      
  }

  public function executeIndexIdees(sfWebRequest $request)
  {
      $this->projet = Projet::getProjetById($request->getParameter('id'));
      $this->liste_idees = $this->projet->getProjetToIdee();

  }

  public function executeIndexBugs(sfWebRequest $request)
  {
      $this->projet = Projet::getProjetById($request->getParameter('id'));
      $this->bugs = $this->projet->getProjetToBug();

  }
}
