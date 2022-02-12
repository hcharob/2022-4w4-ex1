<footer class="site__footer">
    <section>
        <div class="site__footer-adresse">   
            <p>3 800, rue Sherbrooke Est Montréal</p>
            <p>(Québec) H1X 2A2</p>
            <p>514 254-7131</p>        
        </div>
        <?php
            wp_nav_menu(array("menu" => "simple",
            "container" => "nav",
            "container_class" => "site__footer__nav"));
        ?>
        <div class="site__footer-par3">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
               Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque 
               blanditiis facere? Aperiam vero excepturi modi a unde!</p>
        </div>

         
    </section>
    <p class="site__footer-copyright">
        Copyright 2022 - Collège de Maisonneuve. Tous droits réservés.
        </p>  
    
</footer>