<?php
/**
 * @access protected
 * @author Judzhin Miles <>
 */

namespace MSBios\Navigation\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class NavigationableFactory
 * @package MSBios\Navigation\Factory
 */
class NavigationableFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return mixed|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new $requestedName($container->get('navigation'));
    }
}