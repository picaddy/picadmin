<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'email'  => new sfWidgetFormInputText(),
      'pass'   => new sfWidgetFormInputPassword(),
    ));

    $this->validatorSchema['email'] =  new sfValidatorEmail();
    $this->validatorSchema['pass'] = new sfValidatorString();

    $this->widgetSchema->setNameFormat('login[%s]');
  }
}
?>
