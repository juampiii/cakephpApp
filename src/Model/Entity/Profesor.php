<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profesor Entity.
 *
 * @property string $DNI
 * @property string $Nombre
 * @property string $Apellidos
 * @property string $Codigo_CV
 * @property string $Dirección
 * @property string $Teléfono
 * @property \App\Model\Entity\Asignatura[] $asignatura
 */
class Profesor extends Entity
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
        'DNI' => false,
    ];
}
