<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BankcardsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BankcardsTable Test Case
 */
class BankcardsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BankcardsTable
     */
    public $Bankcards;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bankcards',
        'app.payments',
        'app.holders',
        'app.additional',
        'app.address',
        'app.dependant',
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
        $config = TableRegistry::exists('Bankcards') ? [] : ['className' => 'App\Model\Table\BankcardsTable'];
        $this->Bankcards = TableRegistry::get('Bankcards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bankcards);

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
