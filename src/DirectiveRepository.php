<?php

namespace CappyHoding\BladeHttp;

use Illuminate\Support\Facades\Blade;

class DirectiveRepository {

  public static function register(array $directives) {
    collect($directives)->each(function ($item, $key) {
      Blade::directive($key, $item);
    });
  }
}