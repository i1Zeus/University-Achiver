const defaultTheme = require("tailwindcss/defaultTheme");
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                Tajawal: ["Tajawal"],
            },
        },
        colors: {
            primary: { 100: "#F7C97B", 200: "#ffd87e", 300: "#ccac64" },
            secondery: { 100: "#ffadbe", 200: "#ffadb8", 300: "#cc8a93" },
            background: {
                100: "#ffffff",
                200: "#f2f2f2",
                300: "#e5e5e5",
                400: "#f9f9f9",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require('flowbite/plugin'),
    ],
};
