<?php

namespace Bogart;

require 'vendor/Bogart/lib/Bogart/App.php';

try
{
  $app = new App(__FILE__);
  $app->run();
}
catch(\Exception $e)
{
  echo $e;
}
