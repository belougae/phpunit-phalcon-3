<?php

use Phalcon\Di;
use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Dispatcher;
use Phalcon\Mvc\Dispatcher as MvcDispatcher;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\Application;
use Phalcon\Db\Adapter\Pdo\Mysql as Database;
use Phalcon\Mvc\Model;
use Phalcon\Config\Adapter\Php as PhalconConfig;
use Phalcon\Db\Profiler;
use Phalcon\Session\Adapter\Files as Session;
use Phalcon\Crypt;

ini_set("display_errors", 1);

define('BASE_PATH', realpath('../..') . '/');
define('CMS_PATH', BASE_PATH . "cms/");
define('APP_PATH', CMS_PATH . "app/");
define('CZTV_PATH', BASE_PATH . "/cztv/");
define('CORE_PATH', BASE_PATH . "/cztv/");
define("ROOT_PATH",CMS_PATH);

require CZTV_PATH.'libraries/helpers.php';
require CZTV_PATH.'vendor/autoload.php';

$config = new PhalconConfig(CMS_PATH.'app/config/main.php');
error_reporting(E_ALL);

set_include_path(
    ROOT_PATH . PATH_SEPARATOR . get_include_path()
);

// Required for phalcon/incubator
include CZTV_PATH . "vendor/autoload.php";


// Use the application autoloader to autoload the classes
// Autoload the dependencies found in composer
$loader = new Loader();

$loader->registerDirs(
    [
        ROOT_PATH,
    ]
);

$loader->register();

$di = new FactoryDefault();

Di::reset();

// Add any needed services to the DI here

Di::setDefault($di);