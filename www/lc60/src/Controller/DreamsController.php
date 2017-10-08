<?php
namespace App\Controller;

use App\Controller\RssController;
use Cake\I18n\Time;
use Cake\Routing\Router;
use Cake\Event\Event;

/**
 * Dreams Controller
 *
 * @property \App\Model\Table\DreamsTable $Dreams
 *
 * @method \App\Model\Entity\Dream[] paginate($object = null, array $settings = [])
 */
class DreamsController extends RssController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Participants']
        ];
	$dreams = $this->paginate($this->Dreams->find()
	  ->where(['Dreams.dream_timestamp <=' => Time::now()])
	  ->order(['Dreams.id' => 'DESC']));
        $this->set(compact('dreams'));
        $this->set('_serialize', ['dreams']);
    }

    /**
     * manage method
     *
     * @return \Cake\Http\Response|null
     */
    public function manage()
    {
        $this->paginate = [
            'contain' => ['Participants']
        ];
        $dreams = $this->paginate($this->Dreams);        

        $this->set(compact('dreams'));
        $this->set('_serialize', ['dreams']);
    }

    /**
     * View method
     *
     * @param string|null $id Dream id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dream = $this->Dreams->get($id, [
            'contain' => ['Participants', 'DreamWithType', 'SubtaskDreamSuperName', 'SubtaskDreams', 'SuccessfulSubtaskDividendScores', 'SuccessfulSubtaskTask', 'SuccessfulSubtaskTaskWithCalculatedScoring']
        ]);
        
        $dream->user_id = $this->Auth->user('id');

        $this->set('dream', $dream);
        $this->set('_serialize', ['dream']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dream = $this->Dreams->newEntity();
        if ($this->request->is('post')) {
            $dream = $this->Dreams->patchEntity($dream, $this->request->getData());
            if ($this->Dreams->save($dream)) {
                $this->Flash->success(__('The dream '.($dream->id).' has been saved.'));

                return $this->redirect(['controller' => 'SubtaskDreams', 'action' => 'add',($dream->id)]);
            }
            $this->Flash->error(__('The dream could not be saved. Please, try again.'));
        }
        $participants = $this->Dreams->Participants->find('list', ['limit' => 200]);
        $this->set(compact('dream', 'participants'));
        $this->set('_serialize', ['dream']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dream id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dream = $this->Dreams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dream = $this->Dreams->patchEntity($dream, $this->request->getData());
            if ($this->Dreams->save($dream)) {
                $this->Flash->success(__('The dream has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dream could not be saved. Please, try again.'));
        }
        $participants = $this->Dreams->Participants->find('list', ['limit' => 200]);
        $this->set(compact('dream', 'participants'));
        $this->set('_serialize', ['dream']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dream id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dream = $this->Dreams->get($id);
        if ($this->Dreams->delete($dream)) {
            $this->Flash->success(__('The dream has been deleted.'));
        } else {
            $this->Flash->error(__('The dream could not be deleted. Please, try again.'));
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
      $title= 'LC60D';
      $description= 'Lucidity Challenge 60 Recent Dreams';
      $ttl = 1200;

      $rssString = ($this->rssHead($baseUrl,$title,$description,$ttl));
	      
      $queryDreams = $this->Dreams->find()
	    ->contain('Participants')
	    ->contain('DreamWithType')
	    ->where(['Dreams.dream_timestamp <=' => Time::now()])
	    ->where(['Dreams.id <' => 2000 ]) //remove this
	    ->order(['Dreams.dream_timestamp' => 'desc'])
	    ->limit(10)
      ;
      
      foreach ($queryDreams as $dream)
      {
        $dream_type = 'Dream';
	$dream_value = null;
	
	foreach ($dream->dream_with_type as $dreamWithType)
	{
	  $dream_type  = $dreamWithType->dream_type_short_name;
	  $dream_value = $dreamWithType->final_value_truncate;
	}
      
	$itemTitle =  $dream_type. ' by '. $dream->participant->participant_name.(($dream_value != null) ? (sprintf(' (%d points)',$dream_value)):('')).sprintf(' (%04d-%02d-%02d)',$dream->dream_timestamp->year,$dream->dream_timestamp->month,$dream->dream_timestamp->day);
	$itemDescription = '';
	$itemUrl = $dream->url;
	$permalink = $baseUrl.'dreams/view/'.$dream->id;
	$publishTime =  strtotime($dream->dream_timestamp);

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
