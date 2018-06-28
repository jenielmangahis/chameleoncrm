<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OptionsWarehouseFacilitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OptionsWarehouseFacilitiesTable Test Case
 */
class OptionsWarehouseFacilitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OptionsWarehouseFacilitiesTable
     */
    public $OptionsWarehouseFacilities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.options_warehouse_facilities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OptionsWarehouseFacilities') ? [] : ['className' => 'App\Model\Table\OptionsWarehouseFacilitiesTable'];
        $this->OptionsWarehouseFacilities = TableRegistry::get('OptionsWarehouseFacilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OptionsWarehouseFacilities);

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
}
