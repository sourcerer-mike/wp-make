<?php

namespace WPDev\Commands\OptionsPages;


use WPDev\Domain\OptionsGroup;
use WPDev\Domain\Plugin;

class CreateCommand
{
    /**
     * Description of the options group.
     *
     * @var OptionsGroup
     */
    protected $optionsGroup;
    /**
     * Plugin where it shall be created.
     *
     * @var Plugin
     */
    protected $plugin;

    /**
     * CreateCommand constructor.
     *
     * @param OptionsGroup $optionsGroup Description of the options group.
     * @param Plugin $plugin Plugin where the options page should be created.
     */
    public function __construct(OptionsGroup $optionsGroup, Plugin $plugin)
    {
        $this->plugin = $plugin;
        $this->optionsGroup = $optionsGroup;
    }

    /**
     * @return string
     */
    public function getOptionsGroup()
    {
        return $this->optionsGroup;
    }

    /**
     * @return Plugin
     */
    public function getPlugin()
    {
        return $this->plugin;
    }


}
