module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('daisyui'),
    ],
    daisyui: {
        styled: true,
        themes: [
            'dark',
            'light'
        ],
        base: true,
        utils: true,
        logs: true,
        rtl: false,
      },
}
