<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Salles Controller
 *
 * @property \App\Model\Table\SallesTable $Salles
 */
class SallesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $salles = $this->paginate($this->Salles);

        $this->set(compact('salles'));
        $this->set('_serialize', ['salles']);
    }

    /**
     * View method
     *
     * @param string|null $id Salle id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salle = $this->Salles->get($id, [
            'contain' => ['Cours']
        ]);

        $this->set('salle', $salle);
        $this->set('_serialize', ['salle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salle = $this->Salles->newEntity();
        if ($this->request->is('post')) {
            $salle = $this->Salles->patchEntity($salle, $this->request->data);
            if ($this->Salles->save($salle)) {
                $this->Flash->success(__('The salle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salle could not be saved. Please, try again.'));
        }
        $this->set(compact('salle'));
        $this->set('_serialize', ['salle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Salle id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salle = $this->Salles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salle = $this->Salles->patchEntity($salle, $this->request->data);
            if ($this->Salles->save($salle)) {
                $this->Flash->success(__('The salle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salle could not be saved. Please, try again.'));
        }
        $this->set(compact('salle'));
        $this->set('_serialize', ['salle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Salle id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salle = $this->Salles->get($id);
        if ($this->Salles->delete($salle)) {
            $this->Flash->success(__('The salle has been deleted.'));
        } else {
            $this->Flash->error(__('The salle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
