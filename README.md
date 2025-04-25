# ThemeSwitcherHelper

Dotclear 2 plugin

This plugin provide a widget to select the theme (automatic, light, dark), saving the user choice in local storage and also setting a specific class to the HTML element to `light` or `dark` if necessary. Note that this classes are removed when automatic mode is selected.

The theme should include this in its stylesheet:

```language-css
html {
  color-scheme: light dark;

  &.light {
    /* forces light color-scheme */
    color-scheme: light;
  }
  &.dark {
    /* forces dark color-scheme */
    color-scheme: dark;
  }
}
```

And also defined their own styles depending on current color scheme (using light-dark(), …).

