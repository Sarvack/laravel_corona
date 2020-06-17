@extends('template_blog.content')
	
@section('isi')
<div class="col-md-8 hot-post-left">
					<!-- post -->
					@foreach($dataSatu as $post_terbaru)
					<div class="post post-thumb">
						<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ asset($post_terbaru->gambar)}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{ route('blog.list') }}">{{ $post_terbaru->category->name }}</a>
							</div>
							<h3 class="post-title title-lg"><a href="{{ route('blog.isi', $post_terbaru->slug ) }}">{{ $post_terbaru->judul }}</a></h3>
							<ul class="post-meta">
								<!-- <li><a href="#">{{ $post_terbaru->users->name }}</a></li> -->
								<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
							</ul>
						</div>
					</div>
					@endforeach
					<!-- /post -->
</div>
				@foreach($dataDua as $post_terbaru)
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ asset($post_terbaru->gambar)}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{ route('blog.list') }}">{{ $post_terbaru->category->name }}</a>
							</div>
							<h3 class="post-title"><a href="{{ route('blog.isi', $post_terbaru->slug ) }}">{{ $post_terbaru->judul }}</a></h3>
							<ul class="post-meta">
								<li><a href="#">{{ $post_terbaru->users->name }}</a></li>
								<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				 @endforeach
	
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="#">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						<center>{{ $data->links() }}</center>
					</div>
					<!-- /row -->
				</div>
			<!-- /row -->
@endsection
