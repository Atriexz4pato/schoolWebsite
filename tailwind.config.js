/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      height:{
        '90vh':'90vh',
        'screen-80': '80vh'
      },
      width:{
        '33vw':'33vw',
        '80vw':'80vw',
        '50vw':'50vw',
        '4vw':'4vw'
      }
    },
  },
  plugins: [],
}

