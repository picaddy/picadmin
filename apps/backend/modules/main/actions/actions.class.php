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
    $this->objet_projet = new Projet();
    $this->txt = '';
    foreach($this->objet_projet->getListeProjetByUserAll($this->getUser()->getAttribute('idUtilisateur')) as $p) {
        $this->txt .= $p->getProjet()->getProjetNom();
    }

      /*$listeProjets = Doctrine::getTable('ProjetToUtilisateur')->findByutilisateurId(1);
      foreach($listeProjets as $p) {
          $this->txt .= $p->getProjet()->getProjetNom();
      }*/
  }
}
