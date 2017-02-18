<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HoldersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HoldersTable Test Case
 */
class HoldersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HoldersTable
     */
    public $Holders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.holders',
        'app.additional',
        'app.address',
        'app.dependant',
        'app.payments',
        'app.bankcards',
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
        $config = TableRegistry::exists('Holders') ? [] : ['className' => 'App\Model\Table\HoldersTable'];
        $this->Holders = TableRegistry::get('Holders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Holders);

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
