/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './assets/**/*.{vue,js,ts,jsx,tsx}',
      './templates/**/*.{html,twig}'
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/typography'),
      require('@tailwindcss/forms'),
      require('@tailwindcss/line-clamp'),
      require('@tailwindcss/aspect-ratio'),
      require('tailwindcss-tables')(),
  ],
}
