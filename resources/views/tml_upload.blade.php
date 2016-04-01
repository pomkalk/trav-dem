<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel-Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('semantic/semantic.css') }}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.js"></script>
    <script type="text/javascript" src="{{ asset('semantic/semantic.js') }}"></script>
</head>
<body>
    
<form action="{{url('upload')}}" method="post" class="ui form" enctype="multipart/form-data">
{{ csrf_field() }}
	<div class="field">
		<input type="file" name="upload" id="upload">
	</div>
	<button type="submit" class="ui simple button">upload</button>
</form>


</body>
</html>