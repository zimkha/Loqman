<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cours Controller
 *
 * @property \App\Model\Table\CoursTable $Cours
 */
class CoursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Salles', 'Professeurs', 'Anneescolaires', 'Classrooms', 'Matieres']
        ];
        $cours = $this->paginate($this->Cours);

        $this->set(compact('cours'));
        $this->set('_serialize', ['cours']);
    }

    /**
     * View method
     *
     * @param string|null $id Cour id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cour = $this->Cours->get($id, [
            'contain' => ['Salles', 'Professeurs', 'Anneescolaires', 'Classrooms', 'Matieres']
        ]);

        $this->set('cour', $cour);
        $this->set('_serialize', ['cour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cour = $this->Cours->newEntity();
        if ($this->request->is('post')) {
            $cour = $this->Cours->patchEntity($cour, $this->request->data);
            if ($this->Cours->save($cour)) {
                $this->Flash->success(__('The cour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cour could not be saved. Please, try again.'));
        }
        $salles = $this->Cours->Salles->find('list', ['limit' => 200]);
        $professeurs = $this->Cours->Professeurs->find('list', ['limit' => 200]);
        $anneescolaires = $this->Cours->Anneescolaires->find('list', ['limit' => 200]);
        $classrooms = $this->Cours->Classrooms->find('list', ['limit' => 200]);
        $matieres = $this->Cours->Matieres->find('list', ['limit' => 200]);
        $this->set(compact('cour', 'salles', 'professeurs', 'anneescolaires', 'classrooms', 'matieres'));
        $this->set('_serialize', ['cour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cour id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cour = $this->Cours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cour = $this->Cours->patchEntity($cour, $this->request->data);
            if ($this->Cours->save($cour)) {
                $this->Flash->success(__('The cour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cour could not be saved. Please, try again.'));
        }
        $salles = $this->Cours->Salles->find('list', ['limit' => 200]);
        $professeurs = $this->Cours->Professeurs->find('list', ['limit' => 200]);
        $anneescolaires = $this->Cours->Anneescolaires->find('list', ['limit' => 200]);
        $classrooms = $this->Cours->Classrooms->find('list', ['limit' => 200]);
        $matieres = $this->Cours->Matieres->find('list', ['limit' => 200]);
        $this->set(compact('cour', 'salles', 'professeurs', 'anneescolaires', 'classrooms', 'matieres'));
        $this->set('_serialize', ['cour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cour id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cour = $this->Cours->get($id);
        if ($this->Cours->delete($cour)) {
            $this->Flash->success(__('The cour has been deleted.'));
        } else {
            $this->Flash->error(__('The cour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
