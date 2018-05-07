<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Participerevaluations Controller
 *
 * @property \App\Model\Table\ParticiperevaluationsTable $Participerevaluations
 */
class ParticiperevaluationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Evaluations', 'Classes']
        ];
        $participerevaluations = $this->paginate($this->Participerevaluations);

        $this->set(compact('participerevaluations'));
        $this->set('_serialize', ['participerevaluations']);
    }

    /**
     * View method
     *
     * @param string|null $id Participerevaluation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $participerevaluation = $this->Participerevaluations->get($id, [
            'contain' => ['Evaluations', 'Classes']
        ]);

        $this->set('participerevaluation', $participerevaluation);
        $this->set('_serialize', ['participerevaluation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participerevaluation = $this->Participerevaluations->newEntity();
        if ($this->request->is('post')) {
            $participerevaluation = $this->Participerevaluations->patchEntity($participerevaluation, $this->request->data);
            if ($this->Participerevaluations->save($participerevaluation)) {
                $this->Flash->success(__('The participerevaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participerevaluation could not be saved. Please, try again.'));
        }
        $evaluations = $this->Participerevaluations->Evaluations->find('list', ['limit' => 200]);
        $classes = $this->Participerevaluations->Classes->find('list', ['limit' => 200]);
        $this->set(compact('participerevaluation', 'evaluations', 'classes'));
        $this->set('_serialize', ['participerevaluation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Participerevaluation id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participerevaluation = $this->Participerevaluations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participerevaluation = $this->Participerevaluations->patchEntity($participerevaluation, $this->request->data);
            if ($this->Participerevaluations->save($participerevaluation)) {
                $this->Flash->success(__('The participerevaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participerevaluation could not be saved. Please, try again.'));
        }
        $evaluations = $this->Participerevaluations->Evaluations->find('list', ['limit' => 200]);
        $classes = $this->Participerevaluations->Classes->find('list', ['limit' => 200]);
        $this->set(compact('participerevaluation', 'evaluations', 'classes'));
        $this->set('_serialize', ['participerevaluation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Participerevaluation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participerevaluation = $this->Participerevaluations->get($id);
        if ($this->Participerevaluations->delete($participerevaluation)) {
            $this->Flash->success(__('The participerevaluation has been deleted.'));
        } else {
            $this->Flash->error(__('The participerevaluation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
