const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('./node_modules/tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {

            colors: {
                rose: colors.rose,
                fuchsia: colors.fuchsia,
                indigo: colors.indigo,
                teal: colors.teal,
                lime: colors.lime,
                orange: colors.orange,
              },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],

                
            },
            
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
