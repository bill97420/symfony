<?php

require_once __DIR__.'/../../UniversalClassLoader.php';

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Symfony\Framework\UniversalClassLoader;
use Symfony\Framework\ClassCollectionLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array('Symfony' => __DIR__.'/../../../..'));
$loader->register();

if (file_exists(__DIR__.'/../../bootstrap.php')) {
    unlink(__DIR__.'/../../bootstrap.php');
}

ClassCollectionLoader::load(array(
    'Symfony\\Foundation\\Bundle\\Bundle',
    'Symfony\\Foundation\\Bundle\\BundleInterface',
    'Symfony\\Foundation\\KernelBundle',
    'Symfony\\Foundation\\DependencyInjection\\KernelExtension',
    'Symfony\\Foundation\\Debug\\ErrorHandler',
    'Symfony\\Foundation\\ClassCollectionLoader',
    'Symfony\\Foundation\\EventDispatcher',
), __DIR__.'/../..', 'bootstrap', false);
