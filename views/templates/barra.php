<div class="barra">
    <p>Hola: <?php echo $nombre??''?></p>
    <a href="/logout" class="boton">Cerrar sesion</a>
</div>

<?php if(isset($_SESSION['admin'])): ?>
    <div class="barra-servicios">
        <a href="/admin" class="boton">Ver citas</a>
        <a href="/servicios" class="boton">Ver servicios</a>
        <a href="/servicios/crear" class="boton">Nuevo servicio</a>
    </div>
<?php endif?>