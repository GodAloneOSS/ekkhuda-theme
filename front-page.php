<?php
get_header();
get_template_part((isset($_GET['oldhome']) && $_GET['oldhome']==='1') ? 'template-parts/home' : 'part-home-new');
get_footer();
