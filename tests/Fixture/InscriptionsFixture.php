<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InscriptionsFixture
 *
 */
class InscriptionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'anneescolaire_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'classroom_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'eleve_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'montant' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'mensualite' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'social' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_association10' => ['type' => 'index', 'columns' => ['anneescolaire_id'], 'length' => []],
            'fk_association7' => ['type' => 'index', 'columns' => ['eleve_id'], 'length' => []],
            'fk_association8' => ['type' => 'index', 'columns' => ['classroom_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_association10' => ['type' => 'foreign', 'columns' => ['anneescolaire_id'], 'references' => ['anneescolaires', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association7' => ['type' => 'foreign', 'columns' => ['eleve_id'], 'references' => ['eleves', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association8' => ['type' => 'foreign', 'columns' => ['classroom_id'], 'references' => ['classrooms', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'anneescolaire_id' => 1,
            'classroom_id' => 1,
            'eleve_id' => 1,
            'date' => '2018-01-06 18:04:21',
            'montant' => 1,
            'mensualite' => 1,
            'social' => 1
        ],
    ];
}
