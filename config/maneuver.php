<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Ignored Files
    |--------------------------------------------------------------------------
    |
    | Maneuver will check .gitignore for ignore files, but you can conveniently
    | add here additional files to be ignored.
    |
    */
    'ignored' => array(),

    /*
    |--------------------------------------------------------------------------
    | Default server
    |--------------------------------------------------------------------------
    |
    | Default server to deploy to when running 'deploy' without any arguments.
    | If this options isn't set, deployment will be run to all servers.
    |
    */
    'default' => 'development',

    /*
    |--------------------------------------------------------------------------
    | Connections List
    |--------------------------------------------------------------------------
    |
    | Servers available for deployment. Specify one or more connections, such
    | as: 'deployment', 'production', 'stating'; each with its own credentials.
    |
    */

    'connections' => array(

         'development' => array(
            'scheme'    => 'ftp',
            'host'      => '127.0.0.1',
            'user'      => 'laravel',
            'pass'      => 'laravel@123',
            'path'      => '/',
            'port'      => 21,
            'passive'   => true
        ),

        'production' => array(
            'scheme'    => 'ftp',
             'host'      => '127.0.0.1',
            'user'      => 'laravel',
            'pass'      => 'laravel@123',
            'path'      => '/Change in ',
            'port'      => 21,
            'passive'   => true
        ),

    ),

);