<?php

declare(strict_types=1);

namespace YellowCard\Blog\Model\ResourceModel\Post;

use YellowCard\Blog\Model\Post;
use YellowCard\Blog\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResourceModel::class);
    }
}
