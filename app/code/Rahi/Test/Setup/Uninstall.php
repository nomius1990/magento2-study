<?php


namespace Rahi\Test\Setup;

use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class Uninstall implements UninstallInterface
{

    //remove data 的时候和会执行
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->dropTable('test_module');
        $setup->endSetup();
    }

}
