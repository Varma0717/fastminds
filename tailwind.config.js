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
                sans: ['DM Sans', 'system-ui', '-apple-system', 'sans-serif'],
                heading: ['Plus Jakarta Sans', 'system-ui', '-apple-system', 'sans-serif'],
            },
            maxWidth: {
                'grid': '1200px',
            },
            spacing: {
                'section': '100px',
            },
            animation: {
                'fade-in': 'fadeIn 0.6s ease-out forwards',
                'fade-up': 'fadeUp 0.8s ease-out forwards',
                'fade-right': 'fadeRight 0.8s ease-out forwards',
                'fade-left': 'fadeLeft 0.8s ease-out forwards',
                'scale-in': 'scaleIn 0.6s ease-out forwards',
                'float': 'float 6s ease-in-out infinite',
                'float-slow': 'float 8s ease-in-out infinite',
                'float-reverse': 'floatReverse 7s ease-in-out infinite',
                'marquee': 'marquee 30s linear infinite',
                'marquee-reverse': 'marqueeReverse 30s linear infinite',
                'spin-slow': 'spin 15s linear infinite',
                'pulse-soft': 'pulseSoft 3s ease-in-out infinite',
                'bounce-in': 'bounceIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards',
                'slide-up': 'slideUp 0.5s ease-out forwards',
                'slide-down': 'slideDown 0.3s ease-out forwards',
                'width-grow': 'widthGrow 1.5s ease-out forwards',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                fadeUp: {
                    '0%': { opacity: '0', transform: 'translateY(40px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeRight: {
                    '0%': { opacity: '0', transform: 'translateX(-40px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                fadeLeft: {
                    '0%': { opacity: '0', transform: 'translateX(40px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                scaleIn: {
                    '0%': { opacity: '0', transform: 'scale(0.9)' },
                    '100%': { opacity: '1', transform: 'scale(1)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                    '50%': { transform: 'translateY(-20px) rotate(5deg)' },
                },
                floatReverse: {
                    '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                    '50%': { transform: 'translateY(20px) rotate(-5deg)' },
                },
                marquee: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
                marqueeReverse: {
                    '0%': { transform: 'translateX(-50%)' },
                    '100%': { transform: 'translateX(0)' },
                },
                pulseSoft: {
                    '0%, 100%': { opacity: '0.4', transform: 'scale(1)' },
                    '50%': { opacity: '0.8', transform: 'scale(1.05)' },
                },
                bounceIn: {
                    '0%': { opacity: '0', transform: 'scale(0.3)' },
                    '50%': { transform: 'scale(1.05)' },
                    '70%': { transform: 'scale(0.9)' },
                    '100%': { opacity: '1', transform: 'scale(1)' },
                },
                slideUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                slideDown: {
                    '0%': { maxHeight: '0', opacity: '0' },
                    '100%': { maxHeight: '300px', opacity: '1' },
                },
                widthGrow: {
                    '0%': { width: '0%' },
                    '100%': { width: 'var(--target-width)' },
                },
            },
        },
    },
    plugins: [],
}
