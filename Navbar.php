<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 text-left">
                <div id="fh5co-logo"><a href="index.php"><img src="./images/logo.png" width="200px" /></a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <li class="<?php if($active === 'index'){echo 'active';} ?>"><a href="index.php"><b>Home</b></a></li>
                    <li class="<?php if($active === 'service'){echo 'active';} ?>"><a href="services.php"><b>Services</b></a></li>
                    <li class="<?php if($active === 'about'){echo 'active';} ?>"><a href="about.php"><b>About</b></a></li>
                    <li class="<?php if($active === 'blog'){echo 'active';} ?>"><a href="blog.php"><b>Blog</b></a></li>
                    <li class="<?php if($active === 'contact'){echo 'active';} ?>"><a href="contact.php"><b>Contact</b></a></li>
                </ul>
            </div>
        </div>	
    </div>
</nav>