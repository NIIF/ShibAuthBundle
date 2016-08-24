<?php

namespace Niif\ShibAuthBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('niif_shib_auth');
        $rootNode
            ->children()
                ->scalarNode('baseURL')
                    ->defaultValue('/Shibbholeth.sso/')
                ->end()
                ->scalarNode('sessionInitiator')
                    ->defaultValue('Login')
                ->end()
                ->scalarNode('logoutPath')
                    ->defaultValue('Logout')
                ->end()
                ->scalarNode('usernameAttribute')
                    ->defaultValue('REMOTE_USER')
                ->end()
            ->end()
        ;
        
        return $treeBuilder;
    }
}
