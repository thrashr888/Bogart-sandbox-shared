<?php

namespace Bogart;

require 'vendor/Bogart/lib/Bogart/App.php';

$app = new App(__FILE__);

Get('/', function(){
  echo 'hello world';
});

$app->run();