import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
gsap.registerPlugin(ScrollTrigger)

import Swiper, { Navigation } from "swiper"
import "swiper/css"
Swiper.use([Navigation])

// Menu
const App = {
	data() {
		return {
			menuActive: false,
			burgerDesktop: false,
			cursorLink: false,
			cursorDrag: false,
		}
	},
	methods: {
		menu() {
			window.addEventListener("scroll", (e) => {
				if (window.scrollY > 150) {
					this.burgerDesktop = true
				} else {
					this.burgerDesktop = false
					this.menuActive = false
				}
			})
		},
		cursor() {
			gsap.to(".cursor", {
				opacity: 1,
				delay: 0.5,
				duration: 0.5,
			})
			window.addEventListener("pointermove", (e) => {
				gsap.to(".cursor", {
					x: e.clientX,
					y: e.clientY,
					duration: 0.5,
					ease: "Power2.easeOut",
				})
			})
			// Over Links
			const links = document.querySelectorAll("a, .link")
			links.forEach((link) => {
				link.addEventListener("mouseenter", () => {
					this.cursorLink = true
				})
				link.addEventListener("mouseleave", () => {
					this.cursorLink = false
				})
			})
			// Over Drag zones
			const dragZones = document.querySelectorAll(".drag")
			dragZones.forEach((zone) => {
				zone.addEventListener("mouseenter", () => {
					this.cursorDrag = true
				})
				zone.addEventListener("mouseleave", () => {
					this.cursorDrag = false
				})
			})
		},
		animIntro() {
			const tl = gsap.timeline({
				defaults: { duration: 1, ease: "Power2.easeInOut" },
			})
			tl.fromTo(
				".title-line-container span",
				{
					yPercent: 100,
					opacity: 0,
				},
				{
					yPercent: 0,
					opacity: 1,
					duration: 0.75,
					delay: 0.25,
					stagger: 0.1,
					ease: "Power2.easeOut",
				}
			)

			tl.to(
				".site-header, .homepage__hero__description, .homepage__hero__social, .homepage__hero__arrow",
				{
					opacity: 1,
					duration: 0.5,
					ease: "linear",
				},
				"-=0.5"
			)
		},
		animScroll() {
			// Reveal
			const sectionTitles = document.querySelectorAll(".section-title")
			if (sectionTitles && window.innerWidth >= 1024) {
				sectionTitles.forEach((title) => {
					gsap.from(title, {
						opacity: 0,
						y: 30,
						duration: 1,
						ease: "Power2.easeOut",
						scrollTrigger: {
							trigger: title,
							start: "top 80%",
						},
					})
				})
			}
			// Parallax
			if (window.innerWidth >= 1024) {
				const verticalParallaxElements =
					document.querySelectorAll("[data-parallax-v]")

				if (verticalParallaxElements) {
					verticalParallaxElements.forEach((element) => {
						gsap.fromTo(
							element,
							{
								yPercent: `${element.dataset.parallaxV * 50}`,
							},
							{
								yPercent: `-${element.dataset.parallaxV * 50}`,
								ease: "none",
								scrollTrigger: {
									trigger: element,
									scrub: 0.5,
								},
							}
						)
					})
				}

				const horizontalParallaxElements =
					document.querySelectorAll("[data-parallax-h]")

				if (horizontalParallaxElements) {
					horizontalParallaxElements.forEach((element) => {
						gsap.fromTo(
							element,
							{
								xPercent: `${element.dataset.parallaxH * 5}`,
							},
							{
								xPercent: `-${element.dataset.parallaxH * 5}`,
								ease: "none",
								scrollTrigger: {
									trigger: element,
									scrub: 0.5,
								},
							}
						)
					})
				}
			}
		},
	},
	mounted() {
		this.menu()
		this.cursor()
		this.animIntro()
		this.animScroll()
	},
}
Vue.createApp(App).mount("#page")

// Products slider
const swiper = new Swiper(".swiper", {
	speed: 400,
	slidesPerView: "auto",
	// freeMode: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
})

const slider = document.querySelector(".swiper")
if (slider) {
	// Animate slider
	swiper.on("touchMove", function () {
		slider.classList.add("is-moving")
	})
	swiper.on("touchEnd", function () {
		slider.classList.remove("is-moving")
	})

	// Arrows position
	const btnsArrow = document.querySelectorAll(".btn-arrow")

	window.addEventListener("load", arrowsPosition)
	window.addEventListener("resize", arrowsPosition)

	function arrowsPosition() {
		const height = document.querySelector(
			".homepage__produits__img-container"
		).offsetHeight
		btnsArrow.forEach((btn) => {
			btn.style.top = `${height / 2}px`
		})
	}
}
