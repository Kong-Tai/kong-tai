<template>
	<div>
		<!-- start slider section -->
		<section class="no-padding main-slider height-100 mobile-height wow fadeIn">
			<div class="swiper-full-screen swiper-container height-100 width-100 black-move">
				<div class="swiper-wrapper">
					<!-- start slider item -->
					<div
						class="swiper-slide cover-background"
						style="background-image:url('images/portfolio-item58.jpg');"
						v-for="carousel in portfolio.portfolio_carousels"
						:key="carousel"
					>
						<div class="container position-relative one-fourth-screen">
							<div class="slider-typography text-center">
								<div class="slider-text-middle-main">
									<div class="slider-text-middle">
										<span
											class="text-white-2 alt-font font-weight-600 title-large d-block margin-20px-bottom"
										>{{ portfolio.title }}</span>
										<span
											class="width-60 mx-auto text-light-gray text-outside-line alt-font sm-width-100 sm-padding-15px-lr d-inline-block d-md-inline"
										>Branding Design &nbsp;&nbsp; • &nbsp;&nbsp; Magento Development &nbsp;&nbsp; • &nbsp;&nbsp; Mobile Website</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end slider item -->
				</div>
				<!-- start slider pagination -->
				<div class="swiper-pagination swiper-full-screen-pagination"></div>
				<div class="swiper-button-next swiper-button-black-highlight d-none"></div>
				<div class="swiper-button-prev swiper-button-black-highlight d-none"></div>
				<!-- end slider pagination -->
			</div>
		</section>
		<!-- end slider section -->

		<!-- start feature section -->
		<section
			class="wow fadeIn bg-light-gray big-section"
			style="visibility: visible; animation-name: fadeIn;"
		>
			<div class="container padding-two-tb">
				<div class="row">
					<div class="col-12 text-center margin-60px-bottom md-margin-30px-bottom sm-margin-10px-bottom">
						<span
							class="width-60 mx-auto text-outside-line alt-font sm-width-100 sm-padding-15px-lr d-inline"
						>Branding &nbsp;&nbsp; • &nbsp;&nbsp; Design &nbsp;&nbsp; • &nbsp;&nbsp; Web</span>
						<h1
							class="text-extra-dark-gray alt-font letter-spacing-minus-1 font-weight-700 d-block margin-10px-top"
						>{{ portfolio.title }}</h1>
					</div>
					<div
						class="col-12 col-lg-5 offset-lg-1 line-height-28 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp"
						style="visibility: visible; animation-name: fadeInUp;"
					>
						<p>{{ portfolio.intro }}.</p>
					</div>
					<div
						class="col-12 col-lg-4 offset-lg-1 line-height-26 wow fadeInUp"
						style="visibility: visible; animation-name: fadeInUp;"
					>
						<ul class="list-style-6 margin-twelve-left">
							<li class="margin-5px-bottom">
								<label class="width-30 d-inline-block">Client:</label>
								{{ portfolio.client }}
							</li>
							<li class="margin-5px-bottom">
								<label class="width-30 d-inline-block">Industry:</label>Adventure / Travel
							</li>
							<li class="margin-5px-bottom">
								<label class="width-30 d-inline-block">Services:</label>Design, Art Direction, Website
							</li>
							<li class="margin-5px-bottom">
								<label class="width-30 d-inline-block">Date:</label>
								{{ portfolio.workdate }}
							</li>
							<li class="margin-5px-bottom">
								<label class="width-30 d-inline-block">Website:</label>
								<a href="#">{{ portfolio.website_url }}</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- end feature section -->

		<!-- start grid section -->
		<section class="wow fadeIn p-0" style="visibility: visible; animation-name: fadeIn;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 p-0 lightbox-portfolio">
						<div id="justified" class="justified-gallery" style="height: 2308.99px;">
							<!-- start gallery item -->
							<div
								class="wow fadeInUp jg-entry entry-visible"
								style="visibility: visible; animation-name: fadeInUp; width: 639px; height: 425.674px; top: 10px; left: 10px;"
								v-for="gallery in portfolio.portfolio_galleries"
								:key="gallery"
							>
								<a :href="gallery.gallery_image" class="gallery-link">
									<img
										:src="gallery.gallery_image"
										alt="Herbal Beauty Salon"
										data-no-retina
										style="width: 639px; height: 426px; margin-left: -319.5px; margin-top: -213px;"
									/>
								</a>
								<div class="caption">{{ gallery.caption }}</div>
							</div>
							<!-- end gallery item -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- start grid section -->
	</div>
</template>

<script>
export default {
	props: {
		portfolio: {}
	},
	data() {
		return {}
	},
	created() {},
	computed: {},
	mounted() {
		console.log('Component mounted.')
	},
	methods: {}
}
</script>
