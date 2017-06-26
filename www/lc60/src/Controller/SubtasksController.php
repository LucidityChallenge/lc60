<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\I18n\Time;

/**
 * Subtasks Controller
 *
 * @property \App\Model\Table\SubtasksTable $Subtasks
 *
 * @method \App\Model\Entity\Subtask[] paginate($object = null, array $settings = [])
 */
class SubtasksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
	$subtasks = null;
	$contains = ['Tasks', 'SubtaskCategories', 'Participants', 'SubtaskTypes'];
        
        if (null != ($this->Auth->user('id')))
    	{
    	
	  $this->paginate = [
	      'contain' => $contains
	  ];
	  $subtasks = $this->paginate($this->Subtasks);
	}
	else
	{
	  $subtasks = $this->paginate($this->Subtasks->find('all',
	    ['contain' => $contains]
	    )
	    ->where(['Subtasks.subtask_visible' => 1])
	    ->where(['Tasks.task_start <=' => Time::now()])
	  );
	}
        $this->set(compact('subtasks'));
        $this->set('_serialize', ['subtasks']);
    }

    /**
     * View method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    
	$showSubtask = false;
	$subtasks = null;
	
	if (null != ($this->Auth->user('id')))
	{
	  // do not redirect for logged users.
	  $showSubtask = true;
	}
	else
	{
	  try
	  {
	    $dream_type = $this->Subtasks->DreamTypes->get($id);
	    if ($dream_type != null) {
		    $this->Flash->success(__('Redirected to Dream Type.'));

		    return $this->redirect(['controller' => 'dream_types','action' => 'view',($id)]);
	    }
	  }
	  catch (RecordNotFoundException $e)
	  {
	    //not found, proceed with current subtask
	    $showSubtask = true;
	  }
	}
	
	if ($showSubtask)
	{
	  $contains = ['SubtaskValues', 'Tasks', 'SubtaskCategories', 'Participants', 'SubtaskTypes', 'SuccessfulSubtaskTaskWithCalculatedScoringParticipant',		
		'ShareHoldersParticipant'
	  ];
	
	  if (null != ($this->Auth->user('id')))
	  {
	    $subtask = $this->Subtasks->get($id, ['contain' => $contains]);
	    $this->set('subtask', $subtask);
	    $this->set('_serialize', ['subtask']);
	  }
	  else
	  {
	    $unset = true;
	    $subtasks = $this->Subtasks->find('all')
	      ->contain($contains)
	      ->where(['Subtasks.id' => $id])
	      ->where(['Subtasks.subtask_visible' => 1])
	      ->where(['Tasks.task_start <=' => Time::now()])
	    ;
	    
	    foreach ($subtasks as $subtask)
	    {
	      $this->set('subtask', $subtask);
	      $this->set('_serialize', ['subtask']);
	      $unset = false;
	    }
        
	    if ($unset)
	    {
	      $this->Flash->error(__('Sorry! This data is restricted.'));
	      return $this->redirect(['controller' => 'users', 'action' => 'login']);
	    }
	  }  
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtask = $this->Subtasks->newEntity();
        if ($this->request->is('post')) {
            $subtask = $this->Subtasks->patchEntity($subtask, $this->request->getData());
            if ($this->Subtasks->save($subtask)) {
                $this->Flash->success(__('The subtask has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask could not be saved. Please, try again.'));
        }
        $tasks = $this->Subtasks->Tasks->find('list', ['limit' => 200]);
        $subtasks = $this->Subtasks->Subtasks->find('list', ['limit' => 200]);
        $subtaskCategories = $this->Subtasks->SubtaskCategories->find('list', ['limit' => 200]);
        $participants = $this->Subtasks->Participants->find('list', ['limit' => 200]);
        $subtaskTypes = $this->Subtasks->SubtaskTypes->find('list', ['limit' => 200]);
        $this->set(compact('subtask', 'tasks', 'subtasks', 'subtaskCategories', 'participants', 'subtaskTypes'));
        $this->set('_serialize', ['subtask']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtask = $this->Subtasks->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {        
            $subtask = $this->Subtasks->patchEntity($subtask, $this->request->getData());
            if ($this->Subtasks->save($subtask)) {
                $this->Flash->success(__('The subtask has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask could not be saved. Please, try again.'));
        }
        $tasks = $this->Subtasks->Tasks->find('list', ['limit' => 200]);
        $subtasks = $this->Subtasks->Subtasks->find('list', ['limit' => 200]);
        $subtaskCategories = $this->Subtasks->SubtaskCategories->find('list', ['limit' => 200]);
        $participants = $this->Subtasks->Participants->find('list', ['limit' => 200]);
        $subtaskTypes = $this->Subtasks->SubtaskTypes->find('list', ['limit' => 200]);
        $this->set(compact('subtask', 'tasks', 'subtasks', 'subtaskCategories', 'participants', 'subtaskTypes'));
        $this->set('_serialize', ['subtask']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtask = $this->Subtasks->get($id);
        if ($this->Subtasks->delete($subtask)) {
            $this->Flash->success(__('The subtask has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
