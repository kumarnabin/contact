<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>
<body>

<div style="width: 500px; margin: 0 auto; margin-top: 90px;">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        @if(Session::has('message'))
            {{Session::get("message")}}
        @endif

    <h3>Contact Us</h3>

    <form action="{{route('contact')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="John Doe" value="{{old('name')}}" required>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject Here" value="{{old('subject')}}" required>
        </div>

        <div class="form-group">
            <label for="message">Enter Your Message</label>
            <textarea class="form-control"name="message" id="message" rows="3">{{old('message')}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
