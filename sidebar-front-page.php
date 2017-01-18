<aside class="front-page">

  <?php
    // =======================================================================//
    // ! Suche
    // =======================================================================//
    get_search_form();
  ?>
  <div class="wrapper-wrapper">
  <div class="seminar-wrapper-outer">
  <?php
    // =======================================================================//
    // ! Seminare
    // =======================================================================//

    // get all (-1) custom post types "seminare"
    $args = array(
      'post_type' => 'seminare',
      'posts_per_page' => -1
    );
    $seminare = new WP_Query( $args );

   ?>
   <?php if($seminare->have_posts()): ?>
     <?php while ( $seminare->have_posts() ) : $seminare->the_post(); ?>
      <div class="seminar-wrapper">
        <a href="<?php the_permalink(); ?>">
          <h3 class="seminar"><?php echo get_the_title();  ?></h3>
        </a>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
    <div class="navbar">
 <div class="navbar-inner">
 <ul class="list-unstyled pull-center">
  <li><a href="404.php" target="blank" alt="Agil-Management">Agil-Management</a></li>
  <li><a href="404.php" target="blank" alt="Design Thinking">Design Thinking</a></li>
  <li><a href="404.php" target="blank" alt="Führen Virtueller Teams">Führen Virtueller Teams</a></li>
  <li><a href="404.php" target="blank" alt="Innovationskommunikation">Innovationskommunikation</a></li>
  <li><a href="404.php" target="blank" alt="Open Innovation">Open Innovation</a></li>
</ul>
</div>
<div class="post-bottom">
  <?php
    // =======================================================================//
    // ! Posts
    // =======================================================================//

    // -- Get last 3 Posts
    $posts_per_page = 3;
    $args = array(
      'posts_per_page' => $posts_per_page
    );
    $posts = new WP_Query( $args );

  ?>
  <?php if($posts->have_posts()): ?>
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
       <a class="post-wrapper-a" href="<?php the_permalink(); ?>">
         <div class="post-wrapper">
           <h3><?php echo get_the_title();  ?></h3>
           <p><?php the_excerpt(); ?></p>
         <!-- needs to change excerpt length to 20 in wp-includes/formatting.php -->
        </div>
       </a>

     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  </div>
  </div>

  <?php
      // =======================================================================//
      // ! Widget Area
      // =======================================================================//
  ?>
  <?php if (is_active_sidebar('sidebar-frontpage')) : ?>
      <!-- Widget-Area -->
      <div id="widget-area" class="widget-area">
          <?php dynamic_sidebar('sidebar-frontPage'); ?>
      </div>
      <!-- /Widget-Area -->
  <?php endif; ?>
</aside>
