<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paiements Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Eleves
 * @property \Cake\ORM\Association\BelongsTo $Anneescolaires
 *
 * @method \App\Model\Entity\Paiement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paiement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paiement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paiement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paiement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paiement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paiement findOrCreate($search, callable $callback = null, $options = [])
 */
class PaiementsTable extends Table
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

        $this->table('paiements');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Eleves', [
            'foreignKey' => 'eleve_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Anneescolaires', [
            'foreignKey' => 'anneescolaire_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->integer('mois')
            ->requirePresence('mois', 'create')
            ->notEmpty('mois');

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
        $rules->add($rules->existsIn(['anneescolaire_id'], 'Anneescolaires'));

        return $rules;
    }
}
