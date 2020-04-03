<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  @if ($message = Session::get('success'))
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<strong>Original Image:</strong>
			<br/>
			<img src="/image/{{ Session::get('imageName') }}" />
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-5">
			<strong>Thumbnail Image:</strong>
			<br/>
			<img src="/thumbnail/{{ Session::get('imageName') }}" />
		</div>
	</div>
    @endif
  <form action="{{url('resize-image')}}" enctype="multipart/form-data" method="post">
   <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
      <label for="image">Choose Image:</label>
      <input required type="file" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>