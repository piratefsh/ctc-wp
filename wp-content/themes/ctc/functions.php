<?php
    function ctc_setup(){
        // Add menus
        register_nav_menus(array(
            'primary' => 'Primary',
        ));
    }
    add_action( 'after_setup_theme', 'ctc_setup' );
?>