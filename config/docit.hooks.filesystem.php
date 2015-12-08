<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Project Configuration
    |--------------------------------------------------------------------------
    |
    | These are the default settings used to pre-populate all project
    | configuration files. These values are merged in with Docit's
    | main `default_project_config` array.
    |
    */

    'default_project_config' => [

        /*
        |--------------------------------------------------------------------------
        | Enable Filesystem Hook
        |--------------------------------------------------------------------------
        |
        | Project's may individually enable or disable the use of the filesystem
        | hook.
        |
        */

        'enable_filesystem_hook' => false,
        
        /*
        |--------------------------------------------------------------------------
        | Default Filesystem Disk
        |--------------------------------------------------------------------------
        |
        | Here you may specify the default filesystem disk that should be used
        | by the hook. A "local" driver, as well as a variety of cloud based
        | drivers are available for your choosing. Just store away!
        |
        | Supported: "local", "dropbox", ftp", "s3", "rackspace"
        |
        */

        'default_filesystem_disk' => 'local',

        /*
        |--------------------------------------------------------------------------
        | Filesystem Hook Settings
        |--------------------------------------------------------------------------
        |
        | These are the filesystem hook specific settings.
        |
        */

        'filesystem_hook_settings' => [

            /*
            |--------------------------------------------------------------------------
            | Filesystem Disks
            |--------------------------------------------------------------------------
            |
            | Here you may configure as many filesystem "disks" as you wish, and you
            | may even configure multiple disks of the same driver. Defaults have
            | been setup for each driver as an example of the required options.
            |
            */

            'disks' => [

                'local' => [
                    'driver' => 'local',
                    'root'   => storage_path('app'),
                ],

                'dropbox' => [
                    'driver' => 'dropbox',
                    'folder' => ''
                ],

                'ftp' => [
                    'driver'   => 'ftp',
                    'host'     => 'ftp.example.com',
                    'username' => 'your-username',
                    'password' => 'your-password',

                    // Optional FTP Settings...
                    // 'port'     => 21,
                    // 'root'     => '',
                    // 'passive'  => true,
                    // 'ssl'      => true,
                    // 'timeout'  => 30,
                ],

                's3' => [
                    'driver' => 's3',
                    'key'    => 'your-key',
                    'secret' => 'your-secret',
                    'region' => 'your-region',
                    'bucket' => 'your-bucket',
                ],

                'rackspace' => [
                    'driver'    => 'rackspace',
                    'username'  => 'your-username',
                    'key'       => 'your-key',
                    'container' => 'your-container',
                    'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
                    'region'    => 'IAD',
                    'url_type'  => 'publicURL',
                ],

            ],

        ],

    ],

];
