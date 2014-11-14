<?php
namespace Scion\Services\GitHub\Receiver\PullRequests;

use Scion\Services\GitHub\Receiver\PullRequests;

abstract class AbstractPullRequests {

	protected $pullRequests;
	protected $api;

	/**
	 * Constructor
	 * @param PullRequests $pullRequests
	 */
	public function __construct(PullRequests $pullRequests) {
		$this->pullRequests = $pullRequests;
		$this->api          = $pullRequests->getApi();
	}
} 