<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evaluations Controller
 *
 * @property \App\Model\Table\EvaluationsTable $Evaluations
 */
class EvaluationsController extends AppController
{
    public function saveEvale(){
          $this->loadComponent('Auth');
           $q = $this->request->params;
           
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Semestres', 'Matieres', 'Typeevaluations', 'Classrooms']
        ];
        $evaluations = $this->paginate($this->Evaluations);

        $this->set(compact('evaluations'));
        $this->set('_serialize', ['evaluations']);
    }

    /**
     * View method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => ['Semestres', 'Matieres', 'Typeevaluations', 'Classrooms', 'Noters', 'Participerevaluations']
        ]);

        $this->set('evaluation', $evaluation);
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evaluation = $this->Evaluations->newEntity();
        if ($this->request->is('post')) {
            $evaluation = $this->Evaluations->patchEntity($evaluation, $this->request->data);
            if ($this->Evaluations->save($evaluation)) {
                $this->Flash->success(__('The evaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evaluation could not be saved. Please, try again.'));
        }
       $semestres = $this->Evaluations->Semestres->find('list', ['limit' => 200, 'valueField' => 'code']);
        $matieres = $this->Evaluations->Matieres->find('list', ['limit' => 200, 'valueField' => 'libelle']);
        $typeevaluations = $this->Evaluations->Typeevaluations->find('list', ['limit' => 200, 'valueField' => 'libelle']);
        $classrooms = $this->Evaluations->Classrooms->find('list', ['limit' => 200, 'valueField' => 'code']);
        $this->set(compact('evaluation', 'semestres', 'matieres', 'typeevaluations', 'classrooms'));
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evaluation = $this->Evaluations->patchEntity($evaluation, $this->request->data);
            if ($this->Evaluations->save($evaluation)) {
                $this->Flash->success(__('The evaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evaluation could not be saved. Please, try again.'));
        }
        $semestres = $this->Evaluations->Semestres->find('list', ['limit' => 200]);
        $matieres = $this->Evaluations->Matieres->find('list', ['limit' => 200]);
        $typeevaluations = $this->Evaluations->Typeevaluations->find('list', ['limit' => 200]);
        $classrooms = $this->Evaluations->Classrooms->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'semestres', 'matieres', 'typeevaluations', 'classrooms'));
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evaluation = $this->Evaluations->get($id);
        if ($this->Evaluations->delete($evaluation)) {
            $this->Flash->success(__('The evaluation has been deleted.'));
        } else {
            $this->Flash->error(__('The evaluation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
