<?php
namespace App\Controller;

use App\Controller\AppController;

/**
* Articles Controller
*
*
* @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
*/
class ArticlesController extends AppController
{

/**
 * Index method
 *
 * @return \Cake\Http\Response|void
 */
public function index()
{
   /*   $this->paginate = [
    'contain' => ['Editors']
];*/
$articles = $this->paginate($this->Articles);

$this->set(compact('articles'));

$query = $this->Articles
// Use the plugins 'search' custom finder and pass in the
// processed query params
->find('search', ['search' => $this->request->getQueryParams()])
// You can add extra things to the query if you need to
->where(['title IS NOT' => null]);

$this->set('articles', $this->paginate($query));
}

/**
 * View method
 *
 * @param string|null $id Article id.
 * @return \Cake\Http\Response|void
 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
 */
public function view($id = null)
{
    $article = $this->Articles->get($id, [
        'contain' => []
    ]);

    $this->set('article', $article);
}

/**
 * Add method
 *
 * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
 */
public function add()
{
    $article = $this->Articles->newEntity();
    if ($this->request->is('post')) {
        $article = $this->Articles->patchEntity($article, $this->request->getData());
        if ($this->Articles->save($article)) {
            $this->Flash->success(__('The article has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The article could not be saved. Please, try again.'));
    }
    $this->set(compact('article'));
}

/**
 * Edit method
 *
 * @param string|null $id Article id.
 * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
 * @throws \Cake\Network\Exception\NotFoundException When record not found.
 */
public function edit($id = null)
{
    $article = $this->Articles->get($id, [
        'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
        $article = $this->Articles->patchEntity($article, $this->request->getData());
        if ($this->Articles->save($article)) {
            $this->Flash->success(__('The article has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The article could not be saved. Please, try again.'));
    }
    $this->set(compact('article'));
}

/**
 * Delete method
 *
 * @param string|null $id Article id.
 * @return \Cake\Http\Response|null Redirects to index.
 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
 */
public function delete($id = null)
{
    $this->request->allowMethod(['post', 'delete']);
    $article = $this->Articles->get($id);
    if ($this->Articles->delete($article)) {
        $this->Flash->success(__('The article has been deleted.'));
    } else {
        $this->Flash->error(__('The article could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
}

public function initialize()
{
parent::initialize();

$this->loadComponent('Search.Prg', [
// This is default config. You can modify "actions" as needed to make
// the PRG component work only for specified methods.
'actions' => ['index', 'lookup']
]);
}
}
