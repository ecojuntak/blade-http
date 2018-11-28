<?php

namespace CappyHoding\BladeHttp\DirectiveRepository;

use Illuminate\Support\Facades\Blade;

class DirectiveRepository {

  public static function register(array $directives) {
    collect($directives)->each(function ($item, $key) {
      Blade::directive($key, $item);
    });
  }
}