/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './includes/**/*.php',
        './assets/js/**/*.js'
    ],
    theme: {
        extend: {
            colors: {
                navy: '#0A2540',
                'navy-light': '#112D4E',
                sky: '#2E90FA',
                'sky-dark': '#1A6DD4',
                'sky-light': '#5BABFF',
                'light-gray': '#F5F7FA',
                'dark-text': '#1A1A2E',
                'medium-text': '#4A5568',
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                heading: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
            },
            maxWidth: {
                'grid': '1200px',
            },
            spacing: {
                'section': '80px',
            },
            animation: {
                'fade-in': 'fadeIn 0.6s ease-out forwards',
                'fade-up': 'fadeUp 0.6s ease-out forwards',
                'fade-right': 'fadeRight 0.6s ease-out forwards',
                'fade-left': 'fadeLeft 0.6s ease-out forwards',
                'scale-in': 'scaleIn 0.5s ease-out forwards',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                fadeUp: {
                    '0%': { opacity: '0', transform: 'translateY(30px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeRight: {
                    '0%': { opacity: '0', transform: 'translateX(-30px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                fadeLeft: {
                    '0%': { opacity: '0', transform: 'translateX(30px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                scaleIn: {
                    '0%': { opacity: '0', transform: 'scale(0.95)' },
                    '100%': { opacity: '1', transform: 'scale(1)' },
                },
            },
        },
    },
    plugins: [],
}
