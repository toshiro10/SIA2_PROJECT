<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Incollection Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $mdate
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 * @property int $year
 * @property string $publication_key
 * @property string $title
 * @property string $pages
 * @property string $crossref
 * @property string $title_book
 * @property string $ee
 * @property string $url
 */
class Incollection extends Entity
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
        'mdate' => true,
        'modified' => true,
        'created' => true,
        'year' => true,
        'publication_key' => true,
        'title' => true,
        'pages' => true,
        'crossref' => true,
        'title_book' => true,
        'ee' => true,
        'url' => true
    ];
}
