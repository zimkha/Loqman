<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Salles Model
 *
 * @property \Cake\ORM\Association\HasMany $Cours
 *
 * @method \App\Model\Entity\Salle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Salle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Salle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Salle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Salle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Salle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Salle findOrCreate($search, callable $callback = null, $options = [])
 */
class SallesTable extends Table
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

        $this->table('salles');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Cours', [
            'foreignKey' => 'salle_id'
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
            ->integer('nombreplace')
            ->requirePresence('nombreplace', 'create')
            ->notEmpty('nombreplace');

        return $validator;
    }
}
