<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PacienteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'ID' => $this->id,
            'nombres' => Str::of($this->nombres)->upper(),
            'apellidos' => Str::of($this->apellidos)->upper(),
            'edad' => $this->edad,
            'sexo' => $this->sexo,
            'dni' => $this->dni,
            'tipo_sangre' => $this->tipo_sangre,
            'telefono' => $this->telefono,
            'email' => $this->correo,
            'direccion' => $this->direccion,
            'fecha_creado' => $this->created_at->format('d-m-Y'),
            'fecha_modificacion' => $this->updated_at->format('d-m-Y'),
        ];
    }

    public function with($request)
    {
        return [ 'res' => true ];
    }
}
