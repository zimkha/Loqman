<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use ArrayObject;
use Cake\Datasource\ConnectionManager;

/**
 * Eleves Model
 *
 * @method \App\Model\Entity\Elef get($primaryKey, $options = [])
 * @method \App\Model\Entity\Elef newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Elef[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Elef|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Elef patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Elef[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Elef findOrCreate($search, callable $callback = null, $options = [])
 */
class ElevesTable extends Table
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

        $this->table('eleves');
        $this->displayField('matricule');
        $this->primaryKey('id');
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
            ->date('datenaiss')
            ->requirePresence('datenaiss', 'create')
            ->notEmpty('datenaiss');

        $validator
            ->requirePresence('lieunaiss', 'create')
            ->notEmpty('lieunaiss');

        $validator
            ->integer('sexe')
            ->requirePresence('sexe', 'create')
            ->notEmpty('sexe');

        $validator
            ->requirePresence('adresse', 'create')
            ->notEmpty('adresse');

        $validator
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone');

        return $validator;
    }

    private function getAutoincrement() {
        $connection = ConnectionManager::get('default');
        $r = $connection->execute("SELECT auto_increment FROM information_schema.tables WHERE table_name='eleves' AND table_schema='luqman'")->fetch('assoc');
        return $r['auto_increment'];
    }

    private function generteMatricule ($eleve, $annee) {
        return sprintf('LS%s%sR%05d', $eleve['sexe'], substr($annee, 7), $this->getAutoincrement());
    }

    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options) {
        $data['matricule'] = $this->generteMatricule($data, $data['annee']);
    }
}
