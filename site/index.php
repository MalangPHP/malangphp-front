<?php include_once('../template/head.php') ?>

<div class="site-wrapper" id="hero">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">
                        <img src="../assets/images/logo-white.png" alt="">
                    </h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="event-list.php">Events</a></li>
                            <li><a href="post-list.php">Blog</a></li>
                            <li><a href="team-list.php">Persons</a></li>
                            <li><a href="project-list.php">Projects</a></li>
                            <li><a href="contact.php">About</a></li>
                            </ul>
                    </nav>
                </div> <!-- .inner -->
            </div> <!-- .masthead -->

            <div class="inner cover">
                <h1 class="cover-heading">Welcome to Malang PHP User Group</h1>
                <!-- <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p> -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa aperiam cumque possimus ab, eum labore magnam ipsam, veritatis consequatur voluptas cupiditate autem maxime accusamus enim facilis iure? Nulla unde, repellat?</p>
                <br>
                <p class="lead">
                    <a href="#" class="btn btn-xlg cta cta-event"><i class="fa fa-bullhorn"></i> Find Upcoming Meetups / Events</a>
                    <a href="#" class="btn btn-xlg cta cta-blog"><i class="fa fa-leanpub"></i> Visit Our Blog</a>
                </p>
            </div> <!-- .inner.cover -->

            <div class="mastfoot">
                <div class="inner">
                    <p>
                        Also you can find our Official Account on 
                        <a href=""><i class="fa fa-twitter"></i> Twitter</a>,
                        <a href=""><i class="fa fa-facebook"></i> Facebook</a>,
                        <a href=""><i class="fa fa-github"></i> Github</a>, and 
                        <a href=""><i class="fa fa-slack"></i> Slack Channel</a>,
                    </p>
                </div> <!-- .inner -->
            </div> <!-- .mastfoot -->

        </div> <!-- .cover-container -->
    </div> <!-- .site-wrapper-inner -->
</div> <!-- .site-wrapper -->

<div class="site-wrapper" id="latest">
    <div class="site-wrapper-inner">
        <div class="cover-container">

            <div class="inner cover row-fluid">
                
                <div class="col-md-5 aleft" id="event">
                    <h1 class="title kerning-s uppercase">Upcoming Event</h1>    
                    <h3 class="title">#1 Meetups and Ramadhan Hore</h3>
                    <span class="meta">June 27, 2015 17:00</span>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam labore nihil itaque quibusdam error soluta officia commodi, vitae libero facere doloremque perspiciatis ea repellendus fugiat temporibus. Aliquid enim recusandae nihil.</p>
                    <a href="" class="btn btn-lg cta">More Info <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 aleft" id="blog">
                    <h1 class="title kerning-s uppercase">Latest Blog Entry</h1>    
                    <h3 class="title">PSR 7 Just Released!</h3>
                    <span class="meta">June 27, 2015</span>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam labore nihil itaque quibusdam error soluta officia commodi, vitae libero facere doloremque perspiciatis ea repellendus fugiat temporibus. Aliquid enim recusandae nihil.</p>
                    <a href="" class="btn btn-lg cta">More Posts</a>
                </div>

                <!-- <h1 class="cover-heading">Cover your page.</h1>
                <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-default">Learn more</a>
                </p> -->
            </div> <!-- .inner.cover -->

        </div> <!-- .cover-container -->
    </div> <!-- .site-wrapper-inner -->
</div> <!-- .site-wrapper -->


<section id="sponsors">
    <div class="list row-fluid padding-lg">
        <div class="container">
            <div class="col-md-12">
                <h1 class="title kerning-s uppercase">OUR LOVELY SPONSORS</h1>
                <ul class="acenter">
                    <li><a href=""><img src="../assets/images/laravel-color.png" alt=""></a></li>
                    <li><a href=""><img src="../assets/images/zend-color.png" alt=""></a></li>
                    <li><a href=""><img src="../assets/images/symfony-color.png" alt=""></a></li>
                </ul>
                <a href="" class="btn btn-lg cta">View All Sponsors <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="offers row-fluid padding-lg">
        <div class="container">
            <h2>
                Our goal is to grow the local community, search for new developers and spread knowledge and resources. <br> 
            </h2>
            <br>
            <p class="lead">
                Malang is a very active technology center for the East Java, Indonesia, many companies and people from various countries have chosen this area to settle down and start their companies. PHP has a big role in this and for that reason we created a User Group focused on this area and in doing activities in english to acommodate all of these developers.
            </p>
            <p class="lead">
                Want to show your love and concern for our community?
            </p>
            <br>
            <a href="" class="btn btn-xlg cta"><i class="fa fa-heart"></i> Sponsor and Support Us!</a>
            <!-- <a href="" class="btn btn-lg btn-red"><i class="fa fa-bullhorn"></i> Want to be a Speaker?</a> -->
        </div>
    </div>
</section>

<section id="speakers">
    <div class="list row-fluid padding-lg">
        <div class="container">
            <div class="col-md-12">
                <h1 class="title kerning-s uppercase">CURRENTLY ACTIVE SPEAKERS</h1>
                    <div class="row-fluid persons">
                        
                        <div class="col-md-4 row-fluid person">
                            <div class="col-md-4 avatar">
                                <img src="../assets/images/avatar.jpg" alt="">
                            </div>
                            <div class="col-md-8 data aleft ltrim-padding">
                                <span class="name"><a href="">Yuri Pratama</a></span>
                                <span class="skills">PHP, HTML, CSS</span>
                                <span class="social">
                                    <a href="" class="github"><i class="fa fa-github"></i> Github</a>
                                    <a href="" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                </span>
                            </div>
                        </div>
                        
                        <div class="col-md-4 row-fluid person">
                            <div class="col-md-4 avatar">
                                <img src="../assets/images/avatar.jpg" alt="">
                            </div>
                            <div class="col-md-8 data aleft ltrim-padding">
                                <span class="name"><a href="">Yuri Pratama</a></span>
                                <span class="skills">UI & UX, HTML5, CSS3</span>
                                <span class="social">
                                    <a href="" class="github"><i class="fa fa-github"></i> Github</a>
                                    <a href="" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-4 row-fluid person">
                            <div class="col-md-4 avatar">
                                <img src="../assets/images/avatar.jpg" alt="">
                            </div>
                            <div class="col-md-8 data aleft ltrim-padding">
                                <span class="name"><a href="">Yuri Pratama</a></span>
                                <span class="skills">PHP, HTML, CSS</span>
                                <span class="social">
                                    <a href="" class="github"><i class="fa fa-github"></i> Github</a>
                                    <a href="" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <a href="" class="btn btn-lg cta">View All Our Active Speakers <i class="fa fa-long-arrow-right"></i></a>


                </ul>
            </div>
        </div>
    </div>
    <div class="offers row-fluid padding-lg">
        <div class="container">
            <h2>
                Share your knowledge with the community!<br> 
            </h2>
            <br>
            <p class="lead">
                Meetings need a few things. Our sponsors will cover the beers, you will cover the fun, but we also need a speaker to share his knowledge.
            </p>
            <p class="lead">
                User Groups are the best place for you to start speaking, a first step toward entering the conference circuit. So if you have an idea that you would like to share, discuss and get people interested in, this is the place and we need to know it. We need a good solid register of interested speakers so that we can organize our meetings, so let us know what you would like to speak on and we will get you into a speaking slot.
            </p>
            <br>
            <a href="" class="btn btn-xlg cta"><i class="fa fa-bullhorn"></i> Apply Here to be a Speaker!</a>
            <!-- <a href="" class="btn btn-lg btn-red"><i class="fa fa-bullhorn"></i> Want to be a Speaker?</a> -->
        </div>
    </div>
</section>


<?php include_once('../template/footer.php') ?>
