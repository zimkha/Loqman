<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matieres Controller
 *
 * @property \App\Model\Table\MatieresTable $Matieres
 */
class MatieresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $matieres = $this->paginate($this->Matieres);

        $this->set(compact('matieres'));
        $this->set('_serialize', ['matieres']);
    }

    /**
     * View method
     *
     * @param string|null $id Matiere id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matiere = $this->Matieres->get($id, [
            'contain' => ['Avoirs', 'Cours', 'Enseigners', 'Evaluations']
        ]);

        $this->set('matiere', $matiere);
        $this->set('_serialize', ['matiere']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matiere = $this->Matieres->newEntity();
        if ($this->request->is('post')) {
            $matiere = $this->Matieres->patchEntity($matiere, $this->request->data);
            if ($this->Matieres->save($matiere)) {
                $this->Flash->success(__('Sauvegarde bien réussi.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erreur de Sauvegarde, Recommencer SVP !!!.'));
        }
        $this->set(compact('matiere'));
        $this->set('_serialize', ['matiere']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Matiere id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matiere = $this->Matieres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matiere = $this->Matieres->patchEntity($matiere, $this->request->data);
            if ($this->Matieres->save($matiere)) {
                $this->Flash->success(__('La matiere a été bien modifier .'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erreur les modifications ne sont pas éffectuées .'));
        }
        $this->set(compact('matiere'));
        $this->set('_serialize', ['matiere']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Matiere id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matiere = $this->Matieres->get($id);
        if ($this->Matieres->delete($matiere)) {
            $this->Flash->success(__('Suppréssion réussi.'));
        } else {
            $this->Flash->error(__('Echec de la suppression.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
