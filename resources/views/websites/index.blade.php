@extends('layouts.public')

@section('title')
	{{ $title }}
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-12">

                <h2>Website Development</h2>
				<p>From simple single page sites for small businesses to large enterprise software with hundreds of active users, I've worked on projects of all sizes an scopes. I have been building websites and web-based applications for the past 4 years of my career. Whether your goal is selling products online, or sharing your business with the world, I can help. Just <a href="/contact">get in touch</a> and we can discuss your vision!</p>
				<p>Not sure where to begin? I have created a series of pages to help you understand how websites work and website development is all about.</p>
				<div><a class="btn btn-default" href="/website-development/what-is/web-browser">How Does It All Work?</a></div>

			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
                <h2>Website Maintenance</h2>
				<p>Do you have a website already, but need someone to look after it? I can also help! I have servers available where I can host your existing project, then I can get your site up to date and make adjustments as needed to get it back into shape.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<h4 class="text-center">Trusted By</h4>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="grow" href="https://medicinehatvolunteers.ca">
					<img class="img img-responsive" src="/images/trusted/cmh_square.png" alt="City Of Medicine Hat" title="Medicine Hat Volunteers">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="grow" href="https://medhatvball.com">
					<img class="img img-responsive" src="/images/trusted/mhvl_square.png" alt="Medicine Hat Volleyball League" title="Medicine Hat Volleyball League">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="grow" href="https://riteenterprises.ca">
					<img class="img img-responsive" src="/images/trusted/rite_enterprises_square.png" alt="Rite Enterprises Tree Services" title="Rite Enterprises Tree Services">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="grow" href="https://badlandsvet.com">
					<img class="img img-responsive" src="/images/trusted/bvs_square.png" alt="Badlands Veterinary Services" title="Badlands Veterinary Services">
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
                <h2>My Workflow</h2>
				<p>I typically build sites using <a href="//laravel.com">Laravel</a>, a highly customizable <a href="//php.net">PHP</a> framework. Over the years, I have become and expert with this framework and its ecosystem so I can get projects up and running quickly, and maintain them easily. I like to avoid pre-packaged themes when I can and take pride in designing custom, user friendly interfaces from scratch with <a href="//tailwindcss.com">Tailwind</a>. Look below for a few examples of my work, these sites are designed, developed, hosted and maintained by me.
				</p>
				{{-- <a href="/website-development/how-it-works" class="btn btn-default">Learn How Websites Work</a> --}}
			</div>
		</div>
	</div>

	{{-- <div class="container">
		<h4 class="text-center">Trusted By</h4>
		<div class="row">
			<div class="col-xs-6 col-sm-3">
				<a class="grow" href="https://medicinehatvolunteers.ca">
					<img class="img img-responsive" src="/images/trusted/cmh_square.png" alt="City Of Medicine Hat" title="Medicine Hat Volunteers">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="grow" href="https://medhatvball.com">
					<img class="img img-responsive" src="/images/trusted/mhvl_square.png" alt="Medicine Hat Volleyball League" title="Medicine Hat Volleyball League">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="grow" href="https://riteenterprises.ca">
					<img class="img img-responsive" src="/images/trusted/rite_enterprises_square.png" alt="Rite Enterprises Tree Services" title="Rite Enterprises Tree Services">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a class="grow" href="https://badlandsvet.com">
					<img class="img img-responsive" src="/images/trusted/bvs_square.png" alt="Badlands Veterinary Services" title="Badlands Veterinary Services">
				</a>
			</div>
		</div>
	</div> --}}


	<div class="container">
		<div class="row">
            <div class="col-sm-12 m-b-30">
                <h2 class="script">Websites I've Built</h2>
            </div>

			@forelse($projects as $project)

				<div class="col-xs-10 col-xs-push-1 col-md-6 col-sm-12 col-sm-push-0 project-image">
					<div class="row m-b-90">
						<div class="col-xs-12 col-sm-4 col-md-5 col-lg-4 m-b-20">
							<a href="{{ $project->url }}" title="{{ $project->name }}">
								<img class="img img-responsive shadow" src="{{ $project->image('feature') }}" alt="{{ $project->name}}" title="{{ $project->name }}">
							</a>
						</div>

						<div class="col-xs-12 col-sm-8 col-md-7 col-lg-8">
							<h3 class="m-t-0">{{ $project->name }}</h3>
							<p class="m-b-20">{!! $project->description !!}</p>
							@if($project->design && !empty($project->slug))
							<div><a target="_blank" href="{{$project->url}}"><i class="fa fa-external-link"></i> {{$project->slug}}</a></div>
							@endif
						</div>

					</div>
				</div>

				<div class="clearfix visible-sm visible-xs"></div>
				@if($loop->iteration % 2 == 0)
					<div class="clearfix visible-md visible-lg"></div>
				@endif

			@empty
				<p>No items available</p>
			@endforelse
		</div>

	</div>
@stop
