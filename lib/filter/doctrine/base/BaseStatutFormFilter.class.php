<?php

/**
 * Statut filter form base class.
 *
 * @package    adminpicaddy
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStatutFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'statut_nom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'statut_code'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'statut_couleur' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'statut_bug'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'statut_idee'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'statut_tache'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'statut_projet'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'statut_nom'     => new sfValidatorPass(array('required' => false)),
      'statut_code'    => new sfValidatorPass(array('required' => false)),
      'statut_couleur' => new sfValidatorPass(array('required' => false)),
      'statut_bug'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'statut_idee'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'statut_tache'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'statut_projet'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('statut_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Statut';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'statut_nom'     => 'Text',
      'statut_code'    => 'Text',
      'statut_couleur' => 'Text',
      'statut_bug'     => 'Number',
      'statut_idee'    => 'Number',
      'statut_tache'   => 'Number',
      'statut_projet'  => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
