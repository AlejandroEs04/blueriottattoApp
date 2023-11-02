<div class="flex flex-col items-center justify-center mt-20" >
    <div class="w-1/2" >
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
            <p>¿No tienes cuenta? <a href="/new-account" class="text-blue-500 hover:text-blue-600 transition-colors" >Crear Cuenta</a></p>
            <p>¿Olvidaste tu contraseña? <a href="/forget-password" class="text-blue-500 hover:text-blue-600 transition-colors" >Restablecela</a></p>
            <p>Continuar sin iniciar sesion <a href="/add-date" class="text-blue-500 hover:text-blue-600 transition-colors" >Continuar</a></p>
        </div>
    </div>
</div>