<?php

namespace Schnitzler\Templavoila\Traits;

/*
 * This file is part of the TemplaVoilà project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

/**
 * Trait Schnitzler\Templavoila\Traits\LanguageService
 */
trait LanguageService
{

    /**
     * @return \TYPO3\CMS\Lang\LanguageService
     */
    public static function getLanguageService()
    {
        return $GLOBALS['LANG'];
    }
}
