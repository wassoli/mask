<?php

namespace TYPO3\Mask\ViewHelpers;

/**
 *
 * @package TYPO3
 * @subpackage mask
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @author Benjamin Butschell <bb@webprofil.at>
 *
 */
class LinkoptionViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Utility
	 *
	 * @var \MASK\Mask\Utility\MaskUtility
	 * @inject
	 */
	protected $utility;

	/**
	 * Checks if a $evalValue is set in a field
	 *
	 * @param string $fieldKey TCA Type
	 * @param string $elementKey key of the element
	 * @param string $evalValue value to search for
	 * @return boolean $evalValue is set
	 * @author Benjamin Butschell bb@webprofil.at>
	 */
	public function render($fieldKey, $elementKey, $evalValue) {
		$this->utility = new \MASK\Mask\Utility\MaskUtility($this->objectManager);
		$type = $this->utility->getFieldType($fieldKey, $elementKey);
		return $this->utility->isBlindLinkOptionSet($fieldKey, $evalValue, $type);
	}

}
