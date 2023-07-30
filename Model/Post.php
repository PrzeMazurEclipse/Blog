<?php

namespace Yellowcard\Blog\Model;

use Magento\Catalog\Model\AbstractModel;
use YellowCard\Blog\Api\Data\PostInterface;
use YellowCard\Blog\Model\ResourceModel\Post as PostResourceModel;

class Post extends AbstractModel implements PostInterface
{
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
    }

    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }
}
