<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Classroom Entity
 *
 * @property int $id
 * @property int $serie_id
 * @property int $niveau_id
 * @property string $code
 * @property string $libelle
 * @property float $inscription
 * @property float $mensualite
 *
 * @property \App\Model\Entity\Series $series
 * @property \App\Model\Entity\Niveau $niveau
 * @property \App\Model\Entity\Avoir[] $avoirs
 * @property \App\Model\Entity\Cour[] $cours
 * @property \App\Model\Entity\Inscription[] $inscriptions
 */
class Classroom extends Entity
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
