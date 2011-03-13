<?php

/**
 * Note form base class.
 *
 * @method Note getObject() Returns the current form's model object
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNoteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'note_nom'            => new sfWidgetFormInputText(),
      'note_description'    => new sfWidgetFormTextarea(),
      'note_utilisateur_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'note_nom'            => new sfValidatorString(array('max_length' => 255)),
      'note_description'    => new sfValidatorString(array('max_length' => 1500)),
      'note_utilisateur_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('note[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Note';
  }

}
