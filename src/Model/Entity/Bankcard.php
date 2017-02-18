<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bankcard Entity
 *
 * @property int $id
 * @property string $accountholder
 * @property string $type
 * @property string $accountno
 * @property string $bankname
 * @property string $branchcode
 * @property int $payment_id
 *
 * @property \App\Model\Entity\Payment $payment
 */
class Bankcard extends Entity
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
