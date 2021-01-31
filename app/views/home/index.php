<!-- 1 Page Content-->
<?php 
  $this->view('home/1_page_conten');
?>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i>
</button>


  <!-- ======= 2 Header ======= -->
<?php 
    $this->view('home/2_header');
?>


<!-- ======= 3 Menu ======= 
//$this->view('home/3_menu');
-->


<!-- ======= 4 Hero Section ======= -->
<?php 
    $this->view('home/4_hero_section');
?>

    <main id="main">

<!-- ======= 5 About Section ======= -->
<?php 
    $this->view('home/5_about_section');
?>

<!-- ======= 6 Facts Section ======= 
// < ?php
    $this->view('home/6_facts_section');
?>
-->

<!-- ======= 7 Skills Section ======= -->
<?php 
    $this->view('home/7_skills_section');
?>   

<!-- ======= 8 Resume Section ======= -->
<?php 
    $this->view('home/8_resume_section');
?>

<!-- ======= 9 Portfolio Section ======= 
// < ?php 
    $this->view('home/9_portfolio_section');
?>
-->  

<!-- ======= 10 Services Section ======= 
    $this->view('home/10_services_section');
-->


<!-- ======= 11 Testimonials Section ======= 
    $this->view('home/11_testimonials_section');
-->


<!-- ======= 12 Contact Section ======= 
< ?php 
    $this->view('home/12_contact_section');
?>   

    </main><!-- End #main 
-->


<!-- ======= 13 Footer ======= -->
<?php 
    $this->view('home/13_footer_section');
?>    

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- 14 Vendor JS Files -->
<?php 
    $this->view('home/14_vendor_js_files');
?>  

<!-- 15 Template Main JS File -->
<?php 
    $this->view('home/15_template_main_js_file');
?>  

</body>

</html>
