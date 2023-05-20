<div>
    <div class="flex mb-2 text-center">
        <!-- Parte del buscador para filtrar dependiendo del edificio, departamento o servicio -->
        @if($boton_activado==0)
        <div class="grid grid-cols-7 gap-4"> 
            <div></div>
            <div></div>
            <div class="w-1/7 inline-flex justify-center">
                <button class="py-2 hover:border-dashed hover:border-2 hover:border-white bg-blue-800/75 hover:bg-blue-950 text-white font-bold  px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="botonBusqueda(1)">Buscar Edificio</button>
            </div>
    
            <div class="w-1/7 inline-flex justify-center">
                <button class="py-2 hover:border-dashed hover:border-2 hover:border-white bg-blue-800/75 hover:bg-blue-950 text-white font-bold  px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="botonBusqueda(2)">Buscar Departamento</button>
            </div>
    
            <div class="w-1/7 inline-flex justify-center">
                <button class=" py-2 hover:border-dashed hover:border-2 hover:border-white bg-blue-800/75 hover:bg-blue-950 text-white font-bold  px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="botonBusqueda(3)">Buscar Servicio</button>
            </div>
            <div></div>        
        </div>
        
        <!-- Verifica que boton esta activado y muestra en pantalla el buscador -->
        @elseif($boton_activado==1)
            <div class="grid grid-cols-6 gap-4  ">
                <div></div>
                
                <div class="col-start-2 col-span-4 bg-blue-950 rounded-lg px-4 py-2 items-center w-full "> 
                    <input wire:model.lazy="edificio" type="text" class=" w-full py-2 px-3 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="k">            
                    <!-- verifica que se haya hecho una busqueda para mostrar los resultados -->
                    @if($edificio!='')
                    
                    <table class="border-collapse w-full bg-blue-950">
                        <thead>
                            <tr>
                                <th class="text-center py-3 px-4 text-gray-200 font-bold uppercase">Nombre</th>
                                <th class="text-center py-3 px-4 text-gray-200 font-bold uppercase">Nombre Comun</th>
                                <th class="text-center py-3 px-4 text-gray-200 font-bold uppercase">Letra</th>
                                <th class="text-center py-3 px-4 text-gray-200 font-bold uppercase">Ubicación</th>
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
                    <div class="w-full ">
                        <p class=" py-3 px-4 text-gray-200 font-bold  w-full items-center text-center">
                            Lamentamos informarte que no se encontraron resultados para tu búsqueda en nuestra base de datos
                        </p>
                    </div>
                    
                    @endif
        
                    <button class="py-2 hover:border-dashed hover:border-2 hover:border-white bg-blue-800/75 hover:bg-blue-950 text-white font-bold  px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="btnBuscarReset()">
                        Cerrar
                    </button>
                </div>
                

                

            </div>
        
        @elseif($boton_activado==2)
        <div class="grid grid-cols-6 gap-4">
            <div></div>
            <div class="col-start-2 col-span-4 bg-gray-800 px-4 py-2 flex flex-col items-center w-full">
                <input wire:model.lazy="departamento" type="text" class="w-full py-2 px-3 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="laboratiorio quimica">
                
                @if($departamento!='')
                <table class="border-collapse w-full bg-gray-800 ">
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
                <div class="w-full ">
                    <p class=" py-3 px-4 text-gray-200 font-bold  w-full items-center text-center">
                        Lamentamos informarte que no se encontraron resultados para tu búsqueda en nuestra base de datos
                    </p>
                </div>
                @endif
    
                <button class="py-2 hover:border-dashed hover:border-2 hover:border-white bg-blue-800/75 hover:bg-blue-950 text-white font-bold  px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="btnBuscarReset()">
                    Cerrar
                </button>
            </div>

        </div>
        
        @elseif($boton_activado==3)
        <div class="grid grid-cols-6 gap-4">
            <div></div>
            <div class="col-start-2 col-span-4 bg-gray-800 px-4 py-2 flex flex-col items-center w-full">
                <input wire:model.lazy="tramite" type="text" class="w-full py-2 px-3 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="pago">
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
                <div class="w-full ">
                    <p class=" py-3 px-4 text-gray-200 font-bold  w-full items-center text-center">
                        Lamentamos informarte que no se encontraron resultados para tu búsqueda en nuestra base de datos
                    </p>
                </div>
                @endif
    
                <button class="py-2 hover:border-dashed hover:border-2 hover:border-white bg-blue-800/75 hover:bg-blue-950 text-white font-bold  px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="btnBuscarReset()">
                    Cerrar
                </button>
            </div>

        </div>
        
        @endif
    </div>
</div>