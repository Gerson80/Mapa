<div>
<div class="relative bg-black sm:flex sm:justify-center  min-h-screen bg-dots-darker bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="">

            <!-- componente buscador -->
            @livewire('buscador')
            

            <!-- Croquis del mapa mapeado -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
                <div class="bg-white dark:bg-gray-800/50 overflow-hidden shadow-xl sm:rounded-lg relative">
                    
                    <div class="w-screen h-full bg-slate-600">
                        <img src="{{ asset('croquis.png') }}" width="1200" height="800" alt="Descripción de la imagen" usemap="#mi-mapa" wire:click="resetear()">
                        <map name="mi-mapa">
                            
                            <button  style="position: absolute; top: 160px; left: 72px; width: 75px; height: 75px" class="duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(1)" >N</button>
                            <button  style="position: absolute; top: 160px; left: 190px; width: 90px; height: 75px" class="duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(2)" >M</button>
                            <button  style="position: absolute; top: 247px; left: 240px; width: 30px; height: 30px" class=" duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(3)" >0</button>
                            <button  style="position: absolute; top: 285px; left: 190px; width: 90px; height: 80px" class=" duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(4)" >L</button>
                            <button  style="position: absolute; top: 272px; left: 310px; width: 100px; height: 32px" class="duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(5)" >F</button>
                            <button  style="position: absolute; top: 214px; left: 378px; width: 80px; height: 32px" class=" duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(6)" >H</button>
                            <button  style="position: absolute; top: 214px; left: 500px; width: 40px; height: 32px" class=" duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(7)" >G</button>
                            <button  style="position: absolute; top: 172px; left: 550px; width: 45px; height: 75px" class=" duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(8)" >K</button>
                            <button  style="position: absolute; top: 265px; left: 432px; width: 90px; height: 38px" class=" duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(9)" >E</button>
                            <button  style="position: absolute; top: 324px; left: 418px; width: 106px; height: 34px" class="duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(10)" >D</button>
                            <button  style="position: absolute; top: 304px; left: 612px; width: 100px; height: 32px" class="duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(11)" >C</button>   
                            <button  style="position: absolute; top: 353px; left: 612px; width: 72px; height: 32px" class=" duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(12)" >A</button>  
                            <button  style="position: absolute; top: 353px; left: 695px; width: 45px; height: 32px" class="duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(13)" >B</button>                                                                                                        
                            <button  style="position: absolute; top: 503px; left: 408px; width: 35px; height: 31px" class="duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(14)" >J</button>
                           
                           
                           

                        </map>
                    </div>


                   

                    <!-- div con informacion detallada de los edificios -->
                    @if($detalle_edificio!="" )


                        <div class="rounded-2xl ml-80  bg-blue-950 w-1/3  absolute inset-y-10 inset-x-96 mx-12  px-4 py-3">
                            <div class=" rounded-lg text-center">
                            <h3 class="font-bold text-white text-xl mb-2 p-1"> EDIFICIO {{strtoupper($detalle_edificio->letra)  }}</h3>
                            </div>

                            <div class="border-dashed border-2 border-white rounded-lg bg-blue-950 ">
                            <p class="text-white text-md m-5"> <span class="font-bold">Servicios:</span>
                                @foreach ($detalle_edificio->departamentos as $departamentos)
                                    @foreach ($departamentos->tramites as $servicios)
                                            <br> {{ $servicios->descripcion }}
                                    @endforeach
                                @endforeach
                            </p>
                            <p class="text-white text-md m-5"> <span class="font-bold">Ubicacion: </span> <br>{{ $detalle_edificio->ubicacion }}</p> 
                            </div>
                            <div class="border-dashed border-2 border-white rounded-lg bg-blue-950 my-3 text-white p-3">
                                <div class="text-center ">
                                    <p>DEPARTAMENTOS</p>
                                </div>
                               
                                @foreach($detalle_edificio->departamentos as $departamentos)
                                    <P class="text-white mx-5" >{{ $departamentos->nombre }}</P>
                                @endforeach


                            </div>
                            
                            <div class="text-center">
                                <button wire:click="resetear" class="font-bold   px-4 py-2 rounded-md border border-gray-300 text-white hover:bg-blue-800/75">Cerrar</button>
                            </div>
                        </div>
                    @endif

            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="flex justify-center  px-0 sm:items-center sm:justify-between py-8">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            <div class="flex items-center gap-4">
                <p class="mx-8">Derechos reservados a: Gerson Daniel Herrera Caamal</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>