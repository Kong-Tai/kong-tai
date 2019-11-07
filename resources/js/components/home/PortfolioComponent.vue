<template>
	<div>
		<!-- start portfolio -->
		<section id="portfolio" class="half-section wow fadeIn">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 text-center last-paragraph-no-margin">
						<span
							class="text-extra-large d-block alt-font text-extra-dark-gray margin-10px-bottom font-weight-600"
						>Check Out Our All Ready Demos</span>
						<p
							class="width-75 lg-width-90 sm-width-100 mx-auto"
						>A great collection of beautiful website templates for your need. Choose the best suitable template and start customizing it.</p>
					</div>
				</div>
			</div>
		</section>

		<section
			class="bg-charcoal-gray wow fadeIn p-0"
			style="visibility: visible; animation-name: fadeIn;"
		>
			<div class="bg-black">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12">
							<!-- start filter navigation -->
							<ul
								class="portfolio-filter nav nav-tabs justify-content-center portfolio-filter-tab-2 border-none font-weight-600 alt-font text-center text-small padding-35px-tb"
							>
								<li class="nav-item active">
									<a
										href="javascript:void(0);"
										data-filter="*"
										class="nav-link text-white-2 text-very-small"
									>All</a>
								</li>
								<li class="nav-item" v-for="category in categories" :key="category">
									<a
										href="javascript:void(0);"
										:data-filter="'.' + category.slug"
										class="nav-link text-white-2 text-very-small"
									>{{ category.name }}</a>
								</li>
							</ul>
							<!-- end filter navigation -->
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col filter-content overflow-hidden padding-100px-all md-padding-15px-all">
						<ul
							class="portfolio-grid work-4col alt-font text-center hover-option11 gutter-extra-large"
							style="/* position: relative; */height: 2895.75px;"
						>
							<li class="grid-sizer"></li>
							<!-- start portfolio item -->
							<li
								class="grid-item fadeInUp"
								:class="portfolio.category.slug"
								style="visibility: visible;animation-name: fadeInUp;/* position: absolute; *//* left: 0%; *//* top: 0px; */"
								v-for="portfolio in portfolio"
								:key="portfolio"
							>
								<a href="/single-work" target="_blank">
									<div class="portfolio-img bg-extra-dark-gray">
										<img :src="portfolio.hero_image" alt data-no-retina />
									</div>
									<span class="portfolio-item-title">{{ portfolio.title }}</span>
								</a>
							</li>
							<!-- end portfolio item -->
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- end portfolio -->
	</div>
</template>

<script>
export default {
	props: {
		portfolio: {},
		categories: {}
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
