<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Audition Information' order='3'>
        <cms:editable name='audition_desc' label='Auditions Description' desc='Enter audition details here' type='richtext' toolbar='medium'> Audition Info gets listed here. </cms:editable>
    </cms:template>
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
            <h1>Auditions</h1>
            <div class="row">
                <cms:show audition_desc /> </div>
            <div class="row contact-form margin-top">
                <h4 class="maroon">Request an Audition Time:</h4>
                <cms:form enctype="multipart/form-data" method="post" class="k_form" id="contact-form">
                    <div class="row margin-top">
                        <cms:if k_success>
                            <div class="k_successmessage">
                                <cms:send_mail from='www.properhijinx.com' to='K_EMAIL_TO' subject='Audition Requested'>
                                    <cms:show k_success /> </cms:send_mail>
                                <h6 class='white'>Your audition request was recieved, we will be in touch with more details soon.</h6></div>
                        </cms:if>
                        <cms:if k_error>
                            <div class="k_errormessage">
                                <ul>
                                    <cms:each k_error>
                                        <li>
                                            <cms:show item /> </li>
                                    </cms:each>
                                </ul>
                            </div>
                        </cms:if>
                    </div>
                    <div class="row">
                        <div class="small-12 medium-5 columns">
                            <cms:input type="text" name="name" label="Name" placeholder="NAME" required='1' validator='min_len=3' /> </div>
                        <div class="small-12 medium-7 columns">
                            <cms:input type="text" name="email" label='Email' placeholder="EMAIL" validator='email' required='1' /> </div>
                        <div class="columns small-12">
                            <cms:input type="textarea" rows="5" name="message" required='1' label='Message' placeholder="AUDITION TIME AVAILABILITY"></cms:input>
                            <input class="message-send" type="submit" name="send" value="SEND"> </div>
                    </div>
                </cms:form>
            </div>
        </main>
        <cms:embed 'footer.html' />
        <script src="<cms:show k_site_link />js/google-analytics.js" id="Google Analytics"></script>
    </body>

    </html>
    <?php COUCH::invoke(); ?>