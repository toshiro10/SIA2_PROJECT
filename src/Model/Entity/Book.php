<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 * @property int $year
 * @property string $title
 * @property int $editor_id
 * @property string $isbn
 * @property string $ee
 * @property string $series
 * @property string $url
 *
 * @property \App\Model\Entity\Editor $editor
 */
class Book extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'modified' => true,
        'created' => true,
        'year' => true,
        'title' => true,
        'editor_id' => true,
        'isbn' => true,
        'ee' => true,
        'series' => true,
        'url' => true,
        'editor' => true
    ];
}
