const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                transparent: "transparent",
                current: "currentColor",
                white: colors.white,
                gray: colors.trueGray,
                "gray-background": "#F7F8FC",
                main: "#21234D",
                yellow: "#FFE14E",
                red: "#ec454f",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
