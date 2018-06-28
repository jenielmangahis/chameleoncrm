<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ItemAttributesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ItemAttributesController Test Case
 */
class ItemAttributesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.item_attributes',
        'app.items',
        'app.companies',
        'app.inventories',
        'app.warehouse_inventories',
        'app.providers',
        'app.warehouse_incoming_orders',
        'app.warehouse',
        'app.warehouse_facilities',
        'app.options_warehouse_facilities',
        'app.warehouse_item_types',
        'app.options_warehouse_item_types',
        'app.warehouse_outgoing_orders',
        'app.warehouse_outgoing_order_items',
        'app.warehouse_incoming_order_items',
        'app.attributes'
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
