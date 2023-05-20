<?php

namespace App\Http\Livewire;





use Livewire\Component;

use App\Models\Edificio;
use App\Models\Departamento;
use App\Models\Tramite;
class Buscador extends Component
{
    public $boton_activado = 0 ;
    public $edificio = "";
    public $departamento = "";
    public $tramite = "";


    

    public function render()
    {
        return view('livewire.buscador', [
            //buscador generico dependiendo de una letra (busqueda letra por letra)

            'edificios' => Edificio::where('nombre','like', '%'.$this->edificio.'%')->get(),
            'departamentos' => Departamento::where('nombre','like', '%'.$this->departamento.'%')->get(),
            'tramites' => Tramite::where('descripcion','like', '%'.$this->tramite.'%')->get(),
        ]);
        return view('livewire.mapeo')->with('boton_activado', $this->boton_activado);
    }

    public function botonBusqueda($boton)
    {
        $this->boton_activado=$boton;
    }

    public function btnBuscarReset()
    {
        $this->boton_activado = 0;
    }
}
