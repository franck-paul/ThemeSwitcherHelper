# ThemeSwitcherHelper

Ce plugin pour Dotclear 2 propose un widget permettant de sélectionner le mode d'apparence (automatique, clair, foncé) ; il enregistre le choix de l'utilisateur dans la mémoire locale et attribue également une classe spécifique à l'élément HTML (`light` ou `dark`) si nécessaire. Notez que ces classes sont supprimées lorsque le mode automatique est sélectionné.

Le thème doit inclure ceci dans sa feuille de style :

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

Exemple de rendu du contenu du widget :

```html
<p id="themeSwitchHelper">
  <button name="autoSwitch" id="autoSwitch" class="submit active">Auto</button>
  <button name="lightSwitch" id="lightSwitch" class="submit">Clair</button>
  <button name="darkSwitch" id="darkSwitch" class="submit">Sombre</button>
</p>
```

Avec ce style :

```css
#themeSwitchHelper {
  display: flex;
  gap: 0.25em;
  margin-top: 0;
  margin-bottom: 0;
  padding-bottom: 0;
}
```

Notez qu'une classe `active` est appliquée au choix courant.
