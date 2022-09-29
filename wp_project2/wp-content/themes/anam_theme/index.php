<div id="container">
    <?php 
    
        if(have_post()):
            while(have_post()):
                the_post();
                the_title();
                the_content();
            endwhile;
        endif;

    
    ?>
</div>