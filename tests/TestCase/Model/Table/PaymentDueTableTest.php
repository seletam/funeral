<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentDueTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentDueTable Test Case
 */
class PaymentDueTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentDueTable
     */
    public $PaymentDue;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payment_due'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PaymentDue') ? [] : ['className' => 'App\Model\Table\PaymentDueTable'];
        $this->PaymentDue = TableRegistry::get('PaymentDue', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PaymentDue);

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
