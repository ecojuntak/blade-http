<?php

namespace CappyHoding\BladeHttp\BladeHttpServiceProvider;

use Illuminate\Support\ServiceProvider;

class BladeHttpServiceProvider extends ServiceProvider {
  
  public function boot() {
    $this->registerDirectives();
  }

  public function register() {

  }

  public function registerDirectives() {
    $directives = require __DIR__.'/directives.php';
    DirectivesRepository::register($directives);
  }

}