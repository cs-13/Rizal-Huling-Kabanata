<!Doctype>

<html>
	
<head>
	<meta charset="UTF-8">
	<title>Webtech Finals</title>
	<link rel="stylesheet" type="text/css" href="css/topics.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/selection.js" async></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
	
<body>
	<div class="container-a">
		<div class="header">
			<div class="header-left">
				<a href="index.php">
				<img id="header-img" src="images/header.png" alt="website header">
				</a>
			</div>
			<ul class="nav-a">
                <?php
                    include('php/login.php');
                    if(!isset($_SESSION['login_user'])){
                        echo "<li><button type='button' class='top-btn' data-toggle='modal' data-target='#login-modal'>Log In</button></li>
                        <li><button type='button' class='top-btn' data-toggle='modal' data-target='#signup-modal'>Sign Up</button></li>";
                    } else {
                        $username = $_SESSION['login_user'];
                       echo '
							<li class="dropdown">
								<span class="dropdown-toggle" data-toggle="dropdown" href="#">'.$username.'&nbsp;<span class="caret"></span></span>
								<ul class="dropdown-menu dropdown-menu-right">
									<div class="dropdown-divider"></div>
									<li class="logout"><a href="php/logout.php">Logout</a></li>
								</ul>
							</li>
							';
                    }
				?>
			</ul>
		</div>
		<div id="login-modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Log In</h4>
					</div>
					<div class="modal-body">
						<div class="board">
                            <form method="post" action="php/login.php">
								<label>Username</label>
								<input class="login-field" type="text" name="username" required>
								<label>Password</label>
								<input class="login-field" type=password name="password" required>
								<input type="submit" value="Login" id="submit-form" style="display: none;"/>
                            </form>
						</div>
					</div>
					<div class="modal-footer">
						<label class="btn btn-success" for="submit-form" tabindex="0" class="q-btn" id="submit">Login</label>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<div id="signup-modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Sign Up</h4>
					</div>
					<div class="modal-body">
						<div class="board">
                            <form method="post" action = "php/register.php">
                                <label>Name</label>
                                <input class="login-field" type="text" name="name" required>
                                <label>Username</label><br>
                                <input class="login-field" type="text" name="username" required>
                                <label>Password</label><br>
                                <input class="login-field" type=password name="password" required>
								<input type="submit" value="register" id="submit-form-a" style="display: none;"/>
                            </form>			
						</div>
					</div>
					<div class="modal-footer">
						<label class="btn btn-success" for="submit-form-a" tabindex="0" class="q-btn" id="submit">Register</label>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="body">
			
			<div class="container">
				<div class="jumbotron banner">
					<img class="nav-img" src="images/php-logo.png">
				</div>
			</div>
			
			<div class="nav-custom">
				<ul class="nav-a">
					<li class="dropdown">
						<a class="dropdown-toggle cus-dropdown" data-toggle="dropdown" href="#">Topics</a>
						<ul class="dropdown-menu cus-dropdown-menu">
							<li><a class="tablinks" onclick="openTab(event, 't1')">PHP History</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't2')">Introduction to PHP</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't3')">Syntax</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't4')">Case Sensitivity</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't5')">Comments</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't6')">Variables</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't7')">Data Types</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't8')">Superglobals</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't9')">Selection Construct</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't10')">Iteration Constructs</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't11')">Code demo</a></li>
						</ul>
				  </li>
				</ul>
				<ul class="nav-a">
					<li><a href="quizzes/php-quizlet.php" class="custom-a">Take Quiz</a></li>
				</ul>
			</div>
			
			<div class="container container-1">
				<div class="t-container">
					
					<div id="t1" class="tabcontent">
                        <h3>PHP History</h3>
						<p>PHP originally stands for "Personal Home Page Tools". PHP was created in 1994 by Rasmus Lerdof. Later that year, he dropped the name PHP and changed it to FI, an abbreviation for Forms Interpreter. It was originally intended for forms in HTML. Though in the October of 1995, Rasmus released a rewritten code bringing back the name PHP but with the meaning "Personal Home Page Construction Kit". From this, it went through a lot of development process and these are the versions and there release date:
                        </p>
						&nbsp;
                        <table class="table table-striped">
                        <tr>
                            <th>Version</th>
                            <th>Date Released</th>
                        </tr>
                        <tr>
                            <td>PHP 1.0</td>
                            <td>June 8 1995</td>
                        </tr>
                        <tr>
                            <td>PHP 2.0</td>
                            <td>November 1 1997</td>
                 
                        </tr>
                        <tr>
                            <td>PHP 3.0</td>
                            <td>June 6 1998</td>
                 
                        </tr>
                        <tr>
                            <td>PHP 4.0</td>
                            <td>May 22 2000</td>
                            
                        </tr>
                        <tr>
                            <td>PHP 4.1</td>
                            <td>December 10 2001</td>
                            
                        </tr>
                        <tr>
                            <td>PHP 4.2</td>
                            <td>April 22 2002</td>
                          
                        </tr>
                        <tr>
                            <td>PHP 4.3</td>
                            <td>December 27 2002</td>
                          
                        </tr>
                        <tr>
                            <td>PHP 4.4</td>
                            <td>July 11 2005</td>
                          
                        </tr>
                        <tr>
                            <td>PHP 5.0</td>
                            <td>July 13 2004</td>
                   
                        </tr>
                        <tr>
                            <td>PHP 5.1</td>
                            <td>November 24 2005</td>
               
                        </tr>
                        <tr>
                            <td>PHP 5.2</td>
                            <td>November 2 2006</td>
              
                        </tr>
                        <tr>
                            <td>PHP 5.3</td>
                            <td>June 30 2009</td>
              
                        </tr>
                        <tr>
                            <td>PHP 5.4</td>
                            <td>March 1 2012</td>
              
                        </tr>
                        <tr>
                            <td>PHP 5.5</td>
                            <td>June 20 2013</td>
              
                        </tr>
                        <tr>
                            <td>PHP 5.6</td>
                            <td>August 28 2014</td>
              
                        </tr>
                        <tr>
                            <td>PHP 6.x</td>
                            <td>N/A</td>
              
                        </tr>
                        
                            <tr>
                            <td>PHP 7.0</td>
                            <td>December 3 2018</td>
              
                        </tr>
                        <tr>
                            <td>PHP 7.1</td>
                            <td>December 1 2016</td>
              
                        </tr>
                        <tr>
                            <td>PHP 7.2</td>
                            <td>November 30 2017</td>
              
                        </tr>
                    </table>
					</div>
					
					<div id="t2" class="tabcontent">
						<h3>Introduction</h3>
                        <p>In the following lessons, it is expected that you know HTML, CSS, JavaScript and setting up a web server.PHP today means "PHP: Hypertext Preprocessor" and is known as a scripting language for server-side web development. It is used mainly for making webpages dynamic and interactive. PHP is server-side programming language that runs on web servers. This means that when it is executed, it is executed in the server and nowhere else. PHP scripts must run on web servers or it will not work.</p>
					</div>
					
					<div id="t3" class="tabcontent">
						<h3>Syntax</h3>
                        <p>PHP scripts can be placed anywhere in an HTML or you can make a separate file with .php as the file extension.</p>
						&nbsp;
                        <p>PHP scripts start with <code>&lt;?php</code>  and ends with <code>?&gt;</code>.</p>
						&nbsp;
                        <p>Example:</p>
						&nbsp;
                        <div class="code">
							<div>&lt;?php</div>
							<div class="l1">$var = "Hello World!";</div>
							<div class="l1">echo $var</div>
							<div>?&gt;</div>
						</div>
						
                        <p>Note: PHP statements end with a semicolon(<code>;</code>).</p>
					</div>
					
                    <div id="t4" class="tabcontent">
						<h3>Case Sennsitivity</h3>
                        <p>All PHP keywords, functions, classes, and user defined functions are NOT case-sensitive.</p>&nbsp;
                        <p>Example:</p>
                        <p><code>echo "Hello";</code> is the same as <code>EcHo "Hello";</code></p>
					</div>
					
                    <div id="t5" class="tabcontent">
						<h3>Comments</h3>
                        <p>To put single line comments, we use <code>//</code> or <code>#</code> followed by a word or a sentence.</p>
						&nbsp;
                        <p>To put multi-line comments, we use <code>/*</code> and <code>*/</code>.</p>
						&nbsp;
                        <p>Example:</p>
						<div class="code">
							<div>// This is a single line comment.</div>
							<div># This is another way to write a single line comment.</div>
							<div>/*</div>
							<div class="l1">This is a multiline comment</div>
							<div class="l1">Hello</div>
							<div>*/</div>
						</div>
                        
					</div>
					
                    <div id="t6" class="tabcontent">
						<h3>Variables</h3>
                        <p>There are rules to follow when finding for the perfect variable name.</p><br>
                        <p>These rules are:</p>
                        <p>1.&nbsp;&nbsp; The first character must be a dollar sign <code>$</code>.</p>
                        <p>2.&nbsp;&nbsp; A variable name must be at least one character in length.</p>
                        <p>3.&nbsp;&nbsp; The character after the dollar sign <code>$</code> must either be a letter or an underscore <code>_</code> and following characters can be a letter, underscore or a number.</p>
                        <p>4.&nbsp;&nbsp; Spaces or special characters other than <code>_</code> and <code>$</code> are not allowed in any part of the variable name.</p>
						&nbsp;
                        <p>Examples of legal variable names in PHP: </p>
						<div class="code">
							<div>$_var</div>
							<div>$var</div>
							<div>$var_one</div>
						</div>
						&nbsp;
                        <p>Examples of illegal variable name in PHP:
                        </p>
						<div class="code">
							<div>var</div>
							<div>$var one</div>
							<div>$var-one</div>
						</div>
					</div>
					
                    <div id="t7" class="tabcontent">
						<h3>Data Types</h3>
                        <p>PHP has 8 data types mainly String, Integer, Float, Boolean, Array, Object, NULL, and Resource.</p><br>
                        <p>A <code>String</code> is just a sequence of characters enclosed by either the single quotes or the double quotes.</p>
                        <p>Example:</p>
						<div class="code">
							<div>$string = "Hello There";</div>
							<div>$string_two = 'Hi there';</div>
						</div>
						&nbsp;
						
                        <p>An <code>Integer</code> is a data type that is non-decimal.</p>
                        <p>Example:</p>
						<div class="code">
							<div>$x = 219;</div>
							<div>$y = 2;</div>
						</div>
						&nbsp;
						
                        <p>A <code>float</code> is a number with a decimal point or exponential form.</p><br>
                        <p>Example:</p>
						<div class="code">
							<div>$z = 12.345;</div>
						</div>
						&nbsp;
						
                        <p>A <code>boolean</code> data type represents two possible values: either a TRUE or a FALSE.</p><br>
                        <p>Example:</p>
						<div class="code">
							<div>$a = TRUE;</div>
							<div>$b = FALSE;</div>
						</div>
						&nbsp;
						
                        <p>An <code>array</code> is a special data type that can store multiple informations in one single variable.</p><br>
                        <p>Example:</p>
						<div class="code">
							<div>$school = array("SCIS",1,"SABM",2);</div>
						</div>
						&nbsp;
						
                        <p>An <code>object</code> is a data type which stores data and information and how those informations can be used.</p><br>
                        <p>Example:</p>
						<div class="code">
							<div>class School {</div>
							<div class="l1">function School() {</div>
							<div class="l2">this->dept = "CS";</div>
							<div class="l1">}</div>
							<div>}</div>
						</div>
						&nbsp;
						
                        <p>A <code>NULL</code> value is a special data type which can only have a value NULL. A variable with a null value is a variable with non value assigned to it.</p><br>
                        <p>Example:</p>
						<div class="code">
							<div>$x = 3;</div>
							<div>$x = null;</div>
						</div>
						&nbsp;
						
                        <p>A <code>Resource</code> type is actually not a data type. It stores the reference to functions in external resources. One good example for this is a database call.</p><br>
					</div>
					
                    <div id="t8" class="tabcontent">
						<h3>Superglobals</h3>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Superglobal</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>$GLOBALS</code></td>
								<td>this super global variable is used to access global variables anywhere in the script.</td>
							</tr>
							<tr>
								<td><code>$_SERVER </code></td>
								<td>this super global variable is used to store and hold informations about header, paths and locations.</td>
							</tr>
							<tr>
								<td><code>$_REQUEST</code></td>
								<td>this super global variable is used to collect data from a submission form form an HTML form.</td>
							</tr>
							<tr>
								<td><code>$_POST</code></td>
								<td>this super global variable is widely used for passing variables and also used for collecting data from HTML forms with method value of "post".</td>
							</tr>
							<tr>
								<td><code>$_GET</code></td>
								<td>this super global variable is widely used for passing variables and also used for collecting data from HTML forms with method value of "get".</td>
							</tr>
							<tr>
								<td><code>$_FILES</code></td>
								<td>this super global variable is used for storing information about the uploaded file.</td>
							</tr>
							<tr>
								<td><code>$_ENV</code></td>
								<td>this is an associative array of variables passed to the current script via the environment method.</td>
							</tr>
							<tr>
								<td><code>$_COOKIE</code></td>
								<td>this super global variable is use to retrieve the value of the cookie in the browser.</td>
							</tr>
							<tr>
								<td><code>$_SESSION</code></td>
								<td>a super global variable use to set a session.</td>
							</tr>
						</tbody>
					</table>
					</div>
					
                    <div id="t9" class="tabcontent">
						<h3>Selection Constructs</h3>
						<p>Selection in PHP can be done in multiple ways using the following statements: <code>if</code>, <code>else</code>, <code>elseif</code> / <code>else if</code> and <code>switch</code></p>
						&nbsp;
						<h4><code>if</code> statement</h4>
						<div class="code">
							<div>if ($var == 0) {</div>
							<div class="l1">echo "Hello World!";</div>
							<div>}</div>
						</div>
						
						&nbsp;
						<h4><code>else</code> statement</h4>
						<div class="code">
							<div>if ($var == 0) {</div>
							<div class="l1">echo "Hello World!";</div>
							<div>} else {</div>
							<div class="l1">echo "Code Demo.";</div>
							<div>}</div>
						</div>
						
						&nbsp;
						<h4><code>elseif</code> / <code>else if</code> statement</h4>
						<div class="code">
							<div>if ($var == 0) {</div>
							<div class="l1">echo "Hello World!";</div>
							<div>} elseif ($var == 1){</div>
							<div class="l1">echo "Code Demo.";</div>
							<div>}</div>
						</div>
						
						&nbsp;
						<h4><code>switch</code> statement</h4>
						<div class="code">
							<div>$var = 3</div>
							<div>swithc($var) {</div>
							<div class="l1">case 0:</div>
							<div class="l2">echo "Case 0";</div>
							<div class="l2">break;</div>
							<div class="l1">case 3:</div>
							<div class="l2">echo "Case 3";</div>
							<div class="l2">break;</div>
							<div class="l1">case 1:</div>
							<div class="l2">echo "Case 1";</div>
							<div class="l2">break;</div>
							<div>}</div>
						</div>
					</div>
					
                    <div id="t10" class="tabcontent">
						<h3>Iteration Constructs</h3>
						<p>Iteration in PHP can be done in multipl ways using the followin statements: <code>while</code>, <code>do-while</code>, <code>for</code>, and <code>foreach</code></p>
						
						&nbsp;
						<h4><code>while</code></h4>
						<div class="code">
							<div>$counter = 0</div>
							<div>while($counter &lt; 13 {</div>
							<div class="l1"> echo "Hello World ".$counter;</div>
							<div class="l1"> $counter++;</div>
							<div>}</div>
						</div>
						
						&nbsp;
						<h4><code>do-while</code></h4>
						<div class="code">
							<div>$counter = 0</div>
							<div>do {</div>
							<div class="l1"> echo "Hello World ".$counter;</div>
							<div class="l1"> $counter++;</div>
							<div>} while($counter &lt; 13)</div>
						</div>
						
						&nbsp;
						<h4><code>for</code></h4>
						<div class="code">
							<div>for($i = 0; $i &lt; 13; $i++) {</div>
							<div class="l1">echo "Hello World ".$i;</div>
							<div>}</div>
						</div>
						
						&nbsp;
						<h4><code>foreach</code></h4>
						<div class="code">
							<div>$arr = array("SCIS", "SABM", "SAMSCIS");</div>
							<div>foreach($arr as &amp;$value) {</div>
							<div class="l1"> echo $value;</div>
							<div>}</div>
						</div>
					</div>
                     <div id="t11" class="tabcontent">
						<h3>Code demo</h3>
                        <p>Demonstration of registration with PHP and Mysql as its database</p>
						&nbsp;
                        <h4>database.sql</h4>
<pre>
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
</pre>
                        <h4>index.html</h4>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
	&lt;title> Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
   &lt;form method="post" action="register.php"&gt;
        &lt;p&gt;Name&lt;/p&gt;
        &lt;input type="text" name="name" required&gt;
        &lt;p&gt;Username&lt;/p&gt;
        &lt;input type="text" name="username" required&gt;
        &lt;p&gt;Password&lt;/p&gt;
        &lt;input type="text" name="password" required&gt;
        &lt;br&gt;
        &lt;button type="submit" name="register">Register&gt;/button&gt;
    &lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>  
                   <h4>register.php</h4>
<pre>
&lt;?php
include('server.php');
$db = mysqli_connect('localhost', 'root', '', 'database');

$name = mysqli_real_escape_string($db, $_POST['name']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$password = hash('sha1', $password);

$user_check_query = "SELECT * FROM accounts WHERE username='$username' OR name='$name' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) {
    if ($user['username'] === $username) {
      echo "&lt;script&gt;
      alert('Username already exists');
      window.history.back();
      &lt;/script&gt;";
    }
    if ($user['name'] === $name) {
      echo "&lt;script&gt;
          alert('Name already exists');
          window.history.back();
          &lt;/script&gt;";
    }
}else{
    $query = "INSERT INTO `accounts` (`name`, `username`, `password`) VALUES ('$name','$username','$password');";
    if ($db->query($query) === true) {
        echo "
            &lt;script&gt;
                alert('Thank you for registering.');
                window.history.back();
            &lt;/script&gt;";
    }
}
?&gt;
</pre>

					</div>
				</div>
			</div>
			
			<div class="breaker"></div>
		</div>
		
		<div class="footer">Saint Louis University &copy; 2018</div>
	</div>
</body>
	
</html>