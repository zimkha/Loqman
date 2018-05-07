<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Anneescolaires Model
 *
 * @property \Cake\ORM\Association\HasMany $Cours
 * @property \Cake\ORM\Association\HasMany $Enseigners
 * @property \Cake\ORM\Association\HasMany $Inscriptions
 * @property \Cake\ORM\Association\HasMany $Paiements
 * @property \Cake\ORM\Association\HasMany $Semestres
 *
 * @method \App\Model\Entity\Anneescolaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\Anneescolaire newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Anneescolaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Anneescolaire|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Anneescolaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Anneescolaire[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Anneescolaire findOrCreate($search, callable $callback = null, $options = [])
 */
class AnneescolairesTable extends Table
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

        $this->table('anneescolaires');
        $this->displayField('code');
        $this->primaryKey('id');

        $this->hasMany('Cours', [
            'foreignKey' => 'anneescolaire_id'
        ]);
        $this->hasMany('Enseigners', [
            'foreignKey' => 'anneescolaire_id'
        ]);
        $this->hasMany('Inscriptions', [
            'foreignKey' => 'anneescolaire_id'
        ]);
        $this->hasMany('Paiements', [
            'foreignKey' => 'anneescolaire_id'
        ]);
        $this->hasMany('Semestres', [
            'foreignKey' => 'anneescolaire_id'
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
            ->dateTime('datedebut')
            ->requirePresence('datedebut', 'create')
            ->notEmpty('datedebut');

        $validator
            ->boolean('statut')
            ->requirePresence('statut', 'create')
            ->notEmpty('statut');

        return $validator;
    }
}
