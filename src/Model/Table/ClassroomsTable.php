<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classrooms Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Series
 * @property \Cake\ORM\Association\BelongsTo $Niveaus
 * @property \Cake\ORM\Association\HasMany $Avoirs
 * @property \Cake\ORM\Association\HasMany $Cours
 * @property \Cake\ORM\Association\HasMany $Inscriptions
 *
 * @method \App\Model\Entity\Classroom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classroom newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Classroom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classroom|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classroom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classroom[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classroom findOrCreate($search, callable $callback = null, $options = [])
 */
class ClassroomsTable extends Table
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

        $this->table('classrooms');
        $this->displayField('code');
        $this->primaryKey('id');

        $this->belongsTo('Series', [
            'foreignKey' => 'serie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Niveaus', [
            'foreignKey' => 'niveau_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Avoirs', [
            'foreignKey' => 'classroom_id'
        ]);
        $this->hasMany('Cours', [
            'foreignKey' => 'classroom_id'
        ]);
        $this->hasMany('Inscriptions', [
            'foreignKey' => 'classroom_id'
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

        $validator
            ->numeric('inscription')
            ->requirePresence('inscription', 'create')
            ->notEmpty('inscription');

        $validator
            ->numeric('mensualite')
            ->requirePresence('mensualite', 'create')
            ->notEmpty('mensualite');

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
        $rules->add($rules->existsIn(['serie_id'], 'Series'));
        $rules->add($rules->existsIn(['niveau_id'], 'Niveaus'));

        return $rules;
    }
}
