<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\I18n\Time;
use Cake\Routing\Router;

/**
 * Subtasks Controller
 *
 * @property \App\Model\Table\SubtasksTable $Subtasks
 *
 * @method \App\Model\Entity\Subtask[] paginate($object = null, array $settings = [])
 */
class SubtasksController extends ImageController
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

    /**
     * img method
     *
     * @return \Cake\Http\Response|null
     */
    public function img($id = null)
    { 
      return $this->image($id);
    }

    /**
     * img method
     *
     * @return \Cake\Http\Response|null
     */
    public function image($id = null)
    {
      $params = explode('.',$id);
      
      if (count($params) > 0)
      {
	$sid = $params[0];
	$ext = 'svg';
	
	if (count($params) > 1)
	{
	  $ext = $params[1];
	}
	
	if ($ext == 'png')
	{
	  return $this->png($sid);
	}
	else
	if ($ext == 'svg')
	{
	  return $this->svg($sid);
	}
	else
	{
	  return null;
	}
      }
      else
      {
	return null;
      }
    }    

    /**
     * svg method
     *
     * @return \Cake\Http\Response|null
     */
    public function svg($id = null)
    {
    if ($id != null)
    {
      $subtasks = $this->Subtasks->find('all')
	->contain(['SubtaskValues','Tasks', 'ShareHoldersParticipant'])
	->where(['Subtasks.id' => $id])
	->where(['Subtasks.subtask_visible' => 1])
	->where(['Tasks.task_start <=' => Time::now()])
      ;
      
      $unset = true;
      
      $subtask_fetch = null;
      
      foreach ($subtasks as $subtask)
      {
	$this->set('subtask', $subtask);
	$this->set('_serialize', ['subtask']);
	$subtask_fetch = $subtask;
	$unset = false;
      }
  
      if ($unset)
      {
	$this->Flash->error(__('Sorry! This data is restricted.'));
	return $this->redirect(['controller' => 'users', 'action' => 'login']);
      }
      else
      {
      $ins[0] = '';
      $ins[1] = '';
      {
	$ins_t = explode("\n",$subtask_fetch->subtask_instruction);
	if (count($ins_t) > 0)
	{
	  $ins[0] = $ins_t[0];
	  if (count($ins_t) > 1)
	  {
	    $ins[1] = $ins_t[1];
	  }
	}
	unset($ins_t);
      }
     
      $values = reset($subtask_fetch->subtask_values);
      $owner = '';
      $comma = '';
      
      foreach ($subtask_fetch->share_holders_participant as $holder)
      {
	$owner = $owner . $comma . $holder->participant_name;
	$comma = ', ';
      }

      return $this->svgBody("Roman",
'osemoji',
$subtask_fetch->subtask_name,
($subtask_fetch->subtask_symbol != null) ? ('&#'.intval($subtask_fetch->subtask_symbol).';') : null,
'osemoji',
[($ins[0]),($ins[1])],
'osemoji',
$values->subtask_type_name,
($owner != '') ? ($owner) : (($values->subtask_type_ownable != 0) ? 'Available' : '' ),
(($subtask_fetch->subtask_accumulative != 0) ? 'Accumulative' : 'Non-Accumulative'),
($values->subtask_category_color != null) ? ($values->subtask_category_color) : '#D0D0D0',
$subtask_fetch->subtask_description,
[
  ['Task:',$values->task_title],
  ['Value Range:',sprintf("[%0.2f;%0.2f]",intval(100*$values->subtask_base_value)/100,
  intval(100*(($values->subtask_max_value !== null)? ($values->subtask_max_value) : ($values->subtask_base_value)))/100)],
  ['Successes:',intval($values->subtask_success_count_total)],
  ['Demand:',sprintf("%+0.2f",intval(100*$values->contemporary_demand_cur)/100)],
  ['Current Value:',sprintf("%0.2f",intval(100*$values->final_value_cur)/100)]

],
$subtask_fetch->subtask_image,
'Last Update: '.Time::now().' UTC'//Configure::getInstance()->read('Datasources')['default']['timezone']
);
    }
    }
    else
    {
      return null;
    }
    }

    /**
     * png method
     *
     * @return \Cake\Http\Response|null
     */
    public function png($id = null)
    {
      if ($id != null)
      {
    $subtasks = $this->Subtasks->find('all')
	->contain(['SubtaskValues','Tasks', 'ShareHoldersParticipant'])
	->where(['Subtasks.id' => $id])
	->where(['Subtasks.subtask_visible' => 1])
	->where(['Tasks.task_start <=' => Time::now()])
      ;
      
      $unset = true;
      
      $subtask_fetch = null;
      
      foreach ($subtasks as $subtask)
      {
	$this->set('subtask', $subtask);
	$this->set('_serialize', ['subtask']);
	$subtask_fetch = $subtask;
	$unset = false;
      }
  
      if ($unset)
      {
	$this->Flash->error(__('Sorry! This data is restricted.'));
	return $this->redirect(['controller' => 'users', 'action' => 'login']);
      }
      else
      {
      $ins[0] = '';
      $ins[1] = '';
      {
	$ins_t = explode("\n",$subtask_fetch->subtask_instruction);
	if (count($ins_t) > 0)
	{
	  $ins[0] = $ins_t[0];
	  if (count($ins_t) > 1)
	  {
	    $ins[1] = $ins_t[1];
	  }
	}
	unset($ins_t);
      }
     
      $values = reset($subtask_fetch->subtask_values);
      $owner = '';
      $comma = '';
      
      foreach ($subtask_fetch->share_holders_participant as $holder)
      {
	$owner = $owner . $comma . $holder->participant_name;
	$comma = ', ';
      }

      return $this->pngBody('webroot/font/roman/NimbusRomNo9L-Reg.ttf',
'webroot/font/osemoji/OpenSansEmoji.ttf',
$subtask_fetch->subtask_name,
($subtask_fetch->subtask_symbol != null) ? ('&#'.intval($subtask_fetch->subtask_symbol).';') : null,
'webroot/font/osemoji/OpenSansEmoji.ttf',
[($ins[0]),($ins[1])],
'webroot/font/osemoji/OpenSansEmoji.ttf',
$values->subtask_type_name,
($owner != '') ? ($owner) : (($values->subtask_type_ownable != 0) ? 'Available' : '' ),
(($subtask_fetch->subtask_accumulative != 0) ? 'Accumulative' : 'Non-Accumulative'),
($values->subtask_category_color != null) ? ($values->subtask_category_color) : '#D0D0D0',
$subtask_fetch->subtask_description,
[
  ['Task:',$values->task_title],
  ['Value Range:',sprintf("[%0.2f;%0.2f]",intval(100*$values->subtask_base_value)/100,
  intval(100*(($values->subtask_max_value !== null)? ($values->subtask_max_value) : ($values->subtask_base_value)))/100)],
  ['Successes:',intval($values->subtask_success_count_total)],
  ['Demand:',sprintf("%+0.2f",intval(100*$values->contemporary_demand_cur)/100)],
  ['Current Value:',sprintf("%0.2f",intval(100*$values->final_value_cur)/100)]

],
$subtask_fetch->subtask_image,
'Update: '.Time::now().' UTC'//Configure::getInstance()->read('Datasources')['default']['timezone']
);
    }

      }
      else
      {
	return null;
      }
    }
}
