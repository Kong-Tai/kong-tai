<template>
	<div>
		<!-- start page title section -->
		<section
			class="wow fadeIn cover-background background-position-top top-space"
			style="background-image: url(&quot;/images/parallax-bg53.jpg&quot;); visibility: visible; animation-name: fadeIn;"
		>
			<div class="opacity-medium bg-extra-dark-gray"></div>
			<div class="container">
				<div class="row align-items-center">
					<div
						class="col-12 d-flex justify-content-center flex-column text-center page-title-large padding-30px-tb"
					>
						<!-- start sub title -->
						<span
							class="text-white-2 opacity6 alt-font margin-10px-bottom d-block text-uppercase text-small"
						>
							{{ postData.created_at }}&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;by
							<a
								href="blog-masonry.html"
								class="text-white-2"
							>{{ postData.user.name }}</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="blog-masonry.html" class="text-white-2">Design</a>,
							<a href="blog-masonry.html" class="text-white-2">Branding</a>
						</span>
						<!-- end sub title -->
						<!-- start page title -->
						<h1 class="text-white-2 alt-font font-weight-600 margin-10px-bottom">{{ postData.title }}</h1>
						<!-- end page title -->
					</div>
				</div>
			</div>
		</section>
		<!-- end page title section -->

		<!-- start section -->
		<section
			class="wow fadeIn padding-20px-tb border-bottom border-color-extra-light-gray"
			style="visibility: visible; animation-name: fadeIn;"
		>
			<div class="container">
				<div class="row">
					<div class="col-12 breadcrumb alt-font text-small">
						<!-- breadcrumb -->
						<ul>
							<li>
								<a href="/" class="text-medium-gray">Home</a>
							</li>
							<li>
								<a href="/blog" class="text-medium-gray">Blog</a>
							</li>
							<li class="text-medium-gray">{{ postData.title }}</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->

		<!-- start blog content section -->
		<section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-10 mx-auto text-center last-paragraph-no-margin">
						<h5
							class="alt-font text-extra-dark-gray font-weight-600 mb-0"
						>We must let go of the life we have planned, so as to accept the one that is waiting for us.</h5>
						<img
							:src="postData.post_images[0].post_image_path"
							alt
							class="width-100 margin-40px-tb md-margin-30px-tb"
							data-no-retina
						/>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of letraset sheets containing lorem ipsum passages, and more recently with desktop publishing software like Aldus pagemaker including versions of Lorem Ipsum.</p>
					</div>
					<div class="col-12 col-lg-10 mx-auto text-center last-paragraph-no-margin">
						<img
							:src="postData.post_images[1].post_image_path"
							alt
							class="width-100 margin-40px-tb md-margin-30px-tb"
							data-no-retina
						/>
						<p
							class="text-large text-extra-dark-gray"
						>Today I choose life. Every morning when I wake up I can choose joy, happiness, negativity, pain... To feel the freedom that comes from being able to continue to make mistakes and choices - today I choose to feel life, not to deny my humanity but embrace it.</p>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
					</div>
					<div class="col-12 col-lg-10 mx-auto text-center margin-60px-tb md-margin-30px-tb">
						<div class="bg-light-gray padding-ten-all md-padding-35px-all sm-padding-25px-all">
							<i
								class="fa fa-quote-left icon-small text-deep-pink d-block margin-25px-bottom sm-margin-15px-bottom"
							></i>
							<h5
								class="alt-font text-extra-dark-gray font-weight-600"
							>This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.</h5>
							<span
								class="text-uppercase text-extra-small alt-font letter-spacing-3 text-medium-gray"
							>Mattie Stepanek</span>
						</div>
					</div>
					<div
						class="col-12 col-lg-10 mx-auto text-center margin-60px-bottom last-paragraph-no-margin md-margin-30px-bottom"
					>
						<img
							:src="postData.post_images[1].post_image_path"
							alt
							class="width-100 margin-40px-bottom md-margin-30px-bottom"
							data-no-retina
						/>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-10 d-flex flex-wrap mx-auto">
						<div
							class="col-12 col-lg-6 pl-0 md-no-padding-lr md-margin-30px-bottom text-center last-paragraph-no-margin"
						>
							<div class="bg-light-gray padding-50px-all md-padding-25px-all">
								<span
									class="text-medium font-weight-600 text-extra-dark-gray alt-font"
								>Young man with beard and piercings</span>
								<img
									:src="postData.post_images[0].post_image_path"
									alt
									class="width-100 margin-30px-tb"
									data-no-retina
								/>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
							</div>
						</div>
						<div class="col-12 col-lg-6 pl-0 md-no-padding-lr text-center last-paragraph-no-margin">
							<div class="bg-light-gray padding-50px-all md-padding-25px-all">
								<span
									class="text-medium font-weight-600 text-extra-dark-gray alt-font"
								>Latin man with beard and piercings</span>
								<img
									:src="postData.post_images[1].post_image_path"
									alt
									class="width-100 margin-30px-tb"
									data-no-retina
								/>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end blog content section -->

		<!-- start section -->
		<section class="wow fadeIn pt-0" style="visibility: visible; animation-name: fadeIn;">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-10 d-flex flex-wrap mx-auto p-0">
						<div class="col-12 col-lg-8 col-md-6 text-center text-md-left sm-margin-10px-bottom">
							<div class="tag-cloud">
								<a href="blog-grid.html">Advertisement</a>
								<a href="blog-grid.html">Artistry</a>
								<a href="blog-grid.html">Blog</a>
								<a href="blog-grid.html">Conceptual</a>
							</div>
						</div>
						<div class="col-12 col-lg-4 col-md-6 text-center text-md-right">
							<div class="social-icon-style-6">
								<ul class="extra-small-icon">
									<li>
										<a class="likes-count" href="#" target="_blank">
											<i class="fa fa-heart text-deep-pink"></i>
											<span class="text-small">300</span>
										</a>
									</li>
									<li>
										<a class="facebook" href="http://facebook.com" target="_blank">
											<i class="fa fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="twitter" href="http://twitter.com" target="_blank">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="google" href="http://google.com" target="_blank">
											<i class="fa fa-google-plus-g"></i>
										</a>
									</li>
									<li>
										<a class="pinterest" href="http://dribbble.com" target="_blank">
											<i class="fa fa-pinterest-p"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div
						class="col-12 col-lg-10 mx-auto margin-50px-top md-margin-30px-top wow fadeInUp"
						style="visibility: visible; animation-name: fadeInUp;"
					>
						<div
							class="d-block d-md-flex width-100 align-items-center align-items-md-start border border-color-extra-light-gray padding-50px-all md-padding-30px-all sm-padding-20px-all"
						>
							<div class="width-150px text-center sm-margin-15px-bottom">
								<img
									:src="'/images/'+postData.user.avatar+''"
									class="rounded-circle width-100px"
									alt
									data-no-retina
								/>
							</div>
							<div
								class="width-100 padding-40px-left last-paragraph-no-margin sm-no-padding-left text-center text-md-left"
							>
								<a
									href="#"
									class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-10px-bottom d-inline-block text-small"
								>{{ postData.user.name }}</a>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
								<a href="#" class="btn btn-very-small btn-black margin-20px-top">All author posts</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->

		<!-- start related post section -->
		<section class="wow fadeIn bg-light-gray" style="visibility: visible; animation-name: fadeIn;">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-10 mx-auto text-center margin-80px-bottom sm-margin-40px-bottom">
						<div class="position-relative overflow-hidden width-100">
							<span
								class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray"
							>Related Posts</span>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- start post item -->
					<div
						class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp"
						style="visibility: visible; animation-name: fadeInUp;"
					>
						<div class="blog-post blog-post-style1 text-center text-md-left">
							<div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
								<a href="blog-post-layout-01.html">
									<img src="/images/blog-img15.jpg" alt data-no-retina />
								</a>
							</div>
							<div class="post-details">
								<span
									class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom"
								>
									17 july 2017 | by
									<a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a>
								</span>
								<a
									href="blog-post-layout-01.html"
									class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100"
								>I try to look at design from a more conceptual standpoint.</a>
								<div
									class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"
								></div>
								<p
									class="width-90 sm-width-100"
								>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
							</div>
						</div>
					</div>
					<!-- end post item -->
					<!-- start post item -->
					<div
						class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp"
						data-wow-delay="0.2s"
						style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"
					>
						<div class="blog-post blog-post-style1 text-center text-md-left">
							<div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
								<a href="blog-post-layout-02.html">
									<img src="/images/blog-img16.jpg" alt data-no-retina />
								</a>
							</div>
							<div class="post-details">
								<span
									class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom"
								>
									03 July 2017 | by
									<a href="blog-masonry.html" class="text-medium-gray">Herman Miller</a>
								</span>
								<a
									href="blog-post-layout-02.html"
									class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100"
								>Good design accelerates the adoption of new ideas.</a>
								<div
									class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"
								></div>
								<p
									class="width-90 sm-width-100"
								>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
							</div>
						</div>
					</div>
					<!-- end post item -->
					<!-- start post item -->
					<div
						class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp"
						data-wow-delay="0.4s"
						style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"
					>
						<div class="blog-post blog-post-style1 text-center text-md-left">
							<div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
								<a href="blog-post-layout-03.html">
									<img src="/images/blog-img17.jpg" alt data-no-retina />
								</a>
							</div>
							<div class="post-details">
								<span
									class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom"
								>
									22 June 2017 | by
									<a href="blog-masonry.html" class="text-medium-gray">Hugh Macleod</a>
								</span>
								<a
									href="blog-post-layout-03.html"
									class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100"
								>Design is inherently optimistic. That is its power.</a>
								<div
									class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"
								></div>
								<p
									class="width-90 sm-width-100"
								>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
							</div>
						</div>
					</div>
					<!-- end post item -->
					<!-- start post item -->
					<div
						class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin wow fadeInUp"
						data-wow-delay="0.6s"
						style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"
					>
						<div class="blog-post blog-post-style1 text-center text-md-left">
							<div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
								<a href="blog-post-layout-04.html">
									<img src="/images/blog-img18.jpg" alt data-no-retina />
								</a>
							</div>
							<div class="post-details">
								<span
									class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom"
								>
									02 June 2017 | by
									<a href="blog-masonry.html" class="text-medium-gray">Jennifer Freeman</a>
								</span>
								<a
									href="blog-post-layout-04.html"
									class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100"
								>I wish someone would ask me to design a cathedral.</a>
								<div
									class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"
								></div>
								<p
									class="width-90 sm-width-100"
								>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
							</div>
						</div>
					</div>
					<!-- end post item -->
				</div>
			</div>
		</section>
		<!-- end related post section -->

		<!-- start comments section -->
		<section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
			<div class="container">
				<div class="row">
					<div
						class="col-12 col-lg-10 mx-auto text-center margin-80px-bottom md-margin-50px-bottom sm-margin-15px-bottom"
					>
						<div class="position-relative overflow-hidden width-100">
							<span
								class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray"
							>{{ postData.comments.length }} Comments</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-10 mx-auto">
						<ul class="blog-comment">
							<li v-for="(comment, i) in postData.comments" :key="i">
								<div class="d-block d-md-flex width-100 width-100">
									<div class="width-110px sm-width-50px text-center sm-margin-10px-bottom">
										<img
											:src="'/images/'+comment.user.avatar+''"
											class="rounded-circle width-85 sm-width-100"
											alt
											data-no-retina
										/>
									</div>
									<div class="width-100 padding-40px-left last-paragraph-no-margin sm-no-padding-left">
										<a
											href="#"
											class="text-extra-dark-gray text-uppercase alt-font font-weight-600 text-small"
										>{{ comment.user.name }}</a>
										<a
											href="#comments"
											class="inner-link btn-reply text-uppercase alt-font text-extra-dark-gray"
										>Reply</a>
										<div
											class="text-small text-medium-gray text-uppercase margin-10px-bottom"
										>{{ comment.created_at }}</div>
										<p>{{ comment.body }}.</p>
									</div>
								</div>
								<ul class="child-comment">
									<li v-for="(reply, i) in comment.replies" :key="i">
										<div class="d-block d-md-flex width-100 width-100">
											<div class="width-110px sm-width-50px text-center sm-margin-10px-bottom">
												<img
													:src="'/images/'+reply.user.avatar+''"
													class="rounded-circle width-85 sm-width-100"
													alt
													data-no-retina
												/>
											</div>
											<div class="width-100 padding-40px-left last-paragraph-no-margin sm-no-padding-left">
												<a
													href="#"
													class="text-extra-dark-gray text-uppercase alt-font font-weight-600 text-small"
												>{{ reply.user.name }}</a>
												<a
													href="#comments"
													class="inner-link btn-reply text-uppercase alt-font text-extra-dark-gray"
												>Reply</a>
												<div
													class="text-small text-medium-gray text-uppercase margin-10px-bottom"
												>{{ reply.created_at}}</div>
												<p>{{ reply.body }}.</p>
											</div>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- end comments section -->

		<!-- start comment form section -->
		<section
			class="wow fadeIn bg-light-gray"
			id="comments"
			style="visibility: visible; animation-name: fadeIn;"
		>
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-10 mx-auto text-center margin-80px-bottom sm-margin-40px-bottom">
						<div class="position-relative overflow-hidden width-100">
							<span
								class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray"
							>Write A Comments</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-10 p-0 d-flex flex-wrap mx-auto text-center">
						<div class="col-12 col-lg-4">
							<input type="hidden" v-model="post_id" />
						</div>
						<div class="col-12">
							<textarea
								type="text"
								v-model="body"
								placeholder="Enter your comment here.."
								rows="8"
								class="medium-textarea"
							></textarea>
						</div>
						<div class="col-12 text-center">
							<button
								class="btn btn-dark-gray btn-small margin-15px-top"
								type="submit"
								v-on:click="send()"
							>Send message</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end comment form section -->
	</div>
</template>

<script>
export default {
	props: {
		post: {}
	},
	data() {
		return {
			postData: {},
			body: '',
			post_id: ''
		}
	},
	created() {
		this.postData = this.post
		this.post_id = this.postData.id
	},
	computed: {},
	mounted() {
		console.log('Component mounted.')
	},
	methods: {
		send: function() {
			// this.errors = []
			let data = {
				body: this.body,
				post_id: this.post_id
			}
			axios
				.post('/comment/store', data)
				.then(response => {
					this.postData = {}
					this.postData = response.data.post
				})
				.catch(error => {
					console.log(error)
				})
		}
	}
}
</script>
