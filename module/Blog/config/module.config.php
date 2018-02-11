<?php

return [
    'doctrine' => [
        'driver' => [
            'blog_entity' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Blog/Entity',
                ],
            ],

            'orm_default' => [
                'drivers' => [
                    'Blog\Entity' => 'blog_entity',
                ],
            ],
        ],
    ],

    'controllers' => [
        'invokables' => [
            'Blog\Controller\Index' => 'Blog\Controller\IndexController',
        ],
    ],

    'router' => [
        'routes' => [
            'blog' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/[:action/][:id/]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => 'Blog\Controller\Index',
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];