/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/pages/*.php",
    "./app/Views/auth/*.php",
    "./app/views/pages/**/*.php",
    "./app/views/pages/**/**/*.php",
    "./app/views/pages/**/**/**/*.php",
  ],
  theme: {
    colors: {
      primary: "#DCE9E2",
      // pupus: "#639E6C",
      pupus: "#9ED3B7",
      basic: "#00856F",
    },
    extend: {
      fontFamily: {
        dm: ["Dm Sans"],
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
