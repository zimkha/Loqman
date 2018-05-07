<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
   public function initialize() {
    parent::initialize();
    $this->Auth->allow();
}

public function beforeFilter(Event $event) {
    parent::beforeFilter($event);
    $this->Auth->allow(['login', 'logout']);
}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['active'] = true;
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Utilisateur enregistre avec succes.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Impossible d\'enregistrer cet utilisateur, veuillez reessayer encor.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login() {
        if ($this->Auth->user() != null):
            return $this->redirect(['controller' => 'Anneescolaires', 'action' => 'index']);
        else :
            $user = $this->Users->newEntity();
            $this->viewBuilder()->layout('auth');
            $data = $this->request->data;
            if ($this->request->is('post')) {
                $response = $this->Users->findByUsername($data['username'])->select(['username', 'nom', 'prenom', 'password', 'profil', 'active'])->firstOrFail();
                if ($response):
                    if (!$response->active) {
                        $this->Flash->error(__('Vous etes bloque, veuillez contacter l\'administrateur du site.'));
                    } elseif ($response->password == $data['password']) {
                        $annee = $this->loadModel('Anneescolaires')->findByStatut(1)->last();
                        $response->annee = $annee;
                        $this->Auth->setUser($response);
                        return $this->redirect(['controller' => 'Anneescolaires', 'action' => 'index']);
                    } else {
                        $this->Flash->error(__('Mot de passe incorrect.'));
                    }
                else:
                    $this->Flash->error(__('Identifiant incorrect.'));
                endif;
            }
            $this->set(compact('user'));
        endif;
    }

    public function logout() {
        $this->loadComponent('Auth');
        $this->Auth->storage()->delete();
        return $this->redirect($this->Auth->logout());
    }
}
