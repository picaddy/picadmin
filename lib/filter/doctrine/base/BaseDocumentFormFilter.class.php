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
      'document_nom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'document_note_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Note'), 'add_empty' => true)),
      'document_idee_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Idee'), 'add_empty' => true)),
      'document_bug_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Bug'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'document_nom'     => new sfValidatorPass(array('required' => false)),
      'document_note_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Note'), 'column' => 'id')),
      'document_idee_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Idee'), 'column' => 'id')),
      'document_bug_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Bug'), 'column' => 'id')),
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
      'id'               => 'Number',
      'document_nom'     => 'Text',
      'document_note_id' => 'ForeignKey',
      'document_idee_id' => 'ForeignKey',
      'document_bug_id'  => 'ForeignKey',
    );
  }
}
