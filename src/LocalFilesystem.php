<?php
/**
 * Part of the Caffeinated PHP packages.
 *
 * MIT License and copyright information bundled with this package in the LICENSE file
 */
namespace Docit\Hooks\Filesystem;

use Illuminate\Contracts\Filesystem\Filesystem as FilesystemContract;
use Illuminate\Filesystem\Filesystem;

/**
 * This is the LocalFilesystem. This file
 *
 * @package        Docit\Hooks
 * @author         Caffeinated Dev Team
 * @copyright      Copyright (c) 2015, Caffeinated
 * @license        https://tldrlegal.com/license/mit-license MIT License
 */
class LocalFilesystem implements FilesystemContract
{
    protected $files;
    /** Instantiates the class */
    public function __construct()
    {
        $this->files = new Filesystem;
    }

    /**
     * Determine if a file exists.
     *
     * @param  string $path
     * @return bool
     */
    public function exists($path)
    {
        return $this->files->exists($path);
    }

    /**
     * Get the contents of a file.
     *
     * @param  string $path
     * @return string
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function get($path)
    {
        return $this->files->get($path);
    }

    /**
     * Write the contents of a file.
     *
     * @param  string          $path
     * @param  string|resource $contents
     * @param  string          $visibility
     * @return bool
     */
    public function put($path, $contents, $visibility = null)
    {
        return $this->files->put($path, $contents);
    }

    /**
     * Get the visibility for the given path.
     *
     * @param  string $path
     * @return string
     */
    public function getVisibility($path)
    {

    }

    /**
     * Set the visibility for the given path.
     *
     * @param  string $path
     * @param  string $visibility
     * @return void
     */
    public function setVisibility($path, $visibility)
    {
    }

    /**
     * Prepend to a file.
     *
     * @param  string $path
     * @param  string $data
     * @return int
     */
    public function prepend($path, $data)
    {
        return $this->files->prepend($path, $data);
    }

    /**
     * Append to a file.
     *
     * @param  string $path
     * @param  string $data
     * @return int
     */
    public function append($path, $data)
    {
        return $this->files->append($path, $data);
    }

    /**
     * Delete the file at a given path.
     *
     * @param  string|array $paths
     * @return bool
     */
    public function delete($paths)
    {
        return $this->files->delete($paths);
    }

    /**
     * Copy a file to a new location.
     *
     * @param  string $from
     * @param  string $to
     * @return bool
     */
    public function copy($from, $to)
    {
        return $this->files->copy($from, $to);
    }

    /**
     * Move a file to a new location.
     *
     * @param  string $from
     * @param  string $to
     * @return bool
     */
    public function move($from, $to)
    {
        return $this->files->move($from, $to);
    }

    /**
     * Get the file size of a given file.
     *
     * @param  string $path
     * @return int
     */
    public function size($path)
    {
        return $this->files->size($path);
    }

    /**
     * Get the file's last modification time.
     *
     * @param  string $path
     * @return int
     */
    public function lastModified($path)
    {
        return $this->files->lastModified($path);
    }

    /**
     * Get an array of all files in a directory.
     *
     * @param  string|null $directory
     * @param  bool        $recursive
     * @return array
     */
    public function files($directory = null, $recursive = false)
    {
        return $this->files->files($directory);
    }

    /**
     * Get all of the files from the given directory (recursive).
     *
     * @param  string|null $directory
     * @return array
     */
    public function allFiles($directory = null)
    {
        return $this->files->allFiles($directory);
    }

    /**
     * Get all of the directories within a given directory.
     *
     * @param  string|null $directory
     * @param  bool        $recursive
     * @return array
     */
    public function directories($directory = null, $recursive = false)
    {
        return $this->files->directories($directory);
    }

    /**
     * Get all (recursive) of the directories within a given directory.
     *
     * @param  string|null $directory
     * @return array
     */
    public function allDirectories($directory = null)
    {
        return $this->files->directories($directory);
    }

    /**
     * Create a directory.
     *
     * @param  string $path
     * @return bool
     */
    public function makeDirectory($path)
    {
        return $this->files->makeDirectory($path);
    }

    /**
     * Recursively delete a directory.
     *
     * @param  string $directory
     * @return bool
     */
    public function deleteDirectory($directory)
    {
        return $this->files->deleteDirectory($directory);
    }
}
