<?php

/*
 * Author: Zach Rosenberg
 * Website: http://zrosenberg.com
 * File: default.php
 * Version: 1.0
 * Usage: PHP file for default (home) page
 */

$this->js[] = '/lib/jquery.cycle2.js';
$this->js[] = '/lib/cycle2-ios6fix.js';
$this->js[] = '/lib/stellar.js/jquery.stellar.min.js';
$this->head[] = '
    <script type="text/javascript">
      (function() {
        var config = {
          kitId: "tkq0wwy",
          scriptTimeout: 3000
        };
        var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src="//use.typekit.net/"+config.kitId+".js";tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
      })();
    </script>
';

$this->title = 'Freelance Web Developer Tri-State Area (856) 924-0869';

$this->head[] = '
    <link rel="author" href="https://plus.google.com/+ZachRosenberg1"/>
    <link rel="publisher" href="https://business.google.com/b/101348015104789859028/dashboard/l/13365221207641287605/getstarted?hl=en&service=plus"/>
    <meta name="description" content="Freelance Full-Stack Web Developer Tri-State Area. I specialize in beautiful, high performance, and scalable websites & mobile apps."/>
    <meta name="keywords" content="websites, mobile, new jersey, philadelphia, new york, tri-state, apps, developer"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta property="og:title" content="Zach Rosenberg, Full-Stack Freelance Developer"/>
    <meta property="og:type" content="website"/>
    <meta property="og:img" content="http://zrosenberg.com/images/zach.jpg"/>
    <meta property="og:url" content="http://zrosenberg.com"/>
    <meta property="og:description" content="New Generation Website Develpment By Zach Rosenberg"/>
    <meta name="DC.language" CONTENT="EN">
    <meta name="DC.source" CONTENT="http://zrosenberg.com">
    <meta name="DC.title" CONTENT="Freelance Web Developer Tri-State Area 856-924-0869">
    <meta name="DC.keywords" CONTENT="websites, mobile, new jersey, philadelphia, new york, tri-state, apps, developer">
    <meta name="DC.subject" CONTENT="Website & Mobile App Development">
    <meta name="DC.description" CONTENT="Freelance Full-Stack Web Developer Tri-State Area. I specialize in beautiful, high performance, and scalable websites &amp; mobile apps.">

';

$this->viewport = 'width=500, initial-scale=1';

$this->template('html5', 'top');

?>
    <style type="text/css">
    #body {
        display: none;
    }
    </style>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-64215452-1', 'auto');
		ga('send', 'pageview');
	
	</script>

    <section id="home" data-stellar-background-ratio="0">
    
        <nav>
            <? include 'nav.php'; ?>
        </nav>

        <h1>I Create Premier Web &amp; Mobile Applications</h1>
        <h3 class=".tk-omnes-pro">I specialize in the design and development of custom web &amp; mobile applications.</h3>
        <h3>Dreams of all sizes are accepted, no job too large or small.</h3>

        <div class="learn-more">
            <a href="#about" class="button">Find Out More</a>
        </div>
    </section>
    



    <nav class="fixable">
        <? include 'nav.php'; ?>
    </nav>
    <div id="nav-placeholder" style="display:none;"></div>




    <section id="overview">
        <div class="centered">
            <div class="subtitle">
                Consultations available for all phases of your project.
            </div>
        </div>
    </section>




    <section id="about">
        
        <h2>About Me</h2>

        <hr />

        <div class="snapshot">
            <div class="headshot"></div>
            <div class="float-left">
                <div class="title">Chief Technology Officer | Technology Consultant</div>
                <div class="description">
                    I've created all types of software applications - from those that process millions of dollars -
                    to blog rolls, informational sites and advertising / lead generation platforms.
                    <br><br>
                    I recently served as the Technology Consultant for the Mortgage Bankers Association of Greater
                    Philadelphia and was also invited to become a member of the Forbes Technology Council.
                </div>
            </div>
        </div>

        <div id="skills">
            <fieldset>
                <legend>PHP</legend>
                <ul>
                    <li>MVC Patterns</li>
                    <li>Magento</li>
                    <li>Laravel</li>
                    <li>Symfony</li>
                    <li>Wordpress</li>
                    <li>PHPUnit</li>
                </ul>
            </fieldset>

            <fieldset>
                <legend>Javascript</legend>
                <ul>
                    <li>Angular</li>
                    <li>Backbone</li>
                    <li>jQuery</li>
                    <li>NodeJS</li>
                    <li>React</li>
                    <li>React Native</li>
                    <li>Socket.io</li>
                </ul>
            </fieldset>

            <fieldset>
                <legend>Linux Admin / DevOps</legend>
                <ul>
                    <li>AWS / Heroku</li>
                    <li>Apache / Nginx</li>
                    <li>MySQL / Maria / PostgreSQL / DB2 / Oracle</li>
                    <li>Memcached / Redis</li>
                    <li>MongoDB</li>
                    <li>Node.js</li>
                </ul>
            </fieldset>

            <fieldset class="misc">
                <legend>Misc</legend>
                <ul>
                    <li>SAAS</li>
                	<li>WHM / cPanel</li>
                    <li>Git / SVN</li>
                    <li>HTML5 / CSS3 / LESS / SASS</li>
                    <li>Java / Python</li>
                    <li>Responsive Design / Bootstrap 3.x</li>
                    <li>REST API / SOAP / OAuth</li>
                    <li>JSON / XML</li>
                    <li>SEO / Analytics / Reports</li>
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
                    <li>Time / Cost Estimates</li>
                    <li>UI / UX Wireframes</li>
                </ul>
            </fieldset>
        </div>

        <div class="also-on">
            <fieldset>
                <legend>I'm Also On</legend>
                <ul>
                    <li class="github">
                        <a href="https://github.com/zgr024" target="_blank">github.com/zgr024</a>
                    </li>
                    <li class="linkedin">
                        <a href="https://www.linkedin.com/in/zachary-rosenberg" target="_blank">linkedin.com/in/zachary-rosenberg</a>
                    </li>
                    <li class="stackoverflow">
                        <a href="http://stackoverflow.com/users/1704261/zgr024" target="_blank">stackoverflow.com/users/1704261/zgr024</a>
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
        
        <h2>Some of My Work</h2>

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

                    <img src="/images/screens/600/mw.png" 
                        alt="Mortgage Applications & Solutions for Webmax"
                        data-url="https://webmaxco.com"
                        />

                    <img src="/images/screens/600/hc.png"
                         alt="Marketing Websites for Hotwire Communications"
                         data-url="https://hotwirecommunications.com"
                    />

                    <img src="/images/screens/600/jb.png" 
                        alt="Ticket Sales Platform for Joonbug"
                        data-url="https://joonbug.com"
                        />

                    <img src="/images/screens/600/ct.png"
                         alt="Web Development for Crave Tickets"
                         data-url="https://cravetickets.com"
                    />

                    <img src="/images/screens/600/oe.png" 
                        alt="Custom Development for Ouija Entertainment"
                        data-url="https://ouijaentertainment.com"
                        />

                    <img src="/images/screens/600/nyec.png"
                        alt="Full-Stack Development for New Year's Eve Central" 
                        data-url="https://newyearsevecentral.com"
                        />

                    <img src="/images/screens/600/ma.png" 
                        alt="Online Payment Solution for Hotwire Communications"
                        data-url="https://gethotwired.com"
                        />

                    <img src="/images/screens/600/js.png"
                        alt="Mobile Responsive Website Design &amp; Development for Johnsen Service" 
                        data-url="https://johnsenservice.com"
                        />

                    <img src="/images/screens/600/ec.png" 
                        alt="HTML5 Parallax Investor Deck for E-coin" 
                        data-url="https://e-coin.com"
                        />

                    <img src="/images/screens/600/bc.png" 
                        alt="Web &amp; Mobile Development for Bar Crawls" 
                        data-url="https://barcrawls.com"
                        />

                    <img src="/images/screens/600/fs.png" 
                        alt="Full Screen Video Landing &amp; Single Page Scroll Navigation for Fision&reg; Stay by Hotwire" 
                        data-url="https://fisionstay.com"
                        />

                    <img src="/images/screens/600/fsm.png" 
                        alt="Web Development &amp Analytics for Flirt Skirt or Marry" 
                        data-url="https://flirtskirtormarry.com"
                        />

                    <img src="/images/screens/600/mfh.png"
                         alt="WordPress Site for My Friend's House Family Counseling Center"
                         data-url="https://mfhrecovery.com"
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

<?
        $testimonials = [
            [
                'Sandy Corsillo',
                '/images/people/sandy.jpg',
                'Owner and President',
                "If he can handle our ERP integration, he can handle anything.",
                'http://linkedin.com/pub/sandy-corsillo/a/560/46'
            ],
            [
                'William Schmid',
                '/images/people/will.jpg',
                'CTO &amp; Owner',
                "I've been working with Zach for over a decade. He has come through at crucial times.",
                'http://linkedin.com/in/willschmid'
            ],
            [
                'Abby (Ferko) Sonnett',
                '/images/people/abby.jpg',
                'Founder and President',
                "Zach is the best! He was a pleasure to work with and his expertise was greatly appreciated.",
                'https://www.linkedin.com/pub/abby-sonnett/38/487/b11'
            ],
            [
                'Tom Johnsen',
                '/images/people/tom.jpg',
                'Owner and President',
                "Zach is incredible when it comes to websites and seo. I've received tons of business from my site.",
                'https://www.linkedin.com/pub/tom-johnsen/25/218/606'
            ],
            [
                'Damian Sobrevilla',
                '/images/people/damian.jpg',
                'Product Development Engineer',
                "Zach comes through for my start-up projects time and time again. Look no further.",
                'http://linkedin.com/in/dsobrevilla'
            ]
        ];
        foreach ($testimonials as $t) {
            include 'testimonial.php';
        }
?>

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
                    <a target="_blank" href="mailto:<?=encode('zach@elementalappstudio.com')?>"><?=encode('zach@elementalappstudio.com')?></a></li>
                <li class="phone">+1 (856) 924-0869  mobile</li>
                <li class="address">
                    18 Palmwood Ave<br />
                    Cherry Hill, NJ 08003
                </li>
            </ul>

        </div>

    </section>

    <footer>
        
        <div>
            &copy; <?=date('Y')?> Zachary Rosenberg. All rights reserved.
        </div>

        <div>
            Made in Cherry Hill, NJ. 
        </div>

        <div>
            <br />
            View the code for this website on <a href="https://github.com/zgr024/portfolio" target="_blank">github</a>.
        </div>

        <div id="debug"></div>

    </footer>

<?

$this->template('html5', 'bottom');



