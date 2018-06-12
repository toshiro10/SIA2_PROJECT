<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 * @property \App\Model\Table\AuthorsTable|\Cake\ORM\Association\BelongsToMany $Authors
 *
 * @method \App\Model\Entity\Article get($primaryKey, $options = [])
 * @method \App\Model\Entity\Article newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Article[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Article|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Article patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Article[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Article findOrCreate($search, callable $callback = null, $options = [])
 */
class ArticlesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('articles');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        // Add the behaviour to your table
        $this->addBehavior('Search.Search');

        $this->belongsToMany('Authors', [
            'foreignKey' => 'article_id',
            'targetForeignKey' => 'author_id',
            'joinTable' => 'authors_articles'
        ]);

           $this->searchManager()
            ->value('id')
            // Here we will alias the 'q' query param to search the `Articles.title`
            // field and the `Articles.content` field, using a LIKE match, with `%`
            // both before and after.
            ->add('title', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['title']
            ]);


    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_book')
            ->allowEmpty('id_book');

        $validator
            ->integer('id_state')
            ->requirePresence('id_state', 'create')
            ->notEmpty('id_state');

        $validator
            ->date('mdate')
            ->requirePresence('mdate', 'create');
          

        $validator
            ->scalar('lkey')
            ->maxLength('lkey', 255)
            ->allowEmpty('lkey')
            ->requirePresence('lkey', 'create');
            

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('year')
            ->maxLength('year', 255)
            ->notEmpty('year');

        $validator
            ->integer('volume')
            ->allowEmpty('volume');

        $validator
            ->scalar('journal')
            ->maxLength('journal', 255)
            ->allowEmpty('journal');

        $validator
            ->integer('number')
            ->allowEmpty('number');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmpty('url');

        $validator
            ->scalar('ee')
            ->maxLength('ee', 255)
            ->allowEmpty('ee');

        $validator
            ->scalar('pages')
            ->maxLength('pages', 255)
            ->allowEmpty('pages');

        return $validator;
    }
}
