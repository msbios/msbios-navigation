<?php

/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation;

use Laminas\Router\Http\Segment;

return [

    'router' => [
        'routes' => [
            'navigation' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],

    'navigation' => [
        'default' => [
            'home' => [
                'label' => 'Home',
                'route' => 'home',
            ],
            'page-1' => [
                'label' => 'Page #1',
                'uri' => '#page1',
            ],
            'page-2' => [
                'label' => 'Page #2',
                'uri' => '#page2',
                'pages' => [
                    'page-2-1' => [
                        'label' => 'Page #2.1',
                        'uri' => '#page2.1',
                    ],
                ]
            ],
        ],
    ],

    'view_manager' => [
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
