<?php
  get_header();
?>


  <!-- ***** Nav Bar Area Start ***** -->
    <?php
        get_template_part('include/content', 'navbar');
    ?>
  <!-- ***** Nav Bar Area End ***** -->


  <!-- ***** Hero Area Start ***** -->
    <?php
        get_template_part('template-part/content', 'hero');
    ?>
  <!-- ***** Hero Area End ***** -->


  <!-- ***** About Area Start ***** -->
    <?php
        get_template_part('template-part/content', 'about');
    ?>
  <!-- ***** About Area End ***** -->


  <!-- ***** Services Area Start ***** -->
    <?php
        get_template_part('template-part/content', 'services');
    ?>
  <!-- ***** Services Area End ***** -->


  <!-- ***** Project Area Start ***** -->
    <?php
        get_template_part('template-part/content', 'project');
    ?>
  <!-- ***** Project Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
    <?php
        get_template_part('template-part/content', 'contact');
    ?>
  <!-- ***** Contact Area End ***** -->


<?php
  get_footer();
?>