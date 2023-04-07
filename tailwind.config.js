/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./assets/**/*.js",
        "./templates/**/*.html.twig",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            padding: {
                '-1': '-0.25rem',
                '-2': '-0.5rem',
                '-3': '-0.75rem',
                '-4': '-1rem',
            },
        },
        colors: {
            'primary': 'rgba(214, 33, 40, 1)',
            'secondary': 'rgba(252, 231, 28, 1)',
            'primary-100': 'rgba(214, 33, 40, 0.9)',
            'primary-200': 'rgba(214, 33, 40, 0.8)',
            'primary-300': 'rgba(214, 33, 40, 0.7)',
            'primary-400': 'rgba(214, 33, 40, 0.6)',
            'primary-500': 'rgba(214, 33, 40, 0.5)',
            'primary-600': 'rgba(214, 33, 40, 0.4)',
            'primary-700': 'rgba(214, 33, 40, 0.3)',
            'primary-800': 'rgba(214, 33, 40, 0.2)',
            'primary-900': 'rgba(214, 33, 40, 0.1)',
            'secondary-100': 'rgba(252, 231, 28, 0.9)',
            'secondary-200': 'rgba(252, 231, 28, 0.8)',
            'secondary-300': 'rgba(252, 231, 28, 0.7)',
            'secondary-400': 'rgba(252, 231, 28, 0.6)',
            'secondary-500': 'rgba(252, 231, 28, 0.5)',
            'secondary-600': 'rgba(252, 231, 28, 0.4)',
            'secondary-700': 'rgba(252, 231, 28, 0.3)',
            'secondary-800': 'rgba(252, 231, 28, 0.2)',
            'secondary-900': 'rgba(252, 231, 28, 0.1)',
        },
    },
    plugins: [
        require('flowbite/plugin')
    ]
}
