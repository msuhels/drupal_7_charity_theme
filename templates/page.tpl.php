<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<?php global $base_url; ?>

<!-- header -->
<!--<style>body{ background:url(<?php echo $base_url;?>/sites/all/themes/open_charity_theme/bg.png)}</style>-->
<div id="header_wrapper">
  <header id="header" class="clearfix open_wrap_show">
    <div class="top_right">
      <?php print render($page['user_menu']) ?>
    </div>
    <div class="top_left">
      <?php if ($logo): ?>
        <div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>"/></a></div>
      <?php endif; ?>
      <h1 id="site-title">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        <div id="site-description"><?php print $site_slogan; ?></div>
      </h1>
    </div>
    <nav id="main-menu"  role="navigation">
          <a class="nav-toggle" href="#">Navigation</a>
          <div class="menu-navigation-container">
            <?php $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              print drupal_render($main_menu_tree);
            ?>
          </div>
          <div class="clear"></div>
        </nav>
    
  </header>
</div>

<!-- End Header -->
<?php if (!$is_front): ?> 
  <div class="slideshow">
  <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/slider.png" style=" width: 100%;"/>
  </div>
  <div class="open_wrapper_full"> 
  	<div class="open_wrap_show ">
    	<div class="open_row">
    	<div class="open_10">
  			<h2 class="lightFont"><span class="light_theme">Next Event:</span><b> June 23<sup>rd</sup> 2016 18:30-21:00</b></h2>
            <div class="font14">Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</div>
  		</div>
        <div class="open_2">
  			<button class="open_btn_color" name="REGISTER"> REGISTER</button>
  		</div>
  		</div>
  	</div>
  </div>
  
  <div class="open_wrapper_full_white"> 
  	<div class="open_wrap_show">
    	<div class="open_row">
    		<h1 class="headingTital">GET INVOLVED</h1>
  		</div>
        <div class="open_row" align="center">
            <div class="open_col_3">
                <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/a2.png" style=" width: 38%;"/>
                <h3 class="titale_center">WE DO MEETTING</h3>
                <div class="heading_discr">We organise our meetings through the OpenCharity MeetUp group</div>
                <button class="trans_btn">MEETUP GROUP</button>
            </div>
            <div class="open_col_3">
                <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/a1.png" style=" width: 30%;"/>
                <h3 class="titale_center">WE COMMUNICATE</h3>
                <div class="heading_discr">OpenCharity have a slack group for daily communiction</div>
                <button class="trans_btn">SLACK GROUP</button>
            </div>
            <div class="open_col_3">
                <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/a3.png" style=" width: 30%;"/>
                <h3 class="titale_center">WE COLLABORATE</h3>
                <div class="heading_discr">We have a Wiki group set up to share tools and documents</div>
                <button class="trans_btn">WIKI GROUP</button>
            </div>
        
  		</div>
  	</div>
  </div>

 <div class="open_wrapper_full"> 
  	<div class="open_wrap_show ">
    	<div class="open_row">
    		<h1 class="headingTital">OUR MISSION</h1>
            <div class="our_mission1">Charities and Partners collaborating and sharing open solution and ideas to create value in the digital space.</div>
            <h2 class="mission_second">If you are a charity or a supplier, we are ready to welcome you.</h2>
            
  		</div>
    	<div class="open_12" align="center">
            <div class="open_col_3 whiteBox">
                <div class="faIcon"><i class="fa fa-lightbulb-o"></i></div>
                <h3 class="light_theme">We help charities</h3>
                <div class="heading_discrHelp">share knowledge and working practice to make the best technology choices.</div>
            </div>
            <div class="open_col_3 whiteBox">
                <div class="faIcon"><i class="fa fa-group"></i></div>
                <h3 class="light_theme">We bring together</h3>
                <div class="heading_discrHelp">charities and suppliers to the charity sector to share best practices.communiction</div>
            </div>
            <div class="open_col_3 whiteBox">
                <div class="faIcon"><i class="fa fa-thumbs-o-up"></i></div>
                <h3 class="light_theme">We encourage</h3>
                <div class="heading_discrHelp">collaboration and innovation for the good of the charity sector.</div>
            </div>
  		</div>
        
        <div class="open_12 border_top">
    		<h1 class="headingTital">OUR MEMBERS</h1>
  		</div>
        <div class="open_12 text-center">
            <div class="open_col_5 ">
                <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/m1.png" class="img_members"/>
            </div>
            <div class="open_col_5 ">
                <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/m2.png" class="img_members"/>
            </div>
            <div class="open_col_5 ">
                <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/m3.png" class="img_members"/>
            </div>
            <div class="open_col_5 ">
                <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/m4.png" class="img_members"/>
            </div>
            <div class="open_col_5 ">
                <img src="<?php echo $base_url;?>/sites/all/themes/open_charity_theme/images/m5.png" class="img_members"/>
            </div>
  		</div>
        <div class="open_row"   align="center">
            <i class="fa fa-circle" aria-hidden="true"></i><i class="fa fa-circle" aria-hidden="true"></i><i class="fa fa-circle" aria-hidden="true"></i>
            
        </div>
  	</div>
  </div>

<div class="open_wrapper_full_white_black"> 
  	<div class="open_wrap_show_1200">
      <div class="bg_white">
    	<div class="open_row">
    		<h1 class="headingTital">BLOG</h1>
  		</div>
        <div class="open_row">
            <div class="open_col_4">
                <h3 class="light_theme">WE DO MEETTING</h3>
                <div class="Disc-Blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id ipsum in tellus maximus venenatis dapibus a magna. </div>
                <h3 class="dateLg">14 NOW 2016</h3>
            </div>
            <div class="open_col_4">
                <h3 class="light_theme">WE COMMUNICATE</h3>
                <div class="Disc-Blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id ipsum in tellus maximus venenatis dapibus a magna. </div>
                <h3 class="dateLg">14 NOW 2016</h3>
            </div>
            <div class="open_col_4">
                <h3 class="light_theme">WE COLLABORATE</h3>
                <div class="Disc-Blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id ipsum in tellus maximus venenatis dapibus a magna. </div>
                <h3 class="dateLg">14 NOW 2016</h3>
            </div>
            <div class="open_col_4">
                <h3 class="light_theme">WE COLLABORATE</h3>
                <div class="Disc-Blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id ipsum in tellus maximus venenatis dapibus a magna. </div>
                <h3 class="dateLg">14 NOW 2016</h3>
            </div>
        
  		</div>
       </div>
  	</div>
  </div>
<?php endif; ?>
  <?php if ($is_front): ?> 
<div id="page-wrap" >
          
    <?php if ($page['top_first'] || $page['top_second'] || $page['top_third']): ?> 
      <div id="top-area" class="page-wrap clearfix">
        <?php if ($page['top_first']): ?>
        <div class="column one"><?php print render($page['top_first']); ?></div>
        <?php endif; ?>
        <?php if ($page['top_second']): ?>
        <div class="column two"><?php print render($page['top_second']); ?></div>
        <?php endif; ?>
        <?php if ($page['top_third']): ?>
        <div class="column three"><?php print render($page['top_third']); ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  <div id="container">
    <div class="container-wrap">
      <div class="content-sidebar-wrap">
        <div id="content">

          <?php if (theme_get_setting('breadcrumbs')): ?>
            <div id="breadcrumbs">
              <?php if ($breadcrumb): print $breadcrumb; endif;?>
            </div>
          <?php endif; ?>

          <section id="post-content" role="main">
            <?php print $messages; ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
              <h1 class="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if (!empty($tabs['#primary'])): ?>
              <div class="tabs-wrapper"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
          </section>
        </div>
      
        <?php if ($page['sidebar_first']): ?>
          <aside id="sidebar-first" role="complementary"><?php print render($page['sidebar_first']); ?></aside>
        <?php endif; ?>
      
        </div>

        <?php if ($page['sidebar_second']): ?>
          <aside id="sidebar-second" role="complementary"><?php print render($page['sidebar_second']); ?></aside> 
        <?php endif; ?>

    </div>
  </div>



    <div id="footer_wrapper" class="footer_block bottom_widget">
      <?php if ($page['bottom_widget_1'] || $page['bottom_widget_2'] || $page['bottom_widget_3']): ?> 
        <div id="footer-area" class="full-wrap clearfix">
          <?php if ($page['bottom_widget_1']): ?>
          <div class="column"><?php print render($page['bottom_widget_1']); ?></div>
          <?php endif; ?>
          <?php if ($page['bottom_widget_2']): ?>
          <div class="column two"><?php print render($page['bottom_widget_2']); ?></div>
          <?php endif; ?>
          <?php if ($page['bottom_widget_3']): ?>
          <div class="column"><?php print render($page['bottom_widget_3']); ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>



</div>
  <?php endif; ?>
<!-- Footer -->

<div id="footer">
  <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_forth']): ?> 
    <div id="footer-area" class="full-wrap clearfix">
      <?php if ($page['footer_first']): ?>
      <div class="column"><?php print render($page['footer_first']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_second']): ?>
      <div class="column two"><?php print render($page['footer_second']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_third']): ?>
      <div class="column"><?php print render($page['footer_third']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_forth']): ?>
      <div class="column"><?php print render($page['footer_forth']); ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <div class="footer_credit">
      
    <div id="copyright" class="full-wrap clearfix">
      <!--<div class="copyright">&copy; <?php echo date("Y"); ?> <?php print $site_name; ?>. All Rights Reserved.</div> -->
      <!-- Social Links -->
      <?php if (theme_get_setting('social_links')): ?>
        <span class="social-icons">
         <ul>
          <li><a class="fb" href="<?php echo theme_get_setting('facebook_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="<?php echo theme_get_setting('twitter_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-twitter"></i></a></li>
          <li><a class="gplus" href="<?php echo theme_get_setting('gplus_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="linkedin" href="<?php echo theme_get_setting('linkedin_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="pinterest" href="<?php echo theme_get_setting('pinterest_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-pinterest"></i></a></li>
          <li><a class="youtube" href="<?php echo theme_get_setting('youtube_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-youtube"></i></a></li>
          <!--<li><a class="rss" href="<?php print $front_page; ?>rss.xml"><i class="fa fa-rss"></i></a></li>-->
         </ul>
        </span>
      <?php endif; ?>
      <!-- End Social Links -->
      <div class="credits">
		This Site was built as a collaboration between <a href="http://www.ibrinfotech.com">Manifasto Digital</a> And <a href="http://www.ibrinfotech.com">Compucorp</a>
      </div>
    </div>

  </div>
</div>
