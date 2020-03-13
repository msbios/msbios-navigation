<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Initializer\InitializerInterface;

/**
 * Class NavigationInitializer
 *
 * @package MSBios\Navigation
 */
class NavigationInitializer implements InitializerInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param object $instance
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof NavigationAwareInterface) {
            switch (true) {
                default:
                    $instance->setNavigation($container->get('navigation'));
                    break;
            }
        }
    }
}