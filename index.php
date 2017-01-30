<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="includes/normalize.css">
        <link rel="stylesheet" href="includes/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
    <!-- Wrapper -->
    <div id="wrapper">
        <!--Sidebar Navigation-->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-image">
                    <img src="https://c1.staticflickr.com/1/682/23117960972_04eb40a09f_q.jpg" width="300" height="300" alt="">
                </li>
                <li class="sidebar-heading">
                    <h3>Will Baumbach</h3>
                </li>
                <li class="link">
                    <a href="#">About Me</a>
                </li>
                <li class="link">
                    <a href="#">Twitter</a>
                </li>
                <li class="link">
                    <a href="#">Instagram</a>
                </li>
                <li class="link">
                    <a href="#">Github</a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar Navigation -->
        
        <!-- Page Content -->
        <div id="blog-wrapper">
            <div id="blog">
                <?php  
					include 'includes/includes.php';
					$blogPosts = getBlogPosts();
					foreach ($blogPosts as $post)
					{
						echo "<div class='post'>";
						echo "<h1>" . $post->title . "</h1>";
						echo "<p>" . $post->post . "</p>";
						echo "<span class ='footer'>" . $post->author . " --- " . $post->datePosted . "</span>";
					}
					?>
            </div>
            <!-- End Page Content -->

        </div>
    </div>
    <!-- End Wrapper -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
