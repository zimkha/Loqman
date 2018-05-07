<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Professeur Entity
 *
 * @property int $id
 * @property string $matricule
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 * @property string $telephone
 * @property string $email
 *
 * @property \App\Model\Entity\Cour[] $cours
 * @property \App\Model\Entity\Enseigner[] $enseigners
 */
class Professeur extends Entity
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
