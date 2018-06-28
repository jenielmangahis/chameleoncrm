<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyInvoicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyInvoicesTable Test Case
 */
class CompanyInvoicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyInvoicesTable
     */
    public $CompanyInvoices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.company_invoices',
        'app.companies',
        'app.items',
        'app.options_muom',
        'app.warehouse_incoming_order_items',
        'app.warehouse_incoming_orders',
        'app.providers',
        'app.warehouse_outgoing_orders',
        'app.warehouse',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.provider_users',
        'app.company_users',
        'app.warehouse_facilities',
        'app.options_warehouse_facilities',
        'app.warehouse_item_types',
        'app.options_warehouse_item_types',
        'app.warehouse_inventories',
        'app.warehouse_outgoing_order_items',
        'app.warehouse_outgoing_order_transportation',
        'app.provider_charges',
        'app.warehouse_incoming_order_transportation',
        'app.item_attributes',
        'app.options_item_attributes',
        'app.delsnap_charges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CompanyInvoices') ? [] : ['className' => 'App\Model\Table\CompanyInvoicesTable'];
        $this->CompanyInvoices = TableRegistry::get('CompanyInvoices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompanyInvoices);

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
