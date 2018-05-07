<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SemestresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SemestresTable Test Case
 */
class SemestresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SemestresTable
     */
    public $Semestres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.semestres',
        'app.anneescolaires',
        'app.cours',
        'app.salles',
        'app.professeurs',
        'app.enseigners',
        'app.matieres',
        'app.avoirs',
        'app.classrooms',
        'app.series',
        'app.niveaus',
        'app.inscriptions',
        'app.eleves',
        'app.evaluations',
        'app.noters',
        'app.participerevaluations',
        'app.classes',
        'app.paiements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Semestres') ? [] : ['className' => 'App\Model\Table\SemestresTable'];
        $this->Semestres = TableRegistry::get('Semestres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Semestres);

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
