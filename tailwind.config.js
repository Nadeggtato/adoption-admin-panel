import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/wire-elements/modal/resources/views/*.blade.php',
        './vendor/wire-elements/modal/src/ModalComponent.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './app/Livewire/**.*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
    safelist: [
        'bg-green-800',
        'border-green-700',
        'hover:bg-green-50',
        'dark:hover:bg-green-600',
        'bg-yellow-800',
        'border-yellow-700',
        'hover:bg-yellow-50',
        'dark:hover:bg-yellow-600',
        'bg-red-800',
        'border-red-700',
        'hover:bg-red-50',
        'dark:hover:bg-red-600',
    ]
};
