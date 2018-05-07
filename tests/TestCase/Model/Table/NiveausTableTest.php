<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NiveausTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NiveausTable Test Case
 */
class NiveausTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NiveausTable
     */
    public $Niveaus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.niveaus',
        'app.classrooms',
        'app.series',
        'app.avoirs',
        'app.matieres',
        'app.cours',
        'app.salles',
        'app.professeurs',
        'app.anneescolaires',
        'app.enseigners',
        'app.inscriptions',
        'app.eleves',
        'app.paiements',
        'app.semestres',
        'app.evaluations',
        'app.noters',
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
        $config = TableRegistry::exists('Niveaus') ? [] : ['className' => 'App\Model\Table\NiveausTable'];
        $this->Niveaus = TableRegistry::get('Niveaus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Niveaus);

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
