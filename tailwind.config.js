module.exports = {
  purge: {
      content: [
        './resources/js/**/*.vue',
        './resources/views/**/*.blade.php',
      ],
  },
  theme: {
    aspectRatio: {
      none: 0,
      square: [1, 1],
      "16/9": [16, 9],
      "4/3": [4, 3],
      "21/9": [21, 9]
    },
    extend: {
    	colors: {
        'julien-red': '#dd4a37',
        'julien-gris': '#45545f',
        'bandeau-gris' : '#f4f4f4',
        'fondo-gris': '#ededed',
        'juliencircle' : '#516174',
        'juliencheck': '#657c9b',
        'titulos' : '#b4b4b4',
      	},
  	},
  },
  variants: {
    aspectRatio: ['responsive'],
  },
  plugins: [
    require("tailwindcss-responsive-embed"),
    require("tailwindcss-aspect-ratio"),
  ],
}
