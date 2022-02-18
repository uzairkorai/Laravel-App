const { transform } = require('@vue/compiler-core')
const { opacity } = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,ts,jsx,tsx,html,js}",
  ],
  theme: {
    extend: {
      keyframes: {
        'fade-in-down': {
          "form": {
            transform: "translateY(-0.75rem)",
            opacity: '0'
          },
          "to": {
            transform: "translateY(0rem)",
            opacity: '1'
          },
        },
      },
      animation: {
        'fade-in-down': "fade-in-down 0.2s ease-in-out both",
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
