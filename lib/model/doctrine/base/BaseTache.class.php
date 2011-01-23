<?php

/**
 * BaseTache
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $tache_nom
 * @property string $tache_description
 * @property timestamp $tache_date_debut
 * @property timestamp $tache_date_fin
 * @property integer $tache_parent_id
 * @property integer $tache_ordre
 * @property integer $tache_pourcentage
 * @property integer $tache_projet_id
 * @property integer $tache_statut_id
 * @property Projet $Projet
 * @property Statut $Statut
 * @property Doctrine_Collection $TacheToUtilisateur
 * @property Doctrine_Collection $CommentaireToTache
 * @property Doctrine_Collection $TacheToDocument
 * 
 * @method string              getTacheNom()           Returns the current record's "tache_nom" value
 * @method string              getTacheDescription()   Returns the current record's "tache_description" value
 * @method timestamp           getTacheDateDebut()     Returns the current record's "tache_date_debut" value
 * @method timestamp           getTacheDateFin()       Returns the current record's "tache_date_fin" value
 * @method integer             getTacheParentId()      Returns the current record's "tache_parent_id" value
 * @method integer             getTacheOrdre()         Returns the current record's "tache_ordre" value
 * @method integer             getTachePourcentage()   Returns the current record's "tache_pourcentage" value
 * @method integer             getTacheProjetId()      Returns the current record's "tache_projet_id" value
 * @method integer             getTacheStatutId()      Returns the current record's "tache_statut_id" value
 * @method Projet              getProjet()             Returns the current record's "Projet" value
 * @method Statut              getStatut()             Returns the current record's "Statut" value
 * @method Doctrine_Collection getTacheToUtilisateur() Returns the current record's "TacheToUtilisateur" collection
 * @method Doctrine_Collection getCommentaireToTache() Returns the current record's "CommentaireToTache" collection
 * @method Doctrine_Collection getTacheToDocument()    Returns the current record's "TacheToDocument" collection
 * @method Tache               setTacheNom()           Sets the current record's "tache_nom" value
 * @method Tache               setTacheDescription()   Sets the current record's "tache_description" value
 * @method Tache               setTacheDateDebut()     Sets the current record's "tache_date_debut" value
 * @method Tache               setTacheDateFin()       Sets the current record's "tache_date_fin" value
 * @method Tache               setTacheParentId()      Sets the current record's "tache_parent_id" value
 * @method Tache               setTacheOrdre()         Sets the current record's "tache_ordre" value
 * @method Tache               setTachePourcentage()   Sets the current record's "tache_pourcentage" value
 * @method Tache               setTacheProjetId()      Sets the current record's "tache_projet_id" value
 * @method Tache               setTacheStatutId()      Sets the current record's "tache_statut_id" value
 * @method Tache               setProjet()             Sets the current record's "Projet" value
 * @method Tache               setStatut()             Sets the current record's "Statut" value
 * @method Tache               setTacheToUtilisateur() Sets the current record's "TacheToUtilisateur" collection
 * @method Tache               setCommentaireToTache() Sets the current record's "CommentaireToTache" collection
 * @method Tache               setTacheToDocument()    Sets the current record's "TacheToDocument" collection
 * 
 * @package    adminpicaddy
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTache extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tache');
        $this->hasColumn('tache_nom', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('tache_description', 'string', 1500, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 1500,
             ));
        $this->hasColumn('tache_date_debut', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('tache_date_fin', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('tache_parent_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tache_ordre', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tache_pourcentage', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tache_projet_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tache_statut_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Projet', array(
             'local' => 'tache_projet_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Statut', array(
             'local' => 'tache_statut_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TacheToUtilisateur', array(
             'local' => 'id',
             'foreign' => 'tache_id'));

        $this->hasMany('Commentaire as CommentaireToTache', array(
             'local' => 'id',
             'foreign' => 'commentaire_tache_id'));

        $this->hasMany('Document as TacheToDocument', array(
             'local' => 'id',
             'foreign' => 'document_tache_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}