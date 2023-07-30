<?php declare(strict_types=1);

namespace YellowCard\Blog\Model;

use YellowCard\Blog\Api\Data\PostInterface;
use YellowCard\Blog\Model\ResourceModel\Post as PostResourceModel;
use YellowCard\Blog\Api\PostRepositoryInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class PostRepository implements PostRepositoryInterface
{
    /**
     * @param PostFactory $postFactory
     * @param PostResourceModel $postResourceModel
     */
    public function __construct(
        private readonly PostFactory       $postFactory,
        private readonly PostResourceModel $postResourceModel
    )
    {
    }

    /**
     * @param int $id
     * @return PostInterface
     */
    public function getById(int $id): PostInterface
    {
        $post = $this->postFactory->create();
        $this->postResourceModel->load($post, $id);

        return $post;
    }

    /**
     * @param PostInterface $post
     * @return PostInterface
     */
    public function save(PostInterface $post): PostInterface
    {
        try {
            $this->postResourceModel->save($post);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }

        return $post;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteById(int $id): bool
    {
        $post = $this->getById($id);

        try{
            $this->postResourceModel->delete($post);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }

        return true;
    }
}
