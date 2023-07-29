<?php

declare(strict_types=1);

namespace YellowCard\Blog\Model\ResourceModel;

use Magento\Rule\Model\ResourceModel\AbstractResource;

class Post extends AbstractResource
{
    const MAIN_TABLE = 'yallowcard_blog_post';
    const ID_FIELD_NAME = 'id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
