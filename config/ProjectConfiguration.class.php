<?php

require_once '/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->setWebDir( dirname( __FILE__ ) . '/../public_html' );
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfImageTransformPlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfDoctrineOAuthPlugin');
    $this->enablePlugins('ahAdminGeneratorThemesPlugin');
  }
}
