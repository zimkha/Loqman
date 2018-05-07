<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfesseursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfesseursTable Test Case
 */
class ProfesseursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfesseursTable
     */
    public $Professeurs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.professeurs',
        'app.cours',
        'app.salles',
        'app.anneescolaires',
        'app.enseigners',
        'app.matieres',
        'app.avoirs',
        'app.classrooms',
        'app.series',
        'app.niveaus',
        'app.inscriptions',
        'app.eleves',
        'app.evaluations',
        'app.semestres',
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
        $config = TableRegistry::exists('Professeurs') ? [] : ['className' => 'App\Model\Table\ProfesseursTable'];
        $this->Professeurs = TableRegistry::get('Professeurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Professeurs);

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
