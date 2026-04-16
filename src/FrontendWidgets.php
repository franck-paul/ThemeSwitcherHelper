<?php

/**
 * @brief ThemeSwitcherHelper, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul
 *
 * @copyright Franck Paul contact@open-time.net
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
declare(strict_types=1);

namespace Dotclear\Plugin\ThemeSwitcherHelper;

use Dotclear\Helper\Html\Form\Btn;
use Dotclear\Helper\Html\Form\Para;
use Dotclear\Helper\Html\Html;
use Dotclear\Plugin\widgets\WidgetsElement;

class FrontendWidgets
{
    /**
     * Render widget
     *
     * @param      WidgetsElement  $widget      The widget
     */
    public static function widgetThemeSwitcher(WidgetsElement $widget): string
    {
        if ($widget->offline) {
            // Widget offline
            return '';
        }

        $res = '';

        // Load CSS and JS
        $res .= My::cssLoad('bootstrap.css');
        $res .= My::jsLoad('bootstrap.js');

        // Get widget title
        $res .= ($widget->title ? $widget->renderTitle(Html::escapeHTML($widget->title)) . "\n" : '');

        $auto  = is_string($auto = $widget->get('auto')) ? $auto : __('Auto');
        $light = is_string($light = $widget->get('light')) ? $light : __('Light');
        $dark  = is_string($dark = $widget->get('dark')) ? $dark : __('Dark');

        $auto  = $auto   !== '' ? $auto : __('Auto');
        $light = $light !== '' ? $light : __('Light');
        $dark  = $dark   !== '' ? $dark : __('Dark');

        $res .= (new Para('themeSwitchHelper'))
            ->items([
                (new Btn('autoSwitch', $auto))
                    ->class('submit'),
                (new Btn('lightSwitch', $light))
                    ->class('submit'),
                (new Btn('darkSwitch', $dark))
                    ->class('submit'),
            ])
        ->render();

        // Return final markup
        return $widget->renderDiv((bool) $widget->content_only, implode(' ', ['themeswitcherhelper', $widget->class]), '', $res);
    }
}
