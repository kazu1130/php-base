<?php
ini_set("session.cookie_httponly", 1);
ini_set("session.use_only_cookies", 1);

require_once (__DIR__ . "/lib/idiorm.php");
ORM::configure("sqlite:".__DIR__ ."/sqlite.db");
require_once (__DIR__ . "/lib/paris.php");

spl_autoload_register(function ($class) {
  include_once (__DIR__ . "/class/" . $class . ".php");
});


#--------------------------#

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

