<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemAttributesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemAttributesTable Test Case
 */
class ItemAttributesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemAttributesTable
     */
    public $ItemAttributes;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ItemAttributes') ? [] : ['className' => 'App\Model\Table\ItemAttributesTable'];
        $this->ItemAttributes = TableRegistry::get('ItemAttributes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemAttributes);

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
