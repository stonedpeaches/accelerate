<?php
	/**
	 * @package     Freemius
	 * @copyright   Copyright (c) 2015, Freemius, Inc.
	 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 * @since       1.0.5
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	class FS_Plugin_Plan extends FS_Entity {

		#region Properties

		/**
		 * @var number
		 */
		public $plugin_id;
		/**
		 * @var string
		 */
		public $name;
		/**
		 * @var string
		 */
		public $title;
		/**
		 * @var string
		 */
		public $description;
		/**
		 * @var bool Defaults to true. If true, allow unlimited localhost installs with the same license.
		 */
		public $is_free_localhost;
		/**
		 * @var bool Defaults to true. If false, don't block features after license expiry - only block updates and
		 *      support.
		 */
		public $is_block_features;
		/**
		 * @var int
		 */
		public $license_type;
		/**
		 * @var bool
		 */
		public $is_https_support;
		/**
		 * @var int Trial days.
		 */
		public $trial_period;
		/**
		 * @var string If true, require payment for trial.
		 */
		public $is_require_subscription;
		/**
		 * @var string Knowledge Base URL.
		 */
		public $support_kb;
		/**
		 * @var string Support Forum URL.
		 */
		public $support_forum;
		/**
		 * @var string Support email address.
		 */
		public $support_email;
		/**
		 * @var string Support phone.
		 */
		public $support_phone;
		/**
		 * @var string Support skype username.
		 */
		public $support_skype;
		/**
		 * @var bool Is personal success manager supported with the plan.
		 */
		public $is_success_manager;
		/**
		 * @var bool Is featured plan.
		 */
		public $is_featured;

		#endregion Properties

		/**
		 * @param object|bool $plan
		 */
		function __construct( $plan = false ) {
			parent::__construct( $plan );

			if ( is_object( $plan ) ) {
				$this->name = strtolower( $plan->name );
			}
		}

		static function get_type() {
			return 'plan';
		}

		/**
		 * @author Vova Feldman (@svovaf)
		 * @since  1.0.9
		 *
		 * @return bool
		 */
		function is_free() {
			return ( 'free' === $this->name );
		}

		/**
		 * @author Vova Feldman (@svovaf)
		 * @since  1.0.9
		 *
		 * @return bool
		 */
		function has_trial() {
			return ! $this->is_free() &&
			       is_numeric( $this->trial_period ) && ( $this->trial_period > 0 );
		}
	}