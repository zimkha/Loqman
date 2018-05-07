<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participerevaluations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Evaluations
 * @property \Cake\ORM\Association\BelongsTo $Classrooms
 *
 * @method \App\Model\Entity\Participerevaluation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Participerevaluation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Participerevaluation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Participerevaluation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participerevaluation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Participerevaluation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Participerevaluation findOrCreate($search, callable $callback = null, $options = [])
 */
class ParticiperevaluationsTable extends Table
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

        $this->table('participerevaluations');
        $this->displayField('evaluation_id');
        $this->primaryKey(['evaluation_id', 'classe_id']);

        $this->belongsTo('Evaluations', [
            'foreignKey' => 'evaluation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Classrooms', [
            'foreignKey' => 'classe_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['evaluation_id'], 'Evaluations'));
        $rules->add($rules->existsIn(['classe_id'], 'Classrooms'));

        return $rules;
    }
}
