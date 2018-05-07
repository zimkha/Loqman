<?php
namespace App\Test\TestCase\Controller;

use App\Controller\InscriptionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\InscriptionsController Test Case
 */
class InscriptionsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inscriptions',
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
        'app.evaluations',
        'app.semestres',
        'app.noters',
        'app.eleves',
        'app.participerevaluations',
        'app.classes',
        'app.paiements'
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
