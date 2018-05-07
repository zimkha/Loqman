<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Participerevaluation Entity
 *
 * @property int $evaluation_id
 * @property int $classe_id
 *
 * @property \App\Model\Entity\Evaluation $evaluation
 * @property \App\Model\Entity\Class $class
 */
class Participerevaluation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'evaluation_id' => false,
        'classe_id' => false
    ];
}
