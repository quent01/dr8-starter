<?php

use Drupal\Console\Core\Utils\DrupalFinder;
use Drupal\Console\Bootstrap\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;

// Ensure that procedural dependencies are loaded as early as possible,
// since the error/exception handlers depend on them.
require_once __DIR__ . '/core/modules/system/system.install';
require_once __DIR__ . '/core/includes/common.inc';
require_once __DIR__ . '/core/includes/file.inc';
require_once __DIR__ . '/core/includes/install.inc';
require_once __DIR__ . '/core/includes/schema.inc';
require_once __DIR__ . '/core/includes/database.inc';
require_once __DIR__ . '/core/includes/form.inc';
require_once __DIR__ . '/core/includes/batch.inc';

// Load module basics (needed for hook invokes).
include_once __DIR__ . '/core/includes/module.inc';
require_once __DIR__ . '/core/includes/entity.inc';

$autoload = require_once __DIR__ . '/autoload.php';

$root = getcwd();

$drupalFinder = new DrupalFinder();
if (!$drupalFinder->locateRoot($root)) {
    die('DrupalConsole must be executed within a Drupal Site.');
}

chdir($drupalFinder->getDrupalRoot());
$drupalKernel = DrupalKernel::createFromRequest(
    Request::createFromGlobals(),
    $autoload,
    'prod',
    true,
    $drupalFinder->getDrupalRoot()
);
$drupalKernel->boot();

return $autoload;
