<?php

/**
 * Tache filter form base class.
 *
 * @package    adminpicaddy
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTacheFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tache_nom'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tache_description' => new sfWidgetFormFilterInput(),
      'tache_date_debut'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tache_date_fin'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tache_parent_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tache_ordre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tache_pourcentage' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tache_projet_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'), 'add_empty' => true)),
      'tache_statut_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'), 'add_empty' => true)),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'tache_nom'         => new sfValidatorPass(array('required' => false)),
      'tache_description' => new sfValidatorPass(array('required' => false)),
      'tache_date_debut'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tache_date_fin'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tache_parent_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tache_ordre'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tache_pourcentage' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tache_projet_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Projet'), 'column' => 'id')),
      'tache_statut_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Statut'), 'column' => 'id')),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tache_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tache';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'tache_nom'         => 'Text',
      'tache_description' => 'Text',
      'tache_date_debut'  => 'Date',
      'tache_date_fin'    => 'Date',
      'tache_parent_id'   => 'Number',
      'tache_ordre'       => 'Number',
      'tache_pourcentage' => 'Number',
      'tache_projet_id'   => 'ForeignKey',
      'tache_statut_id'   => 'ForeignKey',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
