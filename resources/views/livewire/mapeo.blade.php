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
                            
                            <area shape="rect" coords="72, 159, 148, 235" alt="Edificio N" wire:click="show(1)">
                            <area shape="rect" coords="189, 161, 279, 232" alt="Edificio M" wire:click="show(2)">
                            <area shape="rect" coords="242, 249, 273, 275" alt="Cafeteria" wire:click="show(3)">
                            <area shape="rect" coords="189, 286, 281, 365" alt="Edificio L" wire:click="show(4)">
                            <area shape="rect" coords="312, 272, 410, 304" alt="Edificio F" wire:click="show(5)">
                            <area shape="rect" coords="380, 214, 458, 246" alt="Edificio H" wire:click="show(6)">
                            <area shape="rect" coords="501, 214, 542, 246" alt="Edificio G" wire:click="show(7)">
                            <area shape="rect" coords="550, 173, 594, 247" alt="Edificio K" wire:click="show(8)">
                            <area shape="rect" coords="434, 265, 525, 303" alt="Edificio E" wire:click="show(9)">
                            <area shape="rect" coords="418, 323, 525, 354" alt="Edificio D" wire:click="show(10)">
                            <area shape="rect" coords="613, 303, 711, 334" alt="Edificio C" wire:click="show(11)">
                            <area shape="rect" coords="613, 352, 682, 384" alt="Edificio A" wire:click="show(12)">
                            <area shape="rect" coords="697, 352, 739, 384" alt="Edificio B" wire:click="show(13)">
                            <area shape="rect" coords="411, 503, 475, 533" alt="Edificio J" wire:click="show(14)">
                        </map>
                    </div>


                    <!-- Microinteraccion en la seleccion del edificio -->
                    @if ($detalle == 1)
                    <div class="w-10 h-10 absolute inset-0 ml-16 mt-40 px-2 py-0 text-blue-600 p-10 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 bg-black/80 border p-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 2)
                    <div class="w-10 h-10 absolute inset-0 ml-44 mt-40 px-3 py-0 text-blue-600 p-10 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-20 bg-black/80 p-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 3)
                    <div class="w-10 h-10 absolute inset-0 ml-60 mt-60 px-0.5 py-2.5 text-yellow-600 p-10 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-7 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                        </svg>
                    </div>
                    @elseif ($detalle == 4)
                    <div class="w-24 h-20 absolute inset-0 ml-44 mt-72 px-3 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-20 bg-black/80 p-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 5)
                    <div class="w-28 h-24 absolute inset-0 ml-72 mt-64 px-6 py-4 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-9 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 6)
                    <div class="w-28 h-24 absolute inset-0 ml-80 mt-48 px-14 py-6 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-8 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 7)
                    <div class="w-28 h-24 absolute inset-0 ml-96 mt-48 px-28 py-6 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-8 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 8)
                    <div class="w-28 h-24 absolute inset-0 ml-96 mt-36 px-40 py-6 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-20 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 9)
                    <div class="w-28 h-24 absolute inset-0 ml-64 mt-60 px-44 py-6 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-10 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 10)
                    <div class="w-28 h-24 absolute inset-0 ml-60 mt-72 px-44 py-9 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-8 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 11)
                    <div class="w-28 h-24 absolute inset-0 ml-auto mx-96 mt-72 px-40 py-4 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-8 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 12)
                    <div class="w-28 h-24 absolute inset-0 ml-auto mx-80 mt-80 px-56 py-8 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-8 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 13)
                    <div class="w-28 h-24 absolute inset-0 ml-auto mx-52 mt-80 px-64 py-8 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-8 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @elseif ($detalle == 14)
                    <div class="w-28 h-24 absolute inset-0 ml-60 mt-auto px-40 py-12 text-blue-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-8 bg-black/80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                        </svg>
                    </div>
                    @endif


                    <!-- div con informacion detallada de los edificios -->
                    @if($detalle_edificio!="")
                        <div class="rounded-2xl w-5/12 h-5/6 bg-gray-600/75 ml-auto my-auto mx-12 absolute inset-0 px-4 py-3">
                            <div class="bg-blue-100 rounded-lg text-center">
                            <h3 class="font-bold text-xl mb-2 p-1"> Edificio: {{ $detalle_edificio->letra }}</h3>
                            </div>
                            <div class="bg-white rounded-lg">
                            <p class="text-black text-md m-5"> <span class="font-bold">Nombre</span> {{ $detalle_edificio->nombre }}</p>
                            <p class="text-black text-md m-5"> <span class="font-bold">Nombre Comun</span> {{ $detalle_edificio->nombre_comun }}</p>
                            <p class="text-black text-md m-5"> <span class="font-bold">Servicios:</span> 
                                @foreach ($detalle_edificio->departamentos as $departamentos)
                                    @foreach ($departamentos->tramites as $servicios)
                                            <br> {{ $servicios->descripcion }}
                                    @endforeach
                                @endforeach
                            </p>
                            </div>
                            <div class="text-center">
                                <button class="font-bold bg-white text-black px-4 py-2 rounded-md border border-gray-300">Departamentos</button>
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