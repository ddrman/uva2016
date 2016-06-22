<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Form Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property int $tipo_doc
 * @property string $doc
 * @property string $email
 * @property string $sexo
 * @property \Cake\I18n\Time $fecha
 * @property int $telefonomov
 * @property int $telefonofij
 * @property string $direccion
 * @property string $localidad
 * @property int $cod_postal
 * @property string $nacionalidad
 * @property string $nivel_estudios
 * @property string $estud_cursa
 * @property string $centro_estud
 * @property string $idiomas
 * @property string $estud_reali
 * @property string $centro_estud_reali
 * @property string $profesion
 * @property string $lugar_trabajo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Form extends Entity
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
        'id' => false,
    ];
}
