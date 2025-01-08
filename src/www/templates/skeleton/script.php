<?php 

/**
 *  Classe Referente a instalação ao descomprimir o pacote. 
 *  @author Marcos de Lima Carlos <mlimacarlos@gmail.com>
 *  @version 1.0.0
 */

defined('_JEXEC') or die;

class skeletonInstallerScript{

    public function install(){

        echo '<p> This is the install message called from the script.php file </p>';
    }

    public function uninstall(){
        echo '<p> This is the uninstall message called from the script.php file </p>';
    }

    public function update(){
        echo '<p> This is the update message called from the script.php file </p>';
    }
}