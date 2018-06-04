<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property int $id_book
 * @property int $id_state
 * @property \Cake\I18n\FrozenDate $mdate
 * @property string $lkey
 * @property string $title
 * @property string $year
 * @property int $volume
 * @property string $journal
 * @property int $number
 * @property string $url
 * @property string $ee
 * @property string $pages
 *
 * @property \App\Model\Entity\Author[] $authors
 */
class Article extends Entity
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
        'id_book' => true,
        'id_state' => true,
        'mdate' => true,
        'lkey' => true,
        'title' => true,
        'year' => true,
        'volume' => true,
        'journal' => true,
        'number' => true,
        'url' => true,
        'ee' => true,
        'pages' => true,
        'authors' => true
    ];
}
