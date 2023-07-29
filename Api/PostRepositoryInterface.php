<?php

declare(strict_types=1);

namespace YellowCard\Blog\Api;

use YellowCard\Blog\Api\Data\PostInterface;

/**
 * Blog post CRUD interface.
 * @api
 * @since 1.0.0
 */
interface PostRepositoryInterface
{
    /**
     * @param int $id
     * @return PostInterface
     */
    public function getById(int $id): PostInterface;

    /**
     * @param PostInterface $post
     * @return PostInterface
     */
    public function save(PostInterface $post): PostInterface;

    /**
     * @param int $id
     * @return bool
     */
    public function deleteById(int $id): bool;
}
