<?php


namespace Rahi\Test\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class RecurringData implements InstallDataInterface
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
            ['content' => 'The script run at'.date('Y-m-d H:i:s')]
        );

        $setup->endSetup();
    }
}
