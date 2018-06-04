<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AuthorsArticles Controller
 *
 * @property \App\Model\Table\AuthorsArticlesTable $AuthorsArticles
 *
 * @method \App\Model\Entity\AuthorsArticle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthorsArticlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $authorsArticles = $this->paginate($this->AuthorsArticles);

        $this->set(compact('authorsArticles'));
    }

    /**
     * View method
     *
     * @param string|null $id Authors Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authorsArticle = $this->AuthorsArticles->get($id, [
            'contain' => []
        ]);

        $this->set('authorsArticle', $authorsArticle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authorsArticle = $this->AuthorsArticles->newEntity();
        if ($this->request->is('post')) {
            $authorsArticle = $this->AuthorsArticles->patchEntity($authorsArticle, $this->request->getData());
            if ($this->AuthorsArticles->save($authorsArticle)) {
                $this->Flash->success(__('The authors article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authors article could not be saved. Please, try again.'));
        }
        $this->set(compact('authorsArticle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authors Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authorsArticle = $this->AuthorsArticles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authorsArticle = $this->AuthorsArticles->patchEntity($authorsArticle, $this->request->getData());
            if ($this->AuthorsArticles->save($authorsArticle)) {
                $this->Flash->success(__('The authors article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authors article could not be saved. Please, try again.'));
        }
        $this->set(compact('authorsArticle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authors Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authorsArticle = $this->AuthorsArticles->get($id);
        if ($this->AuthorsArticles->delete($authorsArticle)) {
            $this->Flash->success(__('The authors article has been deleted.'));
        } else {
            $this->Flash->error(__('The authors article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
