<?php

/**
 * TacheToUtilisateur filter form base class.
 *
 * @package    picadmin
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTacheToUtilisateurFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('tache_to_utilisateur_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TacheToUtilisateur';
  }

  public function getFields()
  {
    return array(
      'tache_id'       => 'Number',
      'utilisateur_id' => 'Number',
    );
  }
}
