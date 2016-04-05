<?php
/**
 * 	Admin Welcome Screen
 *
 *	@package: 	TVGroup Wordpress
 * 	@author :   TvGroup Team
 * 	@link 	:   http://www.huecis.com
 * 	@since 	:	1.0
 * 	User 	: 	Tuan Nguyen	
 * 	Date 	:	ngay:thang:nam-phut:gio (30:12:2015-10:09AM) (AM :sang; PM: chieu)	
 *
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * huecis_welcome Class
 *
 * A general class for About and Credits page.
 *
 * @since 1.0
 */
class huecis_welcome {

	/**
	 * @var string The capability users should have to view the page
	 */
	public $minimum_capability = 'manage_options';

	/**
	 * Get things started
	 *
	 * @since 1.0
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menus' ) );
		add_action( 'admin_head', array( $this, 'admin_head' ) );
		add_action( 'admin_init', array( $this, 'welcome' ) );
	}

	/**
	 * Register the Dashboard Pages which are later hidden but these pages
	 * are used to render the Welcome and Credits pages.
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	public function admin_menus() {
		// About
		add_dashboard_page(
			__( 'Team Details', 'huecis' ),
			__( 'Team Details', 'huecis' ),
			$this->minimum_capability,
			'huecis-about',
			array( $this, 'about_screen' )
		);

		// Services
		add_dashboard_page(
			__( 'Services | Elegant Theme', 'huecis' ),
			__( 'Services', 'huecis' ),
			$this->minimum_capability,
			'huecis-services',
			array( $this, 'services_screen' )
		);

	}

	/**
	 * Hide dashboard tabs from the menu
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function admin_head() {
		remove_submenu_page( 'index.php', 'huecis-services' );
		remove_submenu_page( 'index.php', 'huecis-support' );
	}

	/**
	 * Navigation tabs
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function tabs() {
		$selected = isset( $_GET['page'] ) ? $_GET['page'] : 'huecis-about'; ?>
		<h2 class="nav-tab-wrapper">
			<a class="nav-tab <?php echo $selected == 'huecis-about' ? 'nav-tab-active' : ''; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'huecis-about' ), 'index.php' ) ) ); ?>">
				<?php _e( "About", 'huecis' ); ?>
			</a>
			<a class="nav-tab <?php echo $selected == 'huecis-services' ? 'nav-tab-active' : ''; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'huecis-services' ), 'index.php' ) ) ); ?>">
				<?php _e( 'Services', 'huecis' ); ?>
			</a>
		</h2>
		<?php
	}

	/**
	 * Render About Screen
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	public function about_screen() { ?>
		<div class="wrap about-wrap">
			<?php
			// Get theme version #
			$theme_data = wp_get_theme();
			$theme_version = $theme_data->get( 'Version' );
			$theme_name = $theme_data->get( 'Name' ); ?>

			<div class="wrap-header">
				<div class="headerLeft">
					<a href="http://huecis.com/"><img src="https://huecis.com/wp-content/uploads/2016/03/TVGroup.png" alt=""></a>
				</div>
				<div class="headerRight">
					<h1>Huecis - Team Freelance</h1>
					<div class="about-text">
						<?php _e( 'Thank you for choosing ours team for your website.', 'huecis' ); ?>
					</div>
				</div>
				
			</div>

			<?php $this->tabs(); ?>

			<div class="wrap-content">
				<div class="feature-section">

					<br />

					<div>
						<h4><?php _e( 'GPL License', 'huecis' ); ?></h4>
						<p><?php _e( 'This theme is licensed under the GPL license. This means you can use it for anything you like as long as it remains GPL.', 'huecis' ); ?></p>
					</div>

					<div>
						<h4><?php _e( 'Credits', 'huecis' ); ?></h4>
						<p>
						<?php _e( 'This theme was created by <a href="http://www.huecisplorer.com" target="_huecis">huecisplorer.com</a>.', 'huecis' ); ?>
						<br />
						<?php _e( 'We work hard to develop, host, release and update this theme.', 'huecis' ); ?>
						<br />
						<?php _e( 'A back-link to our website and or a donation is very much appreciated!', 'huecis' ); ?>
						</p>
					</div>

					<div>
						<h4><?php _e( 'Liability', 'huecis' ); ?></h4>
						<p>
						<?php _e( 'huecisplorer.com shall not be held liable for any damages, including, but not limited to, the loss of data or profit, arising from the use of, or inability to use, this theme.', 'huecis' ); ?>
						</p>
					</div>

					<div>
						<h4><?php _e( 'Premium Version', 'huecis' ); ?></h4>
						<p>
						<?php _e( 'You can purchase a premium version of the theme which includes many added benefits including styling options, auto updates and support.', 'huecis' ); ?>
						</p>
						<a href="http://www.huecisplorer.com/out/corporate-theme" target="_huecis" class="button button-primary"><?php _e( 'Premium Version', 'huecis' ); ?></a>
					</div>

					<div>
						<h4><?php _e( 'Getting Started', 'huecis' ); ?></h4>
						<p>
						<?php _e( 'Below you will find some useful links to get you started with this theme.', 'huecis' ); ?>
						</p>
						<a href="<?php echo wp_customize_url(); ?>" target="_huecis" class="button button-secodary load-customize hide-if-no-customize"><?php _e( 'Customize Your Site', 'huecis' ); ?></a>
						<a href="http://www.huecisplorer.com/corporate-free-wordpress-theme/" target="_huecis" class="button button-secodary"><?php _e( 'Theme Page', 'huecis' ); ?></a>
						<a href="http://www.huecisplorer.com/docs/free-theme-documentation/" target="_huecis" class="button button-secodary"><?php _e( 'Documentation', 'huecis' ); ?></a>
					</div>

				</div>
			</div>

		</div>
		<?php
	}

	/**
	 * Render Recommended Screen
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	public function services_screen() { ?>
		<div class="wrap about-wrap">
			<div class="wrap-header">
				<div class="headerLeft">
					<a href="http://huecis.com/"><img src="https://huecis.com/wp-content/uploads/2016/03/TVGroup.png" alt=""></a>
				</div>
				<div class="headerRight">
					<h1><?php _e( 'Services', 'huecis' ); ?></h1>
					<div class="about-text">
				<?php _e( 'We create awesome Websites and Mobile Apps, the perfect solution for your project.
We do not make designs, we make magic!', 'huecis' ); ?>
			</div>
				</div>
				
			</div>	

			<?php $this->tabs(); ?>

			<div>
				<div class="feature-section">
					<br />

					<div>
					<h4><?php _e( 'DESIGN & WEB DEVELOP', 'huecis' ); ?></h4>
					<p><?php _e( 'With modern technology, we can help you make your thinks to reality. Come with us and we help you make what you want. We alway stay here to listen you!.', 'huecis' ); ?></p>
					</div>

					<div>
						<h4><?php _e( 'HOSTING & DOMAIN', 'huecis' ); ?></h4>
						<p><?php _e( 'We bring your company with anyone, make your branding and get more profit for you. Your company growth is measure value of we work.', 'huecis' ); ?></p>
					</div>

					<div>
						<h4><?php _e( 'SEO & MARKETING', 'huecis' ); ?></h4>
						<p><?php _e( 'We bring your company with anyone, make your branding and get more profit for you. Your company growth is measure value of we work.', 'huecis' ); ?></p>
					</div>

					<div>
						<h4><?php _e( 'SYSTEM ADMINISTRATOR', 'huecis' ); ?></h4>
						<p><?php _e( 'We help you install, configuration service and make it safety, troubleshooting and fixed problem. Save your time, money and safety !', 'huecis' ); ?></p>
					</div><hr>
					<div>
						<h4><?php _e( 'Register Service', 'huecis' ); ?></h4>
						<p>
						<?php _e( 'If you need to use the service on. Please, send mail to contact us.', 'huecis' ); ?>
						</p>
						<a href="http://www.huecis..com/" target="_huecis" class="button button-primary"><?php _e( 'Contact Us', 'huecis' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Sends user to the Welcome page on theme activation
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	 */

	public function welcome() {
		global $pagenow;
		if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
			return;
		}
		if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) {
			wp_safe_redirect( admin_url( 'admin.php?page=huecis-about' ) ); exit;
			exit;
		}
	}
	
}
$huecis_wellcome = new huecis_welcome();