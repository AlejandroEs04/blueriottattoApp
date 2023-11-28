<div class="flex flex-col items-center justify-center mt-10" >
    <div class="md:w-2/3 w-full px-4 md:px-0" >
        <h1 class="font-bold text-2xl uppercase text-blue-500" >Configuracion</h1>
        <p class="text-white font-light text-lg" >Configura la informacion acerca de tu negocio</p> 

        <form class="mt-5 grid grid-cols-2 gap-5" action="/setting" method="post" >
            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Nombre(s)</label>
                <input 
                    type="text" 
                    name="nombre"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $usuario->nombre; ?>"
                    placeholder="Nombre(s)"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Apellido(s)</label>
                <input 
                    type="text" 
                    name="apellido"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $usuario->apellido; ?>"
                    placeholder="Apellido(s)"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Nombre de usuario</label>
                <input 
                    type="text" 
                    name="usuario"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $usuario->usuario; ?>"
                    placeholder="Nueva Password"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Actualizar Password</label>
                <input 
                    type="password" 
                    name="password"
                    class="py-1 px-2 rounded w-full"
                    value=""
                    placeholder="Nueva Password"
                    autocomplete="new-password"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Numero de contacto</label>
                <input 
                    type="number" 
                    name="numero"
                    class="py-1 px-2 rounded w-full"
                    value="<?php echo $usuario->numero; ?>"
                    placeholder="Correo de contacto"
                >
            </div>

            <div class="flex gap-2 items-end col-span-2" >
                <input type="number" name="actualizar" value="1" hidden >
                <input type="number" name="id" value="<?php echo $usuario->id; ?>" hidden >
                <button type="submit" class="bg-blue-600 w-40 px-1 py-0.5 text-white font-bold rounded" >
                    Actualizar Cuenta
                </button>
            </div>
        </form>

        <form action="/admin/setting" class="mt-5" >
            <input type="number" name="eliminar" value="1" hidden >
            <input type="number" name="id" value="<?php echo $usuario->id; ?>" hidden >
            <button class="bg-red-600 w-40 px-1 py-0.5 text-white font-bold rounded" >
                Eliminar Cuenta
            </button>
        </form>
    </div>
</div>