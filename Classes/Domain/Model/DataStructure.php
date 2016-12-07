<?php

namespace Schnitzler\Templavoila\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Schnitzler\Templavoila\Traits\BackendUser;
use Schnitzler\Templavoila\Utility\PermissionUtility;
use TYPO3\CMS\Backend\Utility\BackendUtility;

/**
 * Class to provide unique access to datastructure
 *
 * @author Tolleiv Nietsch <tolleiv.nietsch@typo3.org>
 */
class DataStructure extends AbstractDataStructure
{
    const TABLE = 'tx_templavoila_datastructure';

    use BackendUser;

    /**
     * @var array
     */
    protected $row;

    /**
     * @var string
     */
    protected $sortbyField;

    /**
     * @param int $uid
     */
    public function __construct($uid)
    {
        // getting the DS for the DB and make sure the workspace-overlay is performed (done internally)
        if (TYPO3_MODE === 'FE') {
            $this->row = $GLOBALS['TSFE']->sys_page->checkRecord('tx_templavoila_datastructure', $uid);
        } else {
            $this->row = BackendUtility::getRecordWSOL('tx_templavoila_datastructure', $uid);
        }

        $this->setLabel($this->row['title']);
        $this->setScope($this->row['scope']);
        // path relative to typo3 maindir
        $this->setIcon('../uploads/tx_templavoila/' . $this->row['previewicon']);
        $this->setSortbyField($GLOBALS['TCA']['tx_templavoila_datastructure']['ctrl']['sortby']);
    }

    /**
     * @return string;
     */
    public function getStoragePids()
    {
        return (string)$this->row['pid'];
    }

    /**
     * @return string - numeric string
     */
    public function getKey()
    {
        return $this->row['uid'];
    }

    /**
     * Provides the datastructure configuration as XML
     *
     * @return string
     */
    public function getDataprotXML()
    {
        return $this->row['dataprot'];
    }

    /**
     * Determine whether the current user has permission to create elements based on this
     * datastructure or not
     *
     * @param array $parentRow
     * @param array $removeItems
     *
     * @return bool
     */
    public function isPermittedForUser(array $parentRow = [], array $removeItems = [])
    {
        if (static::getBackendUser()->isAdmin()) {
            return true;
        } else {
            if (in_array($this->getKey(), $removeItems)) {
                return false;
            }
        }
        $permission = true;
        $denyItems = PermissionUtility::getDenyListForUser();

        $currentSetting = $parentRow['tx_templavoila_ds'];
        if ($this->getScope() === static::SCOPE_PAGE) {
            $inheritSetting = $parentRow['tx_templavoila_next_ds'];
        } else {
            $inheritSetting = -1;
        }

        $key = 'tx_templavoila_datastructure:' . $this->getKey();
        if (in_array($key, $denyItems) &&
            $key != $currentSetting &&
            $key != $inheritSetting
        ) {
            $permission = false;
        }

        return $permission;
    }

    /**
     * Retrieve the filereference of the template
     *
     * @return string
     */
    public function getTstamp()
    {
        return $this->row['tstamp'];
    }

    /**
     * Retrieve the filereference of the template
     *
     * @return string
     */
    public function getCrdate()
    {
        return $this->row['crdate'];
    }

    /**
     * Retrieve the filereference of the template
     *
     * @return string
     */
    public function getCruser()
    {
        return $this->row['cruser_id'];
    }

    /**
     * @param string $fieldname
     */
    protected function setSortbyField($fieldname)
    {
        if (isset($this->row[$fieldname])) {
            $this->sortbyField = $fieldname;
        } elseif (!$this->sortbyField) {
            $this->sortbyField = 'sorting';
        }
    }

    /**
     * @return string
     */
    public function getSortingFieldValue()
    {
        if ($this->sortbyField === 'title') {
            $fieldVal = $this->getLabel(); // required to resolve LLL texts
        } elseif ($this->sortbyField === 'sorting') {
            $fieldVal = str_pad($this->row[$this->sortbyField], 15, '0', STR_PAD_LEFT);
        } else {
            $fieldVal = $this->row[$this->sortbyField];
        }

        return $fieldVal;
    }

    /**
     * @return bool
     */
    public function hasBackendGridTemplateName()
    {
        return $this->row['backendGridTemplateName'] !== null;
    }

    /**
     * @return string
     */
    public function getBackendGridTemplateName()
    {
        return (string)$this->row['backendGridTemplateName'];
    }
}
