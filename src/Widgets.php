<?php

/**
 * @brief ThemeSwitcherHelper, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
declare(strict_types=1);

namespace Dotclear\Plugin\ThemeSwitcherHelper;

use Dotclear\Plugin\widgets\WidgetsStack;

class Widgets
{
    public static function initWidgets(WidgetsStack $w): string
    {
        // Widget for all series
        $w
            ->create('themeswitcherhelper', __('Theme switcher helper'), FrontendWidgets::widgetThemeSwitcher(...), null, __('Theme Switcher Helper widget, css and js'))
            ->addTitle(__('Theme switcher'))
            ->setting('auto', __('Auto theme label:'), '')
            ->setting('light', __('Light theme label:'), '')
            ->setting('dark', __('Dark theme label:'), '')
            ->addContentOnly()
            ->addClass()
            ->addOffline();

        return '';
    }
}
