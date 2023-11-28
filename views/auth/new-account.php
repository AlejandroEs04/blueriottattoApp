<div class="flex flex-col items-center justify-center mt-20" >
    <div class="md:w-1/2 w-full px-4 md:px-0" >
        <h1 class="font-bold text-2xl uppercase text-blue-500" >Crear cuenta</h1>
        <p class="text-white font-light text-lg" >Ingresa con tus datos para crear una cuenta</p>
        <form class="mt-5 flex flex-col gap-5" method="POST" action="/new-account" >
            <div class="grid grid-cols-1 gap-0 sm:grid-cols-2 sm:gap-5" >
                <div class="flex flex-col items-start" >
                    <label class="text-white font-bold text-lg" >Nombre</label>
                    <input 
                        type="text" 
                        placeholder="Nombre" 
                        name="nombre"
                        class="p-2 w-full"
                    >
                </div>
                <div class="flex flex-col items-start" >
                    <label class="text-white font-bold text-lg" >Apellido</label>
                    <input 
                        type="text" 
                        placeholder="Apellido" 
                        name="apellido"
                        class="p-2 w-full"
                    >
                </div>
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Numero</label>
                <input 
                    type="number" 
                    placeholder="Numero de Celular" 
                    name="numero"
                    class="p-2 w-full"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Usuario</label>
                <input 
                    type="text" 
                    placeholder="Nombre de usuario" 
                    name="usuario"
                    class="p-2 w-full"
                >
            </div>

            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Contraseña</label>
                <input 
                    type="password" 
                    placeholder="Contraseña" 
                    name="password"
                    class="p-2 w-full"
                >
            </div>

            <button
                type="submit"
                class="px-3 py-2 font-bold text-white rounded-lg bg-blue-600 hover:bg-blue-500 transition-colors"
            >
                Crear cuenta
            </button>
        </form>

        <div class="flex flex-col gap-2 items-start text-white mt-5" >
            <p>¿Ya tienes cuenta? <a href="/login" class="text-blue-500 hover:text-blue-600 transition-colors" >Iniciar Sesion</a></p>
            <p>¿Olvidaste tu contraseña? <a href="/forget-password" class="text-blue-500 hover:text-blue-600 transition-colors" >Restablecela</a></p>
        </div>
    </div>
</div>