<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Evaluations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Semestres
 * @property \Cake\ORM\Association\BelongsTo $Matieres
 * @property \Cake\ORM\Association\BelongsTo $Typeevaluations
 * @property \Cake\ORM\Association\HasMany $Noters
 * @property \Cake\ORM\Association\HasMany $Participerevaluations
 *
 * @method \App\Model\Entity\Evaluation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Evaluation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Evaluation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evaluation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evaluation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Evaluation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evaluation findOrCreate($search, callable $callback = null, $options = [])
 */
class EvaluationsTable extends Table
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

        $this->table('evaluations');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Semestres', [
            'foreignKey' => 'semestre_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Matieres', [
            'foreignKey' => 'matiere_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Typeevaluations', [
            'foreignKey' => 'typeevaluation_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Noters', [
            'foreignKey' => 'evaluation_id'
        ]);
        $this->hasMany('Participerevaluations', [
            'foreignKey' => 'evaluation_id'
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
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->requirePresence('heuredebut', 'create')
            ->notEmpty('heuredebut');

        $validator
            ->requirePresence('heurefin', 'create')
            ->notEmpty('heurefin');

        $validator
            ->boolean('statut')
            ->requirePresence('statut', 'create')
            ->notEmpty('statut');

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
        $rules->add($rules->existsIn(['semestre_id'], 'Semestres'));
        $rules->add($rules->existsIn(['matiere_id'], 'Matieres'));
        $rules->add($rules->existsIn(['typeevaluation_id'], 'Typeevaluations'));

        return $rules;
    }
}
