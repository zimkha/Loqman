<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Semestres Controller
 *
 * @property \App\Model\Table\SemestresTable $Semestres
 */
class SemestresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Anneescolaires']
        ];
        $semestres = $this->paginate($this->Semestres);

        $this->set(compact('semestres'));
        $this->set('_serialize', ['semestres']);
    }

    /**
     * View method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $semestre = $this->Semestres->get($id, [
            'contain' => ['Anneescolaires', 'Evaluations']
        ]);

        $this->set('semestre', $semestre);
        $this->set('_serialize', ['semestre']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $semestre = $this->Semestres->newEntity();
        if ($this->request->is('post')) {
            $semestre = $this->Semestres->patchEntity($semestre, $this->request->data);
            if ($this->Semestres->save($semestre)) {
                $this->Flash->success(__('The semestre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semestre could not be saved. Please, try again.'));
        }
        $anneescolaires = $this->Semestres->Anneescolaires->find('list', ['limit' => 200]);
        $this->set(compact('semestre', 'anneescolaires'));
        $this->set('_serialize', ['semestre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $semestre = $this->Semestres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $semestre = $this->Semestres->patchEntity($semestre, $this->request->data);
            if ($this->Semestres->save($semestre)) {
                $this->Flash->success(__('The semestre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semestre could not be saved. Please, try again.'));
        }
        $anneescolaires = $this->Semestres->Anneescolaires->find('list', ['limit' => 200]);
        $this->set(compact('semestre', 'anneescolaires'));
        $this->set('_serialize', ['semestre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $semestre = $this->Semestres->get($id);
        if ($this->Semestres->delete($semestre)) {
            $this->Flash->success(__('The semestre has been deleted.'));
        } else {
            $this->Flash->error(__('The semestre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
