<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Anneescolaire Entity
 *
 * @property int $id
 * @property string $code
 * @property \Cake\I18n\Time $datedebut
 * @property bool $statut
 *
 * @property \App\Model\Entity\Cour[] $cours
 * @property \App\Model\Entity\Enseigner[] $enseigners
 * @property \App\Model\Entity\Inscription[] $inscriptions
 * @property \App\Model\Entity\Paiement[] $paiements
 * @property \App\Model\Entity\Semestre[] $semestres
 */
class Anneescolaire extends Entity
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
