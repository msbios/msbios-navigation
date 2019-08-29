<?php

/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation;

return [

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
];
