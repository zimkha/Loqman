<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inscriptions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Anneescolaires
 * @property \Cake\ORM\Association\BelongsTo $Classrooms
 * @property \Cake\ORM\Association\BelongsTo $Eleves
 *
 * @method \App\Model\Entity\Inscription get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inscription newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inscription[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inscription|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inscription patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inscription[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inscription findOrCreate($search, callable $callback = null, $options = [])
 */
class InscriptionsTable extends Table
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

        $this->table('inscriptions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Anneescolaires', [
            'foreignKey' => 'anneescolaire_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Classrooms', [
            'foreignKey' => 'classroom_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Eleves', [
            'foreignKey' => 'eleve_id',
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
            ->numeric('montant')
            ->requirePresence('montant', 'create')
            ->notEmpty('montant');

        $validator
            ->numeric('mensualite')
            ->requirePresence('mensualite', 'create')
            ->notEmpty('mensualite');

        $validator
            ->boolean('social')
            ->requirePresence('social', 'create')
            ->notEmpty('social');

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
        $rules->add($rules->existsIn(['anneescolaire_id'], 'Anneescolaires'));
        $rules->add($rules->existsIn(['classroom_id'], 'Classrooms'));
        $rules->add($rules->existsIn(['eleve_id'], 'Eleves'));

        return $rules;
    }
}
