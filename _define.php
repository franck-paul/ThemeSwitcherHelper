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
$this->registerModule(
    'Color scheme switcher',
    'Color scheme switcher widget, css and js',
    'Franck Paul',
    '2.7',
    [
        'date'        => '2026-05-06T17:36:49+0200',
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
