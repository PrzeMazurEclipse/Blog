<?php declare(strict_types=1);

namespace YellowCard\Blog\ViewModel;

use YellowCard\Blog\Api\Data\PostInterface;
use YellowCard\Blog\Api\PostRepositoryInterface;
use YellowCard\Blog\Model\ResourceModel\Post\Collection;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Post implements ArgumentInterface
{
    /**
     * @param Collection $collection
     * @param PostRepositoryInterface $postRepository
     * @param RequestInterface $request
     */
    public function __construct(
        private readonly Collection              $collection,
        private readonly PostRepositoryInterface $postRepository,
        private readonly RequestInterface        $request,
    ) {}

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->collection->getItems();
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->collection->count();
    }

    /**
     * @return PostInterface
     */
    public function getDetail(): PostInterface
    {
        $id = (int) $this->request->getParam('id');
        return $this->postRepository->getById($id);
    }
}
