<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enseigner Entity
 *
 * @property int $id
 * @property int $anneescolaire_id
 * @property int $professeur_id
 * @property int $matiere_id
 *
 * @property \App\Model\Entity\Anneescolaire $anneescolaire
 * @property \App\Model\Entity\Professeur $professeur
 * @property \App\Model\Entity\Matiere $matiere
 */
class Enseigner extends Entity
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
