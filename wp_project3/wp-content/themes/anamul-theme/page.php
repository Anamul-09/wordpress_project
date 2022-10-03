<?php get_header()?>
  <div id="posts">

  <?php  
      if(have_posts()):
        while(have_posts()):
          the_post();
          // the_title();

      ?>
      
    <div class="post">
      <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
      <p class="date"><?php  the_time('F j, Y, g:i a');  ?> by <?php the_author()?></p>
      <div class="entry">
        <p><img src="images/money.jpg" alt="" height="104" width="512" /></p>
         <?php 
         the_content()
         ?> 
        <?php 
        // the_excerpt()?>
      </div>
      <div class="postmetadata"> <span class="tags">
        Category: <?php the_category()?>
        <br>
        <?php the_tags()?>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comments-no"><a href="#"><?php comments_number( 'no comments','1 comments' ,'%comments' ); ?></a></span> <br />
      </div>
      
      <br>
      <?php comments_template()?>
    </div>

    <?php endwhile;?>
      <?php endif;?>
  </div>
  <?php get_sidebar()?>
</div>
<?php get_footer()?>
</body>
</html>
