<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Asignatura Entity.
 *
 * @property string $Codigo_asignatura
 * @property string $TitulacionCodigo_titulacion
 * @property string $Nombre
 * @property string $Creditos_ECTS
 * @property \App\Model\Entity\Profesor[] $profesor
 */
class Asignatura extends Entity
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
        'Código_asignatura' => false,
    ];
}
