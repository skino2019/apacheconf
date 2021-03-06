module.exports = {
    purge: {
        enabled: true,
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.php',
            './resources/**/*.vue',
        ],
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            'pinkie': {
                '50' : '#F9C5D7',
                '100': '#F8B3CA',
                '150': '#F6A0BD',
                '200': '#F48DB0',
                '300': '#F06897',
                '400': '#ED437D',
                '500': '#E91E63',
                '600': '#C61350',
                '700': '#9C0F3F',
                '800': '#720B2E',
                '850': '#5D0926',
            }
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('daisyui'),
        require('@tailwindcss/typography'),
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
