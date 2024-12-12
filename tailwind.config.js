import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
	presets: [preset],
	theme: {
		extend: {
			fontFamily: {
				poppins: ["Poppins"],
				futura: ["Futura"],
			},
			colors: {
				primary: {
					50: "#eff6ff",
					100: "#dbeafe",
					200: "#bfdbfe",
					300: "#93c5fd",
					400: "#60a5fa",
					500: "#3b82f6",
					600: "#2563eb",
					700: "#1d4ed8",
					800: "#1e40af",
					900: "#1e3a8a",
					950: "#172554",
				},
				roseOfSharon: {
					50: "#FFFBEA",
					100: "#FEF3C7",
					200: "#FDE58A",
					300: "#FBD24E",
					400: "#FABE25",
					500: "#F49D0C",
					600: "#D87607",
					700: "#BC560A",
					800: "#923F0E",
					900: "#78340F",
					950: "#451A03",
				},
			},
		},
	},
	content: [
		"./app/Filament/**/*.php",
		"./resources/views/**/*.blade.php",
		"./vendor/filament/**/*.blade.php",
		"node_modules/preline/dist/*.js",
		"./node_modules/flowbite/**/*.js",
	],
	plugins: [
		require("@tailwindcss/forms"),
		require("preline/plugin"),
		require("flowbite/plugin"),
	],
};
