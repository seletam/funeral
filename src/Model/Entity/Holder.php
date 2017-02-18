<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Holder Entity
 *
 * @property int $id
 * @property string $title
 * @property string $first_names
 * @property string $surname
 * @property int $idnumber
 * @property \Cake\I18n\Time $dob
 * @property string $package
 * @property int $premium
 * @property \Cake\I18n\Time $creation_date
 * @property \Cake\I18n\Time $modified_date
 *
 * @property \App\Model\Entity\Additional[] $additional
 * @property \App\Model\Entity\Addres[] $address
 * @property \App\Model\Entity\Dependant[] $dependant
 * @property \App\Model\Entity\Payment[] $payments
 * @property \App\Model\Entity\Phone[] $phones
 */
class Holder extends Entity
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
