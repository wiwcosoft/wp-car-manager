<?php

namespace Never5\WPCarManager\Ajax;

abstract class Ajax {

	private $tag = '';

	/**
	 * @param string $tag
	 */
	public function __construct( $tag ) {
		$this->tag = $tag;
	}

	/**
	 * Register AJAX action
	 */
	public function register() {
		add_action( Manager::ENDPOINT . $this->tag, array( $this, 'run' ) );
	}

	/**
	 * Checks AJAX nonce
	 */
	protected function check_nonce() {
		check_ajax_referer( 'wpcm_secret_listings_nonce', 'nonce' );
	}

	/**
	 * AJAX callback method, must be overridden
	 *
	 * @return void
	 */
	public abstract function run();

}