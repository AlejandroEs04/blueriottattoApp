<div class="flex justify-around text-white py-2 bg-zinc-950" >
    <div>
        <h1>Logo</h1>
    </div>

    <nav class="flex gap-2 items-center" >
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
            <a href="/logout" class="py-0.5 px-2 text-base bg-red-500 font-bold hover:bg-red-600 transition-colors rounded-lg" >Cerrar Sesion</a>
        <?php endif; ?>
    </nav>
</div>