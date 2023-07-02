/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'recia': ['Recia', 'sans-serif'],
        'famil': ['Familjen Grotesk', 'sans-serif'],
      },
      boxShadow: {
        navbar: "0px 8px 10px 0px #33333314",
        footer: "0px 8px 10px 0px #33333314 inset"
      },
      container: {
        center: true,
      },
      colors: {
        neutral: {
          "0": "#F6F6F6",
          "100": "#EDEDEE",
          "200": "#CBCBCC",
          "300": "#99999A",
          "400": "#575758",
          "500": "#575758",
          "600": "#2B2B3F",
          "700": "#1B1B33",
          "800": "#10102A",
          "900": "#000000",
        },
        primary: {
          "0": "#D6E4FF",
          "300": "#84A9FF",
          "500": "#3366FF",
          "main": "#339DFF",
          "700": "#1939B7",
          "900": "#091A7A",
        },
        secondary: {
          "0": "#F8CDFD",
          "300": "#D469F4",
          "500": "#920BDD",
          "700": "#55059F",
          "900": "#2B026A"
        },
        succes: {
          "0": "#E5FCDA",
          "300": "#9CED8F",
          "500": "#43C648",
          "700": "#218E39",
          "900": "#0C5F2D"
        },
        warning: {
          "0": "#FFF8D9",
          "300": "#FFE38D",
          "500": "#FFC642",
          "700": "#B78021",
          "900": "#7A4B0C"
        },
        error: {
          "0": "#FFE5D3",
          "300": "#FF9D7E",
          "500": "#FF3A28",
          "700": "#B71421",
          "900": "#7A0723"
        },
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}