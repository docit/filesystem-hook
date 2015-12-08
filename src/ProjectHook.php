<?php
namespace Docit\Hooks\Filesystem;

use Docit\Core\Contracts\Hook;
use Docit\Core\Project;
use Illuminate\Filesystem\FilesystemManager;

/**
 * Filesystem project hook.
 *
 * @package   Docit\Filesystem-hook
 * @author    Docit Project Dev Team
 * @copyright Copyright (c) 2015, Docit Project
 * @license   https://tldrlegal.com/license/mit-license MIT License
 */
class ProjectHook implements Hook
{
    /**
     * @var \Illuminate\Filesystem\FilesystemManager
     */
    protected $fsm;

    /**
     * Create a new ProjectHook instance.
     *
     * @param  \Illuminate\Filesystem\FilesystemManager $fsm
     */
    public function __construct(FilesystemManager $fsm)
    {
        $this->fsm = $fsm;
    }

    /**
     * Handle the hook.
     *
     * @param  \Docit\Core\Project $project
     * @return void
     */
    public function handle(Project $project)
    {
        if ( ! $project->config('enable_filesystem_hook') )
        {
            $project->setFiles(new LocalFilesystem);
        }

        $disk     = $project->config('default_filesystem_disk');
        $settings = $project->config('filesystem_hook_settings');

        if ( ! isset($settings[ $disk ]) )
        {
            return;
        }

        $files = $this->fsm->disk($disk);

        if ( isset($files) )
        {
            $project->setFiles($files);
            $project->setPath($project->getName());
        }
    }
}
