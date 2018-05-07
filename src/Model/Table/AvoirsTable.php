<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Avoirs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Classrooms
 * @property \Cake\ORM\Association\BelongsTo $Matieres
 *
 * @method \App\Model\Entity\Avoir get($primaryKey, $options = [])
 * @method \App\Model\Entity\Avoir newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Avoir[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Avoir|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Avoir patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Avoir[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Avoir findOrCreate($search, callable $callback = null, $options = [])
 */
class AvoirsTable extends Table
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

        $this->table('avoirs');
        $this->displayField('classroom_id');
        $this->primaryKey(['classroom_id', 'matiere_id']);

        $this->belongsTo('Classrooms', [
            'foreignKey' => 'classroom_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Matieres', [
            'foreignKey' => 'matiere_id',
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
            ->integer('coeff')
            ->requirePresence('coeff', 'create')
            ->notEmpty('coeff');

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
        $rules->add($rules->existsIn(['classroom_id'], 'Classrooms'));
        $rules->add($rules->existsIn(['matiere_id'], 'Matieres'));

        return $rules;
    }
}
