<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typeevaluation Controller
 *
 * @property \App\Model\Table\TypeevaluationTable $Typeevaluation
 */
class TypeevaluationController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $typeevaluation = $this->paginate($this->Typeevaluation);

        $this->set(compact('typeevaluation'));
        $this->set('_serialize', ['typeevaluation']);
    }

    /**
     * View method
     *
     * @param string|null $id Typeevaluation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeevaluation = $this->Typeevaluation->get($id, [
            'contain' => []
        ]);

        $this->set('typeevaluation', $typeevaluation);
        $this->set('_serialize', ['typeevaluation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeevaluation = $this->Typeevaluation->newEntity();
        if ($this->request->is('post')) {
            $typeevaluation = $this->Typeevaluation->patchEntity($typeevaluation, $this->request->data);
            if ($this->Typeevaluation->save($typeevaluation)) {
                $this->Flash->success(__('The typeevaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeevaluation could not be saved. Please, try again.'));
        }
        $this->set(compact('typeevaluation'));
        $this->set('_serialize', ['typeevaluation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeevaluation id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeevaluation = $this->Typeevaluation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeevaluation = $this->Typeevaluation->patchEntity($typeevaluation, $this->request->data);
            if ($this->Typeevaluation->save($typeevaluation)) {
                $this->Flash->success(__('The typeevaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeevaluation could not be saved. Please, try again.'));
        }
        $this->set(compact('typeevaluation'));
        $this->set('_serialize', ['typeevaluation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeevaluation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeevaluation = $this->Typeevaluation->get($id);
        if ($this->Typeevaluation->delete($typeevaluation)) {
            $this->Flash->success(__('The typeevaluation has been deleted.'));
        } else {
            $this->Flash->error(__('The typeevaluation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
