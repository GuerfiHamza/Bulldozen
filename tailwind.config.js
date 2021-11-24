module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {

        extend: {
            fontFamily: {
                sans: ['Lato', 'sans-serif'],
            },
        },
    },
    variants: {
        backgroundClip: ['responsive'],

        extend: {
            ringColor: ['focus'],

        },
    },
    plugins: [
        require('@tailwindcss/forms'),

    ],
}