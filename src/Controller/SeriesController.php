<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Series Controller
 *
 * @property \App\Model\Table\SeriesTable $Series
 */
class SeriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $series = $this->paginate($this->Series);

        $this->set(compact('series'));
        $this->set('_serialize', ['series']);
    }

    /**
     * View method
     *
     * @param string|null $id Series id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $series = $this->Series->get($id, [
            'contain' => []
        ]);

        $this->set('series', $series);
        $this->set('_serialize', ['series']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $series = $this->Series->newEntity();
        if ($this->request->is('post')) {
            $series = $this->Series->patchEntity($series, $this->request->data);
            if ($this->Series->save($series)) {
                $this->Flash->success(__('The series has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The series could not be saved. Please, try again.'));
        }
        $this->set(compact('series'));
        $this->set('_serialize', ['series']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Series id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $series = $this->Series->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $series = $this->Series->patchEntity($series, $this->request->data);
            if ($this->Series->save($series)) {
                $this->Flash->success(__('The series has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The series could not be saved. Please, try again.'));
        }
        $this->set(compact('series'));
        $this->set('_serialize', ['series']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Series id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $series = $this->Series->get($id);
        if ($this->Series->delete($series)) {
            $this->Flash->success(__('The series has been deleted.'));
        } else {
            $this->Flash->error(__('The series could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
