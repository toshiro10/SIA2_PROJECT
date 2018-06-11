<?php
namespace App\Controller;

use App\Controller\AppController;

/**
* Books Controller
*
* @property \App\Model\Table\BooksTable $Books
*
* @method \App\Model\Entity\Book[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
*/
class BooksController extends AppController
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
    $books = $this->paginate($this->Books);

    $this->set(compact('books'));

    $query = $this->Books
    // Use the plugins 'search' custom finder and pass in the
    // processed query params
    ->find('search', ['search' => $this->request->getQueryParams()])
    // You can add extra things to the query if you need to
    ->where(['title IS NOT' => null]);

$this->set('books', $this->paginate($query));
}

/**
 * View method
 *
 * @param string|null $id Book id.
 * @return \Cake\Http\Response|void
 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
 */
public function view($id = null)
{
    $book = $this->Books->get($id, [
        'contain' => ['title']
    ]);

    $this->set('book', $book);
}

/**
 * Add method
 *
 * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
 */
// f

/**
 * Edit method
 *
 * @param string|null $id Book id.
 * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
 * @throws \Cake\Network\Exception\NotFoundException When record not found.
 */
public function edit($id = null)
{
    $book = $this->Books->get($id, [
        'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
        $book = $this->Books->patchEntity($book, $this->request->getData());
        if ($this->Books->save($book)) {
            $this->Flash->success(__('The book has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The book could not be saved. Please, try again.'));
    }
  //  $editors = $this->Books->Editors->find('list', ['limit' => 200]);
  //  $this->set(compact('book', 'editors'));
}

/**
 * Delete method
 *
 * @param string|null $id Book id.
 * @return \Cake\Http\Response|null Redirects to index.
 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
 */
public function delete($id = null)
{
    $this->request->allowMethod(['post', 'delete']);
    $book = $this->Books->get($id);
    if ($this->Books->delete($book)) {
        $this->Flash->success(__('The book has been deleted.'));
    } else {
        $this->Flash->error(__('The book could not be deleted. Please, try again.'));
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
