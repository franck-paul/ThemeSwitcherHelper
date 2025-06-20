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
$this->registerModule(
    'Theme Switcher Helper',
    'Theme Switcher Helper widget, css and js',
    'Franck Paul',
    '1.2',
    [
        'date'        => '2025-06-01T08:09:55+0200',
        'requires'    => [['core', '2.34']],
        'type'        => 'plugin',
        'permissions' => 'My',
        'settings'    => [],

        'details'    => 'https://open-time.net/?q=ThemeSwitcherHelper',
        'support'    => 'https://github.com/franck-paul/ThemeSwitcherHelper',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/ThemeSwitcherHelper/main/dcstore.xml',
        'license'    => 'gpl2',
    ]
);
