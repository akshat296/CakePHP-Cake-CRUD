<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $Photo
 * @property string $First_Name
 * @property string $Last_Name
 * @property string $Username
 * @property string $Email
 * @property string $Password
 * @property string $Gender
 * @property string $Company
 * @property string $Address_1
 * @property string $Address_2
 * @property string $City
 * @property string $Zip_Code
 * @property string $Mobile_No
 * @property string $DOB
 * @property string $Interest
 * @property string $Description
 * @property string $Rating
 */
class User extends Entity
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
        '*' => true,
        'id' => false
    ];
}
