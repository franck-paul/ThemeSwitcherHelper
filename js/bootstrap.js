/*global dotclear */
'use strict';

dotclear.ready(() => {
  // Theme switcher helper (inspired by https://css-tricks.com/come-to-the-light-dark-side/)
  const switcher = document.getElementById('themeSwitchHelper');
  if (!switcher) {
    return;
  }
  const localStorageName = 'themeSwitchHelper_mode';
  const auto = document.getElementById('autoSwitch');
  const light = document.getElementById('lightSwitch');
  const dark = document.getElementById('darkSwitch');
  // Scheme mode switcher
  const switchMode = (mode, save = true) => {
    const html = document.querySelector('html');
    const setmode = mode ?? 'auto';
    html.style.setProperty('color-scheme', setmode === 'auto' ? 'light dark' : setmode);
    if (setmode === 'auto') {
      html.classList.remove('light', 'dark');
      if (save) {
        localStorage.removeItem(localStorageName);
        auto?.classList.add('active');
        light?.classList.remove('active');
        dark?.classList.remove('active');
      }
      return;
    }
    html.classList.add(setmode);
    html.classList.remove(setmode === 'light' ? 'dark' : 'light');
    if (save) {
      localStorage.setItem(localStorageName, setmode);
      auto?.classList.remove('active');
      if (setmode === 'light') {
        light?.classList.add('active');
        dark?.classList.remove('active');
      } else {
        light?.classList.remove('active');
        dark?.classList.add('active');
      }
    }
  };
  // Restore previours choice if any
  switchMode(localStorage.getItem(localStorageName));
  // Add buttons event listener
  auto?.addEventListener('click', (event) => {
    event.preventDefault();
    switchMode('auto');
  });
  light?.addEventListener('click', (event) => {
    event.preventDefault();
    switchMode('light');
  });
  dark?.addEventListener('click', (event) => {
    event.preventDefault();
    switchMode('dark');
  });
  // Watch system change
  window?.matchMedia('prefers-color-scheme: dark').addEventListener('change', ({ matches }) => {
    if (matches && !localStorage.getItem(localStorageName)) switchMode('dark', false);
  });
  window?.matchMedia('prefers-color-scheme: light').addEventListener('change', ({ matches }) => {
    if (matches && !localStorage.getItem(localStorageName)) switchMode('light', false);
  });
});
