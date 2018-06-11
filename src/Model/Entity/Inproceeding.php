<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inproceeding Entity
 *
 * @property int $id
 * @property int $id_book
 * @property int $id_state
 * @property \Cake\I18n\FrozenDate $mdate
 * @property string $lkey
 * @property string $title
 * @property string $year
 * @property string $crossref
 * @property string $booktitle
 * @property string $url
 * @property string $ee
 * @property string $pages
 */
class Inproceeding extends Entity
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
        'crossref' => true,
        'booktitle' => true,
        'url' => true,
        'ee' => true,
        'pages' => true
    ];
}
