<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Professeurs Model
 *
 * @property \Cake\ORM\Association\HasMany $Cours
 * @property \Cake\ORM\Association\HasMany $Enseigners
 *
 * @method \App\Model\Entity\Professeur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Professeur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Professeur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Professeur|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Professeur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Professeur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Professeur findOrCreate($search, callable $callback = null, $options = [])
 */
class ProfesseursTable extends Table
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

        $this->table('professeurs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Cours', [
            'foreignKey' => 'professeur_id'
        ]);
        $this->hasMany('Enseigners', [
            'foreignKey' => 'professeur_id'
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
            ->requirePresence('matricule', 'create')
            ->notEmpty('matricule');

        $validator
            ->requirePresence('nom', 'create')
            ->notEmpty('nom');

        $validator
            ->requirePresence('prenom', 'create')
            ->notEmpty('prenom');

        $validator
            ->requirePresence('adresse', 'create')
            ->notEmpty('adresse');

        $validator
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
