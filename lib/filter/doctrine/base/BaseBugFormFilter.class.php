<?php

/**
 * Bug filter form base class.
 *
 * @package    adminpicaddy
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBugFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'bug_url'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bug_description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bug_projet_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'), 'add_empty' => true)),
      'bug_auteur_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bug_referent_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
      'bug_statut_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'), 'add_empty' => true)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'bug_url'         => new sfValidatorPass(array('required' => false)),
      'bug_description' => new sfValidatorPass(array('required' => false)),
      'bug_projet_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Projet'), 'column' => 'id')),
      'bug_auteur_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bug_referent_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id')),
      'bug_statut_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Statut'), 'column' => 'id')),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('bug_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bug';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'bug_url'         => 'Text',
      'bug_description' => 'Text',
      'bug_projet_id'   => 'ForeignKey',
      'bug_auteur_id'   => 'Number',
      'bug_referent_id' => 'ForeignKey',
      'bug_statut_id'   => 'ForeignKey',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
