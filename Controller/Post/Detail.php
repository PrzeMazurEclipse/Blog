<?php

declare(strict_types=1);

namespace YellowCard\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Detail implements HttpGetActionInterface
{
    /**
     * @param PageFactory $pageFactory
     * @param ManagerInterface $eventManager
     * @param RequestInterface $request
     */
    public function __construct(
        private readonly PageFactory $pageFactory,
        private readonly ManagerInterface $eventManager,
        private readonly RequestInterface $request
    )
    {
    }

    /**
     * @return Page
     */
    public function execute(): Page
    {
        $this->eventManager->dispatch('yellowcard_post_detail_view', [
            'request' => $this->request
        ]);
        return $this->pageFactory->create();
    }
}
