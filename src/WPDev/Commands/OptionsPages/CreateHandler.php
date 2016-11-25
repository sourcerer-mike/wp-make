<?php


namespace WPDev\Commands\OptionsPages;


use WPDev\Domain\FileRepositoryInterface;
use WPDev\Repositories\OptionsPagesRepository;

class CreateHandler
{
    /**
     * @var FileRepositoryInterface
     */
    protected $filesRepository;

    public function __construct(OptionsPagesRepository $templateRepository)
    {
        $this->filesRepository = $templateRepository;
    }

    public function handle(CreateCommand $optionsPage)
    {
        $this->filesRepository->createGroupTemplate(
            $optionsPage->getPlugin(),
            $optionsPage->getOptionsGroup()
        );
    }
}
