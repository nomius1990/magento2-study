<?php


namespace Rahi\Test\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * {@inheritdoc}
     */
    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        //如果当前数据库中的版本小于 1.0.3  的话执行脚本
        if (version_compare($context->getVersion(), "1.0.3", "<")) {
            $setup->getTable('test_module');
            $setup->getConnection()->insert('test_module',['content'=>'the version is below 1.0.3']);

        }
        $setup->endSetup();
    }
}
