<div class="flex justify-around text-white py-2 bg-zinc-950" >
    <div>
        <h1>Logo</h1>
    </div>

    <nav class="flex flex-col md:flex-row gap-2 items-center" >
        <?php if($_SESSION['admin'] === "1"): ?>
            <a href="/admin" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Inicio</a>
            <a href="/admin/dates" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Historial</a>
            <a href="/admin/setting" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Configuracion</a>
        <?php elseif($_SESSION['admin'] === "0"): ?>
            <a href="/" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Inicio</a>
            <a href="/add-date" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Nueva Cita</a>
            <a href="/history" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Historial</a>
            <a href="/setting" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Configuracion</a>
        <?php else: ?>
            <a href="/login" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Iniciar Sesion</a>
            <a href="/new-account" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Crear cuenta</a>
            <a href="/forget-password" class="py-0.5 px-2 text-lg font-light hover:bg-blue-500 transition-colors" >Olvide mi password</a>
        <?php endif; ?>

        <?php if(!empty($_SESSION)): ?>
            <div class="bg-red-500 font-bold hover:bg-red-600 flex gap-1 transition-colors rounded-lg items-center py-0.5 px-1" >
                <a href="/logout" class="text-base hidden sm:flex" >Cerrar Sesion</a>    
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
            </div>
        <?php endif; ?>
    </nav>
</div>