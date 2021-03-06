<?php

/**
 * BaseNote
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $note_nom
 * @property string $note_description
 * @property integer $note_utilisateur_id
 * @property Utilisateur $Utilisateur
 * 
 * @method string      getNoteNom()             Returns the current record's "note_nom" value
 * @method string      getNoteDescription()     Returns the current record's "note_description" value
 * @method integer     getNoteUtilisateurId()   Returns the current record's "note_utilisateur_id" value
 * @method Utilisateur getUtilisateur()         Returns the current record's "Utilisateur" value
 * @method Note        setNoteNom()             Sets the current record's "note_nom" value
 * @method Note        setNoteDescription()     Sets the current record's "note_description" value
 * @method Note        setNoteUtilisateurId()   Sets the current record's "note_utilisateur_id" value
 * @method Note        setUtilisateur()         Sets the current record's "Utilisateur" value
 * 
 * @package    picadmin
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNote extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('note');
        $this->hasColumn('note_nom', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('note_description', 'string', 1500, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 1500,
             ));
        $this->hasColumn('note_utilisateur_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Utilisateur', array(
             'local' => 'note_utilisateur_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}