<?php

/**
 * Tache form base class.
 *
 * @method Tache getObject() Returns the current form's model object
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTacheForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'tache_nom'         => new sfWidgetFormInputText(),
      'tache_description' => new sfWidgetFormTextarea(),
      'tache_date_debut'  => new sfWidgetFormDateTime(),
      'tache_date_fin'    => new sfWidgetFormDateTime(),
      'tache_parent_id'   => new sfWidgetFormInputText(),
      'tache_ordre'       => new sfWidgetFormInputText(),
      'tache_pourcentage' => new sfWidgetFormInputText(),
      'tache_projet_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'), 'add_empty' => false)),
      'tache_statut_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'), 'add_empty' => false)),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tache_nom'         => new sfValidatorString(array('max_length' => 255)),
      'tache_description' => new sfValidatorString(array('max_length' => 1500, 'required' => false)),
      'tache_date_debut'  => new sfValidatorDateTime(),
      'tache_date_fin'    => new sfValidatorDateTime(),
      'tache_parent_id'   => new sfValidatorInteger(),
      'tache_ordre'       => new sfValidatorInteger(),
      'tache_pourcentage' => new sfValidatorInteger(),
      'tache_projet_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'))),
      'tache_statut_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'))),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Tache', 'column' => array('tache_nom')))
    );

    $this->widgetSchema->setNameFormat('tache[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tache';
  }

}
