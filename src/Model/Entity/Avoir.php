<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Avoir Entity
 *
 * @property int $classroom_id
 * @property int $matiere_id
 * @property int $coeff
 *
 * @property \App\Model\Entity\Classroom $classroom
 * @property \App\Model\Entity\Matiere $matiere
 */
class Avoir extends Entity
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
        'classroom_id' => false,
        'matiere_id' => false
    ];
}
