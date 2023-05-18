<div>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="py-12">

            <!-- componente buscador -->
            @livewire('buscador')
            

            <!-- Croquis del mapa mapeado -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
                <div class="bg-white dark:bg-gray-800/50 overflow-hidden shadow-xl sm:rounded-lg relative">
                    
                    <div class="w-screen h-full bg-slate-600">
                        <img src="{{ asset('croquis.png') }}" width="1200" height="800" alt="Descripción de la imagen" usemap="#mi-mapa" wire:click="resetear()">
                        <map name="mi-mapa">
                            
                            <button  style="position: absolute; top: 160px; left: 72px; width: 75px; height: 75px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(1)" >N</button>
                            <button  style="position: absolute; top: 160px; left: 190px; width: 90px; height: 75px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(2)" >M</button>
                            <button  style="position: absolute; top: 247px; left: 240px; width: 30px; height: 30px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(3)" >0</button>
                            <button  style="position: absolute; top: 285px; left: 190px; width: 90px; height: 80px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(4)" >L</button>
                            <button  style="position: absolute; top: 272px; left: 310px; width: 100px; height: 32px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(5)" >F</button>
                            <button  style="position: absolute; top: 214px; left: 378px; width: 80px; height: 32px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(6)" >H</button>
                            <button  style="position: absolute; top: 214px; left: 500px; width: 40px; height: 32px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(7)" >G</button>
                            <button  style="position: absolute; top: 172px; left: 550px; width: 45px; height: 75px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(8)" >K</button>
                            <button  style="position: absolute; top: 265px; left: 432px; width: 90px; height: 38px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(9)" >E</button>
                            <button  style="position: absolute; top: 324px; left: 418px; width: 106px; height: 34px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(10)" >D</button>
                            <button  style="position: absolute; top: 304px; left: 612px; width: 100px; height: 32px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(11)" >C</button>   
                            <button  style="position: absolute; top: 353px; left: 612px; width: 72px; height: 32px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(12)" >A</button>  
                            <button  style="position: absolute; top: 353px; left: 695px; width: 45px; height: 32px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(13)" >B</button>                                                                                                        
                            <button  style="position: absolute; top: 503px; left: 408px; width: 35px; height: 31px" class="  h-20 text-transparent  hover:bg-blue-950 hover:text-white py-2 px-4 rounded" wire:click="show(14)" >J</button>
                           
                           
                           

                        </map>
                    </div>


                   

                    <!-- div con informacion detallada de los edificios -->
                    @if($detalle_edificio!="")
        

                        <div class="rounded-2xl w-5/8  bg-blue-800/75 absolute inset-y-10 inset-x-0 mx-12  px-4 py-3">
                            <div class=" rounded-lg text-center">
                            <h3 class="font-bold text-white text-xl mb-2 p-1"> EDIFICIO {{strtoupper($detalle_edificio->letra)  }}</h3>
                            </div>

                            <div class="border-double border-4 border-white rounded-lg bg-blue-950 ">
                            <p class="text-white text-md m-5"> <span class="font-bold">Servicios:</span>
                                @foreach ($detalle_edificio->departamentos as $departamentos)
                                    @foreach ($departamentos->tramites as $servicios)
                                            <br> {{ $servicios->descripcion }}
                                    @endforeach
                                @endforeach
                            </p>
                            <p class="text-white text-md m-5"> <span class="font-bold">Ubicacion: </span> <br>{{ $detalle_edificio->ubicacion }}</p> 
                            </div>
                            <div class="border-double border-4 border-white rounded-lg bg-blue-950 my-3 text-white">
                                <div class="text-center ">
                                    <p>DEPARTAMENTOS</p>
                                </div>
                               
                                @foreach($detalle_edificio->departamentos as $departamentos)
                                    <P class="text-white mx-5" >{{ $departamentos->nombre }}</P>
                                @endforeach


                            </div>
                            
                            <div class="text-center">
                                <button wire:click="resetear" class="font-bold bg-blue-800/75  px-4 py-2 rounded-md border border-gray-300 text-white hover:bg-blue-950">Cerrar</button>
                            </div>
                        </div>
                    @endif

            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            <div class="flex items-center gap-4">
                <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                    Sponsor
                </a>
            </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</div>
</div>
</div>