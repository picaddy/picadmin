<?php

/**
 * Document filter form base class.
 *
 * @package    adminpicaddy
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDocumentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'document_nom'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'document_projet_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Projet'), 'add_empty' => true)),
      'document_tache_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tache'), 'add_empty' => true)),
      'document_idee_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Idee'), 'add_empty' => true)),
      'document_bug_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Bug'), 'add_empty' => true)),
      'document_utilisateur_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'document_nom'            => new sfValidatorPass(array('required' => false)),
      'document_projet_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Projet'), 'column' => 'id')),
      'document_tache_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tache'), 'column' => 'id')),
      'document_idee_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Idee'), 'column' => 'id')),
      'document_bug_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Bug'), 'column' => 'id')),
      'document_utilisateur_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('document_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Document';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'document_nom'            => 'Text',
      'document_projet_id'      => 'ForeignKey',
      'document_tache_id'       => 'ForeignKey',
      'document_idee_id'        => 'ForeignKey',
      'document_bug_id'         => 'ForeignKey',
      'document_utilisateur_id' => 'ForeignKey',
    );
  }
}
