/** @type {import('tailwindcss').Config} */
// tailwind.config.js
export default {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {
        colors: {
          darkblue: '#0A1931',
        },
      },
    },
    plugins: [],
  }
  
  