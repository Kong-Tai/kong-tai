<template>
	<div>
		<!-- start page title section -->
		<section
			class="wow fadeIn parallax"
			data-stellar-background-ratio="0.5"
			style="background-image: url(&quot;images/parallax-bg39.jpg&quot;); background-position: 0px 0px; visibility: visible; animation-name: fadeIn;"
		>
			<div class="opacity-medium bg-extra-dark-gray"></div>
			<div class="container">
				<div class="row align-items-center">
					<div
						class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large"
					>
						<!-- start page title -->
						<h1
							class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom"
						>Blog list</h1>
						<span class="text-white-2 opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
						<!-- end page title -->
					</div>
				</div>
			</div>
		</section>
		<!-- end page title section -->

		<section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
			<div class="container">
				<div class="row">
					<!-- start post item -->
					<div
						class="col-12 col-xl-3 col-sm-6 margin-80px-bottom md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp"
						style="visibility: visible; animation-name: fadeInUp;"
						v-for="(post, i) in posts"
						:key="i"
					>
						<div class="blog-post blog-post-style2">
							<div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-15px-bottom">
								<a :href="'/blog/'+post.id+''">
									<img
										v-if="post.post_images.length"
										class="card-img-top"
										:src="post.post_images[0].post_image_path"
										alt
										data-no-retina
									/>
								</a>
							</div>
							<div class="post-details">
								<a
									:href="'/blog/'+post.id+''"
									class="post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100"
								>{{ post.title }}</a>
								<div
									class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"
								></div>
								<div class="author">
									<img src="/images/avtar-01.jpg" alt class="rounded-circle" data-no-retina />
									<span
										class="text-medium-gray text-uppercase text-extra-small padding-15px-left d-inline-block"
									>
										by
										<a href="home-blog-grid.html" class="text-medium-gray">{{ post.user.name }}</a>
										&nbsp;&nbsp;|&nbsp;&nbsp;{{ post.created_at }}
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end post item -->
				</div>
				<!-- start slider pagination -->
				<div
					class="text-center margin-60px-top md-margin-50px-top wow fadeInUp"
					style="visibility: visible; animation-name: fadeInUp;"
				>
					<div class="pagination text-small text-uppercase text-extra-dark-gray">
						<ul class="mx-auto">
							<li>
								<a href="#">
									<i class="fa fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev
								</a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">
									Next
									<i class="fa fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end slider pagination -->
			</div>
		</section>
	</div>
</template>

<script>
export default {
	name: 'all-posts',
	data() {
		return {
			postDialogVisible: false,
			currentPost: ''
		}
	},
	computed: {
		posts() {
			return this.$store.state.posts
		}
	},
	beforeMount() {
		this.$store.dispatch('getAllPosts')
	},
	methods: {
		truncateText(text) {
			if (text.length > 24) {
				return `${text.substr(0, 24)}...`
			}
			return text
		},
		viewPost(postIndex) {
			const post = this.posts
			this.currentPost = post
			this.postDialogVisible = true
		}
	}
}
</script>
