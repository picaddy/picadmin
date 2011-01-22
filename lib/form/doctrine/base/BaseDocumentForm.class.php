<?php

/**
 * Document form base class.
 *
 * @method Document getObject() Returns the current form's model object
 *
 * @package    adminpicaddy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDocumentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'document_nom'     => new sfWidgetFormInputText(),
      'document_note_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Note'), 'add_empty' => false)),
      'document_idee_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Idee'), 'add_empty' => false)),
      'document_bug_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Bug'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'document_nom'     => new sfValidatorString(array('max_length' => 255)),
      'document_note_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Note'))),
      'document_idee_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Idee'))),
      'document_bug_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Bug'))),
    ));

    $this->widgetSchema->setNameFormat('document[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Document';
  }

}
