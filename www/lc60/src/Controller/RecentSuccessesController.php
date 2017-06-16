<?php
namespace App\Controller;

use App\Controller\RssController;
use Cake\Routing\Router;

/**
 * RecentSuccesses Controller
 *
 * @property \App\Model\Table\RecentSuccessesTable $RecentSuccesses
 *
 * @method \App\Model\Entity\RecentSuccess[] paginate($object = null, array $settings = [])
 */
class RecentSuccessesController extends RssController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Participants', 'Dreams', 'DreamTypes', 'Tasks', 'Subtasks', 'Tasks', 'Subtasks', 'SubtaskCategories', 'Participants']
        ];
        $recentSuccesses = $this->paginate($this->RecentSuccesses);

        $this->set(compact('recentSuccesses'));
        $this->set('_serialize', ['recentSuccesses']);
    }

    /**
     * View method
     *
     * @param string|null $id Recent Success id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recentSuccess = $this->RecentSuccesses->get($id, [
            'contain' => ['Participants', 'Dreams', 'DreamTypes', 'Tasks', 'Subtasks', 'Tasks', 'Subtasks', 'SubtaskCategories', 'Participants']
        ]);

        $this->set('recentSuccess', $recentSuccess);
        $this->set('_serialize', ['recentSuccess']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
	/*
        $recentSuccess = $this->RecentSuccesses->newEntity();
        if ($this->request->is('post')) {
            $recentSuccess = $this->RecentSuccesses->patchEntity($recentSuccess, $this->request->getData());
            if ($this->RecentSuccesses->save($recentSuccess)) {
                $this->Flash->success(__('The recent success has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recent success could not be saved. Please, try again.'));
        }
        $participants = $this->RecentSuccesses->Participants->find('list', ['limit' => 200]);
        $dreams = $this->RecentSuccesses->Dreams->find('list', ['limit' => 200]);
        $dreamTypes = $this->RecentSuccesses->DreamTypes->find('list', ['limit' => 200]);
        $contemporaryTasks = $this->RecentSuccesses->ContemporaryTasks->find('list', ['limit' => 200]);
        $subtasks = $this->RecentSuccesses->Subtasks->find('list', ['limit' => 200]);
        $subtaskTasks = $this->RecentSuccesses->SubtaskTasks->find('list', ['limit' => 200]);
        $subtaskSupers = $this->RecentSuccesses->SubtaskSupers->find('list', ['limit' => 200]);
        $subtaskCategories = $this->RecentSuccesses->SubtaskCategories->find('list', ['limit' => 200]);
        $subtaskOwnerParticipants = $this->RecentSuccesses->SubtaskOwnerParticipants->find('list', ['limit' => 200]);
        $this->set(compact('recentSuccess', 'participants', 'dreams', 'dreamTypes', 'contemporaryTasks', 'subtasks', 'subtaskTasks', 'subtaskSupers', 'subtaskCategories', 'subtaskOwnerParticipants'));
        $this->set('_serialize', ['recentSuccess']);
        */
        
        $this->Flash->error(__('You cannot edit a read-only view!'));
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recent Success id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
    /*
        $recentSuccess = $this->RecentSuccesses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recentSuccess = $this->RecentSuccesses->patchEntity($recentSuccess, $this->request->getData());
            if ($this->RecentSuccesses->save($recentSuccess)) {
                $this->Flash->success(__('The recent success has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recent success could not be saved. Please, try again.'));
        }
        $participants = $this->RecentSuccesses->Participants->find('list', ['limit' => 200]);
        $dreams = $this->RecentSuccesses->Dreams->find('list', ['limit' => 200]);
        $dreamTypes = $this->RecentSuccesses->DreamTypes->find('list', ['limit' => 200]);
        $contemporaryTasks = $this->RecentSuccesses->ContemporaryTasks->find('list', ['limit' => 200]);
        $subtasks = $this->RecentSuccesses->Subtasks->find('list', ['limit' => 200]);
        $subtaskTasks = $this->RecentSuccesses->SubtaskTasks->find('list', ['limit' => 200]);
        $subtaskSupers = $this->RecentSuccesses->SubtaskSupers->find('list', ['limit' => 200]);
        $subtaskCategories = $this->RecentSuccesses->SubtaskCategories->find('list', ['limit' => 200]);
        $subtaskOwnerParticipants = $this->RecentSuccesses->SubtaskOwnerParticipants->find('list', ['limit' => 200]);
        $this->set(compact('recentSuccess', 'participants', 'dreams', 'dreamTypes', 'contemporaryTasks', 'subtasks', 'subtaskTasks', 'subtaskSupers', 'subtaskCategories', 'subtaskOwnerParticipants'));
        $this->set('_serialize', ['recentSuccess']);
        */
        
        $this->Flash->error(__('You cannot edit a read-only view!'));
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recent Success id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    /*    
        $this->request->allowMethod(['post', 'delete']);
        $recentSuccess = $this->RecentSuccesses->get($id);
        if ($this->RecentSuccesses->delete($recentSuccess)) {
            $this->Flash->success(__('The recent success has been deleted.'));
        } else {
            $this->Flash->error(__('The recent success could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        */
        
        $this->Flash->error(__('You cannot edit a read-only view!'));
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
      $title= 'LC60 Recent Subtask Success';
      $description= 'Lucidity Challenge 60 Recent Subtask Successes';
      $ttl = 1200;

      $rssString = ($this->rssHead($baseUrl,$title,$description,$ttl));
           
      $queryNews = $this->RecentSuccesses->find('all')/*
	    ->innerJoinWith('Participants', function ($q) {
		return $q->where(['Participants.id' => 'RecentSuccesses.participant_id']);
	    })*/
	    //->where(['News.publish <=' => Time::now()])
	    ->order(['RecentSuccesses.dream_timestamp' => 'DESC'])
	    ->limit(20)
      ;

      foreach ($queryNews as $news)
      {

	$itemTitle = $news->subtask_name.' ('.($news->participant_name).')';
	$dreamType = '';
	$completion = '';
	if ($news->dream_type_id != $news->subtask_id)
	{
	  $dreamType = ($news->dream_type_short_name != null)? 'with '.$news->dream_type_short_name : '';
	  $completion = ' completed subtask ';
	}
	else
	{
	  $completion = ' posted '.$dreamType;
	}
	$itemDescription = ($news->participant_name).$completion.($news->subtask_name).' for '.$news->final_value.' point'.(($news->final_value != 1)? 's' : '').'.';
	$itemUrl = $news->url;
	//$permalink = $baseUrl.'recentSuccesses/view/'.$news->id;
	$permalink = $baseUrl.'dreams/view/'.$news->dream_id;
	$publishTime =  strtotime($news->dream_timestamp);

	$rssString = $rssString.($this->rssItem($itemTitle,$itemDescription,$itemUrl,$permalink,$publishTime));
      }

      $rssString = $rssString.($this->rssTail());

      return $this->rssBody($rssString);
    }
}
