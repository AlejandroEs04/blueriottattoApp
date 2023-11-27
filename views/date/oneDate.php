<div class="flex flex-col items-center justify-center mt-10" >
    <div class=" bg-white p-2 rounded-lg flex gap-2 w-full md:w-2/3" >
        <div class="w-full sm:w-1/3 justify-start" >
            <h3 class="font-bold text-lg text-blue-600 mb-1" >Datos del cliente</h3>
            <p class="font-bold" ><?php echo $cita->nombre . ' ' . $cita->apellido; ?></p>
            <p><?php echo $cita->numero; ?></p>
            <p class="mt-3" >Fecha: <span class="font-bold" ><?php echo $cita->fecha; ?></span></p>
            <p>Hora: <span class="font-bold" ><?php echo $cita->hora; ?></span></p>
        </div>

        <div class="w-full sm:w-2/3 text-end justify-end" >
            <div class="flex flex-col items-end" >
                <p class="text-base font-bold uppercase" >Imagen</p>
                <img 
                    src="/imagenes/<?php echo $cita->imagen; ?>" 
                    class="w-1/3"
                    alt="imagen del tatuaje <?php echo $cita->id; ?>" 
                >
            </div>

            <p class="text-lg mt-2" >Tamaño: <span class="font-bold uppercase" ><?php echo $cita->tamano; ?></span></p>
        </div>
    </div>

    <div class="flex flex-col w-full sm:w-2/3 justify-start gap-1 mt-5" >
        <h4 class="font-bold text-lg text-white" >Finalizado:</h4>
        <div class="flex gap-2" >
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
    </div>
</div>