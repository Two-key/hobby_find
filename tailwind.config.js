const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                backgroundImage: {
                    'maps': "url('https://res.cloudinary.com/dpbph7hyn/image/upload/v1693719210/tresuar_ziv4o5.png')",
                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
            darkMode: "class",
};
