<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enseigners Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Anneescolaires
 * @property \Cake\ORM\Association\BelongsTo $Professeurs
 * @property \Cake\ORM\Association\BelongsTo $Matieres
 *
 * @method \App\Model\Entity\Enseigner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Enseigner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Enseigner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Enseigner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enseigner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Enseigner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Enseigner findOrCreate($search, callable $callback = null, $options = [])
 */
class EnseignersTable extends Table
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

        $this->table('enseigners');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Anneescolaires', [
            'foreignKey' => 'anneescolaire_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Professeurs', [
            'foreignKey' => 'professeur_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['professeur_id'], 'Professeurs'));
        $rules->add($rules->existsIn(['matiere_id'], 'Matieres'));

        return $rules;
    }
}
