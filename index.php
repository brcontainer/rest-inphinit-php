<?php
/*
 * Inphinit
 *
 * Copyright (c) 2017 Guilherme Nascimento (brcontainer@yahoo.com.br)
 *
 * Released under the MIT license
 */

define('INPHINIT_START', microtime(true));
define('INPHINIT_ROOT', rtrim(strtr(dirname(__FILE__), '\\', '/'), '/') . '/');
define('INPHINIT_PATH', INPHINIT_ROOT . 'system/');
define('INPHINIT_COMPOSER', false);

require_once INPHINIT_PATH . 'boot/start.php';
