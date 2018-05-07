<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inscriptions Controller
 *
 * @property \App\Model\Table\InscriptionsTable $Inscriptions
 */
class InscriptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($classe = null)
    {
        $conditions = [];
        
        if($classe) {
            $classroom = $this->Inscriptions->Classrooms->get($classe);
            $conditions = ['classroom_id' => $classe];
        }
        $this->paginate = [
            'contain' => ['Anneescolaires', 'Classrooms', 'Eleves'],
            'limit' => 50,
            'order' => ['Eleves.nom' => 'ASC'],
            'conditions' => $conditions
        ];
        $inscriptions = $this->paginate($this->Inscriptions);

        $classes = $this->Inscriptions->Classrooms->find('list', ['contain' => 'Niveaus', 'groupField' => 'niveau.code']);

        $this->set(compact('inscriptions', 'classes', 'classroom'));
        $this->set('_serialize', ['inscriptions', 'classes', 'classroom']);
    }

    /**
     * View method
     *
     * @param string|null $id Inscription id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inscription = $this->Inscriptions->get($id, [
            'contain' => ['Anneescolaires', 'Classrooms', 'Eleves']
        ]);

        $this->set('inscription', $inscription);
        $this->set('_serialize', ['inscription']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inscription = $this->Inscriptions->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['elef']['annee'] = $this->Auth->user('annee')['code'];
            $this->request->data['anneescolaire_id'] = $this->Auth->user('annee')['id'];
            $inscription = $this->Inscriptions->patchEntity($inscription, $this->request->data, ['associated' => ['Eleves']]);
            if ($this->Inscriptions->save($inscription, ['associated' => ['Eleves']])) {
                $this->Flash->success(__('Eleve inscrit avec succes. Le matricule est : '. $inscription->elef->matricule));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Une erreur est survenue lors de l\'enregistrement de l\'inscription. Veuillez reessayer encore.'));
        }
        $anneescolaires = $this->Inscriptions->Anneescolaires->find('list', ['limit' => 200]);
        $classrooms = $this->Inscriptions->Classrooms->find('list', ['limit' => 200]);
        $this->set(compact('inscription', 'anneescolaires', 'classrooms'));
        $this->set('_serialize', ['inscription']);
    }

    public function reinscrire()
    {
        
        $this->loadComponent('Auth');
        $session = $this->Auth->user();
        $inscription = $this->Inscriptions->newEntity();
        // On creer un autre variable de type classeroom afin de recupere les classe dans le comboBox
        $this->loadModel('Classrooms');
        $_classe = $this->Classrooms->find('list', ['limit' => 200]);
        if ($this->request->is('post')) {
            $data = $this->request->data;
            // $data['elef']['annee'] = $this->Auth->user('annee')['code'];
            // $data['anneescolaire_id'] = $this->Auth->user('annee')['id'];
            // $this->Inscriptions->patchEntity($inscription, $this->request->data);
            // if ($this->Inscriptions->save($inscription)) {
            //     $this->Flash->success(__('Eleve reinscrit avec succes.'));
            //     return $this->redirect(['action' => 'reinscrire']);
            // }
            // $this->Flash->error(__('Une erreur est survenue lors de l\'enregistrement de l\'inscription. Veuillez reessayer encore.'));
        }
        $anneescolaire = $this->Inscriptions->Anneescolaires->findByStatut(0)->last();
        $classrooms = $this->Inscriptions->Classrooms->find('list', ['limit' => 200]);
        $this->set(compact('inscription', 'session', 'anneescolaire', 'classrooms'));
        $this->set('_classe', $_classe);
        $this->set('_serialize', ['inscription']);
          

    }

    /**
     * Edit method
     *
     * @param string|null $id Inscription id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inscription = $this->Inscriptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inscription = $this->Inscriptions->patchEntity($inscription, $this->request->data);
            if ($this->Inscriptions->save($inscription)) {
                $this->Flash->success(__('The inscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inscription could not be saved. Please, try again.'));
        }
        $anneescolaires = $this->Inscriptions->Anneescolaires->find('list', ['limit' => 200]);
        $classrooms = $this->Inscriptions->Classrooms->find('list', ['limit' => 200]);
        $eleves = $this->Inscriptions->Eleves->find('list', ['limit' => 200]);
        $this->set(compact('inscription', 'anneescolaires', 'classrooms', 'eleves'));
        $this->set('_serialize', ['inscription']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inscription id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inscription = $this->Inscriptions->get($id);
        if ($this->Inscriptions->delete($inscription)) {
            $this->Flash->success(__('The inscription has been deleted.'));
        } else {
            $this->Flash->error(__('The inscription could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
