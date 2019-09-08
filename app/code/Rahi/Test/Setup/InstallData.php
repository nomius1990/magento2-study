<?php


namespace Rahi\Test\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {

        $setup->startSetup();
        // insert default customer groups
        $setup->getConnection()->insertForce(
            $setup->getTable('test_module'),
            ['content' => 'I am content']
        );

        $setup->endSetup();
    }
}
