<?php

/**
 * Commentaire form base class.
 *
 * @method Commentaire getObject() Returns the current form's model object
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCommentaireForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'commentaire_description'    => new sfWidgetFormTextarea(),
      'commentaire_idee_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Idee'), 'add_empty' => false)),
      'commentaire_tache_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tache'), 'add_empty' => false)),
      'commentaire_bug_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Bug'), 'add_empty' => false)),
      'commentaire_utilisateur_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'commentaire_parent_id'      => new sfWidgetFormInputText(),
      'created_at'                 => new sfWidgetFormDateTime(),
      'updated_at'                 => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'commentaire_description'    => new sfValidatorString(array('max_length' => 1500)),
      'commentaire_idee_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Idee'))),
      'commentaire_tache_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tache'))),
      'commentaire_bug_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Bug'))),
      'commentaire_utilisateur_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
      'commentaire_parent_id'      => new sfValidatorInteger(),
      'created_at'                 => new sfValidatorDateTime(),
      'updated_at'                 => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('commentaire[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Commentaire';
  }

}
