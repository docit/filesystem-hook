<?php
namespace Docit\Hooks\Filesystem;

use Docit\Support\ServiceProvider;
use Docit\Core\Traits\DocitProviderTrait;

/**
 * Filesystem hook service provider.
 *
 * @package   Docit\Filesystem-hook
 * @author    Docit Project Dev Team
 * @copyright Copyright (c) 2015, Docit Project
 * @license   https://tldrlegal.com/license/mit-license MIT License
 */
class HookServiceProvider extends ServiceProvider
{
    use DocitProviderTrait;

    /**
     * @var string
     */
    protected $dir = __DIR__;

    /**
     * @var array
     */
    protected $configFiles = [ 'docit.hooks.filesystem' ];

    /**
     * Perform the post-registration booting of services.
     *
     * @return Application
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register bindings in the container.
     *
     * @return Application
     */
    public function register()
    {
        parent::register();

        // The factory hook will merge config, adds several default_project_settings
        $this->addDocitHook('factory:ready', FactoryHook::class);

        // The project hook will do the magic. It will read the projects configuration and
        // if filesystems are properly configured, it will replace its `files` instance with the
        // adapter specified in the project
        $this->addDocitHook('project:ready', ProjectHook::class);
    }
}
