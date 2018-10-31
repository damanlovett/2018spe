<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usersold3 Controller
 *
 * @property \App\Model\Table\Usersold3Table $Usersold3
 *
 * @method \App\Model\Entity\Usersold3[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Usersold3Controller extends AppController
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
        $usersold3 = $this->paginate($this->Usersold3);

        $this->set(compact('usersold3'));
    }

    /**
     * View method
     *
     * @param string|null $id Usersold3 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersold3 = $this->Usersold3->get($id, [
            'contain' => ['Groups']
        ]);

        $this->set('usersold3', $usersold3);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersold3 = $this->Usersold3->newEntity();
        if ($this->request->is('post')) {
            $usersold3 = $this->Usersold3->patchEntity($usersold3, $this->request->getData());
            if ($this->Usersold3->save($usersold3)) {
                $this->Flash->success(__('The usersold3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersold3 could not be saved. Please, try again.'));
        }
        $groups = $this->Usersold3->Groups->find('list', ['limit' => 200]);
        $this->set(compact('usersold3', 'groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usersold3 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersold3 = $this->Usersold3->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersold3 = $this->Usersold3->patchEntity($usersold3, $this->request->getData());
            if ($this->Usersold3->save($usersold3)) {
                $this->Flash->success(__('The usersold3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersold3 could not be saved. Please, try again.'));
        }
        $groups = $this->Usersold3->Groups->find('list', ['limit' => 200]);
        $this->set(compact('usersold3', 'groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usersold3 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersold3 = $this->Usersold3->get($id);
        if ($this->Usersold3->delete($usersold3)) {
            $this->Flash->success(__('The usersold3 has been deleted.'));
        } else {
            $this->Flash->error(__('The usersold3 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
