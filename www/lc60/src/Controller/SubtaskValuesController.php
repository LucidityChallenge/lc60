<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * SubtaskValues Controller
 *
 * @property \App\Model\Table\SubtaskValuesTable $SubtaskValues
 *
 * @method \App\Model\Entity\SubtaskValue[] paginate($object = null, array $settings = [])
 */
class SubtaskValuesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            //'contain' => ['CurrentTasks', 'ContemporaryTasks', 'Subtasks', 'SubtaskTasks', 'SubtaskSupers', 'SubtaskCategories', 'SubtaskOwnerParticipants']
        ];
        $subtaskValues = $this->paginate($this->SubtaskValues);

        $this->set(compact('subtaskValues'));
        $this->set('_serialize', ['subtaskValues']);
    }

    /**
     * View method
     *
     * @param string|null $id Subtask Value id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtaskValue = $this->SubtaskValues->get($id, [
            //'contain' => ['CurrentTasks', 'ContemporaryTasks', 'Subtasks', 'SubtaskTasks', 'SubtaskSupers', 'SubtaskCategories', 'SubtaskOwnerParticipants']
        ]);

        $this->set('subtaskValue', $subtaskValue);
        $this->set('_serialize', ['subtaskValue']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtaskValue = $this->SubtaskValues->newEntity();
        if ($this->request->is('post')) {
            $subtaskValue = $this->SubtaskValues->patchEntity($subtaskValue, $this->request->getData());
            if ($this->SubtaskValues->save($subtaskValue)) {
                $this->Flash->success(__('The subtask value has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask value could not be saved. Please, try again.'));
        }
        $currentTasks = $this->SubtaskValues->CurrentTasks->find('list', ['limit' => 200]);
        $contemporaryTasks = $this->SubtaskValues->ContemporaryTasks->find('list', ['limit' => 200]);
        $subtasks = $this->SubtaskValues->Subtasks->find('list', ['limit' => 200]);
        $subtaskTasks = $this->SubtaskValues->SubtaskTasks->find('list', ['limit' => 200]);
        $subtaskSupers = $this->SubtaskValues->SubtaskSupers->find('list', ['limit' => 200]);
        $subtaskCategories = $this->SubtaskValues->SubtaskCategories->find('list', ['limit' => 200]);
        $subtaskOwnerParticipants = $this->SubtaskValues->SubtaskOwnerParticipants->find('list', ['limit' => 200]);
        $this->set(compact('subtaskValue', 'currentTasks', 'contemporaryTasks', 'subtasks', 'subtaskTasks', 'subtaskSupers', 'subtaskCategories', 'subtaskOwnerParticipants'));
        $this->set('_serialize', ['subtaskValue']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask Value id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtaskValue = $this->SubtaskValues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subtaskValue = $this->SubtaskValues->patchEntity($subtaskValue, $this->request->getData());
            if ($this->SubtaskValues->save($subtaskValue)) {
                $this->Flash->success(__('The subtask value has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask value could not be saved. Please, try again.'));
        }
        $currentTasks = $this->SubtaskValues->CurrentTasks->find('list', ['limit' => 200]);
        $contemporaryTasks = $this->SubtaskValues->ContemporaryTasks->find('list', ['limit' => 200]);
        $subtasks = $this->SubtaskValues->Subtasks->find('list', ['limit' => 200]);
        $subtaskTasks = $this->SubtaskValues->SubtaskTasks->find('list', ['limit' => 200]);
        $subtaskSupers = $this->SubtaskValues->SubtaskSupers->find('list', ['limit' => 200]);
        $subtaskCategories = $this->SubtaskValues->SubtaskCategories->find('list', ['limit' => 200]);
        $subtaskOwnerParticipants = $this->SubtaskValues->SubtaskOwnerParticipants->find('list', ['limit' => 200]);
        $this->set(compact('subtaskValue', 'currentTasks', 'contemporaryTasks', 'subtasks', 'subtaskTasks', 'subtaskSupers', 'subtaskCategories', 'subtaskOwnerParticipants'));
        $this->set('_serialize', ['subtaskValue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask Value id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtaskValue = $this->SubtaskValues->get($id);
        if ($this->SubtaskValues->delete($subtaskValue)) {
            $this->Flash->success(__('The subtask value has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask value could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['index','view']);
    }
}
