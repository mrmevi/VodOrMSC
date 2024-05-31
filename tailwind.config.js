/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx,vue}",
        "node_modules/flowbite/**/*.{js,jsx,ts,tsx}",
    ],
    theme: {
        screens: {
            'mm': '300px',
            // => @media (min-width: 300px) { ... }
            'sm': '640px',
            // => @media (min-width: 640px) { ... }
            'md': '768px',
            // => @media (min-width: 768px) { ... }
            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }
            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }
            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
            '3xl': '1700px',
            // => @media (min-width: 1700px) { ... }
            '4xl': '1920px',
            // => @media (min-width: 1920px) { ... }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ]
}

