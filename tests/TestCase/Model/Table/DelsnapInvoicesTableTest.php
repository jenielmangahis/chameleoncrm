<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DelsnapInvoicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DelsnapInvoicesTable Test Case
 */
class DelsnapInvoicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DelsnapInvoicesTable
     */
    public $DelsnapInvoices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.delsnap_invoices',
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
        'app.items',
        'app.options_muom',
        'app.warehouse_incoming_order_items',
        'app.warehouse_outgoing_order_items',
        'app.warehouse_outgoing_orders',
        'app.warehouse_outgoing_order_transportation',
        'app.warehouse_inventories',
        'app.item_attributes',
        'app.options_item_attributes',
        'app.delsnap_charges',
        'app.warehouse_facilities',
        'app.options_warehouse_facilities',
        'app.warehouse_item_types',
        'app.options_warehouse_item_types',
        'app.warehouse_incoming_order_transportation',
        'app.provider_charges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DelsnapInvoices') ? [] : ['className' => 'App\Model\Table\DelsnapInvoicesTable'];
        $this->DelsnapInvoices = TableRegistry::get('DelsnapInvoices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DelsnapInvoices);

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
