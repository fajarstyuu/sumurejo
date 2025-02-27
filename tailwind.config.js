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
            colors:{
                'main-bg': '#ebfeff',
                'main-text-1': '#36b9c2',
                'main-text-2': '#f97672',
                'gofood': '#ec2637',
                'shopeefood': '#e83213',
                'wa': '#4bca5a',
                'grabfood': '#7aff8a',
            },
            fontFamily:{
                'archivo': ['Archivo Black', 'sans-serif'],
                'micro5': ['"Micro 5"', 'sans-serif'],
            },
            dropShadow:{
                'custom-solid-1': '4px 4px 0px rgba(0, 0, 0, 1)',
                'custom-solid-5': '6px 6px 0px rgba(0, 0, 0, 1)',
            },
            fontSize:{
                '10xl': ['10rem', {
                    lineHeight:'9rem',
                }]
            },
            animation: {
                bounce: 'bounce-custom 2s infinite',
            },
            keyframes: {
                'bounce-custom': {
                '0%, 100%': { transform: 'translateY(-15%)' },
                '50%': { transform: 'translateY(-10px)' }, 
                },
            }
        },
    },
    plugins: [],
};
