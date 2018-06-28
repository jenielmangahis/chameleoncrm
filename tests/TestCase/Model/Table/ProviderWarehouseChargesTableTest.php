<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProviderWarehouseChargesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProviderWarehouseChargesTable Test Case
 */
class ProviderWarehouseChargesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProviderWarehouseChargesTable
     */
    public $ProviderWarehouseCharges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.provider_warehouse_charges',
        'app.providers',
        'app.warehouse_incoming_orders',
        'app.warehouse',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.provider_users',
        'app.company_users',
        'app.companies',
        'app.inventories',
        'app.warehouse_inventories',
        'app.items',
        'app.options_muom',
        'app.warehouse_incoming_order_items',
        'app.warehouse_outgoing_order_items',
        'app.warehouse_outgoing_orders',
        'app.warehouse_outgoing_order_transportation',
        'app.item_attributes',
        'app.options_item_attributes',
        'app.warehouse_facilities',
        'app.options_warehouse_facilities',
        'app.warehouse_item_types',
        'app.options_warehouse_item_types',
        'app.warehouse_incoming_order_transportation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProviderWarehouseCharges') ? [] : ['className' => 'App\Model\Table\ProviderWarehouseChargesTable'];
        $this->ProviderWarehouseCharges = TableRegistry::get('ProviderWarehouseCharges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProviderWarehouseCharges);

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
