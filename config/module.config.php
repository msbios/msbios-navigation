<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation;

use Zend\Router\Http\Segment;

return [

    'router' => [
        'routes' => [
            'navigation' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/navigation/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'navigation',
                        // 'format' => '[xml|json]'
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
            // 'home' => [
            //     'label' => 'Home',
            //     'route' => 'home',
            // ],
            // 'page-1' => [
            //     'label' => 'Page #1',
            //     'uri' => '#page1',
            // ],
            // 'page-2' => [
            //     'label' => 'Page #2',
            //     'uri' => '#page2',
            // ],
        ],
    ],

    // 'service_manager' => [
    //     'factories' => [
    //         'navigation' =>
    //             \Zend\Navigation\Service\DefaultNavigationFactory::class,
    //     ],
    // ],
];
