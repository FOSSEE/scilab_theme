<?php
/**
 * @file
 * Theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page. Used to toggle the mission statement.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * - $language: (object) The language the site is being displayed in.
 * Page metadata:
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body> tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can be one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a "Blog entry" it would result in "node-type-blog".
 *     Note that the machine name will often be in a short form of the human readable label.
 *   - page-views: Page content is generated from Views. Note: a Views block
 *     will not cause this class to appear.
 *   - page-panels: Page content is generated from Panels. Note: a Panels block
 *     will not cause this class to appear.
 *   The following only apply with the default 'sidebar_first' and 'sidebar_second' block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-first or sidebar-second: A combination of the
 *       two classes when only one of the two sidebars have content.
 * - $node: Full node object. Contains data that may not be safe. This is only
 *   available if the current page is on the node's primary url.
 * - $menu_item: (array) A page's menu item. This is only available if the
 *   current page is in the menu.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been disabled.
 * - $primary_links (array): An array containing the Primary menu links for the
 *   site, if they have been configured.
 * - $secondary_links (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: HTML for status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - $help: Dynamic help text, mostly for admin pages.
 * - $content: The main content of the current page.
 * - $feed_icons: A string of all feed icons for the current page.
 *
 * Footer/closing data:
 * - $footer_message: The footer message as defined in the admin settings.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic content.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * Regions:
 * - $content_top: Items to appear above the main content of the current page.
 * - $content_bottom: Items to appear below the main content of the current page.
 * - $navigation: Items for the navigation bar.
 * - $sidebar_first: Items for the first sidebar.
 * - $sidebar_second: Items for the second sidebar.
 * - $header: Items for the header region.
 * - $footer: Items for the footer region.
 * - $page_closure: Items to appear below the footer.
 *
 * The following variables are deprecated and will be removed in Drupal 7:
 * - $body_classes: This variable has been renamed $classes in Drupal 7.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess()
 * @see zen_process()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

    <head>
        <title><?php print $head_title; ?></title>
        <?php print $head; ?>
        <?php print $styles; ?>
        <?php print $scripts; ?>
	<script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/orbit/jquery-1.5.1.min.js"></script>
        <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/orbit/jquery.orbit-1.2.3.js"></script>
        <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/orbit/jquery.orbit-1.2.3.min.js"></script>
	<script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/js/dropdown-menu.min.js"></script>
	<script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/js/menu.js"></script>
	<script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/js/slideshow.js"></script>
	<script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/js/testimonials_script.js"></script>
	<script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/js/lightbox_me.js"></script>
	<script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/js/modal.js"></script>
	<script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/js/nice-bar.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/css/modal.css" />
	<link rel="stylesheet" type="text/css" href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/css/dropdown-menu.css" />
	<link rel="stylesheet" type="text/css" href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/css/nice-bar.css" />
	<link rel="stylesheet" type="text/css" href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/css/testimonials_front.css" />
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/orbit/orbit-1.2.3.css">
    <style type="text/css">

	
	#slideshow img
	{
		display:none;
	}
	.home-slider {
		-webkit-border-radius: 5px;
		   -moz-border-radius: 5px;
		     -o-border-radius: 5px;
		        border-radius: 5px;
	}
	#slideshow {
		-webkit-border-top-left-radius: 5px;
		   -moz-border-top-left-radius: 5px;
		     -o-border-top-left-radius: 5px;
		        border-top-left-radius: 5px;
		-webkit-border-bottom-left-radius: 5px;
		   -moz-border-bottom-left-radius: 5px;
		     -o-border-bottom-left-radius: 5px;
		        border-bottom-left-radius: 5px;
	}	

	.statistics_counter{
	display :none !important;
	}
	</style>
	
    </head>
    <body class="<?php print $classes; ?>">
    <!-- <div class="nice&#45;bar"> -->
    <!--     <p class="nice&#45;text"> -->
    <!--         Developers required for <em>NMEICT/MHRD</em> funded FOSSEE project. -->
    <!--         <a class="nice&#45;button" href="http://fossee.in/jobs">View more</a> details. -->
    <!--         <span class="nice&#45;close">x</span> -->
    <!--     </p> -->
    <!-- </div> -->
        <?php if ($primary_links): ?>
            <div id="skip-link"><a href="#main-menu"><?php // print t('Jump to Navigation');   ?></a></div>
        <?php endif; ?>
        <div id="page-wrapper">
            <div id="page">
                <div id="header">
                    <div class="section clearfix">
                        <div class="inner">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" style="width: 160px;height: 63px;padding-top: 4px;margin-left:35px;" /></a>
                                <?php if (!($logged_in)): ?>
                                <div id="login"><span id="login_c"><span id="loginb"><a href="<?php print $GLOBALS['base_url']; ?>/user">Login</a></span>|<span id="registerb"><a href="<?php print $GLOBALS['base_url']; ?>/user/register">Register</a></span></span></div>
				<?php else: ?>
				<div id="login1">
					<span id="login_c1">
						<strong>Welcome <a href="user"><?php print($user->name); ?></a></strong>&nbsp;&nbsp;
						<span id="logout_c1">
							<a href="<?php print $GLOBALS['base_url']; ?>/logout" style="text-decoration:none;"><strong>Logout</strong></a>
						</span>
					</span>
				</div>
                            <?php endif; ?>
			    <?php endif; ?>
                            <?php if ($site_name || $site_slogan): ?>
                                <div id="name-and-slogan">
                                    <?php if ($site_name): ?>
                                        <?php if ($title): ?>
                                            <div id="site-name"><strong>
                                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span style="display:none;"><?php print $site_name; ?></span></a>
                                                </strong></div>
                                        <?php else: /* Use h1 when the content title is empty */ ?>
                                            <h1 id="site-name">
                                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                                            </h1>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if ($site_slogan): ?>
                                        <div id="site-slogan"><?php print $site_slogan; ?>
                                        </div>
                                    <?php endif; ?>
                                </div><!-- /#name-and-slogan -->
                            <?php endif; ?>
                            <?php if ($search_box): ?>
                                <div id="search-box">
                                    <?php print $search_box; ?>
                                </div>
                            <?php endif; ?>

                            <?php print $header; ?>
                            <div style="width:100%;margin-top:0.9%;">
                                <?php if ($primary_links || $navigation): ?>
                                    <div id="navigation">
                                        <div class="section clearfix">
                                           <!-- <?php print theme(array('links__system_main_menu', 'links'), $primary_links, array('id' => 'main-menu', 'class' => 'dropdown-menu',), array('text' => t('Main menu'), 'level' => 'h2', 'class' => 'element-invisible',)); ?>
                                            <?php print $navigation; ?>
                                            
                                            <?php
                                            $menu_name = variable_get('menu_primary_links_source', 'primary-links');?>
                                            <div id="main-menu" class="dropdown_menu" data-options='{"sub_indicators":"true","drop_shadows":"true"}'>
                                            <?php
                                            print menu_tree($menu_name);
                                            ?>
                                            </div> -->
                                            <div id='main-menu'>
                                <?php
                                        $primary_links_tree = menu_tree_all_data('primary-links');
                                        print menu_tree_output($primary_links_tree, array(
                                                        'id' => 'main-menu',
                                                        'class' => 'links clearfix',
                                                ));
                                ?>
                        </div>
                                        </div>
                                    </div>
                                    <!-- /.section, /#navigation -->
                                    <div id="search">
                                        <div class="section clearfix">
                                            <?php print $top_content_3 ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	<!-- /.section, /#header -->
                        <div id="main-wrapper">
                            <div id="main" class="clearfix<?php
                            if ($primary_links || $navigation) {
                                print ' with-navigation';
                            }
                            ?>">
                                <div class="inner_content" >
                                    <div>
                                	<div id="sidebarfst">
                                            <div id="sidebarfstsub" style="padding-bottom:1px;">
                                            <?php print $sidebar_first; ?>
                                            </div>
                                            <span id="sdbi">
                                            <span id="sidsub1" style=""></span>
                                            <span id="sidsub2" style=""></span>
                                            </span>
						<?php
							    $scilab = file_get_contents('http://www.scilab.in/data/awstats/awstats.php');
							    $scilab = json_decode($scilab);
						?>
						<center>
						<div style="width: 190px;">
						<img src="http://scilab.in/data/stats-logo-black.png" style="width: 25px; float: left;">
						<strong><?php echo  $scilab->total_page_loads; ?> </strong>page loads.<br />
						<a href="http://www.scilab.in/awstats/awstats.pl?config=scilab" target="_blank">
							Click here to view stats
						</a>
						</div><br>
                        <div>
                            <a href="http://fossee.in" target="_blank">
                                <img src="http://fossee.in/sites/all/themes/fossee/logo.png" style="width:150px;"/>
                            </a>
                        </div>
						</center>
					</div>

                                    <div id="content" class="column">
                                    <div id="main_content">
                                        <div class="section">
                                                <?php if ($mission): ?>
                                                <div id="mission">
                                                <?php print $mission; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php print $highlight; ?>
                                                <?php print $breadcrumb; ?>
                                                <?php if ($title): ?>
                                                <h1 class="title" id="frnt">
                                                <?php print $title; ?>
                                                </h1>
                                            <?php endif; ?>
                                                <?php print $messages; ?>
                                                <?php if ($tabs): ?>
                                                <div class="tabs">
                                                <?php print $tabs; ?>
                                                </div>
                                            <?php endif; ?>
                                                <?php print $help; ?>
                                                <?php print $content_top; ?>
					    <div class="home-slider">
				            <div id="slideshow">
					    <img data-caption="#slide4" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/images/image4.png" style="width:450px;height:210px"/>
   					    <span class="orbit-caption" id="slide4" style="padding-left:20px;">Scilab offers an easy to use console for loading data, performing computations and plotting data.</span>
					    <img data-caption="#slide5" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/images/image5.png" style="width:450px;height:210px"/>
					    <span class="orbit-caption" id="slide5" style="padding-left:20px;">Scilab offers a set of functions for 3D plots and graphs</span>
					    <img data-caption="#slide1" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/images/image1.png" style="width:450px;height:210px"/>
   					    <span class="orbit-caption" id="slide1" style="padding-left:20px;">For Optimization: Algorithms in Scilab helps the end user for Simulation to solve constrained and unconstrained continuous and discrete problems. Applications include, but are not limited to, nonlinear optimization, genetic algorithms, simulated annealing and quadratic optimization.</span>
     					    <img data-caption="#slide2" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/images/image2.png" style="width:450px;height:210px"/>
					    <span class="orbit-caption" id="slide2" style="padding-left:20px;">For Signal Processing:  Scilab helps you visualise, analyse and filter signals in time and frequency domains. Some of the capabilities include, but are not limited to, signal generation, power spectral density estimation, digital FIR and IIR filter design and signal transforms.</span>
					    <img data-caption="#slide3" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/scilab/images/image3.png" style="width:450px;height:210px"/>
					    <span class="orbit-caption" id="slide3" style="padding-left:20px;">Xcos is a graphical editor and has a rich library of blocks that help you design hybrid dynamical system models. It also has a palette browser and a compiler/simulator.</span>
					    
						<!--<img src="sites/all/themes/scilab/images/image4.jpg" alt="and more features" /> -->
						
					    </div>
					    </div>
                                            <div id="content-area">
					    <div id="teaser_block_main">
						<div id="teaser_block_left"><h2>Overview</h2>
						<!--<?php 
						$t_left = db_query('SELECT * FROM {node_revisions} WHERE nid=678');
						$t_left_res = db_fetch_object($t_left);
						//print($t_left_res->body);
						echo (strlen($t_left_res->body) > 200) ? substr($t_left_res->body,0,200) : $t_left_res->body;
						echo "<br />";
						?>-->
						<?php $node = node_load(678);
						print $node->teaser; ?>
						<a href="overview" class="read_more">Read more</a>
						</div>
						<div id="teaser_block_right"><h2>Features</h2>
						<!--<?php 
						$t_right = db_query('SELECT * FROM {node_revisions} WHERE nid=47');
						$t_right_res = db_fetch_object($t_right);
						//print($t_left_res->body);
						echo (strlen($t_right_res->body) > 200) ? substr($t_right_res->body,0,200) : $t_right_res->body;
						echo "<br />";
						?>-->
						<?php $node = node_load(47);
						print $node->teaser; ?>
						<!-- <a href="scilabfeatures" class="read_more"style="position: relative; top: 20px;">Read more</a> -->
						<a href="scilabfeatures" class="read_more"style="position: relative;">Read more</a>
						</div>
					    </div>
                                            <?php print $content; ?>
                                            </div>
                                                <?php print $content_bottom; ?>
                                                <?php if ($feed_icons): ?>
                                                <div class="feed-icons">
                                                <?php print $feed_icons; ?>
                                                </div>
                                    <?php endif; ?>
                               
                                        </div>
                                        </div>
                                        <div id="testimonials_front">
                                            <div style='mar:-50px' id='panel'>
                                                <?php
                                                    echo "<a href='/testimonials' title='View all Testimonials' class='testimonial_head'>Testimonials</a>";
                                                    ?>
                                            </div>
                                            <ul>
                                                <?php 

                                                $query = "SELECT * FROM testimonials";

                                                $result = db_query($query);
                                                $id=$row->id;
                                                while ($row = db_fetch_object($result)) 
                                                {      
                                                $string =  strip_tags($row->body);
                                                $length=strlen($string);
                                                if($length>260)
                                                {
                                                $cut1= drupal_substr($string, 0, 260);
                                                $cut=$cut1."  ...   ";
                                                 echo "<li><i><p style='margin-top:-7px'>{$cut}</i><a href='' id='$row->id' style='margin-left:5px'  data-target='#dialog{$row->id}' class='testimonial_read_more'>Read more</a></p>
                                                <div id='dialog{$row->id}' class='dialog'>                                                		
                                                    <img src='sites/all/themes/scilab/images/x.png'  style='margin-top:-25px ;margin-left:735px;' class='lightbox_close'>
                                                    <i><p style='margin-top:-1px'>{$row->body}</i><hr/><br/>
                                                    <p style='text-align:right;margin-top:-15px'>{$row->name},</p> 
                                                    <p style='text-align:right;margin-top:-15px'>{$row->department},
                                                    {$row->university},</p>
                                                    <p style='text-align:right;margin-top:-15px''>{$row->contribution},{$row->reference}.</p>
                                                </div>
                                                <br/>

                                                <p style='text-align:right;margin-top:-30px'>{$row->name},{$row->university},
                                                {$row->contribution},</p>
                                                <p style='text-align:right;margin-top:-15px''>{$row->reference}.</p>	
                                                </li>"; 	

                                                }
                                                
                                                else {
                                                $cut= drupal_substr($string, 0, 260);
                                                 echo "<li><i><p style='margin-top:-7px'>{$cut}</i>
                                                <div id='dialog{$row->id}' class='dialog'>                                                		
                                                    <img src='sites/all/themes/scilab/images/x.png'  style='margin-top:-25px ;margin-left:735px;' class='lightbox_close'>
                                                    <i><p style='margin-top:-1px'>{$row->body}</i><hr/><br/>
                                                    <p style='text-align:right;margin-top:-15px'>{$row->name},</p> 
                                                    <p style='text-align:right;margin-top:-15px'>{$row->department},
                                                    {$row->university},</p>
                                                    <p style='text-align:right;margin-top:-15px''>{$row->contribution},{$row->reference}.</p>
                                                </div>
                                                <br/>

                                                <p style='text-align:right;margin-top:-30px'>{$row->name},{$row->university},
                                                {$row->contribution},</p>
                                                <p style='text-align:right;margin-top:-15px''>{$row->reference}.</p>	
                                                </li>"; 	

                                                }
                                                }
                                               
                                                ?>
                                            </ul>
                                        </div> <!-- /#testimonials_front -->

                               </div>		<!-- /.section, /#content -->
    <?php endif; ?>
                                    </div>
                               
                  </div>
                                <div id="content_down">
                        <div id="content_dn1"></div>
                        <div id="content_dn2"></div>
                        </div>
</div>
                   </div>
                   
                	<!-- /#main, /#main-wrapper -->
<?php if ($footer || $footer_message || $secondary_links): ?>
                    <div id="footer">
                        <div class="section">
                            <div class="inner_footer">
                                    <?php print theme(array('links__system_secondary_menu', 'links'), $secondary_links, array('id' => 'secondary-menu', 'class' => 'links clearfix',), array('text' => t('Secondary menu'), 'level' => 'h2', 'class' => 'element-invisible',)); ?>
                                    <?php if ($footer_message): ?>
                                    <div id="footer-message">
                                    <?php print $footer_message; ?>
                                    </div>
    <?php endif; ?>
    <?php print $footer; ?>
                            
                        </div>
                        </div>
                    </div><!-- /.section, /#footer -->
<?php endif; ?>
            </div>
        </div><!-- /#page, /#page-wrapper -->

<?php print $page_closure; ?>
<?php print $closure; ?>
    </body>
</html>
