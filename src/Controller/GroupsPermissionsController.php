<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GroupsPermissions Controller
 *
 * @property \App\Model\Table\GroupsPermissionsTable $GroupsPermissions
 *
 * @method \App\Model\Entity\GroupsPermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupsPermissionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups', 'Permissions']
        ];
        $groupsPermissions = $this->paginate($this->GroupsPermissions);

        $this->set(compact('groupsPermissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Groups Permission id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupsPermission = $this->GroupsPermissions->get($id, [
            'contain' => ['Groups', 'Permissions']
        ]);

        $this->set('groupsPermission', $groupsPermission);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupsPermission = $this->GroupsPermissions->newEntity();
        if ($this->request->is('post')) {
            $groupsPermission = $this->GroupsPermissions->patchEntity($groupsPermission, $this->request->getData());
            if ($this->GroupsPermissions->save($groupsPermission)) {
                $this->Flash->success(__('The groups permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The groups permission could not be saved. Please, try again.'));
        }
        $groups = $this->GroupsPermissions->Groups->find('list', ['limit' => 200]);
        $permissions = $this->GroupsPermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('groupsPermission', 'groups', 'permissions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Groups Permission id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupsPermission = $this->GroupsPermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupsPermission = $this->GroupsPermissions->patchEntity($groupsPermission, $this->request->getData());
            if ($this->GroupsPermissions->save($groupsPermission)) {
                $this->Flash->success(__('The groups permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The groups permission could not be saved. Please, try again.'));
        }
        $groups = $this->GroupsPermissions->Groups->find('list', ['limit' => 200]);
        $permissions = $this->GroupsPermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('groupsPermission', 'groups', 'permissions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Groups Permission id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupsPermission = $this->GroupsPermissions->get($id);
        if ($this->GroupsPermissions->delete($groupsPermission)) {
            $this->Flash->success(__('The groups permission has been deleted.'));
        } else {
            $this->Flash->error(__('The groups permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
