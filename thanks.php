<?php
   echo "Merci " . $_POST['user_firstname'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos du thème '" . $_POST['user_subject'] . "'. <br>
   Un de nos conseillers vous contactera soit à l’adresse " . $_POST['user_email'] . " ou <br>par téléphone au " . $_POST['user_phone'] . " dans les plus
    brefs délais pour traiter <br>votre demande : <br> <br>" . $_POST['user_message'];
?>
