<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OptionsMuomTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OptionsMuomTable Test Case
 */
class OptionsMuomTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OptionsMuomTable
     */
    public $OptionsMuom;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.options_muom'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OptionsMuom') ? [] : ['className' => 'App\Model\Table\OptionsMuomTable'];
        $this->OptionsMuom = TableRegistry::get('OptionsMuom', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OptionsMuom);

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
