<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EnseignersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EnseignersController Test Case
 */
class EnseignersControllerTest extends IntegrationTestCase
{

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
        'app.evaluations',
        'app.semestres',
        'app.noters',
        'app.eleves',
        'app.participerevaluations',
        'app.classes',
        'app.inscriptions',
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
