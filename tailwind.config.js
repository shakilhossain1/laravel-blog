module.exports = {
    mode: 'jit',
    purge: [
        // "./resources/**/*.blade.php",
        // "./resources/**/*.js",
        // "./resources/**/*.vue",
        "./storage/framework/views/*.php",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
