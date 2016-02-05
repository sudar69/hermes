<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'inventory_entity' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => array(__DIR__ . '/../src/Inventory/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Inventory\Entity' => 'inventory_entity',
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Inventory\Controller\Inventory' => 'Inventory\Controller\InventoryController',
            'Inventory\Controller\Device' => 'Inventory\Controller\DeviceController',
            'Inventory\Controller\Addresses' => 'Inventory\Controller\AddressesController',
            'Inventory\Controller\Departments' => 'Inventory\Controller\DepartmentsController',
            'Inventory\Controller\Warrants' => 'Inventory\Controller\WarrantsController',
            'Inventory\Controller\Programms' => 'Inventory\Controller\ProgrammsController',
            'Inventory\Controller\Addr' => 'Inventory\Controller\AddrController',
            'Inventory\Controller\Demo' => 'Inventory\Controller\DemoController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'inventory' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/inventory[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Inventory\Controller\Inventory',
                        'action'     => 'index',
                    ),
                ),
            ),
            'device' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/device[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Inventory\Controller\Device',
                        'action'     => 'index',
                    ),
                ),
            ),
            'addresses' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/addresses[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Inventory\Controller\Addresses',
                        'action'     => 'index',
                    ),
                ),
            ),
            'addr' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/addr[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Inventory\Controller\Addr',
                        'action'     => 'index',
                    ),
                ),
            ),
            'demo' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/demo[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Inventory\Controller\Demo',
                        'action'     => 'index',
                    ),
                ),
            ),
            'departments' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/departments[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Inventory\Controller\Departments',
                        'action'     => 'index',
                    ),
                ),
            ),
            'warrants' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/warrants[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Inventory\Controller\Warrants',
                        'action'     => 'index',
                    ),
                ),
            ),
            'programms' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/programms[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Inventory\Controller\Programms',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    'view_helpers' => array(
        'invokables'=> array(
            'page_helper' => 'Inventory\View\Helper\Page',
            'dashboard_helper' => 'Inventory\View\Helper\Dashboard',
            'row_helper' => 'Inventory\View\Helper\Row',
            'col_helper' => 'Inventory\View\Helper\Col',
            'widget_table_helper' => 'Inventory\View\Helper\WidgetTable',
            'widget_view_helper' => 'Inventory\View\Helper\WidgetView',
        )
    ),
);
