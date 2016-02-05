<?php
return array(
    'bjyauthorize' => array(
        'default_role' => 'guest',
        'identity_provider' => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',
        //'unauthorized_strategy' => 'BjyAuthorize\View\RedirectionStrategy',
        'authenticated_role' => 'user',
        'role_providers'        => array(
            // using an object repository (entity repository) to load all roles into our ACL
            'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' => array(
                'object_manager'    => 'doctrine.entity_manager.orm_default',
                'role_entity_class' => 'MyUser\Entity\Role',
            ),
        ),
        'guards' => array(
            'MyUser_controller_guard_adapter' => array(
                'object_manager' => 'doctrine.entity_manager.orm_default',
                'rule_entity_class' => 'MyUser\Entity\ObjectRepositoryProvider'
            )
        ),
        /*'guards' => array(
            'BjyAuthorize\Guard\Controller' => array(
                array(
                    'controller' => 'zfcuser',
                    'action' => array('index'),
                    'roles' => array('guest', 'user'),
                ),
                array(
                    'controller' => 'zfcuser',
                    'action' => array('login', 'authenticate', 'register'),
                    'roles' => array('guest'),
                ),
                array(
                    'controller' => 'zfcuser',
                    'action' => array('logout'),
                    'roles' => array('user'),
                ),
                array('controller' => 'Application\Controller\Index', 'roles' => array()),
                array(
                    'controller' => 'MyCard\Controller\Card',
                    'action' => array('index', 'view'),
                    'roles' => array('administrator'),
                ),
                array(
                    'controller' => 'MyCard\Controller\Admin',
                    'action' => array('index', 'edit', 'add', 'view', 'delete', 'next'),
                    'roles' => array('administrator'),
                ),
                array(
                    'controller' => 'CsnCms\Controller\Index',
                    'action' => array('index', 'add', 'useredit', 'updateuser'),
                    'roles' => array('administrator'),
                ),
            ),
        ),*/
    ),
);