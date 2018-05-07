<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Professeurs Controller
 *
 * @property \App\Model\Table\ProfesseursTable $Professeurs
 */
class ProfesseursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $professeurs = $this->paginate($this->Professeurs);

        $this->set(compact('professeurs'));
        $this->set('_serialize', ['professeurs']);
    }

    /**
     * View method
     *
     * @param string|null $id Professeur id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $professeur = $this->Professeurs->get($id, [
            'contain' => ['Cours', 'Enseigners']
        ]);

        $this->set('professeur', $professeur);
        $this->set('_serialize', ['professeur']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $professeur = $this->Professeurs->newEntity();
        if ($this->request->is('post')) {
            $professeur = $this->Professeurs->patchEntity($professeur, $this->request->data);
            if ($this->Professeurs->save($professeur)) {
                $this->Flash->success(__('The professeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professeur could not be saved. Please, try again.'));
        }
        $this->set(compact('professeur'));
        $this->set('_serialize', ['professeur']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Professeur id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $professeur = $this->Professeurs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professeur = $this->Professeurs->patchEntity($professeur, $this->request->data);
            if ($this->Professeurs->save($professeur)) {
                $this->Flash->success(__('The professeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professeur could not be saved. Please, try again.'));
        }
        $this->set(compact('professeur'));
        $this->set('_serialize', ['professeur']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Professeur id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $professeur = $this->Professeurs->get($id);
        if ($this->Professeurs->delete($professeur)) {
            $this->Flash->success(__('The professeur has been deleted.'));
        } else {
            $this->Flash->error(__('The professeur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
