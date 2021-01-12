<?php
    include './includes/cabecera.inc';
    include './includes/menu.inc';
    
    $provincias = ['Alava','Albacete','Alicante','Almería','Asturias','Avila','Badajoz','Barcelona','Burgos','Cáceres',
                    'Cádiz','Cantabria','Castellón','Ciudad Real','Córdoba','La Coruña','Cuenca','Gerona','Granada','Guadalajara',
                    'Guipúzcoa','Huelva','Huesca','Islas Baleares','Jaén','León','Lérida','Lugo','Madrid','Málaga','Murcia','Navarra',
                    'Orense','Palencia','Las Palmas','Pontevedra','La Rioja','Salamanca','Segovia','Sevilla','Soria','Tarragona',
                    'Santa Cruz de Tenerife','Teruel','Toledo','Valencia','Valladolid','Vizcaya','Zamora','Zaragoza'];

    $comunidades = ["Andalucía", "Aragón", "Canarias", "Cantabria", "Castilla y León", "Castilla-La Mancha", "Cataluña", "Ceuta", "Comunidad Valenciana", "Comunidad de Madrid", "Extremadura", "Galicia", "Islas Baleares", "La Rioja", "Melilla", "Navarra", "País Vasco", "Principado de Asturias", "Región de Murcia"];

    
    ?>
    <div class="contenido">
        <div class="introducción">
            <h1>Registrate con Nosotros</h1>
            <h2>Introduce tus datos y pasa a formar parte de nuestra familia</h2>
        </div>
        
        <form class="formulario" action="accionRegistro.php" method="get">

            <ul class="interiorformulario">
                <li class="lineaformulario">
                    <label for="username">Elija un nombre de usuario</label>
                    <input type="text" id="username" name="nombre"  value=""  required="true" placeholder="Introduce tu nombre"/>
                </li>
                <li class="lineaformulario">
                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass" name="contrasenya"  value=""  required="true" placeholder="Introduce tu contraseña"/>
                </li>
                <li class="lineaformulario">
                    <label for="pass2">Repite la contraseña</label>
                    <input type="password" id="pass2" name="contrasenya2"  value=""  required="true" placeholder="Repite la contraseña contraseña"/>
                </li>
                <li class="lineaformulario">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="nombre"  value=""  required="true" placeholder="Introduce tu nombre"/>
                </li>
                <li class="lineaformulario" >
                    <label for="surname">Apellidos</label>
                    <input type="text" id="surname" name="apellidos" value=""  required="true" placeholder="Introduce tus apellidos"/>
                </li>
                <li class="lineaformulario">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="correo" value=""  required="true" placeholder="Introduce tu correo electrónico"/>
                </li>
                <li class="lineaformulario">
                    <label for="telephone">Número de teléfono</label>
                    <input type="tel" id="telephone" name="telefono" value="" placeholder="Introduce tu número de teléfono"/>
                </li>
                <li class="lineaformulario">
                    <label for="address">Dirección</label>
                    <input type="text" id="address" name="dirección" value=""  required="true" placeholder="Introduce la dirección de tu vivienda habitual"/>
                </li>
                <li class="lineaformulario">
                    <label for="city">Población</label>
                    <input type="text" id="city" name="población" value=""  required="true" placeholder="Introduce la población donde resides"/>
                </li>
                <li class="lineaformulario">
                    <label for="state">Provincia</label>
                    <select name="provincia" id="state">
                        <?php
                            foreach ($provincias as $provincia){
                                echo "<option value='$provincia'>$provincia</option>";
                            }
                        ?>
                    </select>
                </li>

                <li class="lineaformulario">
                    <label for="comunity">Comunidad Autonoma</label>
                    <select name="Comunidad Autonoma" id="comunity">
                        <?php
                            foreach ($comunidades as $comunidad){
                                echo "<option value='$comunidad'>$comunidad</option>";
                            }
                        ?>
                    </select>
                </li>
                <li class="lineaformulario">
                    <label for="birthdate">Fecha de Nacimiento</label>
                    <input type="date" id="birthdate" name="fechanac" value="" placeholder="Introduce tu fecha de nacimiento"/>
                </li>
                <li class="lineaformulario">
                    <fieldset>
                        <legend>Desea recibir comunicaciones comerciales</legend>
                    <input type="radio" name="publicidad" value="Si" checked="checked" />Recibir Correos Infomativos
                    <input type="radio" name="publicidad" value="No" /> No recibir información
                    </fieldset>
                </li>

                <li class="lineaformulario">
                    <button type="submit">Proceder al registro</button>
                </li>



            </ul>



        </form>
    </div>
    
<?php    
    include './includes/pie.inc';
?>    

