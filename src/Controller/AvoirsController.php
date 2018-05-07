<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avoirs Controller
 *
 * @property \App\Model\Table\AvoirsTable $Avoirs
 */
class AvoirsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Classrooms', 'Matieres']
        ];
        $avoirs = $this->paginate($this->Avoirs);

        $this->set(compact('avoirs'));
        $this->set('_serialize', ['avoirs']);
    }

    /**
     * View method
     *
     * @param string|null $id Avoir id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avoir = $this->Avoirs->get($id, [
            'contain' => ['Classrooms', 'Matieres']
        ]);

        $this->set('avoir', $avoir);
        $this->set('_serialize', ['avoir']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avoir = $this->Avoirs->newEntity();
        if ($this->request->is('post')) {
            $avoir = $this->Avoirs->patchEntity($avoir, $this->request->data);
            if ($this->Avoirs->save($avoir)) {
                $this->Flash->success(__('The avoir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avoir could not be saved. Please, try again.'));
        }
        $classrooms = $this->Avoirs->Classrooms->find('list', ['limit' => 200]);
        $matieres = $this->Avoirs->Matieres->find('list', ['limit' => 200]);
        $this->set(compact('avoir', 'classrooms', 'matieres'));
        $this->set('_serialize', ['avoir']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Avoir id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avoir = $this->Avoirs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avoir = $this->Avoirs->patchEntity($avoir, $this->request->data);
            if ($this->Avoirs->save($avoir)) {
                $this->Flash->success(__('The avoir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avoir could not be saved. Please, try again.'));
        }
        $classrooms = $this->Avoirs->Classrooms->find('list', ['limit' => 200]);
        $matieres = $this->Avoirs->Matieres->find('list', ['limit' => 200]);
        $this->set(compact('avoir', 'classrooms', 'matieres'));
        $this->set('_serialize', ['avoir']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Avoir id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avoir = $this->Avoirs->get($id);
        if ($this->Avoirs->delete($avoir)) {
            $this->Flash->success(__('The avoir has been deleted.'));
        } else {
            $this->Flash->error(__('The avoir could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
