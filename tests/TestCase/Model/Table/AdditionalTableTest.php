<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdditionalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdditionalTable Test Case
 */
class AdditionalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdditionalTable
     */
    public $Additional;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.additional'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Additional') ? [] : ['className' => 'App\Model\Table\AdditionalTable'];
        $this->Additional = TableRegistry::get('Additional', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Additional);

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
