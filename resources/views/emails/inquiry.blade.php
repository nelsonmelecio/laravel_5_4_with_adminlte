<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inquiry</title>
</head>
<body>
	<p>Date: {{ date('Y/m/d H:i:s') }}</p>
	<p>Inquiry: from www.sgehealthcare.com</p>
	<p>Name: {{ $inquiry->name }}</p>
	<p>Email Address: {{ $inquiry->email }}</p>
	<p>Message: {{ $inquiry->message }}</p>
</body>
</html>