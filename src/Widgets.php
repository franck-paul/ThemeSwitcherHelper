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
            ->create('themeswitcherhelper', __('Color scheme switcher'), FrontendWidgets::widgetThemeSwitcher(...), null, __('Color scheme switcher widget, css and js'), My::id())
            ->addTitle(__('Color scheme switcher'))
            ->setting('auto', __('Auto color scheme label (optional):'), '')
            ->setting('light', __('Light color scheme label (optional):'), '')
            ->setting('dark', __('Dark color scheme label (optional):'), '')
            ->addContentOnly()
            ->addClass()
            ->addOffline();

        return '';
    }
}
