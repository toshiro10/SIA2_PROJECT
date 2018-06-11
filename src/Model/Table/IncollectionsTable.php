<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Incollections Model
 *
 * @method \App\Model\Entity\Incollection get($primaryKey, $options = [])
 * @method \App\Model\Entity\Incollection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Incollection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Incollection|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Incollection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Incollection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Incollection findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IncollectionsTable extends Table
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

        $this->setTable('incollections');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->date('mdate')
            ->allowEmpty('mdate');

        $validator
            ->integer('year')
            ->allowEmpty('year');

        $validator
            ->scalar('publication_key')
            ->maxLength('publication_key', 255)
            ->allowEmpty('publication_key');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('pages')
            ->maxLength('pages', 50)
            ->allowEmpty('pages');

        $validator
            ->scalar('crossref')
            ->maxLength('crossref', 255)
            ->allowEmpty('crossref');

        $validator
            ->scalar('title_book')
            ->maxLength('title_book', 255)
            ->allowEmpty('title_book');

        $validator
            ->scalar('ee')
            ->maxLength('ee', 255)
            ->allowEmpty('ee');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmpty('url');

        return $validator;
    }
}
