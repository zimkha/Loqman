<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matieres Model
 *
 * @property \Cake\ORM\Association\HasMany $Avoirs
 * @property \Cake\ORM\Association\HasMany $Cours
 * @property \Cake\ORM\Association\HasMany $Enseigners
 * @property \Cake\ORM\Association\HasMany $Evaluations
 *
 * @method \App\Model\Entity\Matiere get($primaryKey, $options = [])
 * @method \App\Model\Entity\Matiere newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Matiere[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Matiere|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matiere patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Matiere[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Matiere findOrCreate($search, callable $callback = null, $options = [])
 */
class MatieresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('matieres');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Avoirs', [
            'foreignKey' => 'matiere_id'
        ]);
        $this->hasMany('Cours', [
            'foreignKey' => 'matiere_id'
        ]);
        $this->hasMany('Enseigners', [
            'foreignKey' => 'matiere_id'
        ]);
        $this->hasMany('Evaluations', [
            'foreignKey' => 'matiere_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->requirePresence('libelle', 'create')
            ->notEmpty('libelle');

        return $validator;
    }
}
