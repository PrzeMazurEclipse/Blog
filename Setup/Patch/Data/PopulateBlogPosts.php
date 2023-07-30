<?php

declare(strict_types=1);

namespace YellowCard\Blog\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;
use YellowCard\Blog\Api\PostRepositoryInterface;
use YellowCard\Blog\Model\PostFactory;

class PopulateBlogPosts implements DataPatchInterface
{
    public function __construct(
        private ModuleDataSetupInterface $moduleDataSetup,
        private readonly PostFactory $postFactory,
        private readonly PostRepositoryInterface $postRepository
    ) {}

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $post = $this->postFactory->create();
        $post->setData([
            'title' => 'First Sample Post',
            'content' => 'Content of first sample post'
        ]);
        $this->postRepository->save($post);

        $this->moduleDataSetup->endSetup();
    }
}
