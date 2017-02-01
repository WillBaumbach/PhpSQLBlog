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
                    <img src="https://lh3.googleusercontent.com/Ojc7HvxTHnUjoQLurv_d_kcLcbiTaaFboT_rhMK-FGpwu_P6y46yJ9BpeZGg3j-pyd37TyZpEgq97PhjowkDVY56jnLiC2OovpOauYc1apeZxWP9raRHEMcnDEQb8ph_yjYOyrzzQpTzpgJLmvu0VjLvsCJAwX7e4k9_zAQNZMsNQ5TfEff-aA-CwIjiFFFrR4fM1zrQ586SljFamBiYohn7kUYLkmojFD7-rioWFCtguyvpgLfzJiHwaSY-46fcZUWqXesx6m1JC5w9ySZgvVmrq8g9o3NOOal5QjOf67Mk3kWE_voo4Yf1JALTN1Nks0i1wTPj8wN2eiMl_x1durihvdR4jCQw-Y9rt6-XOr9zJOOwlNEX-R7LtXBAO7_ktuqKnwBzb-Et_CzGmgJzNAN-1Lxad4zrJqkjZPRtJH-QGdkyU_RZtQura1qE7TKct0VuBQG7EgUSA8-n5U-aIG3EaKemffNI7CnhlGwFx4CwofFgRD961_YtMdNMcAo5aUjSJjtHsqrnnoPRy9b709Ua7tL9kF58soYkWaJnT5E5FZjzoidC0UJQQlCHIxRms2NBgZdR=w1920-h906" width="200" height="200" alt="">
                </li>
                <li class="sidebar-heading">
                    <h3>Will Baumbach</h3>
                </li>
                <li class="link">
                    <a href="#">About Me</a>
                </li>
                <li class="link">
                    <a href="https://twitter.com/will_baumbach">Twitter</a>
                </li>
                <li class="link">
                    <a href="https://www.instagram.com/will_baumbach/">Instagram</a>
                </li>
                <li class="link">
                    <a href="https://github.com/WilliamBaumbach1212">Github</a>
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
						echo "<div class= 'footer'>" . $post->author . " --- " . $post->datePosted . "</div>";
                        echo "</div>";
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
