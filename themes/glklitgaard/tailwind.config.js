/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php", 
    "./assets/js/*.js", 
    "./src/**/*.css",
    "./src/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "main-brand-color" : "#B84416",
        "secondary-brand-color" : "#F78F1E",
        "third-brand-color" : "#F2CD5C",
        "main-interaction-color" : "#6BD9F2",
        "brand-lightgreen" : "#B6D936",
        "brand-darkgreen" : "#6B8C23",

      }
    },
  },
  plugins: [],
  safelist: [
    {
      pattern: /grid-cols-\d+/,
      variants: ['sm', 'md', 'lg', 'xl'],
    },
  ],
}

