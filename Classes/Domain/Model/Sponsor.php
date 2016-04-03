<?php
namespace T3CM\T3cmsponsor\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Patrick Lobacher <lobacher@plus-werk.com>, Pluswerk GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Sponsor
 */
class Sponsor extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Sponsor name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name = '';

	/**
	 * Sponsor Logo
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 * @validate NotEmpty
	 */
	protected $logo = NULL;

	/**
	 * Sponsor Status
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $status = 0;

	/**
	 * Sponsor URL
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $url = '';

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the logo
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Sets the logo
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
	 * @return void
	 */
	public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo) {
		$this->logo = $logo;
	}

	/**
	 * Returns the status
	 *
	 * @return integer $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Sets the status
	 *
	 * @param integer $status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * Returns the url
	 *
	 * @return string $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

}