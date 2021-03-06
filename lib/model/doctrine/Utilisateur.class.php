<?php

/**
 * Utilisateur
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    adminpicaddy
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Utilisateur extends BaseUtilisateur
{
    public function getUserByEmail($email) {
        return Doctrine_Core::getTable('Utilisateur')->getUserByEmailTable($email);
    }

    public function  __toString() {
        return $this->getUtilisateurPrenom().' '.$this->getUtilisateurNom();
    }

    //Retourne un tableau des projets de l'utilisateur choisi
    public function getUserProjects($id)
    {
       return Doctrine_Core::getTable('Utilisateur')->getUserById($id)->getProjetToUtilisateur();
    }

    //Retourne un tableau des notes de l'utilisateur
    public function getUserNotes($id)
    {
        return Doctrine_Core::getTable('Utilisateur')->getUserById($id)->getUtilisateurToNote();
    }
    
    public function getUserObjectById($id) {
        return Doctrine_Core::getTable('Utilisateur')->getUserById($id);
    }

    public function getUserAll()
    {
        return Doctrine_Core::getTable('Utilisateur')->getUserAll();
    }
    
}
