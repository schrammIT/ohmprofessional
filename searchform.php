<?php
  // Search-Form:
  // TODO styling -> use bootstrap - e.g.:  http://getbootstrap.com/components/#input-groups-buttons
?>
<div>
    <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
      <img src="<?php echo get_bloginfo('template_directory')?>/img/search-button-without-text-hi.png" alt="" width="40px"/>
        <input placeholder="Suchbegriff eingeben" type="text" value="" name="s">
        <input type="submit" value="">
    </form>
</div>
