<?php
namespace App\Test\TestCase\Controller;

use App\Controller\MatieresController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\MatieresController Test Case
 */
class MatieresControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.matieres',
        'app.avoirs',
        'app.classrooms',
        'app.series',
        'app.niveaus',
        'app.cours',
        'app.salles',
        'app.professeurs',
        'app.enseigners',
        'app.anneescolaires',
        'app.inscriptions',
        'app.eleves',
        'app.paiements',
        'app.semestres',
        'app.evaluations',
        'app.noters',
        'app.participerevaluations',
        'app.classes'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
