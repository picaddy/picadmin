<?php

/**
 * BaseCommentaire
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $commentaire_description
 * @property integer $commentaire_idee_id
 * @property integer $commentaire_tache_id
 * @property integer $commentaire_bug_id
 * @property integer $commentaire_utilisateur_id
 * @property integer $commentaire_parent_id
 * @property Utilisateur $Utilisateur
 * @property Tache $Tache
 * @property Idee $Idee
 * @property Bug $Bug
 * 
 * @method string      getCommentaireDescription()     Returns the current record's "commentaire_description" value
 * @method integer     getCommentaireIdeeId()          Returns the current record's "commentaire_idee_id" value
 * @method integer     getCommentaireTacheId()         Returns the current record's "commentaire_tache_id" value
 * @method integer     getCommentaireBugId()           Returns the current record's "commentaire_bug_id" value
 * @method integer     getCommentaireUtilisateurId()   Returns the current record's "commentaire_utilisateur_id" value
 * @method integer     getCommentaireParentId()        Returns the current record's "commentaire_parent_id" value
 * @method Utilisateur getUtilisateur()                Returns the current record's "Utilisateur" value
 * @method Tache       getTache()                      Returns the current record's "Tache" value
 * @method Idee        getIdee()                       Returns the current record's "Idee" value
 * @method Bug         getBug()                        Returns the current record's "Bug" value
 * @method Commentaire setCommentaireDescription()     Sets the current record's "commentaire_description" value
 * @method Commentaire setCommentaireIdeeId()          Sets the current record's "commentaire_idee_id" value
 * @method Commentaire setCommentaireTacheId()         Sets the current record's "commentaire_tache_id" value
 * @method Commentaire setCommentaireBugId()           Sets the current record's "commentaire_bug_id" value
 * @method Commentaire setCommentaireUtilisateurId()   Sets the current record's "commentaire_utilisateur_id" value
 * @method Commentaire setCommentaireParentId()        Sets the current record's "commentaire_parent_id" value
 * @method Commentaire setUtilisateur()                Sets the current record's "Utilisateur" value
 * @method Commentaire setTache()                      Sets the current record's "Tache" value
 * @method Commentaire setIdee()                       Sets the current record's "Idee" value
 * @method Commentaire setBug()                        Sets the current record's "Bug" value
 * 
 * @package    picadmin
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCommentaire extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('commentaire');
        $this->hasColumn('commentaire_description', 'string', 1500, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 1500,
             ));
        $this->hasColumn('commentaire_idee_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('commentaire_tache_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('commentaire_bug_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('commentaire_utilisateur_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('commentaire_parent_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Utilisateur', array(
             'local' => 'commentaire_utilisateur_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Tache', array(
             'local' => 'commentaire_tache_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Idee', array(
             'local' => 'commentaire_idee_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Bug', array(
             'local' => 'commentaire_bug_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}