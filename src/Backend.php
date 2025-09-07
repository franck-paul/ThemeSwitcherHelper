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

use Dotclear\App;
use Dotclear\Helper\Process\TraitProcess;

class Backend
{
    use TraitProcess;

    public static function init(): bool
    {
        // dead but useful code, in order to have translations
        __('Theme Switcher Helper');
        __('Theme Switcher Helper widget, css and js');

        return self::status(My::checkContext(My::BACKEND));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }

        if (My::checkContext(My::WIDGETS)) {
            App::behavior()->addBehaviors([
                // Widget
                'initWidgets' => Widgets::initWidgets(...),
            ]);
        }

        return true;
    }
}
