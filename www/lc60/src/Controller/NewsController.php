<?php

namespace App\Controller;

use App\Controller\RssController;
use Cake\I18n\Time;
use Cake\Event\Event;
use Cake\Routing\Router;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[] paginate($object = null, array $settings = [])
 */
class NewsController extends RssController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $news = $this->paginate($this->News->find()
       ->where(['News.publish <=' => Time::now()])
       ->order(['publish' => 'DESC']));

        $this->set(compact('news'));
        $this->set('_serialize', ['news']);
    }
    
    /**
     * Manage method
     *
     * @return \Cake\Http\Response|null
     */
    public function manage()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $news = $this->paginate($this->News);


        $this->set(compact('news'));
        $this->set('_serialize', ['news']);
    }    

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        
        if (null == $this->Auth->user('id'))
        {
           
        $this->paginate = [
            'contain' => ['Users']
        ];
        $queryNews = $this->paginate($this->News->find()
            ->where(['News.id' => $id])
	    ->where(['News.publish <=' => Time::now()])
	);
	 
	$unset = true;
	foreach ($queryNews as $news)
	{
          $this->set('news', $news);
	  $this->set('_serialize', ['news']);
	  $unset = false;
        }
        if ($unset)
        {
            $this->Flash->error(__('Sorry! This news article is restricted.'));
            return $this->redirect(['controller' => 'users', 'action' => 'login']);
        }
        
            
        }
	else
	{
	    $news = $this->News->get($id, [
            'contain' => ['Users']
        ]);
        
                $this->set('news', $news);
        $this->set('_serialize', ['news']);        

        }
        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $news = $this->News->newEntity();
        if ($this->request->is('post')) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            $news->user_id = $this->Auth->user('id');
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $users = $this->News->Users->find('list', ['limit' => 200]);
        $this->set(compact('news', 'users'));
        $this->set('_serialize', ['news']);
    }

    /**
     * Edit method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $users = $this->News->Users->find('list', ['limit' => 200]);
        $this->set(compact('news', 'users'));
        $this->set('_serialize', ['news']);
    }

    /**
     * Delete method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        if ($this->News->delete($news)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        //$this->Auth->deny(['index']);
        $this->Auth->deny(['manage']);
    }
  
    /**
     * rss method
     *
     * @return \Cake\Http\Response|null
     */
    public function rss()
    {
      $baseUrl= (Router::url('/', true));
      $title= 'LC60N';
      $description= 'Lucidity Challenge 60 News Page';
      $ttl = 1200;

      $rssString = ($this->rssHead($baseUrl,$title,$description,$ttl));
	      
      $queryNews = $this->News->find()
	    ->where(['News.publish <=' => Time::now()])
	    ->order(['News.publish' => 'desc'])
	    ->limit(10)
      ;

      foreach ($queryNews as $news)
      {
	$itemTitle = $news->title.sprintf(' (%04d-%02d-%02d)',$news->publish->year,$news->publish->month,$news->publish->day);;
	$itemDescription = $news->description;
	$itemUrl = $news->url;
	$permalink = $baseUrl.'news/view/'.$news->id;
	$publishTime =  strtotime($news->publish);

	$rssString = $rssString.($this->rssItem($itemTitle,$itemDescription,$itemUrl,$permalink,$publishTime));
      }

      $rssString = $rssString.($this->rssTail());

      return $this->rssBody($rssString);
    } 
}
