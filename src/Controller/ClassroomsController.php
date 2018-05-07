<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Classrooms Controller
 *
 * @property \App\Model\Table\ClassroomsTable $Classrooms
 */
class ClassroomsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Series', 'Niveaus']
        ];
        $classrooms = $this->paginate($this->Classrooms);

        $this->set(compact('classrooms'));
        $this->set('_serialize', ['classrooms']);
    }

    /**
     * View method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classroom = $this->Classrooms->get($id, [
            'contain' => ['Series', 'Niveaus', 'Avoirs', 'Cours', 'Inscriptions']
        ]);

        $this->set('classroom', $classroom);
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classroom = $this->Classrooms->newEntity();
        if ($this->request->is('post')) {
            $classroom = $this->Classrooms->patchEntity($classroom, $this->request->data);
            if ($this->Classrooms->save($classroom)) {
                $this->Flash->success(__('The classroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classroom could not be saved. Please, try again.'));
        }
        $series = $this->Classrooms->Series->find('list', ['limit' => 200]);
        $niveaus = $this->Classrooms->Niveaus->find('list', ['limit' => 200]);
        $this->set(compact('classroom', 'series', 'niveaus'));
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classroom = $this->Classrooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classroom = $this->Classrooms->patchEntity($classroom, $this->request->data);
            if ($this->Classrooms->save($classroom)) {
                $this->Flash->success(__('The classroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classroom could not be saved. Please, try again.'));
        }
        $series = $this->Classrooms->Series->find('list', ['limit' => 200]);
        $niveaus = $this->Classrooms->Niveaus->find('list', ['limit' => 200]);
        $this->set(compact('classroom', 'series', 'niveaus'));
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classroom = $this->Classrooms->get($id);
        if ($this->Classrooms->delete($classroom)) {
            $this->Flash->success(__('The classroom has been deleted.'));
        } else {
            $this->Flash->error(__('The classroom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function afficehrEleve($code=null){
        
    }
}
