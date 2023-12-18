/** @type {import('tailwindcss').Config} */

export const content = [
  "./**/*.html",
  "./**/*.php",
  "./src/**/*.js", // Add any additional file patterns as needed
];
export const direction = {
  ltr: "ltr",
  rtl: "rtl",
};
export const theme = {
  extend: {
    fontFamily: {
      sans: ["Sahel", "Arial", "Helvetica", "sans-serif"],
    },
  },
};
