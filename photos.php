<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Gallery' order='2'>
        <cms:editable type='group' name='main_tab' label='Main Gallery' />
        <cms:editable type='group' name='leftsquare_tab' label='Left Square Gallery' />
        <cms:editable type='group' name='rightsquare_tab' label='Right Square Gallery' />
        <cms:editable type='group' name='rectangle_tab' label='Rectangle Gallery' />
        <cms:repeatable name='main_gallery' label='Upload Photos Here' group='main_tab'>
            <cms:editable type='image' name='gallery_image' label='Image' show_preview='1' preview_width='100' input_width='190' col_width='200' />
            <cms:editable type='text' name='image_title' label='Image Title' /> </cms:repeatable>
        <cms:repeatable name='leftsquare_gallery' label='Upload Photos Here' group='leftsquare_tab'>
            <cms:editable type='image' name='gallery_image' label='Image' show_preview='1' preview_width='100' input_width='190' col_width='200' />
            <cms:editable type='text' name='image_title' label='Image Title' /> </cms:repeatable>
        <cms:repeatable name='rightsquare_gallery' label='Upload Photos Here' group='rightsquare_tab'>
            <cms:editable type='image' name='gallery_image' label='Image' show_preview='1' preview_width='100' input_width='190' col_width='200' />
            <cms:editable type='text' name='image_title' label='Image Title' /> </cms:repeatable>
        <cms:repeatable name='rectangle_gallery' label='Upload Photos Here' group='rectangle_tab'>
            <cms:editable type='image' name='gallery_image' label='Image' show_preview='1' preview_width='100' input_width='190' col_width='200' />
            <cms:editable type='text' name='image_title' label='Image Title' /> </cms:repeatable>
    </cms:template>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Page Information-->
        <cms:pages masterpage='global-settings.php'>
            <title>
                <cms:show site_name /> -
                <cms:show gallery_page /> </title>
            <meta name="description" content="<cms:show site_desc />">
            <meta name="keywords" content="<cms:show site_tags />">
            <meta name="author" content="Proper Hijinx Productions">
            <meta name="author" content="Proper Hijinx Productions">
            <!--Social Media Information-->
            <meta property="og:title" content="<cms:show site_name />-<cms:show gallery_page />" />
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
        <main class="page-body">
            <h1>Photo Gallery</h1>
            <div class="row gallery">
                <div class="columns large-6">
                    <!--Big Gallery-->
                    <div id="big-gallery" class="orbit" role="region" aria-label="Main Show Gallery" data-orbit data-options="">
                        <ul class="orbit-container">
                            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                            <cms:show_repeatable 'main_gallery' startcount='0'>
                                <cms:if k_count='0'>
                                    <li class="is-active orbit-slide"> <img class="orbit-image" src="<cms:show gallery_image />" alt="<cms:show image_title />"> </li>
                                    <cms:else />
                                    <li class="orbit-slide"> <img class="orbit-image" src="<cms:show gallery_image />" alt="<cms:show image_title />"> </li>
                                </cms:if>
                            </cms:show_repeatable>
                        </ul>
                        <nav class="orbit-bullets">
                            <cms:show_repeatable 'main_gallery' startcount='0'>
                                <cms:if k_count='0'>
                                    <button class="is-active" data-slide="<cms:show k_count />"></button>
                                    <cms:else />
                                    <button data-slide="<cms:show k_count />"></button>
                                </cms:if>
                            </cms:show_repeatable>
                        </nav>
                    </div>
                </div>
                <div class="columns large-6">
                    <div class="row small-gallery">
                        <div class="columns medium-6">
                            <!--Small Gallery Left-->
                            <div class="orbit" role="region" aria-label="Small Left Gallery" data-orbit data-options="autoPlay:false;">
                                <ul class="orbit-container">
                                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                                    <cms:show_repeatable 'leftsquare_gallery' startcount='0'>
                                        <cms:if k_count='0'>
                                            <li class="is-active orbit-slide"> <img class="orbit-image" src="<cms:show gallery_image />" alt="<cms:show image_title />"> </li>
                                            <cms:else />
                                            <li class="orbit-slide"> <img class="orbit-image" src="<cms:show gallery_image />" alt="<cms:show image_title />"> </li>
                                        </cms:if>
                                    </cms:show_repeatable>
                                </ul>
                                <nav class="orbit-bullets">
                                    <cms:show_repeatable 'leftsquare_gallery' startcount='0'>
                                        <cms:if k_count='0'>
                                            <button class="is-active" data-slide="<cms:show k_count />"></button>
                                            <cms:else />
                                            <button data-slide="<cms:show k_count />"></button>
                                        </cms:if>
                                    </cms:show_repeatable>
                                </nav>
                            </div>
                        </div>
                        <div class="columns medium-6">
                            <!--Small GAllery Right-->
                            <div class="orbit" role="region" aria-label="Small Gallery Right" data-orbit data-options="autoPlay:false;">
                                <ul class="orbit-container">
                                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                                    <cms:show_repeatable 'rightsquare_gallery' startcount='0'>
                                        <cms:if k_count='0'>
                                            <li class="is-active orbit-slide"> <img class="orbit-image" src="<cms:show gallery_image />" alt="<cms:show image_title />"> </li>
                                            <cms:else />
                                            <li class="orbit-slide"> <img class="orbit-image" src="<cms:show gallery_image />" alt="<cms:show image_title />"> </li>
                                        </cms:if>
                                    </cms:show_repeatable>
                                </ul>
                                <nav class="orbit-bullets">
                                    <cms:show_repeatable 'rightsquare_gallery' startcount='0'>
                                        <cms:if k_count='0'>
                                            <button class="is-active" data-slide="<cms:show k_count />"></button>
                                            <cms:else />
                                            <button data-slide="<cms:show k_count />"></button>
                                        </cms:if>
                                    </cms:show_repeatable>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row small-gallery">
                        <div class="columns larger-12">
                            <!--Rectangle Gallery-->
                            <div class="orbit" role="region" aria-label="Rectangle Gallery" data-orbit data-options="autoPlay:false;">
                                <ul class="orbit-container">
                                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                                    <cms:show_repeatable 'rectangle_gallery' startcount='0'>
                                        <cms:if k_count='0'>
                                            <li class="is-active orbit-slide"> <img class="orbit-image" src="<cms:show gallery_image />" alt="<cms:show image_title />"> </li>
                                            <cms:else />
                                            <li class="orbit-slide"> <img class="orbit-image" src="<cms:show gallery_image />" alt="<cms:show image_title />"> </li>
                                        </cms:if>
                                    </cms:show_repeatable>
                                </ul>
                                <nav class="orbit-bullets">
                                    <cms:show_repeatable 'rectangle_gallery' startcount='0'>
                                        <cms:if k_count='0'>
                                            <button class="is-active" data-slide="<cms:show k_count />"></button>
                                            <cms:else />
                                            <button data-slide="<cms:show k_count />"></button>
                                        </cms:if>
                                    </cms:show_repeatable>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <cms:embed 'footer.html' />
        <script src="<cms:show k_site_link />js/vendor/jquery.js"></script>
        <script src="<cms:show k_site_link />js/vendor/what-input.js"></script>
        <script src="<cms:show k_site_link />js/vendor/foundation.js"></script>
        <script src="<cms:show k_site_link />js/app.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script src="<cms:show k_site_link />js/google-analytics.js" id="Google Analytics"></script>
    </body>

    </html>
    <?php COUCH::invoke(); ?>