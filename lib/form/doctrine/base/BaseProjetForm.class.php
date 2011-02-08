<?php

/**
 * Projet form base class.
 *
 * @method Projet getObject() Returns the current form's model object
 *
 * @package    adminpicaddy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProjetForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'projet_nom'         => new sfWidgetFormInputText(),
      'projet_description' => new sfWidgetFormTextarea(),
      'projet_date_debut'  => new sfWidgetFormDateTime(),
      'projet_date_fin'    => new sfWidgetFormDateTime(),
      'projet_type_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProjetType'), 'add_empty' => false)),
      'projet_statut_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'), 'add_empty' => false)),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'projet_nom'         => new sfValidatorString(array('max_length' => 255)),
      'projet_description' => new sfValidatorString(array('max_length' => 1500, 'required' => false)),
      'projet_date_debut'  => new sfValidatorDateTime(),
      'projet_date_fin'    => new sfValidatorDateTime(),
      'projet_type_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProjetType'))),
      'projet_statut_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'))),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Projet', 'column' => array('projet_nom')))
    );

    $this->widgetSchema->setNameFormat('projet[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Projet';
  }

}
