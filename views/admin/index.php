<div class="flex flex-col items-center justify-center mt-10" >
    <div class="md:w-2/3 w-full px-4 md:px-0" >
        <h1 class="font-bold text-2xl uppercase text-blue-500" >Administrar Citas</h1>
        <p class="text-white font-light text-lg" >Aqui podras administrar las citas y ver su informacion, Haz click para ver mas informacion</p>

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
                    <a href="/date?id=<?php echo $cita->id; ?>" class="bg-gray-200 w-full p-4 rounded-lg flex gap-4" >
                        <div class="w-2/5 border-r-2 border-r-gray-500" >
                            <h4 class="font-bold text-lg" >Cliente:</h4>
                            <p id="nombre" ><?php echo $cita->nombre ?></p>
                            <p><?php echo $cita->numero; ?></p>
                        </div>

                        <div class="w-2/5" >
                            <h4 class="font-bold text-lg" >Cita:</h4>
                            <p id="fecha" ><?php echo $cita->fecha; ?></p>
                            <p><?php echo $cita->hora; ?></p>
                            <?php if($cita->tamano === 'pequeño'):?>
                                <p>Precio: <span class="font-bold" >$300</span></p>
                                <p>Tamaño: <span class="font-bold" >Pequeño</span></p>
                            <?php else: ?>
                                <p>Precio: <span class="font-bold" >$500</span></p>
                                <p>Tamaño: <span class="font-bold" >Mediano</span></p>
                            <?php endif; ?>

                        </div>

                        <div class="w-1/5 flex flex-col gap-1" >
                            <h4 class="font-bold text-lg" >Finalizado:</h4>
                            <form action="/admin" >
                                <input type="number" name="id" value="<?php  echo $cita->id; ?>" hidden >
                                <input type="number" name="fin" value="1" hidden >
                                <button class="bg-blue-500 px-2 py-1 text-white font-bold rounded hover:bg-blue-600 transition-colors w-full" >
                                    Terminado
                                </button>
                            </form> 

                            <form action="/admin" >
                                <input type="number" name="id" value="<?php  echo $cita->id; ?>" hidden >
                                <input type="number" name="cancelar" value="1" hidden >
                                <button class="bg-red-500 px-2 py-1 text-white font-bold rounded hover:bg-red-600 transition-colors w-full" >
                                    Cancelar
                                </button>
                            </form> 
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>