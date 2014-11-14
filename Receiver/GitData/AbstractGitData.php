<?php
namespace Scion\Services\GitHub\Receiver\GitData;

use Scion\Services\GitHub\Receiver\GitData;

abstract class AbstractGitData {

	protected $gitData;
	protected $api;

	/**
	 * Constructor
	 * @param GitData $gitData
	 */
	public function __construct(GitData $gitData) {
		$this->gitData = $gitData;
		$this->api     = $gitData->getApi();
	}
} 