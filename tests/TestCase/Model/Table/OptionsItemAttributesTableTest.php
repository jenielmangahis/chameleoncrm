<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OptionsItemAttributesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OptionsItemAttributesTable Test Case
 */
class OptionsItemAttributesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OptionsItemAttributesTable
     */
    public $OptionsItemAttributes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.options_item_attributes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OptionsItemAttributes') ? [] : ['className' => 'App\Model\Table\OptionsItemAttributesTable'];
        $this->OptionsItemAttributes = TableRegistry::get('OptionsItemAttributes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OptionsItemAttributes);

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
     * Test optionAttributeValues method
     *
     * @return void
     */
    public function testOptionAttributeValues()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
