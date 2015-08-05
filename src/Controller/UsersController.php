<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controller com as ações que envolvem usuários
 *
 * @author Fellipe de Oliveira Couto
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
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
     * Adiciona um novo usuário ao Miner
     *
     * @return void
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('Usuário criado com sucesso!.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('O usuário não pode ser criado. Por favor, tente novamente.');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
}
