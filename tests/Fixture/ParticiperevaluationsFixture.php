<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ParticiperevaluationsFixture
 *
 */
class ParticiperevaluationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'evaluation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'classe_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'classe_id' => ['type' => 'index', 'columns' => ['classe_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['evaluation_id', 'classe_id'], 'length' => []],
            'participerevaluations_ibfk_1' => ['type' => 'foreign', 'columns' => ['evaluation_id'], 'references' => ['evaluations', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'participerevaluations_ibfk_2' => ['type' => 'foreign', 'columns' => ['classe_id'], 'references' => ['classrooms', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'evaluation_id' => 1,
            'classe_id' => 1
        ],
    ];
}
