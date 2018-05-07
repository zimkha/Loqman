<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParticiperevaluationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParticiperevaluationsTable Test Case
 */
class ParticiperevaluationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ParticiperevaluationsTable
     */
    public $Participerevaluations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.participerevaluations',
        'app.evaluations',
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
        'app.paiements',
        'app.typeevaluations',
        'app.noters',
        'app.classes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Participerevaluations') ? [] : ['className' => 'App\Model\Table\ParticiperevaluationsTable'];
        $this->Participerevaluations = TableRegistry::get('Participerevaluations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Participerevaluations);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
