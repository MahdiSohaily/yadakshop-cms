const theme = document.getElementById("logo");
// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (
  localStorage.theme === "dark" ||
  (!("theme" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  document.documentElement.classList.add("dark");
  theme.src = "/public/icons/sun.svg";
} else {
  document.documentElement.classList.remove("dark");
  theme.src = "/public/icons/moon.svg";
}

// Function to toggle between light and dark modes
function toggleTheme() {
  if (localStorage.theme === "dark") {
    setLightMode();
    theme.src = "/public/icons/moon.svg";
  } else {
    setDarkMode();
    theme.src = "/public/icons/sun.svg";
  }
}

// Whenever the user explicitly chooses light mode
function setLightMode() {
  localStorage.theme = "light";
  document.documentElement.classList.remove("dark");
}

// Whenever the user explicitly chooses dark mode
function setDarkMode() {
  localStorage.theme = "dark";
  document.documentElement.classList.add("dark");
}

// Whenever the user explicitly chooses to respect the OS preference
function setSystemMode() {
  localStorage.removeItem("theme");
  if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }
}
