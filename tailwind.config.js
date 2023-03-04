/** @type {import('tailwindcss').Config} */
module.exports = {
   purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
        textColor: {
          default: 'var(--text-default-color)', // text-default : var(--text-color)
    },
    backgroundColor: {
      page: 'var(--page-background-color)', // bg-page : var(--page-background-color)
      card: 'var(--card-background-color)', // bg-card : var(--card-background-color) in tailwind.config.js -> sass .card
      button: 'var(--button-background-color)', // bg-button : var(--button-background-color)
      header: 'var(--header-background-color)', // bg-header : var(--header-background-color)
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
