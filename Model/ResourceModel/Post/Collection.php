<?php

declare(strict_types=1);

namespace YallowCard\Blog\Model\ResourceModel\Post;

use Magento\Cms\Model\ResourceModel\AbstractCollection;
use Yellowcard\Blog\Model\Post;
use YellowCard\Blog\Model\ResourceModel\Post as PostResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}
