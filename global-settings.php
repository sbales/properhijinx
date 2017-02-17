<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Global Settings' order='1000'>
        <cms:editable type='group' name='site_details' label='Site Settings'/>
        <cms:editable type='group' name='page_names' label='Page Settings'/>
        <cms:editable type='group' name='error_mess' label='Error Message'/>
        <cms:editable name='site_name' label='Site Name' type='text' group='site_details' />
        <cms:editable name='site_desc' label='Site Description' type='textarea' group='site_details' />
        <cms:editable name='season_year' label='Season Year' type='text' group='site_details' />
        <cms:editable name=''  type='text' group='site_details' />
        <cms:editable type='relation' name='active_show' label='Active Show' desc='Please select the show you want to be shown first on the season page' masterpage='season.php' has='one' />
        
        <cms:editable name='site_tags' label='Site Keywords' desc='Please separate each with a ,' group='site_details' />
        <cms:editable name="auditions_btn" label='Audition Button' desc='Do you want to display the audition button across various areas of the site?' type='radio' opt_values=' hide | show ' group='site_details' />
        <cms:editable name="copyright_year" label='Copyright Year' type='text' group='site_details' />
        
        <cms:editable name='about_page' label='About Page Name' type='text' group='page_names' />
        <cms:editable name='season_page' label='Season Page Name' type='text' group='page_names' />
        <cms:editable name='gallery_page' label='Gallery Page Name' type='text' group='page_names' />
        <cms:editable name='contact_page' label='Contact Page Name' type='text' group='page_names' />
        <cms:editable name='audition_page' label='Audition Page Name' type='text' group='page_names' />
        
        <cms:editable name='error_text' label='Display Message' type='text' group='error_mess'>Sorry what you are looking for cannot be found.</cms:editable>
         
        
</cms:template>
        
    <?php COUCH::invoke(); ?>