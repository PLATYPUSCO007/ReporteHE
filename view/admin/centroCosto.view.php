<?php
session_start();
if (!isset($_SESSION["isAdmin"]) || (strcasecmp($_SESSION["isAdmin"], 'Si') !== 0)) {
    require_once "../../config/LoadConfig.config.php";
    $config = LoadConfig::getConfig();
    header('Location:'.$config['URL_SITE'].'index.php');
}

?>

<section id="four" class="wrapper style1 special fade-up">
    <div class="container">
        <header>
            <h3>Agregar Centro de Costo</h3>
        </header>
        <form action="#" id="formCeco">
            <div class="row gtr-uniform">
                <section class="col-6 col-6-medium col-12-xsmall">
                    <label for="title">Nombre</label>
                    <input type="text" name="title" placeholder="Ingrese el titulo del centro de costo" style="color: black !important; width: 50%; margin: auto;" requerid/>
                </section>
                <section class="col-6 col-6-medium col-12-xsmall">
                    <label for="title">Clase</label>
                    <select name="clase" id="clase" style="color: black !important; width: 50%; margin: auto;" required>
                        <!-- Llenar dinamicamente -->
                    </select>
                </section>
                <section class="col-12 col-8-medium col-12-xsmall" id="butonSend">
                    <footer class="major">
                        <ul class="actions special">
                            <li> <button type="submit" id="sendData" class="button primary icon solid fa-check-circle fi">Guardar</button> </li>
                        </ul>
                    </footer>
                </section>
            </div>
        </form>
    </div>
</section>

<section id="five" class="wrapper style2 special fade">
    <div class="container">
        <header>
            <h3 style="color: white;">Administracion Centro de Costo</h3>
        </header>

        <section class="col-12 col-4-medium col-12-xsmall">
            <table class="tableAdmin">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Clase</th>
                        <th>Guardar</th>
                    </tr>
                </thead>
                <tbody id="ceco">
                    <!-- Llenar datos con iteracion -->
                </tbody>
            </table>
        </section>
    </div>
</section>