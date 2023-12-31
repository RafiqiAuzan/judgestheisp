const colors = require('tailwindcss/colors')
module.exports = {
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            green: colors.green,
            inherit: "inherit",
            current: "currentColor",
            transparent: "transparent",
            dark: {
                100: "#1D1E1F",
                200: "#343536",
                300: "#4A4B4C",
                400: "#616263",
                500: "#777879",
            },
            light: {
                100: "#FFFFFF",
                200: "#F2F2F2",
                300: "#E3E4E4",
                400: "#C6C6C7",
                500: "#B0B0B1",
            },
            success: "#59BC07",
            info: "#1AC8ED",
            warning: "#FBD900",
            danger: "#EB2811",
            primary: {
                100: "#FFE8DE",
                200: "#FFD9C6",
                300: "#F8AB86",
                400: "#F97D41",
                500: "#F06623",
                600: "#E25D1C",
                700: "#D35416",
                800: "#B4440E",
                900: "#983F13",
            },
            secondary: {
                100: "#FFFCEB",
                200: "#FFF8C9",
                300: "#FFF3A6",
                400: "#FBE55A",
                500: "#FBD900",
                600: "#E1C409",
                700: "#B69F10",
                800: "#978209",
                900: "#6A5C05",
            },
            base: {
                100: "#F9F9F4",
                200: "#F3F3ED",
                300: "#DAD9D0",
                400: "#B4B2A8",
                500: "#8E8C80",
                600: "#6D6C63",
                700: "#5B5B56",
                800: "#393934",
                900: "#2C2C25",
            },
        },
        fontSize: {
            '2xs': ['10px', '12px'],
            'xs': ['12px', '16px'],
            'sm': ['14px', '20px'],
            'base': ['16px', '24px'],
            'lg': ['18px', '28px'],
            'xl': ['20px', '28px'],
            '2xl': ['24px', '32px'],
            '3xl': ['30px', '36px'],
            '4xl': ['32px', '40px']
        },
        fontFamily: {
            display: ["Plus Jakarta Sans", "-apple-system", "sans-serif"],
            body: ["Poppins", "-apple-system", "sans-serif"],
        },
        container: {
            padding: {
                DEFAULT: '1.25rem',
                sm: '0.75rem',
                lg: '1.5rem',
                xl: '1.5rem',
                '2xl': '1.5rem',
            },
        },
        fontWeight: {
            extralight: "200",
            light: "300",
            normal: "400",
            medium: "500",
            semibold: "600",
            bold: "700",
            extrabold: "800",
        },
        extend: {
            typography: ({ theme }) => ({
                piljur: {
                    css: {
                        "--tw-prose-body": theme("colors.base[800]"),
                        "--tw-prose-headings": theme("colors.base[900]"),
                        "--tw-prose-lead": theme("colors.base[700]"),
                        "--tw-prose-links": theme("colors.base[900]"),
                        "--tw-prose-bold": theme("colors.base[900]"),
                        "--tw-prose-counters": theme("colors.base[600]"),
                        "--tw-prose-bullets": theme("colors.base[600]"),
                        "--tw-prose-hr": theme("colors.base[300]"),
                        "--tw-prose-quotes": theme("colors.base[900]"),
                        "--tw-prose-quote-borders": theme(
                            "colors.secondary[500]"
                        ),
                        "--tw-prose-captions": theme("colors.base[700]"),
                        "--tw-prose-code": theme("colors.base[900]"),
                        "--tw-prose-pre-code": theme("colors.base[100]"),
                        "--tw-prose-pre-bg": theme("colors.base[900]"),
                        "--tw-prose-th-borders": theme("colors.base[300]"),
                        "--tw-prose-td-borders": theme("colors.base[200]"),
                        "--tw-prose-invert-body": theme("colors.base[200]"),
                        "--tw-prose-invert-headings":
                            theme("colors.light[200]"),
                        "--tw-prose-invert-lead": theme("colors.base[300]"),
                        "--tw-prose-invert-links": theme("colors.light[200]"),
                        "--tw-prose-invert-bold": theme("colors.light[200]"),
                        "--tw-prose-invert-counters": theme("colors.base[400]"),
                        "--tw-prose-invert-bullets": theme("colors.base[600]"),
                        "--tw-prose-invert-hr": theme("colors.base[700]"),
                        "--tw-prose-invert-quotes": theme("colors.base[100]"),
                        "--tw-prose-invert-quote-borders":
                            theme("colors.base[700]"),
                        "--tw-prose-invert-captions": theme("colors.base[400]"),
                        "--tw-prose-invert-code": theme("colors.light[200]"),
                        "--tw-prose-invert-pre-code": theme("colors.base[300]"),
                        "--tw-prose-invert-pre-bg": "rgb(0 0 0 / 50%)",
                        "--tw-prose-invert-th-borders":
                            theme("colors.base[600]"),
                        "--tw-prose-invert-td-borders":
                            theme("colors.base[700]"),
                    },
                },
            }),
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};

