<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Group_Control_Box_Shadow extends Group_Control_Base {

	protected static $fields;

	/**
	 * @since 1.0.0
	 * @access public
	*/
	public static function get_type() {
		return 'box-shadow';
	}

	/**
	 * @since 1.2.2
	 * @access protected
	*/
	protected function init_fields() {
		$controls = [];

		$controls['box_shadow'] = [
			'label' => _x( 'Box Shadow', 'Box Shadow Control', 'elementor' ),
			'type' => Controls_Manager::BOX_SHADOW,
			'condition' => [
				'box_shadow_type!' => '',
			],
			'selectors' => [
				'{{SELECTOR}}' => 'box-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{SPREAD}}px {{COLOR}} {{box_shadow_position.VALUE}};',
			],
		];

		$controls['box_shadow_position'] = [
			'label' => _x( 'Position', 'Box Shadow Control', 'elementor' ),
			'type' => Controls_Manager::SELECT,
			'options' => [
				' ' => _x( 'Outline', 'Box Shadow Control', 'elementor' ),
				'inset' => _x( 'Inset', 'Box Shadow Control', 'elementor' ),
			],
			'condition' => [
				'box_shadow_type!' => '',
			],
			'default' => ' ',
			'render_type' => 'ui',
		];

		return $controls;
	}

	protected function get_default_options() {
		return [
			'popup' => [
				'starter_title' => _x( 'Box Shadow', 'Box Shadow Control', 'elementor' ),
				'starter_name' => 'box_shadow_type',
				'starter_value' => 'yes',
			],
		];
	}
}
