<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursTable Test Case
 */
class CoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursTable
     */
    public $Cours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cours',
        'app.salles',
        'app.professeurs',
        'app.anneescolaires',
        'app.enseigners',
        'app.inscriptions',
        'app.paiements',
        'app.semestres',
        'app.classrooms',
        'app.series',
        'app.niveaus',
        'app.avoirs',
        'app.matieres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cours') ? [] : ['className' => 'App\Model\Table\CoursTable'];
        $this->Cours = TableRegistry::get('Cours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cours);

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
