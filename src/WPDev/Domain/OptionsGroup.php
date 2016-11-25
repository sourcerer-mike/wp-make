<?php


namespace WPDev\Domain;


class OptionsGroup
{
    /**
     * Internal ID for the group.
     *
     * Also name for the options section.
     *
     * @var string
     */
    protected $id;
    /**
     * Label for the settings page.
     *
     * Usually the heading.
     *
     * @var string
     */
    protected $label;

    public function __construct($id, $label = null)
    {
        $this->id = $id;

        if (null == $label) {
            $label = ucfirst(preg_replace('@[^A-Za-z0-9]@', ' ', $id));
        }

        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
}
