<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paiement Entity
 *
 * @property int $id
 * @property int $eleve_id
 * @property int $anneescolaire_id
 * @property \Cake\I18n\Time $date
 * @property string $code
 * @property int $mois
 *
 * @property \App\Model\Entity\Elef $elef
 * @property \App\Model\Entity\Anneescolaire $anneescolaire
 */
class Paiement extends Entity
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
