<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DependantTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DependantTable Test Case
 */
class DependantTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DependantTable
     */
    public $Dependant;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dependant',
        'app.holders',
        'app.address',
        'app.payment_due',
        'app.phones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dependant') ? [] : ['className' => 'App\Model\Table\DependantTable'];
        $this->Dependant = TableRegistry::get('Dependant', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dependant);

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
