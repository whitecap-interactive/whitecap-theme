<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package whitecap
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main front-page" role="main">

            <div class="front-page-intro container">
            
                <div class="intro-icons row">
                    <div class="col-sm-2 zero-height"> </div>
                    <a href="#development"><div class="col-sm-2 icon-development">Development</div></a>
                    <a href="#design"><div class="col-sm-4 icon-design">UI/UX Design</div></a>
                    <a href="#branding"><div class="col-sm-2 icon-branding">Branding</div></a>
                    <div class="col-sm-2 zero-height"> </div>
                </div>
                <div class="intro-icons row">
                    <div class="col-sm-2 zero-height"> </div>
                    <a href="#media"><div class="col-sm-2 icon-media">Media Production</div></a>
                    <a href="#strategy"><div class="col-sm-4 icon-strategy">Strategy</div></a>
                    <a href="#sherpas"><div class="col-sm-2 icon-sherpas">Sherpas</div></a>
                    <div class="col-sm-2 zero-height"> </div>

                </div>
                
            </div>

            <!-- TEMP CODE - HENCE THE INLINE STYLES -->
            <!-- <div style="width: 70%; text-align: center; margin: 100px auto 50px auto; max-width:400px;">
                <img src="/wp-content/themes/whitecap-theme/images/whitecap.png" width="100%" />
            </div>

            <div style="margin: 0 auto; font-family: intro; color: #3c4c57; width: 100%; font-size: 3em; text-align: center;">
            We're coming...    
            </div> -->
            <!-- /TEMP CODE - HENCE THE INLINE STYLES -->
            
            <section>
                <a name="development"></a>
                <div class="front-page-development container">
                    <div>
                        <h2 class="development">Mobile/App/Web Development</h2>
                        <p>The Whitecap development team is here to guide you through today's digital landscape. Need a new website? You've come to the right place. Mobile app? Yep. Custom WordPress theme? Boom goes the dynamite.</p>
                        <p class="font-intro" style="font-size: 2em;">Whitecap is your team.</p>
                        <h3>(check out some of our work)</h3>
                        <p><span class="dashicons dashicons-arrow-down-alt2" style="font-size: 4em; width: auto; height: auto;"></span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 work-nondesigns"><a href="http://www.nondesigns.com" target="_blank"></a></div>
                    <div class="col-sm-6 work-cosmomuse"> <a href="http://www.cosmomuse.com" target="_blank"></a></div>
                </div>
            </section>
            
            <section>
                <a name="design"></a>
                <div class="front-page-design container">
                    <h2 class="design">UI/UX Design</h2>
                    <p>Words about things.</p>
                </div>
                <div class="full-width-img-wrap">
                    <img class="full-width-img" src="/wp-content/themes/whitecap-theme/images/front-page/computer.jpg" width="100%" />
                </div>
            </section>
            
            <section>
                <a name="branding"></a>
                <div class="front-page-branding container-fluid">
                    <h2 class="branding">Branding</h2>

                    <div class="row">
                        <div class="col-sm-6 nopadding brand-image">
                            left
                        </div>
                        <div class="col-sm-6 nopadding brand-copy">
                            <div class="branding-encode-thin">Our passion for design.</div>
                        </div>
                    </div>

                </div>
            </section>
            
            <section>
                <a name="media"></a>
                <div class="front-page-media container">
                    <h2 class="media">Media Production</h2>
                </div>
            </section>

            <section>
                <a name="strategy"></a>
                <div class="front-page-strategy container">
                    <h2 class="strategy">Strategy</h2>
                </div>
            </section>

            <section>
                <a name="sherpas"></a>
                <div class="front-page-sherpas container-fluid">
                    <h2 class="sherpas">Sherpas</h2>
                    <p>We're proud to call <span class="font-intro">Utah</span> home, and we're always looking for excuses to get outside and enjoy this place.</p>
                    <p class="font-intro">Itching for that perfect powder day?</p>
                    <div class="row">
                        <div class="superior"> </div>
                    </div>
                    <!--<p>&nbsp;</p>
                    <p class="font-intro">Need to hit the mental reset button with a visit to Utah's canyon country?</p>
                    <p>&nbsp;</p>
                    <div class="row">
                        <div class="superior"> </div>
                    </div>-->
                    <p>&nbsp;</p>
                    <h3 class="font-intro">Hit us up. We'd love to show you around.</h3>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
