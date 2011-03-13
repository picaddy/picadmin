<?php

/**
 * Idee form base class.
 *
 * @method Idee getObject() Returns the current form's model object
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIdeeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'idee_nom'            => new sfWidgetFormInputText(),
      'idee_description'    => new sfWidgetFormTextarea(),
      'idee_utilisateur_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'idee_projet_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'), 'add_empty' => false)),
      'idee_statut_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'), 'add_empty' => false)),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idee_nom'            => new sfValidatorString(array('max_length' => 255)),
      'idee_description'    => new sfValidatorString(array('max_length' => 1500)),
      'idee_utilisateur_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
      'idee_projet_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'))),
      'idee_statut_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'))),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('idee[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Idee';
  }

}
