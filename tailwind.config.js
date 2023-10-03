/** @type {import('tailwindcss').Config} 
module.exports = {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
} */

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      primary: '#1703af',
      secondary: '#86198f',
      dark: '#9ca3af',
      black: '#020617',
      white: '#f8fafc',
      card:  '#bb9bd7',
      card2: '#fffbeb',
      red200: '#dc2626',
      white_dark: '#f8fafc',
      text1: '#3730a3',
      text300: '0D41E1',
      text400:  '0A85ED',
      text500:  '09A6F3',
      text600:  '07C8F9',
      // ...
    },
    

    borderRadius: {
      'none': '0',
      'sm': '0.125rem',
      DEFAULT: '0.25rem',
      DEFAULT: '4px',
      'md': '0.375rem',
      'lg': '0.5rem',
      'full': '9999px',
      'large': '12px',
      'lg1' : '1rem',
      'lg2' : '1.5rem',
    },

    extend: {},
   
  },
  plugins: [
      require('flowbite/plugin'),
      
  
  ],
}