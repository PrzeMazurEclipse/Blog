<?php

namespace Yellowcard\Blog\Model;

use Magento\Catalog\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel/Post::class);
    }
}
