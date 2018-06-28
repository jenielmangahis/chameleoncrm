<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WarehouseItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WarehouseItemsTable Test Case
 */
class WarehouseItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WarehouseItemsTable
     */
    public $WarehouseItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse_items',
        'app.warehouses',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.provider_users',
        'app.providers',
        'app.company_users',
        'app.companies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WarehouseItems') ? [] : ['className' => 'App\Model\Table\WarehouseItemsTable'];
        $this->WarehouseItems = TableRegistry::get('WarehouseItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WarehouseItems);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
