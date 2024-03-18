// Dark Light mode
document.addEventListener('DOMContentLoaded', function () {
  // Check if the user has set a preference for dark/light mode on device
  if (window.matchMedia('(prefers-color-scheme)').media !== 'not all') {
    // Set the initial theme preference to dark or light
    document.body.classList.add(window.matchMedia('(prefers-color-scheme: dark)').matches ? 'darklight' : 'darklight');
  } else {
    // If the user hasn't set a preference for dark/light mode, default to 'light'
    document.body.classList.add('light_mode');
  }
  // Get the current mode from localStorage
  const useDarklight = JSON.parse(localStorage.getItem('useDarklight'));

  // Add an event listener for the click event on the toggle button
  document.querySelector('.darklight-toggle').addEventListener('click', function (e) {
    document.body.classList.toggle('darklight');
    document.body.classList.toggle('light_mode');
    // Toggle the class only on specific elements IF needed (e.g. SVG icons)
    document.querySelectorAll('.darklight').forEach(element => element.classList.toggle('darklight'));

    if (useDarklight) {
      localStorage.setItem('useDarklight', 'false');
    } else {
      localStorage.setItem('useDarklight', 'true');
    }
  });

  // Apply dark/light mode based on the user's preference stored in localStorage
  if (useDarklight) {
    document.body.classList.add('darklight');
  }
});