<?php

/**
 * TacheToUtilisateur form base class.
 *
 * @method TacheToUtilisateur getObject() Returns the current form's model object
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTacheToUtilisateurForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tache_id'       => new sfWidgetFormInputHidden(),
      'utilisateur_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'tache_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tache_id')), 'empty_value' => $this->getObject()->get('tache_id'), 'required' => false)),
      'utilisateur_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('utilisateur_id')), 'empty_value' => $this->getObject()->get('utilisateur_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tache_to_utilisateur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TacheToUtilisateur';
  }

}
