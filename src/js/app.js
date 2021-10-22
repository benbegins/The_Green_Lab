import Swiper from "swiper"
import "swiper/css"

// Menu
const Header = {
	data() {
		return {
			menuActive: false,
			burgerDesktop: false,
		}
	},
	methods: {
		windowScroll() {
			window.addEventListener("scroll", (e) => {
				if (window.scrollY > 150) {
					this.burgerDesktop = true
				} else {
					this.burgerDesktop = false
					this.menuActive = false
				}
			})
		},
	},
	mounted() {
		this.windowScroll()
	},
}
Vue.createApp(Header).mount("#header")

// Products slider
const swiper = new Swiper(".swiper", {
	speed: 400,
	slidesPerView: "auto",
})
