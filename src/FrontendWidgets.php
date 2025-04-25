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

        $res .= (new Para('themeSwitchHelper'))
            ->class('widget')
            ->items([
                (new Btn('autoSwitch', $widget->get('auto') ?: __('Auto')))
                    ->class('submit'),
                (new Btn('lightSwitch', $widget->get('light') ?: __('Light')))
                    ->class('submit'),
                (new Btn('darkSwitch', $widget->get('dark') ?: __('Dark')))
                    ->class('submit'),
            ])
        ->render();

        // Return final markup
        return $widget->renderDiv((bool) $widget->content_only, implode(' ', ['themeswitcherhelper', $widget->class]), '', $res);
    }
}
