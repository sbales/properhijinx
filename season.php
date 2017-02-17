<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Show Season' order='10' clonable='1'>
        <cms:editable name='show_active' label='Show this as the active show?' desc='Selecting YES will display this shows tab first when entering the site. ONLY select ONE show as active.' type='radio' opt_values='YES|NO' opt_selected='NO' />
        <cms:editable name='show_order' label='Show number in Season' desc='This space is used to order the shows. Start with 0 then 2 then 4 etc. If another show is added to the season use the odd number to place the show in the correct location for the season' type='text' />
        <cms:editable name='show_author' label='Playwright' type='text' />
        <cms:editable name='production_notes' label='Production Notes' desc='Production agreements, premieres, etcs.' toolbar='basic' type='richtext' height='100px'/>
        <cms:editable name='place_time' label='Place and Date' type='group' />
        <cms:editable name='show_date' label='Show Dates' toolbar='basic' type='richtext' group='place_time' height='100px' />
        <cms:editable name='show_place' label='Show Place' toolbar='basic' type='richtext' group='place_time' height='100px' />
        <cms:editable name='show_desc' label='Description' toolbar='custom' custom_toolbar='bold' type='richtext' /> />
        <cms:editable name='tickets' label='Tickets' type='group' />
        <cms:editable name='tickets_active' label='Visibility of Ticket Section' desc='The ticket information section will still be seen.' type='radio' opt_values='hide|show' opt_selected='hide' group='tickets' />
        <cms:editable name='ticket_prices' label='Ticket Information' toolbar='basic' type='richtext' height='100px' group='tickets'>More information on purchasing tickets will be posted here at a later date.</cms:editable>
        <cms:editable name='ticket_place' label='Ticket are purchased through' type='text' group='tickets' />
        <cms:editable name='ticket_link' label='Ticket Link' desc='List entire link including http://' type='text' group='tickets' />
        <cms:editable name='cast_crew' label='Cast & Production Team' type='group' />
        <cms:editable name='cc_active' label='Visibility of Cast & Crew Section' type='radio' opt_values='hide|show' opt_selected='hide' group='cast_crew' />
        <cms:repeatable name='show_cast' label='Cast' group='cast_crew'>
            <cms:editable type='text' name='character_name' label='Character' />
            <cms:editable type='text' name='actor_name' label='Actor/Actress' /> </cms:repeatable>
        <cms:repeatable name='show_crew' label='Production Team' group='cast_crew'>
            <cms:editable type='text' name='team_name' label='Name' />
            <cms:editable type='text' name='production_role' label='Role' /> </cms:repeatable>
        <cms:editable name='show_imgs' label='Production Posters' type='group' />
        <cms:editable name='show_poster' label='Vertical Show Website Poster' type='image' show_preview='1' preview_width='150' group='show_imgs' />
        <cms:editable name='show_poster_alt' label='Image Description' type='text' group='show_imgs' />
        <cms:editable name='show_banner' label='Horizontal Show Facebook Banner' type='image' show_preview='1' preview_width='150' group='show_imgs' />
        <cms:editable name='show_banner_alt' label='Image Description' type='text' group='show_imgs' /> </cms:template>
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
                <cms:show season_page /> </title>
            <meta name="description" content="<cms:show site_desc />">
            <meta name="keywords" content="<cms:show site_tags />">
            <meta name="author" content="Proper Hijinx Productions">
            <meta name="author" content="Proper Hijinx Productions">
            <!--Social Media Information-->
            <meta property="og:title" content="<cms:show site_name />-<cms:show season_page />" />
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
            <h1 class="season-title">Season</h1>
            <cms:pages masterpage='global-settings.php'> <small class="secondary-text"><cms:show season_year /></small> </cms:pages>
            <cms:pages masterpage='global-settings.php'> <a class="auditon <cms:show auditions_btn />" href="<cms:link masterpage='audition.php' />" target="_self"><small class="secondary-text">Currently Auditioning for this season!</small></a> </cms:pages>
            <div class="row collapse">
                <div class="small-3 medium-3 columns">
                    <ul class="tabs vertical" data-tabs id="tabs_example">
                        <cms:pages masterpage='season.php' startcount='1' orderby='show_order' order='asc'>
                            <cms:if show_active=='YES'>
                                <li class="tabs-title is-active">
                                    <cms:else />
                                    <li class="tabs-title">
                            </cms:if>
                            <a href="#tab<cms:show k_count />">
                                <p class="show-title">
                                    <cms:show k_page_title /> </p>
                                <p class="author"> by
                                    <cms:show show_author /> </p>
                            </a>
                            </li>
                        </cms:pages>
                    </ul>
                </div>
                <div class="small-9 medium-9 columns no-margin no-padding">
                    <div class="tabs-content vertical show-info" data-tabs-content="tabs_example">
                        <cms:pages masterpage='season.php' startcount='1' orderby='show_order' order='asc'>
                            <cms:if show_active=='YES'>
                                <div class="tabs-panel is-active" id="tab<cms:show k_count />">
                                    <cms:else />
                                    <div class="tabs-panel" id="tab<cms:show k_count />">
                            </cms:if>
                            <div class="row columns">
                                <div class=" small-12 medium-8 large-8 columns"> <img class="show-banner show-for-small-only" src="<cms:show show_banner />">
                                    <div class="publishing">
                                        <cms:show production_notes /> </div>
                                    <div class="date">
                                        <cms:show show_date /> </div>
                                    <div class="location">
                                        <cms:show show_place /> </div>
                                    <div class="synopsis">
                                        <cms:show show_desc /> </div>
                                </div>
                                <div class="columns medium-4 large-4 hide-for-small-only"> <img class="show-poster" src="<cms:show show_poster />" />
                                    <cms:pages masterpage='global-settings.php'> <a href="<cms:link masterpage='audition.php' />" target="_self"><div class="button aud-btn <cms:show auditions_btn />">Audition</div></a> </cms:pages>
                                </div>
                            </div>
                            <div class="row tickets">
                                <div class="columns small-12">
                                    <h5>Tickets</h5>
                                    <div class="cost">
                                        <cms:show ticket_prices /> </div>
                                    <div class="disclaimer <cms:show tickets_active />">Tickets are purchased through
                                        <cms:show ticket_place />.</div> <a href="<cms:show ticket_link /> " target="_blank" class="<cms:show tickets_active /> purchase-tickets">Click here to purchase tickets.</a> </div>
                            </div>
                            <div class="row production-team <cms:show cc_active /> ">
                                <div class="columns medium-6 large-6 no-left-padding">
                                    <h5>Cast</h5>
                                    <p class="cast">
                                        <cms:show_repeatable 'show_cast'> <b><cms:show character_name />:</b>
                                            <cms:show actor_name />
                                            <br> </cms:show_repeatable>
                                    </p>
                                </div>
                                <div class="columns medium-6 large-6 no-right-padding">
                                    <h5>Production Team</h5>
                                    <p class="cast">
                                        <cms:show_repeatable 'show_crew'> <b><cms:show production_role />:</b>
                                            <cms:show team_name />
                                            <br> </cms:show_repeatable>
                                    </p>
                                </div>
                            </div>
                            </div>
                        </cms:pages>
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