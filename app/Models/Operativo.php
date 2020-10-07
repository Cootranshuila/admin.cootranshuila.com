<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operativo extends Model
{
    protected $fillable = [
        'num_operativo', 'nom_conductor', 'fecha_operativo', 'hora_operativo', 'placa_vehiculo', 'modalidad', 'num_vehiculo', 'origen_ruta', 'hora_salida', 'destino_ruta', 'sitio_operativo', 'pasajeros_con_tiquete', 'pasajeros_sin_tiquete', 'presentacion_conductor', 'presentacion_auxiliar', 'presentacion_vehiculo', 'observaciones', 'estado', 'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
