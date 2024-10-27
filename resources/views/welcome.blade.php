<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vimeo</title>
</head>
{{-- {{ phpinfo() }} --}}

<body>
    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        @error('video')
            {{ $message }}
        @enderror
        <input type="file" name="video">
        <input type="submit" value="Upload">
    </form>
</body>

</html>
