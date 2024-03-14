<h1>PHP FRONT CONTROLLER</h1>

A front controller is a design pattern commonly used in web development to centralize and manage the handling of incoming requests to a web application. It acts as a single entry point for all requests and is responsible for routing the requests to the appropriate handlers or controllers within the application.

<b>SINGLE ENTRY POINT</b><br />
The front controller serves as the single entry point for all incoming requests to the web application. This simplifies the request handling process by consolidating the logic for handling different types of requests into a single location.

<b>REQUEST ROUTING</b><br />
Upon receiving a request, the front controller is responsible for determining the appropriate handler or controller to process the request based on factors such as the request URL, HTTP method, and any other relevant request parameters.

<b>URL REWRTING</b><br />
To ensure safety and user friendly URL, .htaccess file can be used to rewrite the url. 

So our file structure will be like that;


project-root/<br />
│<br />
├── public/
│   ├── index.php       // Front Controller
│   ├── .htaccess       // Optional: Apache configuration file for URL rewriting
│   └── assets/         // Directory for static assets (CSS, JavaScript, images)
│       ├── css/
│       ├── js/
│       └── img/
│
├── app/
│   ├── controllers/    // Directory for controller classes
│   │   └── HomeController.php
│   │
│   ├── models/         // Directory for model classes (optional)
│   │
│   ├── views/          // Directory for view templates
│   │   └── home.php
│   │
│   └── includes/       // Directory for helper functions or configuration files
│       └── database.php
│
└── vendor/             // Directory for third-party libraries (optional)



