<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Anneescolaires Controller
 *
 * @property \App\Model\Table\AnneescolairesTable $Anneescolaires
 */
class AnneescolairesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $anneescolaires = $this->paginate($this->Anneescolaires);

        $this->set(compact('anneescolaires'));
        $this->set('_serialize', ['anneescolaires']);
    }

    /**
     * View method
     *
     * @param string|null $id Anneescolaire id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $anneescolaire = $this->Anneescolaires->get($id, [
            'contain' => ['Cours', 'Enseigners', 'Inscriptions', 'Paiements', 'Semestres']
        ]);

        $this->set('anneescolaire', $anneescolaire);
        $this->set('_serialize', ['anneescolaire']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $anneescolaire = $this->Anneescolaires->newEntity();
        if ($this->request->is('post')) {
            $anneescolaire = $this->Anneescolaires->patchEntity($anneescolaire, $this->request->data);
            if ($this->Anneescolaires->save($anneescolaire)) {
                $this->Flash->success(__('The anneescolaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anneescolaire could not be saved. Please, try again.'));
        }
        $this->set(compact('anneescolaire'));
        $this->set('_serialize', ['anneescolaire']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Anneescolaire id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $anneescolaire = $this->Anneescolaires->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $anneescolaire = $this->Anneescolaires->patchEntity($anneescolaire, $this->request->data);
            if ($this->Anneescolaires->save($anneescolaire)) {
                $this->Flash->success(__('The anneescolaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anneescolaire could not be saved. Please, try again.'));
        }
        $this->set(compact('anneescolaire'));
        $this->set('_serialize', ['anneescolaire']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Anneescolaire id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $anneescolaire = $this->Anneescolaires->get($id);
        if ($this->Anneescolaires->delete($anneescolaire)) {
            $this->Flash->success(__('The anneescolaire has been deleted.'));
        } else {
            $this->Flash->error(__('The anneescolaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
