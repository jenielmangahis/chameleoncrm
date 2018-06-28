<?php
namespace App\Test\TestCase\Controller;

use App\Controller\WarehouseOutgoingOrdersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\WarehouseOutgoingOrdersController Test Case
 */
class WarehouseOutgoingOrdersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse_outgoing_orders',
        'app.providers',
        'app.warehouse_incoming_orders',
        'app.warehouse',
        'app.companies',
        'app.inventories',
        'app.warehouse_incoming_order_items',
        'app.warehouse_outgoing_order_items',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.provider_users',
        'app.company_users'
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
