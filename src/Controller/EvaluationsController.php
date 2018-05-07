<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evaluations Controller
 *
 * @property \App\Model\Table\EvaluationsTable $Evaluations
 */
class EvaluationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $conditions = [];
        if ($this->request->is('post')) {
            $data = $this->request->data;
            if($data['semestre'])
                array_push($conditions, ['Semestres.phase' => $data['semestre']]);
            // if($data['classe'])
            //     array_push($conditions, ['Participerevaluations.classroom_id' => $data['classe']]);
            if($data['type'])
                array_push($conditions, ['typeevaluation_id' => $data['type']]);
        }
        $this->paginate = [
            'contain' => ['Semestres', 'Matieres', 'Typeevaluations', 'Participerevaluations'],
            'conditions' => $conditions
        ];


        $evaluations = $this->paginate($this->Evaluations);

        $classes = $this->Evaluations->Participerevaluations->Classrooms->find('list', ['contain' => 'Niveaus', 'groupField' => 'niveau.code']);
        $typeevaluations = $this->Evaluations->Typeevaluations->find('list');

        $this->set(compact('evaluations', 'classes', 'typeevaluations'));
        $this->set('_serialize', ['evaluations', 'classes', 'typeevaluations']);
    }

    /**
     * View method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => ['Semestres', 'Matieres', 'Typeevaluations', 'Participerevaluations' => ['Classrooms']],
            'conditions' => ['Semestres.anneescolaire_id' => $this->Auth->user('annee')['id']]
        ]);

        $this->set('evaluation', $evaluation);
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evaluation = $this->Evaluations->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $data['new'] = true;
            $data['anneescolaire_id'] = $this->Auth->user('annee')['id'];
            $data['type'] = 1;
            if(count($data['classrooms']) > 0) {
                $data['participerevaluations'] = [];
                foreach ($data['classrooms'] as $classe) {
                    array_push($data['participerevaluations'], ['classroom_id' => (int)$classe]);
                }
            }
            $evaluation = $this->Evaluations->patchEntity($evaluation, $data, ['associated' => ['Participerevaluations']]);
            debug($evaluation);
            if ($this->Evaluations->save($evaluation, ['associated' => ['Participerevaluations']])) {
                $this->Flash->success(__('Evaluation enregistree avec success.'));

                return $this->redirect(['action' => 'view', $evaluation->id]);
            }
            $this->Flash->error(__('Impossible d\'enregistrer cette evaluation, veuillez reessayer encore.'));
        }
        $semestres = $this->Evaluations->Semestres->find('list', ['limit' => 200, 'valueField' => 'code']);
        $matieres = $this->Evaluations->Matieres->find('list', ['limit' => 200, 'valueField' => 'libelle']);
        $typeevaluations = $this->Evaluations->Typeevaluations->find('list', ['limit' => 200, 'valueField' => 'libelle']);
        $niveaux = $this->loadModel('Niveaus')->find('list', ['limit' => 200, 'valueField' => 'code']);
        $this->set(compact('evaluation', 'semestres', 'matieres', 'typeevaluations', 'niveaux'));
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evaluation = $this->Evaluations->patchEntity($evaluation, $this->request->data);
            if ($this->Evaluations->save($evaluation)) {
                $this->Flash->success(__('The evaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evaluation could not be saved. Please, try again.'));
        }
        $semestres = $this->Evaluations->Semestres->find('list', ['limit' => 200]);
        $matieres = $this->Evaluations->Matieres->find('list', ['limit' => 200]);
        $typeevaluations = $this->Evaluations->Typeevaluations->find('list', ['limit' => 200]);
        $classrooms = $this->Evaluations->Classrooms->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'semestres', 'matieres', 'typeevaluations', 'classrooms'));
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evaluation = $this->Evaluations->get($id);
        if ($this->Evaluations->delete($evaluation)) {
            $this->Flash->success(__('The evaluation has been deleted.'));
        } else {
            $this->Flash->error(__('The evaluation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
