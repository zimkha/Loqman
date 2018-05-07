<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cour Entity
 *
 * @property int $id
 * @property int $salle_id
 * @property int $professeur_id
 * @property int $anneescolaire_id
 * @property int $classroom_id
 * @property int $matiere_id
 * @property string $jour
 * @property string $heuredebut
 * @property string $heurefin
 *
 * @property \App\Model\Entity\Salle $salle
 * @property \App\Model\Entity\Professeur $professeur
 * @property \App\Model\Entity\Anneescolaire $anneescolaire
 * @property \App\Model\Entity\Classroom $classroom
 * @property \App\Model\Entity\Matiere $matiere
 */
class Cour extends Entity
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
