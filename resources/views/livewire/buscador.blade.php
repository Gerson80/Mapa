<div>
    <div class="flex mb-2">
        <!-- Parte del buscador para filtrar dependiendo del edificio, departamento o servicio -->
        @if($boton_activado==0)
        <div class="w-1/3 inline-flex justify-center">
            <button class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="botonBusqueda(1)">Buscar Edificio</button>
        </div>

        <div class="w-1/3 inline-flex justify-center">
            <button class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="botonBusqueda(2)">Buscar Departamento</button>
        </div>

        <div class="w-1/3 inline-flex justify-center">
            <button class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="botonBusqueda(3)">Buscar Servicio</button>
        </div>
        <!-- Verifica que boton esta activado y muestra en pantalla el buscador -->
        @elseif($boton_activado==1)
        <div class="bg-gray-800 px-4 py-2 flex flex-col items-center w-full">
            <input wire:model.lazy="edificio" type="text" class="w-full py-2 px-3 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Buscar Edificio...">
            <!-- verifica que se haya hecho una busqueda para mostrar los resultados -->
            @if($edificio!='')
            <table class="border-collapse w-full bg-gray-800">
                <thead>
                    <tr>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Nombre</th>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Nombre Comun</th>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Letra</th>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Ubicación</th>
                    </tr>
                </thead>
                <tbody class="text-gray-100">
                @foreach($edificios as $edificio)
                    <tr>
                        <td class="py-3 px-4">{{ $edificio->nombre }}</td>
                        <td class="py-3 px-4">{{ $edificio->nombre_comun }}</td>
                        <td class="py-3 px-4">{{ $edificio->letra }}</td>
                        <td class="py-3 px-4">{{ $edificio->ubicacion }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>              
            @else
            <p class="text-left py-3 px-4 text-gray-200 font-bold uppercase">
                no hay registros que coincidan o no se ha realizado ninguna busqueda
            </p>
            @endif

            <button class="ml-2 p-2 bg-gray-700 rounded-md focus:outline-none focus:ring hover:bg-red-500" wire:click="btnBuscarReset()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
        @elseif($boton_activado==2)
        <div class="bg-gray-800 px-4 py-2 flex flex-col items-center w-full">
            <input wire:model.lazy="departamento" type="text" class="w-full py-2 px-3 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Buscar Departamento...">
            
            @if($departamento!='')
            <table class="border-collapse w-full bg-gray-800">
                <thead>
                    <tr>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Nombre</th>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Descripcion</th>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Horario</th>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Encargado</th>
                    </tr>
                </thead>
                <tbody class="text-gray-100">
                @foreach($departamentos as $departamento)
                    <tr>
                        <td class="py-3 px-4">{{ $departamento->nombre }}</td>
                        <td class="py-3 px-4">{{ $departamento->descripcion }}</td>
                        <td class="py-3 px-4">{{ $departamento->horario }}</td>
                        @foreach($departamento->encargado as $encargado)
                        <td class="py-3 px-4">{{ $encargado->nombre }}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>              
            @else
            <p class="text-left py-3 px-4 text-gray-200 font-bold uppercase">
                no hay registros que coincidan o no se ha realizado ninguna busqueda
            </p>
            @endif

            <button class="ml-2 p-2 bg-gray-700 rounded-md focus:outline-none focus:ring hover:bg-red-500" wire:click="btnBuscarReset()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
        @elseif($boton_activado==3)
        <div class="bg-gray-800 px-4 py-2 flex flex-col items-center w-full">
            <input wire:model.lazy="tramite" type="text" class="w-full py-2 px-3 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Buscar Servicio...">
            @if($tramite!='')
            <table class="border-collapse w-full bg-gray-800">
                <thead>
                    <tr>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Descripcion</th>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Horario</th>
                    </tr>
                </thead>
                <tbody class="text-gray-100">
                @foreach($tramites as $tramite)
                    <tr>
                        <td class="py-3 px-4">{{ $tramite->descripcion }}</td>
                        <td class="py-3 px-4">{{ $tramite->horario }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>              
            @else
            <p class="text-left py-3 px-4 text-gray-200 font-bold uppercase">
                no hay registros que coincidan o no se ha realizado ninguna busqueda
            </p>
            @endif

            <button class="ml-2 p-2 bg-gray-700 rounded-md focus:outline-none focus:ring hover:bg-red-500" wire:click="btnBuscarReset()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
        @endif
    </div>
</div>