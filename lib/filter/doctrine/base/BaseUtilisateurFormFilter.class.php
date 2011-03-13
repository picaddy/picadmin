<?php

/**
 * Utilisateur filter form base class.
 *
 * @package    picadmin
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUtilisateurFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'utilisateur_nom'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'utilisateur_prenom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'utilisateur_email'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'utilisateur_pseudo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'utilisateur_motdepasse' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'utilisateur_photo'      => new sfWidgetFormFilterInput(),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'utilisateur_nom'        => new sfValidatorPass(array('required' => false)),
      'utilisateur_prenom'     => new sfValidatorPass(array('required' => false)),
      'utilisateur_email'      => new sfValidatorPass(array('required' => false)),
      'utilisateur_pseudo'     => new sfValidatorPass(array('required' => false)),
      'utilisateur_motdepasse' => new sfValidatorPass(array('required' => false)),
      'utilisateur_photo'      => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('utilisateur_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Utilisateur';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'utilisateur_nom'        => 'Text',
      'utilisateur_prenom'     => 'Text',
      'utilisateur_email'      => 'Text',
      'utilisateur_pseudo'     => 'Text',
      'utilisateur_motdepasse' => 'Text',
      'utilisateur_photo'      => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
    );
  }
}
