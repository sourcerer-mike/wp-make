<?php

namespace WPDev\Domain;


class Plugin
{
    /**
     * Path to the plugin.
     *
     * @var string
     */
    protected $path;
    /**
     * Slug of the plugin.
     *
     * @var string
     */
    protected $slug;
    /**
     * Translation domain for gettext.
     *
     * Usually the same as the slug.
     *
     * @var string
     */
    protected $textdomain;

    /**
     * Namespace for classes.
     *
     * Usually the slug but upper snake case.
     *
     * @var string
     */
    protected $namespace;

    /**
     * Plugin constructor.
     *
     * @param string $slug Name of the plugin.
     * @param string $path Absolute path to the plugin.
     * @param string $textdomain Translation domain for gettext (default: same as slug).
     * @param null $namespace Namespace base for plugin classes.
     */
    public function __construct($slug, $path, $textdomain = null, $namespace = null)
    {
        $this->slug = $slug;
        $this->path = $path;

        if (null === $textdomain) {
            // When no translation domain is given, then it shall be the same as the slug.
            $textdomain = $slug;
        }

        $this->textdomain = $textdomain;

        if (null === $namespace) {
            $this->namespace = str_replace('-', '_', ucwords($slug, '-'));
        }
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getTextdomain()
    {
        return $this->textdomain;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    public function getClassPath($className = null)
    {
        $classPath = null;
        if (null !== $className) {
            $classPath = $this->classToFile($className);
        }

        // @todo magic string 'includes'
        return $this->getPath().'/includes/'.$classPath;
    }

    private function classToFile($className)
    {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        $className = strtolower($className);
        $className = str_replace('_', '-', $className);

        return $className.'.php';
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
