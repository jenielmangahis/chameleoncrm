<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RentalChargesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RentalChargesTable Test Case
 */
class RentalChargesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RentalChargesTable
     */
    public $RentalCharges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rental_charges',
        'app.providers',
        'app.warehouse_incoming_orders',
        'app.warehouse',
        'app.warehouse_outgoing_orders',
        'app.companies',
        'app.inventories',
        'app.warehouse_inventories',
        'app.warehouses',
        'app.warehouse_outgoing_order_items',
        'app.warehouse_incoming_order_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RentalCharges') ? [] : ['className' => 'App\Model\Table\RentalChargesTable'];
        $this->RentalCharges = TableRegistry::get('RentalCharges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RentalCharges);

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
