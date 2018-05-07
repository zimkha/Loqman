<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evaluation Entity
 *
 * @property int $id
 * @property int $semestre_id
 * @property int $matiere_id
 * @property string $code
 * @property \Cake\I18n\Time $date
 * @property string $heuredebut
 * @property string $heurefin
 * @property bool $statut
 * @property int $typeevaluation_id
 *
 * @property \App\Model\Entity\Semestre $semestre
 * @property \App\Model\Entity\Matiere $matiere
 * @property \App\Model\Entity\Typeevaluation $typeevaluation
 * @property \App\Model\Entity\Classroom $classroom
 * @property \App\Model\Entity\Noter[] $noters
 * @property \App\Model\Entity\Participerevaluation[] $participerevaluations
 */
class Evaluation extends Entity
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
