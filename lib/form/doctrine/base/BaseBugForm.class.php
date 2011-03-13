<?php

/**
 * Bug form base class.
 *
 * @method Bug getObject() Returns the current form's model object
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBugForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'bug_url'         => new sfWidgetFormInputText(),
      'bug_description' => new sfWidgetFormTextarea(),
      'bug_projet_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'), 'add_empty' => false)),
      'bug_auteur_id'   => new sfWidgetFormInputText(),
      'bug_referent_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'bug_statut_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'), 'add_empty' => false)),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'bug_url'         => new sfValidatorString(array('max_length' => 255)),
      'bug_description' => new sfValidatorString(array('max_length' => 1500)),
      'bug_projet_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'))),
      'bug_auteur_id'   => new sfValidatorInteger(),
      'bug_referent_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
      'bug_statut_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Statut'))),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('bug[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bug';
  }

}
