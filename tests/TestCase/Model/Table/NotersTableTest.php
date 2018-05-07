<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotersTable Test Case
 */
class NotersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotersTable
     */
    public $Noters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.noters',
        'app.eleves',
        'app.evaluations',
        'app.semestres',
        'app.matieres',
        'app.avoirs',
        'app.classrooms',
        'app.series',
        'app.niveaus',
        'app.cours',
        'app.salles',
        'app.professeurs',
        'app.anneescolaires',
        'app.enseigners',
        'app.inscriptions',
        'app.paiements',
        'app.participerevaluations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Noters') ? [] : ['className' => 'App\Model\Table\NotersTable'];
        $this->Noters = TableRegistry::get('Noters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Noters);

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
