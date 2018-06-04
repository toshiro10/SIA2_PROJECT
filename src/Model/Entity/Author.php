<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Author Entity
 *
 * @property int $id
 * @property int $id_user
 * @property string $authorname
 * @property string $authorfirstname
 * @property string $authorfullname
 *
 * @property \App\Model\Entity\Article[] $articles
 */
class Author extends Entity
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
        'id_user' => true,
        'authorname' => true,
        'authorfirstname' => true,
        'authorfullname' => true,
        'articles' => true
    ];
}
