<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnneescolairesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnneescolairesTable Test Case
 */
class AnneescolairesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnneescolairesTable
     */
    public $Anneescolaires;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.anneescolaires',
        'app.cours',
        'app.enseigners',
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
        $config = TableRegistry::exists('Anneescolaires') ? [] : ['className' => 'App\Model\Table\AnneescolairesTable'];
        $this->Anneescolaires = TableRegistry::get('Anneescolaires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Anneescolaires);

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
