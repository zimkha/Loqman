<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Matiere Entity
 *
 * @property int $id
 * @property string $code
 * @property string $libelle
 *
 * @property \App\Model\Entity\Avoir[] $avoirs
 * @property \App\Model\Entity\Cour[] $cours
 * @property \App\Model\Entity\Enseigner[] $enseigners
 * @property \App\Model\Entity\Evaluation[] $evaluations
 */
class Matiere extends Entity
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
        'id' => false
    ];
}
