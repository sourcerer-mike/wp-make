<?php


namespace WPDev\Repositories;


use WPDev\Domain\OptionsGroup;
use WPDev\Domain\Plugin;

class OptionsPagesRepository
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function getGroupTemplate(Plugin $plugin, $id)
    {
        $path = $plugin->getPath().$this->getTemplatePath($id);

        return file_get_contents($path);
    }

    protected function getTemplatePath($id = null)
    {
        if (null !== $id) {
            $id .= '.php';
        }

        return 'admin/options-pages/'.$id;
    }

    public function createGroupClass(Plugin $plugin, OptionsGroup $optionsGroup)
    {
        $targetPath = $plugin->getClassPath(
            $plugin->getNamespace().'\\Admin\\Options_Pages\\' . $optionsGroup->getId()
        );

        $content = $this->twig->render(
            $this->getClassPath().'new.twig',
            [
                'optionsGroup' => $optionsGroup,
                'plugin' => $plugin,
            ]
        );

        if (!is_dir(dirname($targetPath))) {
            mkdir(dirname($targetPath), 0775, true);
        }

        file_put_contents($targetPath, $content);
    }

    public function getClassPath($id = null)
    {
        if (null !== $id) {
            $id = 'class-'.$id;
        }

        return '/includes/'.$this->getTemplatePath($id);
    }

    public function createGroupTemplate(Plugin $plugin, OptionsGroup $optionsGroup)
    {
        $targetPath = $plugin->getPath().DIRECTORY_SEPARATOR.$this->getTemplatePath($optionsGroup->getId());

        $content = $this->twig->render(
            $this->getTemplatePath().'new.twig',
            [
                'optionsGroup' => $optionsGroup,
                'plugin' => $plugin,
            ]
        );

        if (!is_dir(dirname($targetPath))) {
            mkdir(dirname($targetPath), 0775, true);
        }

        file_put_contents($targetPath, $content);
    }
}
