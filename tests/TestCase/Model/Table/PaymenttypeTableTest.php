<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymenttypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymenttypeTable Test Case
 */
class PaymenttypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymenttypeTable
     */
    public $Paymenttype;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paymenttype'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Paymenttype') ? [] : ['className' => 'App\Model\Table\PaymenttypeTable'];
        $this->Paymenttype = TableRegistry::get('Paymenttype', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paymenttype);

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
