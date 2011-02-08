<?php

/**
 * BaseProjet
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $projet_nom
 * @property string $projet_description
 * @property timestamp $projet_date_debut
 * @property timestamp $projet_date_fin
 * @property integer $projet_type_id
 * @property integer $projet_statut_id
 * @property ProjetType $ProjetType
 * @property Statut $Statut
 * @property Doctrine_Collection $TachesToProjets
 * @property Doctrine_Collection $ProjetToUtilisateur
 * @property Doctrine_Collection $ProjetToIdee
 * @property Doctrine_Collection $ProjetToDocument
 * 
 * @method string              getProjetNom()           Returns the current record's "projet_nom" value
 * @method string              getProjetDescription()   Returns the current record's "projet_description" value
 * @method timestamp           getProjetDateDebut()     Returns the current record's "projet_date_debut" value
 * @method timestamp           getProjetDateFin()       Returns the current record's "projet_date_fin" value
 * @method integer             getProjetTypeId()        Returns the current record's "projet_type_id" value
 * @method integer             getProjetStatutId()      Returns the current record's "projet_statut_id" value
 * @method ProjetType          getProjetType()          Returns the current record's "ProjetType" value
 * @method Statut              getStatut()              Returns the current record's "Statut" value
 * @method Doctrine_Collection getTachesToProjets()     Returns the current record's "TachesToProjets" collection
 * @method Doctrine_Collection getProjetToUtilisateur() Returns the current record's "ProjetToUtilisateur" collection
 * @method Doctrine_Collection getProjetToIdee()        Returns the current record's "ProjetToIdee" collection
 * @method Doctrine_Collection getProjetToDocument()    Returns the current record's "ProjetToDocument" collection
 * @method Projet              setProjetNom()           Sets the current record's "projet_nom" value
 * @method Projet              setProjetDescription()   Sets the current record's "projet_description" value
 * @method Projet              setProjetDateDebut()     Sets the current record's "projet_date_debut" value
 * @method Projet              setProjetDateFin()       Sets the current record's "projet_date_fin" value
 * @method Projet              setProjetTypeId()        Sets the current record's "projet_type_id" value
 * @method Projet              setProjetStatutId()      Sets the current record's "projet_statut_id" value
 * @method Projet              setProjetType()          Sets the current record's "ProjetType" value
 * @method Projet              setStatut()              Sets the current record's "Statut" value
 * @method Projet              setTachesToProjets()     Sets the current record's "TachesToProjets" collection
 * @method Projet              setProjetToUtilisateur() Sets the current record's "ProjetToUtilisateur" collection
 * @method Projet              setProjetToIdee()        Sets the current record's "ProjetToIdee" collection
 * @method Projet              setProjetToDocument()    Sets the current record's "ProjetToDocument" collection
 * 
 * @package    adminpicaddy
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProjet extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('projet');
        $this->hasColumn('projet_nom', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('projet_description', 'string', 1500, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 1500,
             ));
        $this->hasColumn('projet_date_debut', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('projet_date_fin', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('projet_type_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('projet_statut_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ProjetType', array(
             'local' => 'projet_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Statut', array(
             'local' => 'projet_statut_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Tache as TachesToProjets', array(
             'local' => 'id',
             'foreign' => 'tache_projet_id'));

        $this->hasMany('ProjetToUtilisateur', array(
             'local' => 'id',
             'foreign' => 'projet_id'));

        $this->hasMany('Idee as ProjetToIdee', array(
             'local' => 'id',
             'foreign' => 'idee_projet_id'));

        $this->hasMany('Document as ProjetToDocument', array(
             'local' => 'id',
             'foreign' => 'document_projet_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}