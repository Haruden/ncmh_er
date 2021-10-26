<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['menus'] = [
    'attendant' => [
        'sidebar' => [
            [
                'type' => 'link',
                'name' => 'Patient Queue',
                'icon' => 'fas fa-list-ol',
                'route' => 'attendant/queue'
            ],
            [
                'type' => 'link',
                'name' => 'Patient Search',
                'icon' => 'fas fa-users',
                'route' => 'attendant/patient-search'
            ],
            // [
            //     'type' => 'link',
            //     'name' => 'Reports <sup><small>DISABLED</small></sup>',
            //     'icon' => 'fas fa-chart-bar',
            //     'route' => 'record/schedule'
            // ],
        ],
    ],

    'nurse' => [
        'sidebar' => [
            [
                'type' => 'link',
                'name' => 'Patient Queue',
                'icon' => 'fas fa-list-ol',
                'route' => 'nurse/queue'
            ],
            // [
            //     'type' => 'link',
            //     'name' => 'InPatient List',
            //     'icon' => 'fas fa-users',
            //     'route' => 'nurse/patient-list'
            // ],
            // [
            //     'type' => 'link',
            //     'name' => 'My Schedule <sup><small>DISABLED</small></sup>',
            //     'icon' => 'fas fa-calendar-alt',
            //     'route' => 'nurse/schedule'
            // ],
            // [
            //     'type' => 'link',
            //     'name' => 'Reports <sup><small>DISABLED</small></sup>',
            //     'icon' => 'fas fa-chart-bar',
            //     'route' => 'nurse/reports'
            // ],
        ],
    ],

    'doctor' => [
        'sidebar' => [
            [
                'type' => 'link',
                'name' => 'Patient Queue',
                'icon' => 'fas fa-list-ol',
                'route' => 'doctor/queue'
            ],
            // [
            //     'type' => 'link',
            //     'name' => 'Patient List',
            //     'icon' => 'fas fa-users',
            //     'route' => 'doctor/patient-list'
            // ],
            // [
            //     'type' => 'link',
            //     'name' => 'My Schedule <sup><small>DISABLED</small></sup>',
            //     'icon' => 'fas fa-calendar-alt',
            //     'route' => 'doctor/schedule'
            // ],
            
            // [
            //     'type' => 'link',
            //     'name' => 'Reports <sup><small>DISABLED</small></sup>',
            //     'icon' => 'fas fa-chart-bar',
            //     'route' => 'doctor/reports'
            // ],
        ]
    ],
 
];
