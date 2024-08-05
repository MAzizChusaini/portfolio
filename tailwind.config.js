/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  darkMode: "class", // Add this line to enable dark mode using class
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#db2777",
        dark: "#0f172a",
        // Add any other custom colors you need
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
};
