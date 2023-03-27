/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./assets/**/*.js",
        "./templates/**/*.html.twig",
    ],
    theme: {
        extend: {},
        colors: {
            'primary': 'rgba(214, 33, 40, 1)',
            'secondary': 'rgba(252, 231, 28, 1)',
            'primary-light': 'rgba(214, 33, 40, 0.5)',
            'secondary-light': 'rgba(252, 231, 28, 0.5)',
            'primary-text': 'rgba(255, 255, 255, 1)',
        },
    },
    plugins: [],
}
