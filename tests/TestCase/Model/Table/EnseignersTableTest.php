<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnseignersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnseignersTable Test Case
 */
class EnseignersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnseignersTable
     */
    public $Enseigners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.enseigners',
        'app.anneescolaires',
        'app.cours',
        'app.salles',
        'app.professeurs',
        'app.classrooms',
        'app.series',
        'app.niveaus',
        'app.avoirs',
        'app.matieres',
        'app.inscriptions',
        'app.paiements',
        'app.semestres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Enseigners') ? [] : ['className' => 'App\Model\Table\EnseignersTable'];
        $this->Enseigners = TableRegistry::get('Enseigners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Enseigners);

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
