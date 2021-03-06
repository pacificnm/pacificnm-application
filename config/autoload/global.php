<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return array(
    'db' => array(
        'driver' => 'Pdo',
        'driver_options' => array(
            1002 => 'SET NAMES \'UTF8\''
        ),
        'adapters' => array(
            'db1' => array(
                'driver' => 'Pdo',
                'driver_options' => array(
                    1002 => 'SET NAMES \'UTF8\''
                )
            ),
            'db2' => array(
                'driver' => 'Pdo',
                'driver_options' => array(
                    1002 => 'SET NAMES \'UTF8\''
                )
            )
        )
    ),
    'service_manager' => array(
        'factories' => array(),
        'abstract_factories' => array(
            'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
            'Zend\\Cache\\Service\\StorageCacheAbstractServiceFactory'
        ),
        'aliases' => array(
            'Zend\\Authentication\\AuthenticationService' => 'my_auth_service',
        ),
        'invokables' => array(
            'my_auth_service' => 'Zend\\Authentication\\AuthenticationService',
        ),
    )
);
