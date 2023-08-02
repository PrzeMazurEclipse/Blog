<?php

declare(strict_types=1);

namespace YellowCard\Blog\Plugin;

use Magento\Framework\Event\Observer;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;
use YellowCard\Blog\Observer\LogPostDetailView;
class AddDataToPostDetailObserver
{
    public function __construct(
        private readonly TimezoneInterface $timezone
    )
    {
    }

    public function beforeExecute(
        LogPostDetailView $subject,
        Observer $observer
    )
    {
        $request = $observer->getData('request');
        $request->setParam('datetime', $this->timezone->date());

        return [$observer];
    }
}
