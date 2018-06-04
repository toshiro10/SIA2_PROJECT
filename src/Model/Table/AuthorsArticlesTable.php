<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuthorsArticles Model
 *
 * @method \App\Model\Entity\AuthorsArticle get($primaryKey, $options = [])
 * @method \App\Model\Entity\AuthorsArticle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AuthorsArticle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AuthorsArticle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AuthorsArticle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorsArticle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorsArticle findOrCreate($search, callable $callback = null, $options = [])
 */
class AuthorsArticlesTable extends Table
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

        $this->setTable('authors_articles');
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
            ->integer('id_article')
            ->requirePresence('id_article', 'create')
            ->notEmpty('id_article');

        $validator
            ->integer('id_author')
            ->requirePresence('id_author', 'create')
            ->notEmpty('id_author');

        return $validator;
    }
}
