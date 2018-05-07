<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursFixture
 *
 */
class CoursFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'salle_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'professeur_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'anneescolaire_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'classroom_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'matiere_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'jour' => ['type' => 'string', 'length' => 254, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'heuredebut' => ['type' => 'string', 'length' => 254, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'heurefin' => ['type' => 'string', 'length' => 254, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_association15' => ['type' => 'index', 'columns' => ['professeur_id'], 'length' => []],
            'fk_association18' => ['type' => 'index', 'columns' => ['anneescolaire_id'], 'length' => []],
            'fk_association3' => ['type' => 'index', 'columns' => ['matiere_id'], 'length' => []],
            'fk_association4' => ['type' => 'index', 'columns' => ['classroom_id'], 'length' => []],
            'fk_association5' => ['type' => 'index', 'columns' => ['salle_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_association15' => ['type' => 'foreign', 'columns' => ['professeur_id'], 'references' => ['professeurs', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association18' => ['type' => 'foreign', 'columns' => ['anneescolaire_id'], 'references' => ['anneescolaires', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association3' => ['type' => 'foreign', 'columns' => ['matiere_id'], 'references' => ['matieres', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association4' => ['type' => 'foreign', 'columns' => ['classroom_id'], 'references' => ['classrooms', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association5' => ['type' => 'foreign', 'columns' => ['salle_id'], 'references' => ['salles', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'salle_id' => 1,
            'professeur_id' => 1,
            'anneescolaire_id' => 1,
            'classroom_id' => 1,
            'matiere_id' => 1,
            'jour' => 'Lorem ipsum dolor sit amet',
            'heuredebut' => 'Lorem ipsum dolor sit amet',
            'heurefin' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
