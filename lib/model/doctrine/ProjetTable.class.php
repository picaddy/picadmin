<?php

/**
 * ProjetTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProjetTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProjetTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Projet');
    }

    public static function getListeProjet() {
	 $projet = Doctrine::getTable('Projet')
			->createQuery('a')
			->execute();
	return $projet;
    }

    public static function getListeProjetByUser($idU, $limit = 5) {
	$projets = Doctrine::getTable('ProjetToUtilisateur')->findByutilisateurId($idU);
	return $projets;
    }


    public static function getProjetById($id)
    {
           $q = Doctrine_Query::create()
            ->from('Projet p')
            ->where('p.id = ?', $id);

        $projet = $q->fetchOne();

        return $projet;
    }

}