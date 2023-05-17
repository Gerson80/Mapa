<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Edificio;

class Mapeo extends Component
{

    public $detalle_edificio, $nombre, $detalle;

    public $selectedBuilding = null;

    /*public function render()
    {
        return view('livewire.mapeo', [
            'edificidos' => Edificio::all(),
        ]);
    }*/

    public function show($id)
    {
        
        $this->detalle_edificio = Edificio::find($id);
        $this->detalle = $id;

    }

    public function resetear()
    {
        $this->detalle_edificio = "";

        $this->detalle = "";
    }

    public function selectBuilding($buildingName)
  {
    $this->selectedBuilding = $buildingName;
    $this->emit('buildingSelected');
  }

  public function clearSelectedBuilding()
  {
    $this->selectedBuilding = null;
  }
}
