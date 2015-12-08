<?php
namespace Docit\Hooks\Filesystem;

use Docit\Core\Document;
use Docit\Core\Contracts\Hook;

/**
 * Filesystem document hook.
 *
 * @package   Docit\Filesystem-hook
 * @author    Docit Project Dev Team
 * @copyright Copyright (c) 2015, Docit Project
 * @license   https://tldrlegal.com/license/mit-license MIT License
 */
class DocumentHook implements Hook
{
    /**
     * Handle the document hook.
     *
     * @param  \Docit\Core\Document  $document
     * @return void
     */
    public function handle(Document $document)
    {
        //
    }
}
