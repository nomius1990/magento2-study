<?php


namespace Rahi\Test\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class Recurring implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
        $setup->getConnection()->insertForce('test_module',['content'=>'schema runing at'.date('Y-m-d H:i:s')]);
        $setup->endSetup();
    }
}
