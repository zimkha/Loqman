<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Noters Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Eleves
 * @property \Cake\ORM\Association\BelongsTo $Evaluations
 *
 * @method \App\Model\Entity\Noter get($primaryKey, $options = [])
 * @method \App\Model\Entity\Noter newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Noter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Noter|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Noter[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Noter findOrCreate($search, callable $callback = null, $options = [])
 */
class NotersTable extends Table
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

        $this->table('noters');
        $this->displayField('eleve_id');
        $this->primaryKey(['eleve_id', 'evaluation_id']);

        $this->belongsTo('Eleves', [
            'foreignKey' => 'eleve_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Evaluations', [
            'foreignKey' => 'evaluation_id',
            'joinType' => 'INNER'
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
            ->numeric('note')
            ->requirePresence('note', 'create')
            ->notEmpty('note');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['eleve_id'], 'Eleves'));
        $rules->add($rules->existsIn(['evaluation_id'], 'Evaluations'));

        return $rules;
    }
}
