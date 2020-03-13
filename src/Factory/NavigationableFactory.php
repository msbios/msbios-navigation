<?php
/**
 * @access protected
 * @author Judzhin Miles <>
 */

namespace MSBios\Navigation\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use MSBios\Navigation\NavigationAwareInterface;

/**
 * Class NavigationableFactory
 *
 * @package MSBios\Navigation\Factory
 */
class NavigationableFactory implements FactoryInterface
{
    /**
     * @inheritDoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return NavigationAwareInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): NavigationAwareInterface
    {
        return new $requestedName($container->get('navigation'));
    }
}