<div class="flex flex-col items-center justify-center mt-10" >
    <div class="md:w-2/3 w-full px-4 md:px-0" >
        <h1 class="font-bold text-2xl uppercase text-blue-500" >Historial de citas</h1>
        <p class="text-white font-light text-lg" >Aqui podras ver las citas previas</p> 

        <form action="/admin" class="flex flex-col mt-2" >
            <label class="font-bold text-white text-xl" >Buscar un cliente</label>
            <div class="flex gap-1" >
                <input type="text" id="searchbar" name="nombre" class="rounded px-2 py-0.5 w-full" >
                <button class="rounded bg-blue-500 hover:bg-blue-600 p-0.5 text-white font-bold" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </form> 

        <div class="w-full mt-5" >
            <div>
                <p class="font-bold text-start text-lg text-blue-400" >Informacion de la cita</p>
            </div>

            <?php if(empty($citas)): ?>
                <div>
                    <p class="text-white font-bold text-2xl" >Aun no hay citas disponibles</p>
                </div>
            <?php endif; ?>

            <div class="flex flex-col gap-4 mt-2" >
                <?php foreach($citas as $cita): ?>
                    <div class="bg-gray-200 w-full p-4 rounded-lg flex gap-4" >
                        <div class="w-3/5 border-r-2 border-r-gray-500" >
                            <h4 class="font-bold text-lg" >Cliente:</h4>
                            <p><?php echo $cita->nombre ?></p>
                            <p><?php echo $cita->numero; ?></p>
                        </div>

                        <div class="w-1/5" >
                            <h4 class="font-bold text-lg" >Cita:</h4>
                            <p><?php echo $cita->fecha; ?></p>
                            <p><?php echo $cita->hora; ?></p>
                        </div>

                        <div class="w-1/5 flex flex-col gap-1" >
                            <h4 class="font-bold text-lg" >Finalizado:</h4>
                            <form action="/admin/dates" >
                                <input type="number" name="id" value="<?php  echo $cita->id; ?>" hidden >
                                <input type="number" name="eliminar" value="1" hidden >
                                <button class="bg-red-500 px-2 py-1 text-white font-bold rounded hover:bg-red-600 transition-colors w-full" >
                                    Eliminar
                                </button>
                            </form>
                            
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>