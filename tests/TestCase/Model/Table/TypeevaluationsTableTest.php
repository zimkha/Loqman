<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeevaluationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeevaluationsTable Test Case
 */
class TypeevaluationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeevaluationsTable
     */
    public $Typeevaluations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typeevaluations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typeevaluations') ? [] : ['className' => 'App\Model\Table\TypeevaluationsTable'];
        $this->Typeevaluations = TableRegistry::get('Typeevaluations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typeevaluations);

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
