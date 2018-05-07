<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeevaluationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeevaluationTable Test Case
 */
class TypeevaluationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeevaluationTable
     */
    public $Typeevaluation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typeevaluation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typeevaluation') ? [] : ['className' => 'App\Model\Table\TypeevaluationTable'];
        $this->Typeevaluation = TableRegistry::get('Typeevaluation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typeevaluation);

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
