<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Cake\Collection\Collection;

/**
 * Classrooms Controller
 *
 * @property \App\Model\Table\ClassroomsTable $Classrooms
 */
class ClassroomsController extends AppController
{
    public function findeleves () {
        
        $this->loadComponent('Auth');
        $an = $this->Auth->user()->annee;
        $q = $this->request->params;
        $inscrits = [];

        $classe = $this->loadModel('Classrooms')->get($q['id']);
        $inscritscetteannee = $this->loadModel('Inscriptions')->find()->contain(['Eleves'])
                              ->where(['anneescolaire_id' => $an->id, 'classroom_id' => $classe->id]);
        $inscrits = (new Collection($inscritscetteannee->toArray()))->extract('eleve_id')->toArray();
        if(!empty($inscrits)) {
            $inscriptions = $this->loadModel('Inscriptions')->find()->contain(['Eleves'])
                            ->where(['anneescolaire_id' => $q['annee'], 'classroom_id' => $classe->id, 'Eleves.id NOT IN' => $inscrits]);
        }
        else {
            $inscriptions = $this->loadModel('Inscriptions')->find()->contain(['Eleves'])->where(['anneescolaire_id' => $q['annee'], 'classroom_id' => $classe->id]);
        }

        $this->set(compact('classe', 'inscriptions'));
        $this->set('_serialize', ['classe', 'inscriptions']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($niveau = null)
    {
        $this->paginate = [
            'contain' => ['Series', 'Niveaus'],
            'conditions' => $niveau ? ['niveau_id' => $niveau] : []
        ];
        $classes = $this->paginate($this->Classrooms);

        $this->set(compact('classes'));
        $this->set('_serialize', ['classes']);
    }

    /**
     * View method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classroom = $this->Classrooms->get($id, [
            'contain' => ['Series', 'Niveaus', 'Avoirs', 'Cours', 'Inscriptions']
        ]);

        $this->set('classroom', $classroom);
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classroom = $this->Classrooms->newEntity();
        if ($this->request->is('post')) {
            $classroom = $this->Classrooms->patchEntity($classroom, $this->request->data);
            if ($this->Classrooms->save($classroom)) {
                $this->Flash->success(__('The classroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classroom could not be saved. Please, try again.'));
        }
        $series = $this->Classrooms->Series->find('list', ['limit' => 200]);
        $niveaus = $this->Classrooms->Niveaus->find('list', ['limit' => 200]);
        $this->set(compact('classroom', 'series', 'niveaus'));
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classroom = $this->Classrooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classroom = $this->Classrooms->patchEntity($classroom, $this->request->data);
            if ($this->Classrooms->save($classroom)) {
                $this->Flash->success(__('The classroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classroom could not be saved. Please, try again.'));
        }
        $series = $this->Classrooms->Series->find('list', ['limit' => 200]);
        $niveaus = $this->Classrooms->Niveaus->find('list', ['limit' => 200]);
        $this->set(compact('classroom', 'series', 'niveaus'));
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classroom = $this->Classrooms->get($id);
        if ($this->Classrooms->delete($classroom)) {
            $this->Flash->success(__('The classroom has been deleted.'));
        } else {
            $this->Flash->error(__('The classroom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function afficehrEleve($code=null){

    }
}
