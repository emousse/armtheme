<?php

class Arm{
    function init(){
        add_theme_page("ARM Options", 'Options du thème', 'edit_themes', 'control.php', array('ARM','displayOptions'));
    }

    function displayOptions(){

    }

}

add_action('admin_menu', array('Arm','init'));
