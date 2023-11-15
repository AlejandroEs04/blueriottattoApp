<div class="flex flex-col items-center justify-center mt-10" >
    <div class="md:w-2/3 w-full px-4 md:px-0" >
        <h1 class="font-bold text-2xl uppercase text-blue-500" >Configuracion</h1>
        <p class="text-white font-light text-lg" >Configura la informacion acerca de tu negocio</p> 

        <form class="mt-5 grid grid-cols-2 gap-5" action="/admin/setting" method="post" >
            <div class="flex flex-col items-start col-span-2" >
                <label class="text-white font-bold text-lg" >Nombre del negocio</label>
                <input 
                    type="text" 
                    name="nombre"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $comercio->nombre; ?>"
                    placeholder="Nombre del negocio"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Numero de contacto</label>
                <input 
                    type="text" 
                    name="numero"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $comercio->numero; ?>"
                    placeholder="Numero de contacto"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Correo de contacto</label>
                <input 
                    type="text" 
                    name="correo"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $comercio->correo; ?>"
                    placeholder="Correo de contacto"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Hora Inicio</label>
                <input 
                    type="time" 
                    name="horaInicio"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $comercio->horaInicio; ?>"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Hora Cierre</label>
                <input 
                    type="time" 
                    name="horaFin"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $comercio->horaFin; ?>"
                >
            </div>
        </form>
    </div>
</div>