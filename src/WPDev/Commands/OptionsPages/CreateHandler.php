<?php


namespace WPDev\Commands\OptionsPages;


use WPDev\Domain\FileRepositoryInterface;
use WPDev\Repositories\OptionsPagesRepository;

class CreateHandler
{
    /**
     * @var FileRepositoryInterface
     */
    protected $optionsPagesRepository;

    public function __construct(OptionsPagesRepository $optionsPagesRepository)
    {
        $this->optionsPagesRepository = $optionsPagesRepository;
    }

    public function handle(CreateCommand $optionsPage)
    {
        $this->optionsPagesRepository->createGroupTemplate(
            $optionsPage->getPlugin(),
            $optionsPage->getOptionsGroup()
        );

        $this->optionsPagesRepository->createGroupClass(
            $optionsPage->getPlugin(),
            $optionsPage->getOptionsGroup()
        );

        $this->optionsPagesRepository->createGroupInclude(
            $optionsPage->getPlugin(),
            $optionsPage->getOptionsGroup()
        );
    }
}
