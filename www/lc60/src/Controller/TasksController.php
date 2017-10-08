<?php
namespace App\Controller;

use App\Controller\RssController;
use Cake\I18n\Time;
use Cake\Routing\Router;
use Cake\Event\Event;

/**
 * Tasks Controller
 *
 * @property \App\Model\Table\TasksTable $Tasks
 *
 * @method \App\Model\Entity\Task[] paginate($object = null, array $settings = [])
 */
class TasksController extends RssController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
    	if (null != ($this->Auth->user('id')))
    	{
	  $tasks = $this->paginate($this->Tasks->find()
	  );
	}
	else
	{
	  $tasks = $this->paginate($this->Tasks->find()
	      ->where(['Tasks.task_start <=' => Time::now()])
	  );
	}
        $this->set(compact('tasks'));
        $this->set('_serialize', ['tasks']);
    }

    /**
     * View method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {       
        
	if (null != ($this->Auth->user('id')))
	{
        $task = $this->Tasks->get($id, [
            'contain' => ['DreamWithTypeParticipant', 'SubtaskShareHolderComplete', 'SuccessfulSubtaskTaskWithCalculatedScoringParticipant']
        ]);

        $this->set('task', $task);
        $this->set('_serialize', ['task']);
        }
        else
        {
	    $unset = true;
	    
	    $tasks = ($this->Tasks->find()
	      ->where(['Tasks.id' => ($id)])
	      ->where(['Tasks.task_start <=' => Time::now()])
	      ->contain(['DreamWithTypeParticipant', 'SubtaskShareHolderComplete', 'SuccessfulSubtaskTaskWithCalculatedScoringParticipant'])
	    );

	    foreach ($tasks as $task)
	    {
	      $this->set('task', $task);
	      $this->set('_serialize', ['task']);
	      $unset = false;
	    }
        
	    if ($unset)
	    {
	      $this->Flash->error(__('Sorry! This data is restricted.'));
	      return $this->redirect(['controller' => 'users', 'action' => 'login']);
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
        $task = $this->Tasks->newEntity();
        if ($this->request->is('post')) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The task could not be saved. Please, try again.'));
        }
        $this->set(compact('task'));
        $this->set('_serialize', ['task']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $task = $this->Tasks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The task could not be saved. Please, try again.'));
        }
        $this->set(compact('task'));
        $this->set('_serialize', ['task']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $task = $this->Tasks->get($id);
        if ($this->Tasks->delete($task)) {
            $this->Flash->success(__('The task has been deleted.'));
        } else {
            $this->Flash->error(__('The task could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    /**
     * rss method
     *
     * @return \Cake\Http\Response|null
     */
    public function rss()
    {
      $baseUrl= (Router::url('/', true));
      $title= 'LC60T';
      $description= 'Lucidity Challenge 60 Tasks';
      $ttl = 1200;

      $rssString = ($this->rssHead($baseUrl,$title,$description,$ttl));

      $tasks = ($this->Tasks->find()
	->where(['Tasks.task_start <=' => Time::now()])
        //->where(['1 =' => 0 ]) //remove this
	->order(['Tasks.task_start' => 'desc', 'Tasks.id' => 'desc'])
      );

      foreach ($tasks as $task)
      {
	$itemTitle = 'Task '.$task->id.': '.$task->task_title.sprintf(' (%04d-%02d-%02d)',$task->task_start->year,$task->task_start->month,$task->task_start->day);
	$itemDescription = $task->task_text;
	$itemUrl = $task->url;
	$permalink = $baseUrl.'tasks/view/'.$task->id;
	$publishTime =  strtotime($task->task_start);

	$rssString = $rssString.($this->rssItem($itemTitle,$itemDescription,$itemUrl,$permalink,$publishTime));
      }

      $rssString = $rssString.($this->rssTail());

      return $this->rssBody($rssString);
    }
    

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['view','index']);
    }
}
