<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usersold Controller
 *
 * @property \App\Model\Table\UsersoldTable $Usersold
 *
 * @method \App\Model\Entity\Usersold[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersoldController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups']
        ];
        $usersold = $this->paginate($this->Usersold);

        $this->set(compact('usersold'));
    }

    /**
     * View method
     *
     * @param string|null $id Usersold id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersold = $this->Usersold->get($id, [
            'contain' => ['Groups']
        ]);

        $this->set('usersold', $usersold);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersold = $this->Usersold->newEntity();
        if ($this->request->is('post')) {
            $usersold = $this->Usersold->patchEntity($usersold, $this->request->getData());
            if ($this->Usersold->save($usersold)) {
                $this->Flash->success(__('The usersold has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersold could not be saved. Please, try again.'));
        }
        $groups = $this->Usersold->Groups->find('list', ['limit' => 200]);
        $this->set(compact('usersold', 'groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usersold id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersold = $this->Usersold->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersold = $this->Usersold->patchEntity($usersold, $this->request->getData());
            if ($this->Usersold->save($usersold)) {
                $this->Flash->success(__('The usersold has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersold could not be saved. Please, try again.'));
        }
        $groups = $this->Usersold->Groups->find('list', ['limit' => 200]);
        $this->set(compact('usersold', 'groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usersold id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersold = $this->Usersold->get($id);
        if ($this->Usersold->delete($usersold)) {
            $this->Flash->success(__('The usersold has been deleted.'));
        } else {
            $this->Flash->error(__('The usersold could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
