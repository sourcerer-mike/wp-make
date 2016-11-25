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
        $path = $plugin->getPath().$this->getBasePath($id);

        return file_get_contents($path);
    }

    protected function getBasePath($id = null)
    {
        if (null !== $id) {
            $id .= '.php';
        }

        return 'admin/options-pages/'.$id;
    }

    public function createGroupTemplate(Plugin $plugin, OptionsGroup $optionsGroup)
    {
        $targetPath = $plugin->getPath().DIRECTORY_SEPARATOR.$this->getBasePath($optionsGroup->getId());

        $content = $this->twig->render(
            $this->getBasePath().'new.twig',
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

    public function getTemplatePath($templateFile)
    {
        return WPDEV_TEMPLATE_PATH.$templateFile.'.twig';
    }
}
