<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Signups Controller
 *
 * @property \App\Model\Table\SignupsTable $Signups
 *
 * @method \App\Model\Entity\Signup[] paginate($object = null, array $settings = [])
 */
class SignupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $signups = $this->paginate($this->Signups);

        $this->set(compact('signups'));
        $this->set('_serialize', ['signups']);
    }

    /**
     * View method
     *
     * @param string|null $id Signup id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $signup = $this->Signups->get($id, [
            'contain' => []
        ]);

        $this->set('signup', $signup);
        $this->set('_serialize', ['signup']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $signup = $this->Signups->newEntity();
        if ($this->request->is('post')) {
            $signup = $this->Signups->patchEntity($signup, $this->request->getData());
            if ($this->Signups->save($signup)) {
                $this->Flash->success(__('The signup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The signup could not be saved. Please, try again.'));
        }
        $this->set(compact('signup'));
        $this->set('_serialize', ['signup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Signup id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $signup = $this->Signups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $signup = $this->Signups->patchEntity($signup, $this->request->getData());
            if ($this->Signups->save($signup)) {
                $this->Flash->success(__('The signup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The signup could not be saved. Please, try again.'));
        }
        $this->set(compact('signup'));
        $this->set('_serialize', ['signup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Signup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $signup = $this->Signups->get($id);
        if ($this->Signups->delete($signup)) {
            $this->Flash->success(__('The signup has been deleted.'));
        } else {
            $this->Flash->error(__('The signup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    // Other methods..

    public function beforeFilter(Event $event)
    {
        //parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['index']);
    }
}
