<?php

namespace Symfony\Components\DependencyInjection\Loader;

use Symfony\Components\DependencyInjection\BuilderConfiguration;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * LoaderExtensionInterface is the interface implemented by loader extension classes.
 *
 * @package    Symfony
 * @subpackage Components_DependencyInjection
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
interface LoaderExtensionInterface
{
    /**
     * Sets a configuration entry point for the given extension name.
     *
     * @param string $name     The configuration extension name
     * @param mixed  $resource A resource
     */
    public function setConfiguration($name, $resource);

    /**
     * Loads a specific configuration.
     *
     * @param string               $tag           The tag name
     * @param array                $config        An array of configuration values
     * @param BuilderConfiguration $configuration A BuilderConfiguration instance
     *
     * @return BuilderConfiguration A BuilderConfiguration instance
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load($tag, array $config, BuilderConfiguration $configuration);

    /**
     * Returns the namespace to be used for this extension (XML namespace).
     *
     * @return string The XML namespace
     */
    public function getNamespace();

    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath();

    /**
     * Returns the recommended alias to use in XML.
     *
     * This alias is also the mandatory prefix to use when using YAML.
     *
     * @return string The alias
     */
    public function getAlias();
}
