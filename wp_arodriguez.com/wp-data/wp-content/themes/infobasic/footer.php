<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Ves al inicio<p>
                <a href="home>">Tienda</a>

            </div>
            <div class="col-md-3">
                <?php
            wp_nav_menu( array(
                'theme_location'    => 'infobasic_footer_interno',
               
            ) );
        ?>
            </div>
            <div class="col-md-3">
                   <?php
            wp_nav_menu( array(
                'theme_location'    => 'infobasic_footer_externo',
               
            ) );
        ?>
            </div>

        </div>
    </div>
</footer>


<?php wp_footer();?>    
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>