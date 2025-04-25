/*global dotclear */
'use strict';

dotclear.ready(() => {
  // Theme switcher helper (inspired by https://css-tricks.com/come-to-the-light-dark-side/)
  const switcher = document.getElementById('themeSwitchHelper');
  if (switcher) {
    const localStorageName = 'themeSwitchHelper_mode';
    const auto = document.getElementById('autoSwitch');
    const light = document.getElementById('lightSwitch');
    const dark = document.getElementById('darkSwitch');
    // Scheme mode switcher
    const switchMode = (mode) => {
      const setmode = mode ?? 'auto';
      const html = document.querySelector('html');
      html.style.setProperty('color-scheme', setmode === 'auto' ? 'light dark' : setmode);
      if (setmode === 'auto') {
        localStorage.removeItem(localStorageName);
        html.classList.remove('light', 'dark');
        auto?.classList.add('active');
        light?.classList.remove('active');
        dark?.classList.remove('active');
        return;
      }
      localStorage.setItem(localStorageName, setmode);
      html.classList.add(setmode);
      html.classList.remove(setmode === 'light' ? 'dark' : 'light');
      auto?.classList.remove('active');
      if (setmode === 'light') {
        light?.classList.add('active');
        dark?.classList.remove('active');
      } else {
        light?.classList.remove('active');
        dark?.classList.add('active');
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
  }
});
