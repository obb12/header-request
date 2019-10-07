<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Request Header microservice</title>
  </head>
  <body>
    <h2>API Project: Request Header Parser Microservice</h2>
  <h3>User Story: </h3>
  1. I can get the IP address, preferred languages (from header <code>Accept-Language</code>)<br> and system infos (from header <code>User-Agent</code>) for my device.

  <h3>Example Usage:</h3>
  <a href="/api/whoami">
    [base url]/api/whoami
  </a>

  <h3>Example Output:</h3>
  <p>
    <code>{"ipaddress":"159.20.14.100","language":"en-US,en;q=0.5",<br>"software":"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:50.0) Gecko/20100101 Firefox/50.0"}</code>
  </p>
  </body>
</html>
