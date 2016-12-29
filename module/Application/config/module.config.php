<?php
return array(
    'module' => array(
        'Application' => array(
            'name' => 'Application',
            'version' => '1.0.4',
            'install' => array(
                'require' => array()
            )
        )
    ),
    'router' => array(
        'routes' => array(
            'home' => array(
                'title' => 'Home',
                'pageTitle' => 'Home',
                'pageSubTitle' => '',
                'activeMenuItem' => '',
                'activeSubMenuItem' => '',
                'layout' => 'layout',
                'type' => 'literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\IndexController',
                        'action' => 'index'
                    )
                )
            ),
            'keep-alive' => array(
                'title' => 'Keep Alive',
                'pageTitle' => '',
                'pageSubTitle' => '',
                'activeMenuItem' => '',
                'activeSubMenuItem' => '',
                'layout' => 'layout',
                'type' => 'literal',
                'options' => array(
                    'route' => '/keep-alive',
                    'defaults' => array(
                        'controller' => 'Application\Controller\KeepAliveController',
                        'action' => 'index'
                    )
                )
            ),
        )
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            0 => 'Zend\\Cache\\Service\\StorageCacheAbstractServiceFactory',
            1 => 'Zend\\Log\\LoggerAbstractServiceFactory'
        ),
        'factories' => array(
            'translator' => 'Zend\\Mvc\\Service\\TranslatorServiceFactory',
            'navigation' => 'Zend\\Navigation\\Service\\DefaultNavigationFactory'
        )
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            0 => array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo'
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(),
        'factories' => array(
            'Application\Controller\IndexController' => 'Application\Controller\Factory\IndexControllerFactory',
            'Application\Controller\BaseController' => 'Application\Controller\Factory\BaseControllerFactory',
            'Application\Controller\KeepAliveController' => 'Application\Controller\Factory\KeepAliveControllerFactory',
        )
    ),
    'controller_plugins' => array(
        'factories' => array(),
        'invokables' => array()
    ),
    'view_helpers' => array(
        'invokables' => array(
            'Paginator' => 'Application\\View\\Helper\\Paginator',
            'DeleteButton' => 'Application\View\Helper\DeleteButton',
            'UpdateButton' => 'Application\View\Helper\UpdateButton',
            'CreateButton' => 'Application\View\Helper\CreateButton',
            'SearchButton' => 'Application\View\Helper\SearchButton'
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => false,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'error/layout' => __DIR__ . '/../view/layout/error.phtml',
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml'
        ),
        'template_path_stack' => array(
            0 => __DIR__ . '/../view'
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array()
        )
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Home',
                'route' => 'admin-index',
                'useRouteMatch' => true
            )
        )
    ),
    'acl' => array(
        'default' => array(
            'guest' => array(
                'home'
            ),
            'user' => array(
                'home'
            ),
            'administrator' => array(
                'home'
            )
        )
    ),
    'menu' => array(
        'default' => array()
    )
);
