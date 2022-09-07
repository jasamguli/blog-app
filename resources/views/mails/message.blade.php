<h2>Hey! You've got an email from <i>{{ getenv('APP_NAME') }}</i></h2>

This is your form data:
<h5>Name: {{ $request['name'] }}</h5>
<h5>Email: {{ $request['email'] }}</h5>
<h5>Phone: {{ $request['phone'] }}</h5>
<h5>Message: {{ $request['message'] }}</h5>
