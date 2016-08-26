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
		<main id="main" class="site-main" role="main">

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
            <div style="width: 70%; text-align: center; margin: 100px auto 50px auto; max-width:400px;">
                <img src="/wp-content/themes/whitecap-theme/images/whitecap.png" width="100%" />
            </div>

            <div style="margin: 0 auto; font-family: intro; color: #3c4c57; width: 100%; font-size: 3em; text-align: center;">
            We're coming...    
            </div>
            <!-- /TEMP CODE - HENCE THE INLINE STYLES -->
            
            <a name="development"></a>
            <div class="front-page-development container">
            
                <h2>Development Content</h2>
                <p>The Whitecap development team is here to guide you through today's digital landscape. Whether you need a website, mobile app, custom WordPress theme, SEO optimization, or simply need to bring your digital idea to fruition, Whitecap is your team.</p>
                
            </div>
            
            <a name="design"></a>
            <div class="front-page-design container">
            
                <h2>UI/UX Design Content</h2>
                
            </div>
            
            <a name="branding"></a>
            <div class="front-page-branding container">
            
                <h2>Branding Content</h2>
                
            </div>
            
            <a name="media"></a>
            <div class="front-page-media container">
            
                <h2>Media Production Content</h2>
                
            </div>
            
            <a name="strategy"></a>
            <div class="front-page-strategy container">
            
                <h2>Strategy Content</h2>
                
            </div>
            
            <a name="sherpas"></a>
            <div class="front-page-sherpas container">
            
                <h2>Sherpas Content</h2>
                
            </div>            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();