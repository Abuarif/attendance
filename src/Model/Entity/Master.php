<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Master Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $origin_password
 * @property string $name
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $deleted
 * @property \Cake\I18n\FrozenTime $deleted_date
 */
class Master extends Entity
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
        'username' => true,
        'password' => true,
        'origin_password' => true,
        'name' => true,
        'email' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'deleted_date' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    /**
     * Hash the password.
     *
     * @var password
     * return hashed password
     */
    protected function _setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
