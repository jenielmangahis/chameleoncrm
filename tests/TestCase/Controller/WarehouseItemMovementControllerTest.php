<?php
namespace App\Test\TestCase\Controller;

use App\Controller\WarehouseItemMovementController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\WarehouseItemMovementController Test Case
 */
class WarehouseItemMovementControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse_item_movement',
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
