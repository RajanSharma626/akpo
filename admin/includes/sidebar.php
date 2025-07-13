 <div id="layoutSidenav_nav">
     <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
         <div class="sb-sidenav-menu">
             <div class="nav">
                 <div class="sb-sidenav-menu-heading">Core</div>
                 <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="./">
                     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                     Dashboard
                 </a>
                 <div class="sb-sidenav-menu-heading">Interface</div>

                 <a class="nav-link 
                <?php
                $activePages = ['faq.php', 'edit-faq.php', 'add-faq.php'];
                echo in_array(basename($_SERVER['PHP_SELF']), $activePages) ? 'active' : '';
                ?>
                  " href="faq">
                     <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     FAQ
                 </a>

                 <a class="nav-link 
                <?php
                $activePages = ['testimonial.php', 'edit-testimonial.php', 'add-testimonial.php'];
                echo in_array(basename($_SERVER['PHP_SELF']), $activePages) ? 'active' : '';
                ?>
                  " href="testimonial">
                    <div class="sb-nav-link-icon"><i class="fas fa-comment-dots"></i></div>
                     Testimonials 
                 </a>

             </div>
         </div>
     </nav>
 </div>