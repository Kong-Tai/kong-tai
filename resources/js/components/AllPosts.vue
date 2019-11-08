<template>
	<div>
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
								<a href="blog-post-layout-01.html">
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
									href="#"
									class="post-title text-medium text-extra-dark-gray width-90 d-block lg-width-100"
								>{{ post.title }}</a>
								<div
									class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"
								></div>
								<div class="author">
									<img src="images/avtar-01.jpg" alt class="rounded-circle" data-no-retina />
									<span
										class="text-medium-gray text-uppercase text-extra-small padding-15px-left d-inline-block"
									>
										by
										<a href="home-blog-grid.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017
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
									<i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev
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
									<i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i>
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
