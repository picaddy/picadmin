<?php

/**
 * BaseStatut
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $statut_nom
 * @property string $statut_code
 * @property string $statut_couleur
 * @property integer $statut_bug
 * @property integer $statut_idee
 * @property integer $statut_tache
 * @property integer $statut_projet
 * @property Doctrine_Collection $ProjetToStatut
 * @property Doctrine_Collection $TachesToStatuts
 * @property Doctrine_Collection $StatutToIdee
 * @property Doctrine_Collection $StatutToBug
 * 
 * @method string              getStatutNom()       Returns the current record's "statut_nom" value
 * @method string              getStatutCode()      Returns the current record's "statut_code" value
 * @method string              getStatutCouleur()   Returns the current record's "statut_couleur" value
 * @method integer             getStatutBug()       Returns the current record's "statut_bug" value
 * @method integer             getStatutIdee()      Returns the current record's "statut_idee" value
 * @method integer             getStatutTache()     Returns the current record's "statut_tache" value
 * @method integer             getStatutProjet()    Returns the current record's "statut_projet" value
 * @method Doctrine_Collection getProjetToStatut()  Returns the current record's "ProjetToStatut" collection
 * @method Doctrine_Collection getTachesToStatuts() Returns the current record's "TachesToStatuts" collection
 * @method Doctrine_Collection getStatutToIdee()    Returns the current record's "StatutToIdee" collection
 * @method Doctrine_Collection getStatutToBug()     Returns the current record's "StatutToBug" collection
 * @method Statut              setStatutNom()       Sets the current record's "statut_nom" value
 * @method Statut              setStatutCode()      Sets the current record's "statut_code" value
 * @method Statut              setStatutCouleur()   Sets the current record's "statut_couleur" value
 * @method Statut              setStatutBug()       Sets the current record's "statut_bug" value
 * @method Statut              setStatutIdee()      Sets the current record's "statut_idee" value
 * @method Statut              setStatutTache()     Sets the current record's "statut_tache" value
 * @method Statut              setStatutProjet()    Sets the current record's "statut_projet" value
 * @method Statut              setProjetToStatut()  Sets the current record's "ProjetToStatut" collection
 * @method Statut              setTachesToStatuts() Sets the current record's "TachesToStatuts" collection
 * @method Statut              setStatutToIdee()    Sets the current record's "StatutToIdee" collection
 * @method Statut              setStatutToBug()     Sets the current record's "StatutToBug" collection
 * 
 * @package    picadmin
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStatut extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('statut');
        $this->hasColumn('statut_nom', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('statut_code', 'string', 1, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 1,
             ));
        $this->hasColumn('statut_couleur', 'string', 6, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 6,
             ));
        $this->hasColumn('statut_bug', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('statut_idee', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('statut_tache', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('statut_projet', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Projet as ProjetToStatut', array(
             'local' => 'id',
             'foreign' => 'projet_statut_id'));

        $this->hasMany('Tache as TachesToStatuts', array(
             'local' => 'id',
             'foreign' => 'tache_statut_id'));

        $this->hasMany('Idee as StatutToIdee', array(
             'local' => 'id',
             'foreign' => 'idee_statut_id'));

        $this->hasMany('Bug as StatutToBug', array(
             'local' => 'id',
             'foreign' => 'bug_statut_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}