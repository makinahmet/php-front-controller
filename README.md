<h1>PHP MVC FRONT CONTROLLER</h1>

A front controller is a design pattern commonly used in web development to centralize and manage the handling of incoming requests to a web application. It acts as a single entry point for all requests and is responsible for routing the requests to the appropriate handlers or controllers within the application.

<b>SINGLE ENTRY POINT</b><br />
The front controller serves as the single entry point for all incoming requests to the web application. This simplifies the request handling process by consolidating the logic for handling different types of requests into a single location.

<b>REQUEST ROUTING</b><br />
Upon receiving a request, the front controller is responsible for determining the appropriate handler or controller to process the request based on factors such as the request URL, HTTP method, and any other relevant request parameters.

<b>URL REWRTING</b><br />
To ensure safety and user friendly URL, .htaccess file can be used to rewrite the url. 

<b>MVC</b><br />
So the model, view, controller pattern will be our file structure because we need to work with teams too.

So our file structure will be like that;


project-root/<br />
│<br />
├── public/<br />
│   ├── index.php       // Front Controller<br />
│   └── assets/         // Directory for static assets (CSS, JavaScript, images)<br />
│       ├── css/<br />
│       ├── js/<br />
│       └── img/<br />
│<br />
├── app/<br />
│   ├── controllers/    // Directory for controller classes<br />
│   │   └── HomeController.php<br />
│   │<br />
│   ├── models/         // Directory for model classes (optional)<br />
│   │<br />
│   ├── views/          // Directory for view templates<br />
│   │   └── home.php<br />
│   │<br />
│   └── includes/       // Directory for helper functions or configuration files<br />
│       └── database.php<br />
│<br />
├── .htaccess           // Apache configuration file for URL rewriting<br />
│<br />
└── vendor/             // Directory for third-party libraries (optional)<br />
<br />
<br/>
<b>FILE NAMING STANDART</b><br />
<br />
-> Controller class names should be in PascalCase like "HomeController", "UserController" etc.<br />
-> View template names should be lowercase and may include underscores or dashes for word separation, such as "home.php", "user_profile php" etc.<br />
-> Class names should be in PascalCase like "User.php", "UserModel.php", "Product.php", "ProductModel.php"<br />
<br />

<b>LAST BUT IMPORTANT</b><br />
Understand the url structure is very important.<br />
<br />
http://example.com/page/action1/param1/param2/param3/...<br />
<br />
http://example.com is main domain.<br />
<br />
"page" is the name of the controller that we will include in the index.php file.<br /> 
<br />
whit the "action" and "param" values you can do whatever you want.<br />
<br />
For examle our URL is like that http://example.com/User/deletePost. First we will seperate the url with "/" sign and 
include UserController.php to index.php file and call deletePost function or codes with no params.<br />
<br />
For example our URL is like that http://example.com/UserMessages/getMessage/2. Our page is "UserMessagesController.php"
action is "getMessage" and param1 is "2".<br />
<br />