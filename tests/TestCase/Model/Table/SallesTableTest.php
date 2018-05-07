<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SallesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SallesTable Test Case
 */
class SallesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SallesTable
     */
    public $Salles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salles',
        'app.cours',
        'app.professeurs',
        'app.enseigners',
        'app.anneescolaires',
        'app.inscriptions',
        'app.classrooms',
        'app.series',
        'app.niveaus',
        'app.avoirs',
        'app.matieres',
        'app.evaluations',
        'app.semestres',
        'app.noters',
        'app.eleves',
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
        $config = TableRegistry::exists('Salles') ? [] : ['className' => 'App\Model\Table\SallesTable'];
        $this->Salles = TableRegistry::get('Salles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Salles);

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
