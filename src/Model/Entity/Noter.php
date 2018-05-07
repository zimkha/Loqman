<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Noter Entity
 *
 * @property int $eleve_id
 * @property int $evaluation_id
 * @property float $note
 *
 * @property \App\Model\Entity\Elef $elef
 * @property \App\Model\Entity\Evaluation $evaluation
 */
class Noter extends Entity
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
        'eleve_id' => false,
        'evaluation_id' => false
    ];
}
