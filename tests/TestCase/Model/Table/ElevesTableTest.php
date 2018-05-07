<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ElevesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ElevesTable Test Case
 */
class ElevesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ElevesTable
     */
    public $Eleves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.eleves'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Eleves') ? [] : ['className' => 'App\Model\Table\ElevesTable'];
        $this->Eleves = TableRegistry::get('Eleves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Eleves);

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
