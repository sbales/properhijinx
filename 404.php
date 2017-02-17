<?php require_once( 'edit/cms.php' ); ?>
    <cms:template hidden='1'> </cms:template>
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
                <cms:show contact_page /> </title>
            <meta name="description" content="<cms:show site_desc />">
            <meta name="keywords" content="<cms:show site_tags />">
            <meta name="author" content="Proper Hijinx Productions">
            <meta name="author" content="Proper Hijinx Productions">
            <!--Social Media Information-->
            <meta property="og:title" content="<cms:show site_name />-<cms:show contact_page />" />
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
        <main class="page-body contact-page">
            <h1>Error ...</h1>
            <div class="row">
                <cms:pages masterpage='global-settings.php'>
                    <cms:show error_text /> </cms:pages>
            </div>
        </main>
        <cms:embed 'footer.html' />
        <script src="<cms:show k_site_link />js/google-analytics.js" id="Google Analytics"></script>
    </body>

    </html>
    <?php COUCH::invoke(); ?>