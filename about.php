<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='About' order='2'>
        <cms:editable name='about_text' label='Mission Statement' type='textarea' />
        <cms:editable name='about_img' label='About Us Image' type='image' show_preview='1' preview_width='150' />
        <cms:editable name='about_img_alt' label='Image Description' type='text' />
        <cms:editable name='quote_1' label='First News Mention' type='group' />
        <cms:editable name='quote1_text' label='Quote' type='textarea' group='quote_1' />
        <cms:editable name='quote1_author' label='Written By' type='text' group='quote_1' />
        <cms:editable name='quote1_place' label='Written For' type='text' group='quote_1' />
        <cms:editable name='quote_2' label='Second News Mention' type='group' />
        <cms:editable name='quote2_text' label='Quote' type='textarea' group='quote_2' />
        <cms:editable name='quote2_author' label='Written By' type='text' group='quote_2' />
        <cms:editable name='quote2_place' label='Who are they?' type='text' group='quote_2' />
        <cms:editable name='quote_3' label='Third News Mention' type='group' />
        <cms:editable name='quote3_text' label='Quote' type='textarea' group='quote_3' />
        <cms:editable name='quote3_author' label='Written By' type='text' group='quote_3' />
        <cms:editable name='quote3_place' label='Written For' type='text' group='quote_3' /></cms:template>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Page Information-->
        <cms:pages masterpage='global-settings.php'>
            <title>
                <cms:show site_name /> -
                <cms:show about_page /> </title>
            <meta name="description" content="<cms:show site_desc />">
            <meta name="keywords" content="<cms:show site_tags />">
            <meta name="author" content="Proper Hijinx Productions">
            <meta name="author" content="Proper Hijinx Productions">
            <!--Social Media Information-->
            <meta property="og:title" content="<cms:show site_name />-<cms:show about_page />" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="<cms:show k_page_link />" />
            <meta property="og:image" content="img/brand/mobile-site-logo.svg" /> </cms:pages>
        <!--Favicon and Webclip-->
        <link rel="apple-touch-icon" sizes="180x180" href="<cms:show k_site_link />favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="<cms:show k_site_link />favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<cms:show k_site_link />favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<cms:show k_site_link />favicon/manifest.json">
        <link rel="mask-icon" href="<cms:show k_site_link />favicon/safari-pinned-tab.svg" color="#580b1e">
        <meta name="theme-color" content="#580b1e">
        <!--Stylesheet-->
        <link rel="stylesheet" href="<cms:show k_site_link />css/stylesheet.css">
        <link rel="stylesheet" href="<cms:show k_site_link />fonts/font-awesome.min.css">
        <!--Typography-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Vast+Shadow" rel="stylesheet"> </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="page-body">
            <h1>About Us</h1>
            <div class="row">
                <div class="columns medium-6 large-6">
                    <p>
                        <cms:show about_text /> </p>
                    <cms:pages masterpage='global-settings.php'> <a href="<cms:link masterpage='audition.php' />" target="_self"><div class="button aud-btn <cms:show auditions_btn />">Auditions are currently Open</div></a> </cms:pages>
                </div>
                <div class="columns medium-6 large-6"> <img src="<cms:show about_img />" alt="<cms:show about_img_alt />" width="100%" height="auto" class="image-margins about-img" /> </div>
            </div>
            <div class="row margin-top" id="reviews">
                <div class="medium-4 columns review">
                    <blockquote class="quote">"
                        <cms:show quote1_text />" <cite><cms:show quote1_author /><br><cms:show quote1_place /></cite> </blockquote>
                </div>
                <div class="medium-4 columns review">
                    <blockquote class="quote">"
                        <cms:show quote2_text />" <cite><cms:show quote2_author /><br><cms:show quote2_place /></cite> </blockquote>
                </div>
                <div class="medium-4 columns review">
                    <blockquote class="quote">"
                        <cms:show quote3_text />" <cite><cms:show quote3_author /><br><cms:show quote3_place /></cite> </blockquote>
                </div>
            </div>
        </div>
        <cms:embed 'footer.html' />
        <script src="<cms:show k_site_link />js/google-analytics.js" id="Google Analytics"></script>
    </body>

    </html>
    <?php COUCH::invoke(); ?>