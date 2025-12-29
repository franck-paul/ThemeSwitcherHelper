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
    '2.1',
    [
        'date'        => '2025-09-07T15:44:17+02.1',
        'requires'    => [['core', '2.36']],
        'type'        => 'plugin',
        'permissions' => 'My',
        'settings'    => [],

        'details'    => 'https://open-time.net/?q=ThemeSwitcherHelper',
        'support'    => 'https://github.com/franck-paul/ThemeSwitcherHelper',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/ThemeSwitcherHelper/main/dcstore.xml',
        'license'    => 'gpl2',
    ]
);
