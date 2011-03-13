<?php

/**
 * Commentaire filter form base class.
 *
 * @package    picadmin
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCommentaireFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'commentaire_description'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'commentaire_idee_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Idee'), 'add_empty' => true)),
      'commentaire_tache_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tache'), 'add_empty' => true)),
      'commentaire_bug_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Bug'), 'add_empty' => true)),
      'commentaire_utilisateur_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
      'commentaire_parent_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'commentaire_description'    => new sfValidatorPass(array('required' => false)),
      'commentaire_idee_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Idee'), 'column' => 'id')),
      'commentaire_tache_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tache'), 'column' => 'id')),
      'commentaire_bug_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Bug'), 'column' => 'id')),
      'commentaire_utilisateur_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id')),
      'commentaire_parent_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('commentaire_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Commentaire';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'commentaire_description'    => 'Text',
      'commentaire_idee_id'        => 'ForeignKey',
      'commentaire_tache_id'       => 'ForeignKey',
      'commentaire_bug_id'         => 'ForeignKey',
      'commentaire_utilisateur_id' => 'ForeignKey',
      'commentaire_parent_id'      => 'Number',
      'created_at'                 => 'Date',
      'updated_at'                 => 'Date',
    );
  }
}
