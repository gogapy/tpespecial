<?php

class perfumeView {
    
    function showPerfumes($perfumes) {

        include "app/templates/header.php";  
    
        echo '<table class="table">
                <tr>
                    <th>Name</th>
                    <th>Notes</th>
                    <th>Qualification</th>
                    <th>Durability</th>
                    <th>Brand</th>
                </tr>
        ';
        foreach ($perfumes as $perfume) {
           echo "<tr>
                    <span><td>$perfume->perfume_name</td></span>
                    <span><td>$perfume->notes</td></span>
                    <span><td>$perfume->qualification</td></span>
                    <span><td>$perfume->durability</td></span>
                    <span><td>$perfume->brand_name</td></span>
                </tr>";
        }
        echo "</table>";
    }

    function showBrands($brands) {

        include "app/templates/header.php";  
    
        echo '<table class="table">
                <tr>
                    <th>Brand</th>
                </tr>
        ';
        foreach ($brands as $brand) {
           echo "<tr>
                    <span><td><a href='$brand->brand_name' style='text-decoration:none'>$brand->brand_name</a></td></span>
                </tr>";
        }
        echo "</table>";
    }

    function showAbout() {

        include "app/templates/header.php";  

        echo "<h2>About</h2>
                <p>Parrafo del apartado about de la pagina con imagenes e informacion del desarrollador</p>
                <p><img style='width: 100px' class='img-thumbnail' src='app/templates/user_photo.png'> Nombre: ...</p>
        ";
    }

    function showLogin() {

        include "app/templates/header.php";  

        include "app/templates/form.php";
    }
}
?>

