<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation;

use Zend\Router\Http\Regex;


return [

    'router' => [
        'routes' => [
            'navigation' => [
                'type' => Regex::class,
                'options' => [
                    'regex' => '/navigation.(?<format>(json|xml)?)',
                    'spec' => '/navigation.%format%',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index'
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\IndexController::class =>
                Factory\NavigationableFactory::class,
        ],
    ],

    'navigation' => [
        'default' => [
            // ...
        ],
    ],

    'service_manager' => [
        'factories' => [
            'navigation' =>
                \Zend\Navigation\Service\DefaultNavigationFactory::class,
        ],
    ],
];
