<template>
	<div>
		<!-- start counter section -->
		<section class="wow fadeIn">
			<div class="container">
				<div class="row">
					<!-- start counter item-->
					<div class="col-12 col-lg-3 col-md-6 text-center md-margin-30px-bottom wow fadeInUp">
						<div class="counter-feature-box-1 w-100 border-all padding-5px-all">
							<div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
								<i class="icon-heart icon-medium text-medium-gray margin-15px-bottom"></i>
								<h6
									class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer"
									data-speed="2000"
									data-to="4650"
								>4650</h6>
								<span>Happy Clients</span>
							</div>
						</div>
					</div>
					<!-- end counter item-->
					<!-- start counter item-->
					<div
						class="col-12 col-lg-3 col-md-6 text-center md-margin-30px-bottom wow fadeInUp"
						data-wow-delay="0.2s"
					>
						<div class="counter-feature-box-1 w-100 border-all padding-5px-all">
							<div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
								<i class="icon-laptop icon-medium text-medium-gray margin-15px-bottom"></i>
								<h6
									class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer"
									data-speed="2000"
									data-to="3790"
								>3790</h6>
								<span>Project Completed</span>
							</div>
						</div>
					</div>
					<!-- end counter item-->
					<!-- start counter item-->
					<div
						class="col-12 col-lg-3 col-md-6 text-center sm-margin-30px-bottom wow fadeInUp"
						data-wow-delay="0.4s"
					>
						<div class="counter-feature-box-1 w-100 border-all padding-5px-all">
							<div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
								<i class="icon-camera icon-medium text-medium-gray margin-15px-bottom"></i>
								<h6
									class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer"
									data-speed="2000"
									data-to="5580"
								>5580</h6>
								<span>Photo Capture</span>
							</div>
						</div>
					</div>
					<!-- end counter item-->
					<!-- start counter item-->
					<div class="col-12 col-lg-3 col-md-6 text-center wow fadeInUp" data-wow-delay="0.6s">
						<div class="counter-feature-box-1 w-100 border-all padding-5px-all">
							<div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
								<i class="icon-chat icon-medium text-medium-gray margin-15px-bottom"></i>
								<h6
									class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 timer"
									data-speed="2000"
									data-to="8580"
								>8580</h6>
								<span>Telephonic Talk</span>
							</div>
						</div>
					</div>
					<!-- end counter item-->
				</div>
			</div>
		</section>
		<!-- end counter section -->
	</div>
</template>

<script>
export default {
	mounted() {
		console.log('Component mounted.')
	}
}
</script>
