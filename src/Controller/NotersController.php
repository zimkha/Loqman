<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Noters Controller
 *
 * @property \App\Model\Table\NotersTable $Noters
 */
class NotersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Eleves', 'Evaluations']
        ];
        $noters = $this->paginate($this->Noters);

        $this->set(compact('noters'));
        $this->set('_serialize', ['noters']);
    }

    /**
     * View method
     *
     * @param string|null $id Noter id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $noter = $this->Noters->get($id, [
            'contain' => ['Eleves', 'Evaluations']
        ]);

        $this->set('noter', $noter);
        $this->set('_serialize', ['noter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $noter = $this->Noters->newEntity();
        if ($this->request->is('post')) {
            $noter = $this->Noters->patchEntity($noter, $this->request->data);
            if ($this->Noters->save($noter)) {
                $this->Flash->success(__('The noter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The noter could not be saved. Please, try again.'));
        }
        $eleves = $this->Noters->Eleves->find('list', ['limit' => 200]);
        $evaluations = $this->Noters->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('noter', 'eleves', 'evaluations'));
        $this->set('_serialize', ['noter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Noter id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $noter = $this->Noters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $noter = $this->Noters->patchEntity($noter, $this->request->data);
            if ($this->Noters->save($noter)) {
                $this->Flash->success(__('The noter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The noter could not be saved. Please, try again.'));
        }
        $eleves = $this->Noters->Eleves->find('list', ['limit' => 200]);
        $evaluations = $this->Noters->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('noter', 'eleves', 'evaluations'));
        $this->set('_serialize', ['noter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Noter id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noter = $this->Noters->get($id);
        if ($this->Noters->delete($noter)) {
            $this->Flash->success(__('The noter has been deleted.'));
        } else {
            $this->Flash->error(__('The noter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
