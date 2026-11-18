<?php

/*
 * This file is a part of Sculpin.
 *
 * (c) Dragonfly Development Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mavimo\Sculpin\Bundle\RedirectBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration.
 *
 * @author Marco Vito Moscaritolo <marco@mavimo.org>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        // Symfony Config 5 removed the argument-free TreeBuilder
        // constructor and the root() method together, and Symfony 7 --
        // Sculpin 4's dependency -- makes the interface's TreeBuilder
        // return type native: the root name is the constructor
        // argument now, getRootNode() replaces root(), and the
        // return type must be declared.
        $treeBuilder = new TreeBuilder('sculpin_redirect');

        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
