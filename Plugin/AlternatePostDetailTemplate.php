<?php

declare(strict_types=1);

namespace YellowCard\Blog\Plugin;

use Magento\Framework\App\RequestInterface;
use YellowCard\Blog\Controller\Post\Detail;

class AlternatePostDetailTemplate
{
    public function __construct(
        private readonly RequestInterface $request
    )
    {
    }


    public function afterExecute(Detail $subject, $result)
    {
        if ($this->request->getParam('alternate'))
        {
            $result
                ->getLayout()
                ->getBlock('blog.post.detail')
                ->setTemplate('YellowCard_Blog::post/alternateDetails.phtml');
        }

        return $result;
    }
}
