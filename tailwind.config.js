import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'Italy_red': '#CD212A',
                'Italy_dark_red': '#B11E25',
                'Italy_green': '#008C45',
                'Italy_dark_green': '#008C45',
              },
              boxShadow: {
                'default': '1px 4px 8px 4px rgba(0, 0, 0, 0.25)',
                'inner': 'inset 1px 2px 4px 1px rgba(0, 0, 0, 0.25)',
              },
              width: {
                'grow': '-webkit-fill-available',
              }
        
        },
    },
    plugins: [],
};
