# Cross-Site Request Forgery (CSRF) Example - PHP

## Building the example

* Clone this git repository
* Run <code>docker-compose build && docker-compose up</code> Note this may take a couple minutes the first time. It will be faster on subsequent executions since docker will cache the packages that the php container uses.
* Copy the code from 'malicious.html' into an html file on your host computer.

## Demo Process

* Open a browser on your host computer and browse to http://VIRTUAL\_MACHINE\_IP/ and fill out the form  with username='user' and password='password'

* Observe the value set by the cookie.

* On your local machine, load the malicious.html file in the browser window.

* Navigate back to http://VIRTUAL\_MACHINE\_IP/motd.php and observe the change.

# Remediation

* Add a hidden form element to index.php. The hidden form element's value should be a random number (try using <code>bin2hex(openssl\_random\_pseudo\_bytes(16, TRUE))</code>). Save that random number to a session variable as well.

* When the form is received by the index page, validate that the session variable you saved and the hidden form element are identical. Only then should you set the cookie.

* Verify the protection works by trying to load the malicious html page again.
