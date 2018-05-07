<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Eleves Controller
 *
 * @property \App\Model\Table\ElevesTable $Eleves
 */
class ElevesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $eleves = $this->paginate($this->Eleves);

        $this->set(compact('eleves'));
        $this->set('_serialize', ['eleves']);
    }

    /**
     * View method
     *
     * @param string|null $id Elef id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $elef = $this->Eleves->get($id, [
            'contain' => []
        ]);

        $this->set('elef', $elef);
        $this->set('_serialize', ['elef']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $elef = $this->Eleves->newEntity();
        if ($this->request->is('post')) {
            $elef = $this->Eleves->patchEntity($elef, $this->request->data);
            if ($this->Eleves->save($elef)) {
                $this->Flash->success(__('The elef has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The elef could not be saved. Please, try again.'));
        }
        $this->set(compact('elef'));
        $this->set('_serialize', ['elef']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Elef id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $elef = $this->Eleves->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $elef = $this->Eleves->patchEntity($elef, $this->request->data);
            if ($this->Eleves->save($elef)) {
                $this->Flash->success(__('The elef has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The elef could not be saved. Please, try again.'));
        }
        $this->set(compact('elef'));
        $this->set('_serialize', ['elef']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Elef id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $elef = $this->Eleves->get($id);
        if ($this->Eleves->delete($elef)) {
            $this->Flash->success(__('The elef has been deleted.'));
        } else {
            $this->Flash->error(__('The elef could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
}
