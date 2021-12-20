Hello {{$email_data['name']}}
<br><br>
Welcome to Yearbook.com
<br>
click the link below to verify your account
<br><br>
<a href="http://192.168.1.5:8081/verify?code={{$email_data['verification_code']}}">Click here</a>
<br><br>
Thank You!