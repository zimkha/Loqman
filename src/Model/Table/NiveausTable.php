<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Niveaus Model
 *
 * @property \Cake\ORM\Association\HasMany $Classrooms
 *
 * @method \App\Model\Entity\Niveau get($primaryKey, $options = [])
 * @method \App\Model\Entity\Niveau newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Niveau[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Niveau|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Niveau patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Niveau[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Niveau findOrCreate($search, callable $callback = null, $options = [])
 */
class NiveausTable extends Table
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

        $this->table('niveaus');
        $this->displayField('code');
        $this->primaryKey('id');

        $this->hasMany('Classrooms', [
            'foreignKey' => 'niveau_id'
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
