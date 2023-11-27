<div class="flex flex-col items-center justify-center my-5" >
    <div class="md:w-1/2 w-full px-4 md:px-0" >
        <h1 class="font-bold text-2xl uppercase text-blue-500" >Agendar Cita</h1>
        <p class="text-white font-light text-lg" >Ingresa el dia, hora y tus datos para agendar la cita</p>
        <div class="flex flex-col gap-2 mt-2" >
            <?php foreach($alertas['error'] as $alerta): ?>
                <div class="py-1 px-2 bg-red-600 rounded-lg text-center w-full" >
                    <p class="font-bold text-white" ><?php echo $alerta; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <form class="mt-5 flex flex-col gap-5" action="/add-date" method="post" enctype="multipart/form-data" >
            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Eliga el dia</label>
                <input 
                    type="date" 
                    name="date"
                    class="p-2 w-full"
                >
            </div>

            <div class="flex flex-col items-start">
                <label class="text-white font-bold text-lg" >Seleccione la hora</label>
                <select
                    class="p-2 w-full"
                    name="time"
                >
                    <option value="" >-- Horarios disponibles --</option>
                    <?php for($i=10; $i<=20; $i++): ?>
                        <option value="<?php echo $i . ":00"; ?>" ><?php echo $i ?>:00</option>
                        <option value="<?php echo $i . ":30"; ?>"><?php echo $i ?>:30</option>
                    <?php endfor; ?>
                </select>
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Nombre</label>
                <input 
                    type="text" 
                    name="nombre"
                    placeholder="Nombre"
                    class="p-2 w-full"
                    <?php if($nombre && $numero): ?>
                        value="<?php echo $nombre; ?>"
                        disabled
                    <?php endif; ?>
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Numero</label>
                <input 
                    type="number" 
                    name="numero"
                    placeholder="Numero"
                    class="p-2 w-full"
                    <?php if($nombre && $numero): ?>
                        value="<?php echo $numero; ?>"
                        disabled
                    <?php endif; ?>
                >
            </div>

            <div class="flex" >
                <div class="w-1/3 flex flex-col items-start" >
                    <label class="text-white font-bold text-lg" >Tamaño</label>
                    <div class="flex items-center gap-2" >
                        <input type="radio" id="pequeno" name="tamano" value="pequeño">
                        <label class="text-white" for="pequeno" >Pequeño</label>
                    </div>

                    <div class="flex items-center gap-2" >
                        <input type="radio" id="mediano" name="tamano" value="mediano">
                        <label class="text-white" for="mediano" >Mediano</label>
                    </div>
                </div>

                <div class="w-2/3 flex flex-col items-start" >
                    <label class="text-white font-bold text-lg" for="image" >Imagen del diseño</label>
                    <input 
                        type="file" 
                        id="image"
                        name="imagen"
                        accept="image/png, image/jpeg"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" 
                    >
                </div>
            </div>

            <button
                type="submit"
                class="px-3 py-2 font-bold text-white rounded-lg bg-blue-600 hover:bg-blue-500 transition-colors"
            >
                Agendar Cita
            </button>
        </form>
    </div>
</div>