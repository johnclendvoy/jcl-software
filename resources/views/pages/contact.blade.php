@extends('layouts.public')
@section('title', 'Contact')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

					<div class="row">
						<form method="POST" action="/contact">
						{{ csrf_field() }}

							<div class="col-sm-12 form-group text-center">
								@if($sent)
									<h2>Thanks for the message</h2>
									<p> I'll get back to you as soon as I can.</p>
								@else
									<h2>Let me know what you think.</h2>
									<p>If you have questions, comments, or want to work togther to build awesome software, let me know!</p>
								@endif
							</div>


							@if(count($errors))
								<div class="col-sm-12 form-group alert alert-danger">
									<ol>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ol>
								</div>
							@endif

							<div class="form-group col-sm-6 {{ $errors->has('name') ? 'has-error' : '' }}">
								<label>Name</label>
								<input required name="name" type="text" class="form-control input-lg square" value="{{ old('name') }}">
							</div>

							<div class="form-group col-sm-6 {{ $errors->has('email') ? 'has-error' : '' }}">
								<label>Email</label>
								<input required name="email" type="text" class="form-control input-lg square" value="{{ old('email') }}">
							</div>

							<div class="form-group col-sm-12 {{ $errors->has('comments') ? 'has-error' : '' }}">
								<label>Message</label>
								<textarea required rows="4" name="comments" class="form-control input-lg square" >{{ old('comments') }}</textarea>
							</div>

							{!! app('captcha')->render(); !!}

						<div class="form-group col-sm-12">
							<button name="send" type="submit" class="btn btn-default" >Send Message</button>
						</div>

					</form>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Find Me Online</h2>
				<p>I have accounts set up on many websites around the web at which you can follow me and posts about my work.</p>

				<div>
					<a href="https://github.com/johnclendvoy">
						<i class="fa fa-github"></i> Github
					</a>
				</div>

				<div>
					<a href="https://twitter.com/johnclendvoy">
						<i class="fa fa-twitter"></i> Twitter
					</a>
				</div>

				<div>
					<a href="https://linkedin.com/in/johnclendvoy">
						<i class="fa fa-linkedin"></i> LinkedIn
					</a>
				</div>

			</div>

		</div>
	</div>
@stop
