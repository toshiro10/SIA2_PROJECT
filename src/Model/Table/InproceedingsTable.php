<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inproceedings Model
 *
 * @method \App\Model\Entity\Inproceeding get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inproceeding newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inproceeding[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inproceeding|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inproceeding patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inproceeding[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inproceeding findOrCreate($search, callable $callback = null, $options = [])
 */
class InproceedingsTable extends Table
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

        $this->setTable('inproceedings');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->requirePresence('mdate', 'create')
            ->notEmpty('mdate');

        $validator
            ->scalar('lkey')
            ->maxLength('lkey', 255)
            ->requirePresence('lkey', 'create')
            ->notEmpty('lkey');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('year')
            ->maxLength('year', 255)
            ->allowEmpty('year');

        $validator
            ->scalar('crossref')
            ->maxLength('crossref', 255)
            ->allowEmpty('crossref');

        $validator
            ->scalar('booktitle')
            ->maxLength('booktitle', 255)
            ->allowEmpty('booktitle');

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
