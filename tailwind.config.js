module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ['"Open Sans"'],
        },
        extend: {
            colors: {
                "hotline": "#F9F9F9",
                "hotlineBorder": "#F2F2F2",
                primary: "#444444",
                secondary: "#666666",
            },
            spacing: {
                '120': '30rem',
                '112': '28rem',
                '45.5': '11.375rem',
                '10.5': '3.75rem',
            },
            width: {
                '128': '32rem',
            },
        },
    },
    plugins: [
        function ({
            addComponents
        }) {
            addComponents({
                '.container': {
                    maxWidth: '100%',
                    '@screen sm': {
                        maxWidth: '600px',
                    },
                    '@screen md': {
                        maxWidth: '768px',
                    },
                    '@screen lg': {
                        maxWidth: '992px',
                    },
                    '@screen xl': {
                        maxWidth: '1170px',
                    },
                }
            })
        },
    ],
}
