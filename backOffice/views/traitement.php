<?php
    
    include "../core/livreurC.php";
    include "../entities/livreur.php";
    $livreur = new Livreur($_GET['first_name'],$_GET['last_name'],$_GET['address'],$_GET['country'],$_GET['cite'],$_GET['zip_code'],$_GET['phone_number'],$_GET['email_address']);
    livreurC::ajouterLivreur($livreur);
    if(isset($_GET['first_name']) and isset($_GET['last_name']) and isset($_GET['address']) and isset($_GET['country']) and isset($_GET['cite']) and isset($_GET['zip_code']) and isset($_GET['phone_number']) and isset($_GET['email_address'])){
        if(!(empty($_GET['first_name']) and empty($_GET['last_name']) and empty($_GET['address']) and empty($_GET['country']) and empty($_GET['cite']) and empty($_GET['zip_code']) and empty($_GET['phone_number']) and empty($_GET['email_address']))){

            $url = 'livraison.php?success=1'; // this can be set based on whatever
        }
        else{
    
            $url = 'livraison.php?success=0'; // this can be set based on whatever
        }
    }

// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}

// no redirect
header( "Location: $url" );
?>