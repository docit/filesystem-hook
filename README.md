Docit Filesystem Hook
=====================
The Filesystem Hook provides Docit the means to pull and render documentation from any of the following supported filesystem drivers:

- Local
- FTP
- Dropbox
- Amazon S3
- Rackspace Cloud Files

Installation
------------
1. Add to composer

		composer require docit/filesystem-hook

2. Add service provider

		Docit\Hooks\Filesystem\HookServiceProvider::class

3. Publish and configure the configuration file

		php artisan vendor:publish --provider=Docit\Hooks\Filesystem\HookServiceProvider --tag=config

