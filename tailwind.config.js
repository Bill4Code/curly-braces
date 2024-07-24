/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class', // Enable dark mode with a 'class'
  theme: {
    extend: {
      colors: {
        'custom-red': {
          100: '#FCE4EC',
          200: '#F8BBD0',
          300: '#F48FB1',
          400: '#F06292',
          500: '#EC407A',
          600: '#E91E63',
          700: '#D81B60',
          800: '#C2185B',
          900: '#BC0045', // votre couleur principale comme la plus foncée
        },
        'custom-purple': {
          100: '#EDE7F6',
          200: '#D1C4E9',
          300: '#B39DDB',
          400: '#9575CD',
          500: '#7E57C2',
          600: '#673AB7',
          700: '#5E35B1',
          800: '#512DA8',
          900: '#270665', // votre couleur principale comme la plus foncée
        },
        'custom-green': '#A5DD59', // Ajout de votre couleur personnalisée
        'custom-light': '#F3F3F3',
        light: {
          background: '#F1F1F1', // Light mode background
          primary: '#000000',    // Light mode primary color
          secondary: '#ffffff',  // Light mode secondary color
        },
        dark: {
          background: '#1C1C1C', // Dark mode background
          primary: '#FFFFFF',    // Dark mode primary color
          secondary: '#2B2B2B',  // Dark mode secondary color
        },
      },
    },
  },
  plugins: [],
}
