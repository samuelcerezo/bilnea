<?php

namespace Elementorbilnea;

if (! defined('ABSPATH')) {
	exit;
}

use Elementorbilnea\Widgets\bilnea_Query;
use Elementorbilnea\Widgets\bilnea_Breadcrumb;
use Elementorbilnea\Widgets\bilnea_Elementor;
use Elementorbilnea\Widgets\bilnea_Form;
use Elementorbilnea\Widgets\bilnea_Mailchimp;
use Elementorbilnea\Widgets\bilnea_Map;
use Elementorbilnea\Widgets\bilnea_Menu;
use Elementorbilnea\Widgets\bilnea_Recent;
use Elementorbilnea\Widgets\bilnea_Recent_Slider;
use Elementorbilnea\Widgets\bilnea_Search;
use Elementorbilnea\Widgets\bilnea_Share;
use Elementorbilnea\Widgets\bilnea_Slider;
use Elementorbilnea\Widgets\bilnea_Switcher;
use Elementorbilnea\Widgets\bilnea_Taxonomies;
use Elementorbilnea\Widgets\bilnea_Woo_Add_to_Cart;
use Elementorbilnea\Widgets\bilnea_Woo_Attribute;
use Elementorbilnea\Widgets\bilnea_Woo_Quantity;

class Plugin {

	public function __construct() {
		$this->add_actions();
	}

	private function add_actions() {
		add_action('elementor/widgets/widgets_registered', [$this, 'on_widgets_registered']);
		add_action('elementor/init', [$this, 'elementor_init']);
	}

	public function on_widgets_registered() {
		$this->includes();
		$this->register_widget();
	}

	private function includes() {
		b_f_include(get_template_directory().'/inc/elementor/widgets');
	}

	private function register_widget() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Query());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Breadcrumb());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Elementor());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Form());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Mailchimp());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Map());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Menu());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Recent());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Recent_Slider());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Search());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Share());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Slider());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Switcher());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Taxonomies());
		if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
			\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Woo_Add_to_Cart());
			\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Woo_Attribute());
			\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new bilnea_Woo_Quantity());
		}

	}

	public function elementor_init() {
		$elementor = \Elementor\Plugin::$instance;
		$elementor->elements_manager->add_category(
			'bilnea',
			[
				'title' => __('bilnea Widgets', 'bilnea'),
				'icon' => 'font',
			],
			1
		);
	}

}

new Plugin();