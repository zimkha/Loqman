<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paiements Controller
 *
 * @property \App\Model\Table\PaiementsTable $Paiements
 */
class PaiementsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Eleves', 'Anneescolaires']
        ];
        $paiements = $this->paginate($this->Paiements);

        $this->set(compact('paiements'));
        $this->set('_serialize', ['paiements']);
    }

    /**
     * View method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => ['Eleves', 'Anneescolaires']
        ]);

        $this->set('paiement', $paiement);
        $this->set('_serialize', ['paiement']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
           $this->loadComponent('Auth');
            // On Charge Les classes avnat de faire des operations
           $this->loadModel('Classrooms');
           $this->loadModel('Anneescolaires');
           $this->loadModel('Inscriptions');
        $classes= $this->Classrooms->find('list', ['limit' => 200]);
        $anneescolaire = $this->Inscriptions->Anneescolaires->findByStatut(0)->last();
        $inscription = $this->Inscriptions->Classrooms->find('list', ['limit' => 200]);
        $paiement = $this->Paiements->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['eleve_id'] = $this->request->data['eleve'];
              $this->request->data['anneescolaire_id'] = $this->Auth->user('annee')['id'];
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->data);
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $eleves = $this->Paiements->Eleves->find('list', ['limit' => 200]);
        $anneescolaires = $this->Paiements->Anneescolaires->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'eleves', 'anneescolaire', 'classes', 'inscription'));
        $this->set('_serialize', ['paiement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->data);
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $eleves = $this->Paiements->Eleves->find('list', ['limit' => 200]);
        $anneescolaires = $this->Paiements->Anneescolaires->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'eleves', 'anneescolaires'));
        $this->set('_serialize', ['paiement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paiement = $this->Paiements->get($id);
        if ($this->Paiements->delete($paiement)) {
            $this->Flash->success(__('The paiement has been deleted.'));
        } else {
            $this->Flash->error(__('The paiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
