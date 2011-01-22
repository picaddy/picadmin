<?php

/**
 * Utilisateur form base class.
 *
 * @method Utilisateur getObject() Returns the current form's model object
 *
 * @package    adminpicaddy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUtilisateurForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'utilisateur_nom'        => new sfWidgetFormInputText(),
      'utilisateur_prenom'     => new sfWidgetFormInputText(),
      'utilisateur_email'      => new sfWidgetFormInputText(),
      'utilisateur_pseudo'     => new sfWidgetFormInputText(),
      'utilisateur_motdepasse' => new sfWidgetFormInputText(),
      'utilisateur_photo'      => new sfWidgetFormInputText(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'utilisateur_nom'        => new sfValidatorString(array('max_length' => 255)),
      'utilisateur_prenom'     => new sfValidatorString(array('max_length' => 255)),
      'utilisateur_email'      => new sfValidatorString(array('max_length' => 255)),
      'utilisateur_pseudo'     => new sfValidatorString(array('max_length' => 255)),
      'utilisateur_motdepasse' => new sfValidatorString(array('max_length' => 255)),
      'utilisateur_photo'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Utilisateur', 'column' => array('utilisateur_email')))
    );

    $this->widgetSchema->setNameFormat('utilisateur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Utilisateur';
  }

}
