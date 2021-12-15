module.exports = {
	purge: [
		"./src/**/*.html",
		"./src/**/*.vue",
		"./src/**/*.jsx",
		"./**/*.php",
	],
	theme: {
		colors: {
			dark: "#22292d",
			light: "#f9f3ed",
			yellow: "#c7974e",
			green: "#879c94",
		},
		container: {
			padding: {
				DEFAULT: "1.5rem",
				sm: "3rem",
				lg: "4vw",
			},
			center: true,
		},
		fontFamily: {
			sans: ["freight-sans-pro", "sans-serif"],
			serif: ["freight-display-pro", "serif"],
		},
		fontSize: {
			xs: ["0.8125rem", { lineHeight: "1.5" }],
			sm: ["0.9375rem", { lineHeight: "1.5" }],
			base: ["1.0625rem", { lineHeight: "1.5" }],
			lg: ["1.125rem", { lineHeight: "1.6" }],
			xl: ["1.75rem", { lineHeight: "1" }],
			"2xl": ["2.875rem", { lineHeight: "1" }],
		},
		screens: {
			sm: "640px",
			md: "768px",
			lg: "1024px",
			xl: "1280px",
			xxl: "1480px",
		},
	},
	variants: {},
	plugins: [],
}
