<?php

use yii\db\Command;

/* @var $this yii\web\View */

$this->title = 'Entradas del Blog';
$entradas = Yii::$app->db->createCommand('SELECT Titulo, Contenido from blog_cms where Publicar=\'1\'')->queryAll();
$cont = count($entradas);
?>

<div class="entradas-index">

    <!-- Main -->
    <div class="row">
        <?php
        for ($i = 0; $i < $cont; $i++) {
            $fila = $entradas[$i];
            $Titulo = $fila['Titulo'];
            $Contenido = $fila['Contenido'];
            ?>
            <div class="4u">
                <div class="card small">
                    <div class="card-image">
                        <img src="images/banner.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo $Titulo ?></span>
                        <p><?php echo $Contenido ?></p>
                    </div>
                    <div class="card-action">
                        <a href="#">Leer Más</a>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>            
    <!-- /Main -->


    <!-- Copyright -->
    <div id="copyright" class="container black-text">
        © 2016 Wendy Estupiñán|Nuevas Técnicas de Programación<a href="http://mundogya"></a> 
    </div>
</div>
