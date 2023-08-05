<?php

declare(strict_types=1);

namespace YellowCard\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class PreferenceForDetail implements HttpGetActionInterface
{
    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(
        private readonly PageFactory $pageFactory,
    )
    {
    }

    /**
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
