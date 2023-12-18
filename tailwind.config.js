/** @type {import('tailwindcss').Config} */

module.exports = {
  darkMode: 'class', // Enable dark mode with class-based toggling

  theme: {
    extend: {
      fontFamily: {
        sans: ['Sahel', 'Arial', 'Helvetica', 'sans-serif'],
      },
    },
  },

  content: [
    "./**/*.html",
    "./**/*.php",
    "./src/**/*.js", // Add any additional file patterns as needed
  ],

  direction: {
    ltr: 'ltr',
    rtl: 'rtl',
  },

  plugins: [
    // Additional plugins can be added here
  ],
};
