<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enseigners Controller
 *
 * @property \App\Model\Table\EnseignersTable $Enseigners
 */
class EnseignersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Anneescolaires', 'Professeurs', 'Matieres']
        ];
        $enseigners = $this->paginate($this->Enseigners);

        $this->set(compact('enseigners'));
        $this->set('_serialize', ['enseigners']);
    }

    /**
     * View method
     *
     * @param string|null $id Enseigner id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enseigner = $this->Enseigners->get($id, [
            'contain' => ['Anneescolaires', 'Professeurs', 'Matieres']
        ]);

        $this->set('enseigner', $enseigner);
        $this->set('_serialize', ['enseigner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enseigner = $this->Enseigners->newEntity();
        if ($this->request->is('post')) {
            $enseigner = $this->Enseigners->patchEntity($enseigner, $this->request->data);
            if ($this->Enseigners->save($enseigner)) {
                $this->Flash->success(__('The enseigner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enseigner could not be saved. Please, try again.'));
        }
        $anneescolaires = $this->Enseigners->Anneescolaires->find('list', ['limit' => 200]);
        $professeurs = $this->Enseigners->Professeurs->find('list', ['limit' => 200]);
        $matieres = $this->Enseigners->Matieres->find('list', ['limit' => 200]);
        $this->set(compact('enseigner', 'anneescolaires', 'professeurs', 'matieres'));
        $this->set('_serialize', ['enseigner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Enseigner id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enseigner = $this->Enseigners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enseigner = $this->Enseigners->patchEntity($enseigner, $this->request->data);
            if ($this->Enseigners->save($enseigner)) {
                $this->Flash->success(__('The enseigner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enseigner could not be saved. Please, try again.'));
        }
        $anneescolaires = $this->Enseigners->Anneescolaires->find('list', ['limit' => 200]);
        $professeurs = $this->Enseigners->Professeurs->find('list', ['limit' => 200]);
        $matieres = $this->Enseigners->Matieres->find('list', ['limit' => 200]);
        $this->set(compact('enseigner', 'anneescolaires', 'professeurs', 'matieres'));
        $this->set('_serialize', ['enseigner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Enseigner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enseigner = $this->Enseigners->get($id);
        if ($this->Enseigners->delete($enseigner)) {
            $this->Flash->success(__('The enseigner has been deleted.'));
        } else {
            $this->Flash->error(__('The enseigner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
