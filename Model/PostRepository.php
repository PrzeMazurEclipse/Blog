<?php declare(strict_types=1);

namespace YellowCard\Blog\Model;

use YellowCard\Blog\Api\Data\PostInterface;
use YellowCard\Blog\Api\PostRepositoryInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class PostRepository implements PostRepositoryInterface
{
    public function getById(int $id): PostInterface
    {
        // TODO: Implement getById() method.
    }

    public function save(PostInterface $post): PostInterface
    {
        // TODO: Implement save() method.
    }

    public function deleteById(int $id): bool
    {
        // TODO: Implement deleteById() method.
    }
}
