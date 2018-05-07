<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inscription Entity
 *
 * @property int $id
 * @property int $anneescolaire_id
 * @property int $classroom_id
 * @property int $eleve_id
 * @property \Cake\I18n\Time $date
 * @property float $montant
 * @property float $mensualite
 * @property bool $social
 *
 * @property \App\Model\Entity\Anneescolaire $anneescolaire
 * @property \App\Model\Entity\Classroom $classroom
 * @property \App\Model\Entity\Elef $elef
 */
class Inscription extends Entity
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
