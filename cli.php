<?php

define("ROOT", dirname(__FILE__));
include ROOT.'/Inc/AutoLoad.Inc.php';
\Psearch\Inc\Cli::getInstance()->run($argc, $argv);
