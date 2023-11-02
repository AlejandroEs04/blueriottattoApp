<div class="flex flex-col items-center justify-center mt-20" >
    <div class="md:w-1/2 w-full px-4 md:px-0" >
        <h1 class="font-bold text-2xl uppercase text-blue-500" >Iniciar Sesion</h1>
        <p class="text-white font-light text-lg" >Ingresa con tus datos para tener acceso a tu cuenta</p>
        <form class="mt-5 flex flex-col gap-5" >
            <div class="flex flex-col items-start" >
                <label class="text-white font-bold text-lg" >Usuario</label>
                <input 
                    type="text" 
                    placeholder="Nombre de usuario" 
                    name="userName"
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
                Iniciar Sesion
            </button>
        </form>

        <div class="flex flex-col gap-2 items-start text-white mt-5" >
            <a
                href="/add-date"
                class="px-3 py-2 font-bold text-white rounded-lg bg-gray-600 hover:bg-gray-700 transition-colors w-full text-center mb-2 cursor-pointer"
            >
                Continuar sin iniciar sesion
            </a>
            <p>¿No tienes cuenta? <a href="/new-account" class="text-blue-500 hover:text-blue-600 transition-colors" >Crear Cuenta</a></p>
            <p>¿Olvidaste tu contraseña? <a href="/forget-password" class="text-blue-500 hover:text-blue-600 transition-colors" >Restablecela</a></p>
        </div>
    </div>
</div>