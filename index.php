<?php

namespace Bogart;

require 'vendor/Bogart/lib/Bogart/App.php';

try
{
  $app = new App('index', 'dev', true);
  $app->run();
}
catch(\Exception $e)
{
  print_r($e);
}
