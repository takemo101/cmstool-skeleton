/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./templates/**/*.{html,twig}",
  ],
  theme: {
    extend: {
      typography: {
        DEFAULT: {
          css: {
            maxWidth: '100%', // add required value here
          }
        }
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
