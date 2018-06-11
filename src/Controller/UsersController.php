<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Utility\Xml;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
      public function loadxml()
    {
        if ($this->request->is('post')) {

            //debug($this->request->getData());
            $rawXML = Xml::build($this->request->getData('submittedfile.tmp_name'));
            $parsedXML =  Xml::toArray($rawXML);
            //debug($parsedXML);

            $fullXML = $parsedXML['dblp'];
            $books = $fullXML['book'];
            $articles = $fullXML['article'];
            //debug($books);
           // debug($books);

            $mdate = null;
            $key =null;
            $author = null;          
            $title = null;     
            $publisher = null;       
            $year = null;       
            $publisherID = null;       
            $isbn = null;        
            $ee = null;       
            $url = null;
            $series=null;
            $journal=null;
            $volume=null;
            $pages=null;


            $books_Table = TableRegistry::get('Books');
            $articles_Table = TableRegistry::get('Articles');
            $authorArticles_Table = TableRegistry::get('Authors_articles');
            $authors_Table = TableRegistry::get('Authors');
            $states_Table = TableRegistry::get('States');

            foreach ($books as $book){

                //debug($book);
                if(array_key_exists('@mdate', $book))
                    $mdate = $book['@mdate'];
                //debug($modified);
                //debug(array_key_exists('@mdate', $book));
                if(array_key_exists('@key', $book))
                    $key = $book['@key'];
                if(array_key_exists('author', $book))
                    $author = $book['author'];
                if(array_key_exists('title', $book))
                    $title = $book['title'];
                if(array_key_exists('publisher', $book))
                    $publisher = $book['publisher'];
                if(array_key_exists('year', $book))    
                    $year = $book['year'];
                if(array_key_exists('isbn', $book))
                    $isbn = $book['isbn'];
                if(array_key_exists('ee', $book))    
                    $ee = $book['ee'];
                if(array_key_exists('url', $book))
                    $url = $book['url'];
                if(array_key_exists('series', $book))
                    $series = $book['series'];
          //debug($modified);

                $newBook =  $books_Table->newEntity();
                $newBook->modified = $mdate;
                //$newBook->key = $key;
                $newBook->title = $title;
               // $newBook->editor_id = $publisher;
                $newBook->isbn = $isbn;
                $newBook->ee = $ee;
                $newBook->url = $url;
                $newBook->series = $series;

                //debug($newBook);

                $books_Table->save($newBook);

                $mdate = null;
                $key =null;
                $author = null;          
                $title = null;     
                $publisher = null;       
                $year = null;       
                $publisherID = null;       
                $isbn = null;        
                $ee = null;       
                $url = null;
                $series=null;
                $journal=null;
                $volume=null;
                $pages=null;




       
            }
            foreach ($articles as $article){

                //debug($book);
                if(array_key_exists('@mdate', $article))
                    $mdate = $article['@mdate'];


                //debug($modified);
                //debug(array_key_exists('@mdate', $book));
                if(array_key_exists('@key', $article))
                    $key = $article['@key'];
                if(array_key_exists('author', $article)){
                    $author = $article['author']; 
                }
                if(array_key_exists('title', $article)){
                    if(is_array($article['title'])){
                        debug($article['title']);
                        $title = $article['title']['@'];
                    }
                    else
                        $title = $article['title'];
                }
                if(array_key_exists('year', $article))
                    $year = $article['year'];
                if(array_key_exists('volume', $article))    
                    $volume = $article['volume'];
                if(array_key_exists('journal', $article))
                    $journal = $article['journal'];
                if(array_key_exists('ee', $article))    
                    $ee = $article['ee'];
                if(array_key_exists('url', $article))
                    $url = $article['url'];
                if(array_key_exists('number', $article))
                    $number = $article['number'];
                if(array_key_exists('pages', $article))
                    $pages = $article['pages'];
          //debug($modified);

                $newArticle =  $articles_Table->newEntity();
                $newArticle->mdate = $mdate;
                $newArticle->lkey = $key;
                $newArticle->author = $author;
                $newArticle->title = $title;
                $newArticle->year = $year;
                $newArticle->volume = $volume;
                $newArticle->ee = $ee;
                $newArticle->url = $url;
                $newArticle->journal = $journal;
                $newArticle->number = $number;
                $newArticle->pages = $pages;



                $articles_Table->save($newArticle);

                 if($author !=null){
                        //ajout dans la table  Author
                        if(is_array($author)){
                            foreach ($author as $auth) {
                                $query = $authors_Table->find()->where(['authorfullname' => $auth]);
                                if($query->count()==0){
                                    $newAuthor =  $authors_Table->newEntity();
                                    $newAuthor->authorfullname =$auth;
                                    $authors_Table->save($newAuthor);

                                    //ajout dans la table Authors_Articles
                                    $newAuthorArticle = $authorArticles_Table->newEntity();
                                    $getAuthorID = $authors_Table->find()->select(['id'])
                                                                        ->where(['authorfullname' => $auth]);
                                    $newAuthorArticle->id_author = $getAuthorID;
                                    $newAuthorArticle->id_article = $newArticle->id;
                                    $authorArticles_Table->save($newAuthorArticle);
                                }
                            }
                        }
                        else {
                            $query = $authors_Table->find()->where(['authorfullname' => $author]);
                            $newAuthor =  $authors_Table->newEntity();
                            $newAuthor->authorfullname =$author;
                            $authors_Table->save($newAuthor);

                            //ajout dans la table Authors_Articles
                            $newAuthorArticle = $authorArticles_Table->newEntity();
                            $getAuthorID = $authors_Table->find()->select(['id'])
                                                                ->where(['authorfullname' => $author]);
                            $newAuthorArticle->id_author = $getAuthorID;
                            $newAuthorArticle->id_article = $newArticle->id;
                        }
                }

                $mdate = null;
                $key =null;
                $author = null;          
                $title = null;     
                $publisher = null;       
                $year = null;       
                $publisherID = null;       
                $isbn = null;        
                $ee = null;       
                $url = null;
                $series=null;
                $journal=null;
                $volume=null;
                $pages=null;



       
            }




            /*foreach($parsedXML['dblp'] as $books){

                debug(sizeof($books[0]));
                debug($books[0]);
                debug($books[1]);
              
            }*/

        }
        else echo('Fail to read XML');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
    }

public function register(){
     if($this->request->is('post')){
        $firstname = $this->request->data('firstname');
        $lastname = $this->request->data('lastname');
        $email = $this->request->data('email');
        $role = $this->request->data('role');
        $username = $this->request->data('username');
        $password = $this->request->data('password');
        $users_table = TableRegistry::get('users');
        $users = $users_table->newEntity();
        $users->username = $username;
        $users->password = $password;
        $users->email = $email;
        $users->role = $role;
        $users->firstname = $firstname;
        $users->lastname = $lastname;
        if($users_table->save($users)){
          /* $this->Flash->success(__('Registration successful'));*/
           $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
        }else {
           // $this->setAction('registerfail');
            $this->Flash->error(__('Duplicate user, please try again with a different one'));
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
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }
    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('register', 'add', 'logout');
    }
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    public function logout()
    {
        $this->Auth->logout();
        return $this->redirect(
            ['controller' => 'Pages', 'action' => 'display']
        );
    }
    public function stat(){
        $authorArticles_Table = TableRegistry::get('Authors_articles');

        $mean_author = $authorArticles_Table->find();
        // You can add extra things to the query if you need to
        $mean_author->select(['count' => $mean_author->func()->count('id_author')])
                    ->group('id_article');

        debug($mean_author->toArray());
    }
}