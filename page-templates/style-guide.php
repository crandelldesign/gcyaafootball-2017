<?php
/**
 * Template Name: Style Guide Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

?>
<div class="content">
    <div class="row">
        <div class="col-sm-6">
            <h1>Color Palette</h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="color-swatch swatch1">
                        Vermillion<br>
                        #F44503
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch2">
                        Coral<br>
                        #FD7947
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch3">
                        Mona Lisa<br>
                        #FEB092
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch4">
                        Midnight Blue<br>
                        #003163
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch5">
                        Azure<br>
                        #007DFC
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch6">
                        Endeavour<br>
                        #0057B0
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch7">
                        Blue Charcoal<br>
                        #000B17
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch8">
                        Ship Gray<br>
                        #404041
                    </div>
                </div>
            </div>
            <hr>
            <h1>Buttons</h1>

            <button class="btn btn-lg btn-vermillion margin-bottom-10">This is a large button</button>&nbsp;

            <div class="hidden-sm-up margin-bottom-10"></div>

            <button class="btn btn-midnight-blue">This is another smaller button</button>

            <hr class="visible-xs-block">

        </div>
        <div class="col-sm-6">
            <h1>Typography</h1>

            <h1>Heading 1</h1>
            <p class="details">Font: Poppins Semibold / Shiraz #592d2f</p>

            <hr>

            <h2>Heading 2</h2>
            <p class="details">Font: Poppins Semibold / Salem #2a4e3a</p>

            <hr>

            <h3>Heading 3</h3>
            <p class="details">Font: Poppins Medium / Dark Burgundy #252525</p>

            <hr>

            <p>Body Text</p>
            <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
            <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

            <p><a href="#">This is a link</a> - <a href="#" class="hover">This is a hover link</a></p>

            <p class="details">Font: Poppins 300 #252525</p>
        </div>
    </div>

    <div class="row" style="display: none;">
        <div class="col-sm-6">
            <h1>Logo Downloads</h1>
            <p><a class="btn btn-default" href="<?php echo get_template_directory_uri(); ?>/library/images/logos/nuview-nutrition-logo-jpg.jpg" download="Nuview Nutrition Logo">.JPG</a><br>
                <small>Used for web use or in programs such as Microsoft Word. Has a white background.</small></p>
            <p><a class="btn btn-default" href="<?php echo get_template_directory_uri(); ?>/library/images/logos/nuview-nutrition-logo-png.png" download="Nuview Nutrition Logo">.PNG</a><br>
                <small>Used for web use or in programs such as Microsoft Word. Has a transparent background.</small></p>
            <p><a class="btn btn-default" href="<?php echo get_template_directory_uri(); ?>/library/images/logos/nuview-nutrition-logo-eps.eps" download="Nuview Nutrition Logo">.EPS</a><br>
                <small>Used for printing on large items such as posters. Has a transparent background.</small></p>
            <p><a class="btn btn-default" href="<?php echo get_template_directory_uri(); ?>/library/images/logos/nuview-nutrition-logo-ai.ai" download="Nuview Nutrition Logo">.AI</a><br>
                <small>Used for printing on large items such as posters. Has a transparent background.</small></p>
            <p><a class="btn btn-default" href="<?php echo get_template_directory_uri(); ?>/library/images/logos/nuview-nutrition-logo-svg.svg" download="Nuview Nutrition Logo">.SVG</a><br>
                <small>Used for printing on large items such as posters. Has a transparent background.</small></p>
            <p><a class="btn btn-default" href="<?php echo get_template_directory_uri(); ?>/library/images/logos/nuview-nutrition-logo-pdf.pdf" download="Nuview Nutrition Logo">.PDF</a><br>
                <small>Used for printing on large items such as posters. Has a transparent background.</small></p>
        </div>
    </div>
</div>

<?php

get_footer();
