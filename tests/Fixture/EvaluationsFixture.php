<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EvaluationsFixture
 *
 */
class EvaluationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'semestre_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'matiere_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'code' => ['type' => 'string', 'length' => 254, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'heuredebut' => ['type' => 'string', 'length' => 254, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'heurefin' => ['type' => 'string', 'length' => 254, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'statut' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'typeevaluation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_association11' => ['type' => 'index', 'columns' => ['semestre_id'], 'length' => []],
            'fk_association2' => ['type' => 'index', 'columns' => ['matiere_id'], 'length' => []],
            'typeevaluation_id' => ['type' => 'index', 'columns' => ['typeevaluation_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'evaluations_ibfk_1' => ['type' => 'foreign', 'columns' => ['typeevaluation_id'], 'references' => ['typeevaluations', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association11' => ['type' => 'foreign', 'columns' => ['semestre_id'], 'references' => ['semestres', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association2' => ['type' => 'foreign', 'columns' => ['matiere_id'], 'references' => ['matieres', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'semestre_id' => 1,
            'matiere_id' => 1,
            'code' => 'Lorem ipsum dolor sit amet',
            'date' => '2018-02-21 21:03:08',
            'heuredebut' => 'Lorem ipsum dolor sit amet',
            'heurefin' => 'Lorem ipsum dolor sit amet',
            'statut' => 1,
            'typeevaluation_id' => 1
        ],
    ];
}
