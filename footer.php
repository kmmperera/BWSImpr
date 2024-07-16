

         
            <div class="h-padding" id="footer">
                <div id="footer-logo-area" class="d-flx a-i-c">
                    <div id="footer-logo" class="logo-img-class">
                        <img class="img-class" src="<?php echo get_template_directory_uri().'/images/logo-footer-n.png'?>" alt="">
                    </div>
                    <div id="footer-logo-description" class="logo-text-class">
                       

                    </div>
                </div>
                <div id="footer-section-wrapper" class="d-flx j-c-s-b">
                    <div class="sections-wrapper section-one">
                        <div class="footer-section-title">
                                Chi siamo
                        </div>
                        <ul class="footer-links-ul">
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#impressa-reviews-area" class="footer-li-a">Chi siamo</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#impress-contact-area" class="footer-li-a">Contattaci</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#first-img-container" class="footer-li-a">Promozioni</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#contact-form-elements-wrapper" class="footer-li-a">Scrivici</a>
                            </li>


                        </ul>
                    </div>
                    <div class="sections-wrapper section-two">
                        <div class="footer-section-title">
                            IMPRESA
                        </div>
                        <ul class="footer-links-ul">
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#impress-contact-area" class="footer-li-a">Dove siamo</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#post-swiper-wrapper" class="footer-li-a">I nostri servizi</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#impress-contact-area" class="footer-li-a">Posizioni</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#contact-form-area" class="footer-li-a">Prezzi</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#impress-contact-area" class="footer-li-a">Il nostro manager</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#impress-contact-area" class="footer-li-a">Orario</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#impress-contact-area" class="footer-li-a">Telefono</a>
                            </li>

                        </ul>
                    </div> 
                    <div class="sections-wrapper section-three">
                        <div class="footer-section-title">
                            SERVICES
                        </div>
                        <ul  class="footer-links-ul">
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#services-list" class="footer-li-a">Sgombero</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#Sgombero" class="footer-li-a">Trasloco</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#Trasloco" class="footer-li-a">Giardinaggio</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#Giardinaggio" class="footer-li-a">Imbiancatura</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#Imbiancatura" class="footer-li-a">Confezionamento</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#Confezionamento" class="footer-li-a">Pulizia </a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#Pulizia" class="footer-li-a">Lavaggio </a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo home_url();?>#Lavaggio" class="footer-li-a">Riparazioni  </a>
                            </li>


                        </ul>
                    </div>
                    <div class="sections-wrapper section-four">
                        <div class="footer-section-title">
                             SOCIAL
                        </div>
                        <div id="social-media-description">
                            Seguici sui social media per scoprire gli
                            <br/>
                            ultimi prezzi e servizi
                        </div>
                        <div id="social-media-links">
                                <a href="https://facebook.com" target="_blank" ><i class="bi bi-facebook"></i></a>
                                <a href="https://youtube.com" target="_blank" ><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div id="footer-divider-line">

                </div>
                <div id="footer-bottom-section" class="d-flx j-c-s-b">
                    <div class="footer-fonts" id="footer-bttm-left">
                         2024 Tutti i diritti riservati
                    </div>
                    <div id="footer-bttm-middle" class="d-flx j-c-s-b footer-fonts">
                        <div id="footer-middle-one">
                           <a href="<?php echo get_permalink(get_page_by_path('terms-of-service')->ID); ?>" target="_blank"  >Termini di servizio </a> 
                        </div>
                        <div id="footer-middle-two">
                           <a href="<?php echo get_permalink(get_page_by_path('privacy-policy-2')->ID); ?>" target="_blank" >Politica sulla riservatezza </a> 
                        </div>
                    </div>
                    <div class="footer-fonts" id="footer-bttm-right">
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'lang-switer',
                                        'depth' => 2,
                                        'container' => 'div',
                                        'container_class' => 'header-wp-menu-ul-wrapper',
                                        'container_id' => 'ewt-wp-header-wrapper',


                                        )
                                    );
                            ?>

                    </div>
                </div>
            </div>
    </div>
  

<?php wp_footer(); ?>


</body>

</html>