<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 *
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employers', 'Users', 'Authors']
        ];
        $messages = $this->paginate($this->Messages);

        $this->set(compact('messages'));

    }

    /**
     * Candidate method
     *
     * @return \Cake\Http\Response|void
     */
    public function personal($id = null)
    {
        // TODO add during production $id = $this->UserAuth->getUserId();
        $id = 2;
        $this->paginate = [
            'contain' => ['Employers', 'Users', 'Authors'],
            'conditions' => ['Messages.user_id' => $id]
        ];
        $messages = $this->paginate($this->Messages);

        $this->set(compact('messages'));
    }


    /**
     * Employer method
     *
     * @return \Cake\Http\Response|void
     */
    public function employer($id = null)
    {
        // TODO add during production $id = employer_id;
        $id = 1;
        $this->paginate = [
            'contain' => ['Employers', 'Users', 'Authors'],
            'conditions' => ['Messages.employer_id' => $id]
        ];
        $messages = $this->paginate($this->Messages);

        $this->set(compact('messages'));
    }

    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => ['Employers', 'Users', 'Authors']
        ]);

        $this->set('message', $message);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $employers = $this->Messages->Employers->find('list', ['limit' => 200]);
        $users = $this->Messages->Users->find('list', ['limit' => 200]);
        $authors = $this->Messages->Authors->find('list', ['limit' => 200]);
        $this->set(compact('message', 'employers', 'users', 'authors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $employers = $this->Messages->Employers->find('list', ['limit' => 200]);
        $users = $this->Messages->Users->find('list', ['limit' => 200]);
        $authors = $this->Messages->Authors->find('list', ['limit' => 200]);
        $this->set(compact('message', 'employers', 'users', 'authors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $message = $this->Messages->get($id);
        if ($this->Messages->delete($message)) {
            $this->Flash->success(__('The message has been deleted.'));
        } else {
            $this->Flash->error(__('The message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
