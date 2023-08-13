# BackendApi-Access
Code for easily accessing the Backend-API

Simply pass in your desired URL and security token either via the header or by a key in the query string:

```<?php
$q = new BackendApi('http://backend-api.nahamgaming.ctf/')
->header('76e5f58e12db681eb839c79c0261d7f1')
->send();
```

or

```<?php
$q = new BackendApi('http://backend-api.nahamgaming.ctf/?key=76e5f58e12db681eb839c79c0261d7f1')
->send();
```
  

