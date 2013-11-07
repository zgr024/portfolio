<?
	$this->title = "Zachary Rosenberg, Web & Mobile Application Developer";
	$this->template('website','top'); 
?>
	
    <nav class="fixable">
        
        <div class="has-floats">
            <div class="logo"></div>
            <div class="float-left">
                <span class="thin">William</span>
                <span class="bold">Schmid</span>
            </div>
            <ul class="float-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#clients">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>    
        </div>
    </nav>
    <div id="nav-placeholder" style="display:none;"></div>




    <section id="overview">
        <div class="centered">
            <div class="subtitle">
                I can help with all phases of the software development process.
            </div>
        </div>
    </section>




    <section id="about">
        
        <h2>About Me</h2>

        <hr />

        <div class="snapshot">
            <div class="headshot"></div>
            <div class="float-left">
                <div class="title">Lead Full-Stack Web Developer &amp; Technical Strategy Consultant</div>
                <div class="description">
                    I have 10+ years of experience as a hands-on CTO and freelance web developer. 
                    I've built mission critical software applications and e-commerce platforms that 
                    process over 1 million dollars per day.  Having hired and managed teams of 
                    engineers and designers, I am a proven technical leader.
                </div>
            </div>
        </div>

        <div id="skills">
            <fieldset>
                <legend>PHP</legend>
                <ul>
                    <li>CakePHP</li>
                    <li>CodeIgniter</li>
                    <li>Drupal</li>
                    <li>Joomla</li>
                    <li>Magento</li>
                    <li>SkyPHP</li>
                    <li>Symfony</li>
                    <li>Wordpress</li>
                    <li>Zend</li>
                </ul>
            </fieldset>

            <fieldset>
                <legend>Javascript</legend>
                <ul>
                    <li>AngularJS</li>
                    <li>Backbone</li>
                    <li>jQuery</li>
                    <li>NodeJS</li>
                    <li>Socket.io</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </fieldset>

            <fieldset>
                <legend>Linux Admin / DevOps</legend>
                <ul>
                    <li>AWS / Heroku</li>
                    <li>Apache / Nginx</li>
                    <li>Memcached</li>
                    <li>Mongo</li>
                    <li>MySQL / PostgreSQL</li>
                    <li>NodeJS</li>
                    <li>Redis</li>
                </ul>
            </fieldset>

            <fieldset class="misc">
                <legend>Misc</legend>
                <ul>
                    <li>Git / SVN</li>
                    <li>HTML5 / CSS3</li>
                    <li>Java / Python / Rails</li>
                    <li>Responsive Design</li>
                    <li>REST API / OAuth 2.0</li>
                    <li>SEO</li>
                    <li>SQL</li>
                </ul>
            </fieldset>

            <fieldset class="last">
                <legend>Product Management</legend>
                <ul>
                    <li>Agile Development</li>
                    <li>Continuous Integration</li>
                    <li>Graphic Design</li>
                    <li>Tech Recruiting</li>
                    <li>Tech Stack Architecture</li>
                    <li>Time/Cost Estimates</li>
                    <li>UI/UX Wireframes</li>
                </ul>
            </fieldset>
        </div>

        <div class="also-on">
            <fieldset>
                <legend>I'm Also On</legend>
                <ul>
                    <li class="github">
                        <a href="https://github.com/will123195" target="_blank">github.com/will123195</a>
                    </li>
                    <li class="linkedin">
                        <a href="http://www.linkedin.com/in/willschmid" target="_blank">linkedin.com/in/willschmid</a>
                    </li>
                    <li class="stackoverflow">
                        <a href="http://stackoverflow.com/users/1162513/will" target="_blank">stackoverflow.com/users/1162513/will</a>
                    </li>
                </ul>
            </fieldset>
        </div>
        
    </section>




    <section id="smart"
        data-stellar-background-ratio="0.15"
    >
        
        <div class="dots">
            <div class="quote">Let's create smarter software for a better world.</div>
        </div>

    </section>




    <section id="work">
        
        <h2>My Work</h2>

        <hr />

        <div class="slideshow">
            <div class="cycle-nav">
                <div class="float-left">
                    <a href="#" class="cycle-prev">&lsaquo;</a>
                </div>
                <div class="float-right">
                    <a href="#" class="cycle-next">&rsaquo;</a>
                </div>
            </div>

            <div id="macbook">
                <div 
                    class="cycle-slideshow cycle-next hover-pause"
                    style="display:none;"
                    data-cycle-fx="scrollHorz"
                    data-cycle-log="false"
                    data-cycle-speed="200"
                    data-cycle-prev=".cycle-prev"
                    data-cycle-next=".cycle-next"
                    data-cycle-swipe="true"
                    data-cycle-pause-on-hover=".hover-pause"
                    data-cycle-pager=".cycle-pager"
                    data-cycle-caption="#caption"
                    data-cycle-caption-template="<a href='{{url}}' class='external' target='_blank'>{{alt}}</a>"
                >
                    <img src="/images/screens/600/su.png" 
                        class="first" 
                        alt="Sublime Text helps me code at hyperspeed." 
                        data-url="#work"
                        />
                    
                    <img src="/images/screens/600/jb.png" 
                        alt="5 years as CTO of Joonbug" 
                        data-url="http://joonbug.com" 
                        />
                    
                    <img src="/images/screens/600/ct.png" 
                        alt="Co-founder of Crave Tickets" 
                        data-url="http://cravetickets.com" 
                        />

                    <img src="/images/screens/600/bp.png" 
                        alt="Website Development &amp; Google Apps setup for BLC Psychology Tribeca" 
                        data-url="http://blcpsychologytribeca.com" 
                        />

                    <img src="/images/screens/600/js.png"
                        alt="Website Design &amp; Development for Jetset Events" 
                        data-url="http://jetsetnyc.com" 
                        />

                    <img src="/images/screens/600/nyec.png"
                        alt="Full-Stack Development for New Year's Eve Central" 
                        data-url="http://newyearsevecentral.com" 
                        />

                    <img src="/images/screens/600/bu.png" 
                        alt="Web Design &amp; Motion Graphics for Borough Underground" 
                        data-url="http://boroughunderground.com" 
                        />

                    <img src="/images/screens/600/ec.png" 
                        alt="HTML5 Parallax Investor Deck for E-coin" 
                        data-url="http://e-coin.com" 
                        />

                    <img src="/images/screens/600/bc.png" 
                        alt="Web and Mobile Development for Bar Crawls" 
                        data-url="http://barcrawls.com" 
                        />

                    <img src="/images/screens/600/mf.png" 
                        alt="Web Design &amp; Development for Mortgage Fast" 
                        data-url="http://mortgagefast.com" 
                        />

                    <img src="/images/screens/600/np.png" 
                        alt="Web Design &amp; Development for NYE Philly" 
                        data-url="http://nyephilly.com" 
                        />

                    <img src="/images/screens/600/sc.png" 
                        alt="CSS Sprites for Stephenson Creative" 
                        data-url="http://stephensoncreative.com" 
                        />

                </div>
                <div id="glare" class="cycle-next hover-pause"></div>
            </div>

            <div>
                <div id="caption"></div>
                <div class="cycle-pager"></div>
            </div>
        </div>

    </section>




    <section id="together"
        data-stellar-background-ratio="0.15"
    >
        <div class="dots">    
            <div class="quote">
                <div>Together we can build the next big thing.</div>
            </div>
        </div>

    </section>




    <section id="clients">
        
        <h2>Testimonials</h2>

        <hr />

        <div class="centered has-floats">

    <div class="testimonial">
        <div class="photo">
            <img src="/images/people/sandy.jpg" alt="" />
        </div>
        <div class="block">
            <div class="contact">
                <div class="name">
                    Sandy Corsillo                </div>
                <a href="http://linkedin.com/pub/sandy-corsillo/a/560/46" class="linkedin" target="_blank"></a>
            </div>
            <div class="title">
                Owner and President            </div>
            <div class="statement">
                If he can handle our ERP integration, he can handle anything.            </div>
        </div>
    </div>    <div class="testimonial">
        <div class="photo">
            <img src="/images/people/zach.jpg" alt="" />
        </div>
        <div class="block">
            <div class="contact">
                <div class="name">
                    Zachary Rosenberg                </div>
                <a href="http://linkedin.com/in/zachrosenberg" class="linkedin" target="_blank"></a>
            </div>
            <div class="title">
                Lead Software Engineer            </div>
            <div class="statement">
                I've been working with Will for a decade.  The SkyPHP platform has been a lifesaver.            </div>
        </div>
    </div>    <div class="testimonial">
        <div class="photo">
            <img src="/images/people/peter.jpg" alt="" />
        </div>
        <div class="block">
            <div class="contact">
                <div class="name">
                    Peter James Cryan                </div>
            </div>
            <div class="title">
                Founder and President            </div>
            <div class="statement">
                It's been a few years and I still get compliments on my website all the time.             </div>
        </div>
    </div>    <div class="testimonial">
        <div class="photo">
            <img src="/images/people/bauer.jpg" alt="" />
        </div>
        <div class="block">
            <div class="contact">
                <div class="name">
                    Michael Bauer                </div>
                <a href="http://linkedin.com/pub/michael-bauer/2/17a/120" class="linkedin" target="_blank"></a>
            </div>
            <div class="title">
                Executive Financial Officer            </div>
            <div class="statement">
                We don't call him "The Captain" for nothing. The Captain is the man!            </div>
        </div>
    </div>    <div class="testimonial">
        <div class="photo">
            <img src="/images/people/damian.jpg" alt="" />
        </div>
        <div class="block">
            <div class="contact">
                <div class="name">
                    Damian Sobrevilla                </div>
                <a href="http://linkedin.com/in/dsobrevilla" class="linkedin" target="_blank"></a>
            </div>
            <div class="title">
                Product Development Engineer            </div>
            <div class="statement">
                Gadget comes through for my start-up projects time and time again. Look no further.            </div>
        </div>
    </div>
        </div>

    </section>




    <section id="perfection"
        data-stellar-background-ratio="0.15"
    >
        <div class="dots">    

        </div>
    </section>





    <section id="contact">

        <h2>Contact Me</h2>

        <hr />

        <div class="centered">
        
            <div class="subtitle">
                I would love to hear from you.
            </div>

        </div>

        <div class="info">
            
            <ul>
                <li class="email">
                    <a href="mailto:&#119;&#105;&#108;&#108;&#49;&#50;&#51;&#49;&#57;&#53;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">&#119;&#105;&#108;&#108;&#49;&#50;&#51;&#49;&#57;&#53;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a></li>
                <li class="phone">+1 (856) 520-4054 mobile</li>
                <li class="address">
                    25 Washington Street<br />
                    Brooklyn, NY 11201
                </li>
            </ul>

        </div>


    </section>



	<section id="projects">
    	
    </section>
	<section id="contact">

        <h2>Contact Me</h2>
        <hr>
        <div class="centered">        
            <div class="subtitle">
                I would love to hear from you.
            </div>
        </div>
        <div class="info">            
            <ul>
                <li class="email">
                    <a href="mailto:zgr024@gmail.com">zgr024@gmail.com</a>
                </li>
                <li class="phone">+1 (856) 924-0869 mobile</li>
                <li class="address">
                    18 Palmwood Avenue<br/>
                    Cherry Hill, NJ 08003
                </li>
            </ul>
        </div>
        
    </section>
<?	
	$this->template('website','bottom');
?>