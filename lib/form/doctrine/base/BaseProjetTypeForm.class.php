<?php

/**
 * ProjetType form base class.
 *
 * @method ProjetType getObject() Returns the current form's model object
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProjetTypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'projet_type_nom'     => new sfWidgetFormInputText(),
      'projet_type_code'    => new sfWidgetFormInputText(),
      'projet_type_couleur' => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'projet_type_nom'     => new sfValidatorString(array('max_length' => 255)),
      'projet_type_code'    => new sfValidatorString(array('max_length' => 1)),
      'projet_type_couleur' => new sfValidatorString(array('max_length' => 6)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'ProjetType', 'column' => array('projet_type_nom')))
    );

    $this->widgetSchema->setNameFormat('projet_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjetType';
  }

}
