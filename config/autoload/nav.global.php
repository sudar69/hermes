<?php
return array(
    'navigation' => array(
        'default' => array(
            0 => array(
                'label' => 'Home',
                'route' => 'home',
                'uri' => 'http://www.jaapsblog.nl',
            ),
            1 => array(
                'label' => 'Album',
                'route' => 'album',
                'uri' => 'http://www.jaapsblog.nl',
                'id' => 'productHome',
                'pages' => array(
                    0 => array(
                        'label' => 'Add',
                        'route' => 'album',
                        'uri' => 'http://www.jaapsblog.nl',
                        'action' => 'add',
                    ),
                    1 => array(
                        'label' => 'Edit',
                        'route' => 'album',
                        'action' => 'edit',
                    ),
                    2 => array(
                        'label' => 'Delete',
                        'route' => 'album',
                        'action' => 'delete',
                    ),
                ),
            ),
        ),
    ),
);
