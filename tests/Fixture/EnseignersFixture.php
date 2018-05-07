<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnseignersFixture
 *
 */
class EnseignersFixture extends TestFixture
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
        'professeur_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'matiere_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_association16' => ['type' => 'index', 'columns' => ['professeur_id'], 'length' => []],
            'fk_association24' => ['type' => 'index', 'columns' => ['matiere_id'], 'length' => []],
            'fk_association25' => ['type' => 'index', 'columns' => ['anneescolaire_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_association16' => ['type' => 'foreign', 'columns' => ['professeur_id'], 'references' => ['professeurs', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association24' => ['type' => 'foreign', 'columns' => ['matiere_id'], 'references' => ['matieres', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_association25' => ['type' => 'foreign', 'columns' => ['anneescolaire_id'], 'references' => ['anneescolaires', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'professeur_id' => 1,
            'matiere_id' => 1
        ],
    ];
}
