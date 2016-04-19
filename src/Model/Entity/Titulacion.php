<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Titulacion Entity.
 *
 * @property string $Codigo_titulacion
 * @property string $Nombre
 * @property string $Plan
 */
class Titulacion extends Entity
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
        'Codigo_titulacion' => false,
    ];
}
