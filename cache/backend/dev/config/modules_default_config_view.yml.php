<?php
// auto-generated by sfViewConfigHandler
// date: 2011/01/22 14:24:15
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('datePicker.css', '', array ());
  $response->addStylesheet('pro_dopline.css', '', array ());
  $response->addStylesheet('pro_dropline_ie.css', '', array ());
  $response->addStylesheet('screen.css', '', array ());
  $response->addJavascript('jquery/jquery-1.4.1.min.js', '', array ());
  $response->addJavascript('jquery/ui.core.js', '', array ());
  $response->addJavascript('jquery/ui.checkbox.js', '', array ());
  $response->addJavascript('jquery/jquery.bind.js', '', array ());
  $response->addJavascript('jquery/jquery.selectbox-0.5.js', '', array ());
  $response->addJavascript('jquery/jquery.selectbox-0.5_style_2.js', '', array ());
  $response->addJavascript('jquery/jquery.filestyle.js', '', array ());
  $response->addJavascript('jquery/custom_jquery.js', '', array ());
  $response->addJavascript('jquery/jquery.tooltip.js', '', array ());
  $response->addJavascript('jquery/jquery.dimensions.js', '', array ());
  $response->addJavascript('jquery/date.js', '', array ());
  $response->addJavascript('jquery/jquery.datePicker.js', '', array ());


