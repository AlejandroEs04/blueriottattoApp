<div class="flex flex-col items-center justify-center mt-20" >
    <div class="md:w-1/2 w-full px-4 md:px-0" >
        <h1 class="font-bold text-2xl uppercase text-blue-500" >Agendar Cita</h1>
        <p class="text-white font-light text-lg" >Ingresa el dia, hora y tus datos para agendar la cita</p>
        <form class="mt-5 flex flex-col gap-5" action="/add-date" method="post" >
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
                    <option>-- Horarios disponibles --</option>
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

            <button
                type="submit"
                class="px-3 py-2 font-bold text-white rounded-lg bg-blue-600 hover:bg-blue-500 transition-colors"
            >
                Agendar Cita
            </button>
        </form>
    </div>
</div>