<?php require('includes/config.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Project Part Two</title>
    <!-- for the carousel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- everything else -->
    <link rel="stylesheet" href="CSS/index.css">
  </head>
  <body>
    <div id="content">
      <div>
      <nav id="navBar" class="navBar">
        <a class="nameTag">
          Timothy Kang
        </a>
        <ul>
          <li>
            <a onClick="return home();">Home</a>
          </li>
          <li>
            <a href="timothy_kang_resume.pdf" target="_blank">Resume</a>
          </li>
          <li>
            <a onClick="return workExp();">Work Experience</a>
          </li>
          <li>
            <a onClick="return contact();">Contact</a>
          </li>
          <li>
            <a onClick="return blog();">Blog</a>
          </li>
        </ul>
      </nav>
    </div>
     <div class="contentBackground">
       <div class="container">
         <br>
         <br>
         <br>
         <div id="homeCard" class="homeCard">
           <div>
             Timothy Kang
           </div>
           <div>
             Computer Engineer from the University of Pittsburgh
           </div>
           <div>
             <h2>
               A Little About Me
             </h2>
             <div>
               <p>
                 Hello! Welcome to my personal website! This is <br>
                 mainly professional though I would like to devote<br>
                 the homepage about Timothy Kang, the person.
               </p>
               <div>
                 <!-- carousel since it was recommended -->
                 <div id="runPics" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                     <li data-target="#runPics" data-slide-to="0" class="active"></li>
                     <li data-target="#runPics" data-slide-to="1"></li>
                     <li data-target="#runPics" data-slide-to="2"></li>
                     <li data-target="#runPics" data-slide-to="3"></li>
                   </ol>
                   <div class="carousel-inner" role="listbox">
                     <div class="item active">
                       <img src="Images/runPicture.jpg">
                     </div>
                     <div class="item">
                       <img src="Images/run2.jpg">
                     </div>
                     <div class="item">
                       <img src="Images/tough.jpg">
                     </div>
                     <div class="item">
                       <img src="Images/award.jpg">
                     </div>
                   </div>
                   <!-- controls -->
                   <a class="left carousel-control" href="#runPics" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                   <a class="right carousel-control" href="#runPics" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                   </a>
                 </div>
               </div>
               <p>
                 I am an avid runner. I ran cross country and track<br>
                 through my entire high school career. I continued<br>
                 running to keep up my endurance and fitness level.<br>
                 I do believe exercise will lead to a better and <br>
                 happy life.
               </p>
               <div>
                 <!-- carousel since it was recommended -->
                 <div id="hobbyPics" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                     <li data-target="#hobbyPics" data-slide-to="0" class="active"></li>
                     <li data-target="#hobbyPics" data-slide-to="1"></li>
                     <li data-target="#hobbyPics" data-slide-to="2"></li>
                   </ol>
                   <div class="carousel-inner" role="listbox">
                     <div class="item active">
                       <img src="Images/ski.jpg">
                     </div>
                     <div class="item">
                       <img src="Images/union.png">
                     </div>
                     <div class="item">
                       <img src="Images/longboard.jpg">
                     </div>
                   </div>
                   <!-- controls -->
                   <a class="left carousel-control" href="#hobbyPics" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                   <a class="right carousel-control" href="#hobbyPics" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                   </a>
                 </div>
               </div>
               <p>
                 I like to maintain my activity through hobbies<br>
                 such as skiing. I also like to longboard, sliding<br>
                 down hills seems like a common activity. Aside<br>
                 from that, I love to play soccer and watch<br>
                 Philadelphia in MLS.
               </p>
               <div>
                 <!-- carousel since it was recommended -->
                 <div id="musicPics" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                     <li data-target="#musicPics" data-slide-to="0" class="active"></li>
                     <li data-target="#musicPics" data-slide-to="1"></li>
                     <li data-target="#musicPics" data-slide-to="2"></li>
                   </ol>
                   <div class="carousel-inner" role="listbox">
                     <div class="item active">
                       <img src="Images/music.jpg">
                     </div>
                     <div class="item">
                       <img src="Images/arctic.jpg">
                     </div>
                     <div class="item">
                       <img src="Images/keys.jpg">
                     </div>
                   </div>
                   <!-- controls -->
                   <a class="left carousel-control" href="#musicPics" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                   <a class="right carousel-control" href="#musicPics" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                   </a>
                 </div>
               </div>
               <p>
                 I also love to play music. I play many instruments<br>
                 from bass guitar to piano. Sometimes I love just<br>
                 listening to tunes. My favorite bands have to be <br>
                 Arctic Monkey and The Black Keys.
               </p>
             </div>
           </div>
         </div>
         <div id="workExp" class="workExp">
           <div>
             <br>
             <br>
             <h2 class="pageTitle">
               Work Experience
             </h2>
             <div class="pageContent">
               <img src="Images/lockheed.jpg">
               <div>
                 <p>
                   Position: Intern (May 2016 to August 2016)<br>
                   Worked on the EADGE-T project alongside 8 other teammates.<br>
                   Used HTML, CSS, Angular, Javascript to code<br>
                   Software developed in SCRUM environment
                 </p>
               </div>
               <img src="Images/pitt-logo.png">
               <div>
                 <p>
                   Undergraduate (Graduation: May 2017)<br>
                   Major: Computer Engineering<br>
                   Learned to code using:
                   <ul>
                     <li>
                       Java
                     </li>
                     <li>
                       C
                     </li>
                     <li>
                       Html, Css, Javascript
                     </li>
                     <li>
                       Python
                     </li>
                   </ul>
                 </p>
                 <br>
               </div>
             </div>
           </div>
         </div>
         <div id="contactInfo" class="contactInfo">
           <div>
             <br>
             <br>
             <br>
             <h2 class="pageTitle">Contact Information</h2>
             <div>
               <div class="contacts">
                 Email: timothykang8@gmail.com
                 <br>
                 <br>
                 <a href="https://www.linkedin.com/in/timothy-kang-362412b3?trk=hp-identity-name" target="_blank">Linked In (Click Here)</a>
                 <br>
                 <br>
                 <b>Contact Me From This Page</b>
                 <br>
                 <br>
                 <form>
                   Enter your email:
                   <br>
                   <input type="text">
                   <br>
                   Subject:
                   <br>
                   <input type="text">
                   <br>
                   Message:
                   <br>
                   <textArea rows="4" cols="40"></textArea>
                   <br>
                   <button type="button">Send</button>
                 </form>
                 <br>
                 <br>
               </div>
             </div>
             <br>
             <br>
           </div>
         </div>
         <div id="blog" class="blog">
            <div>
              <br>
              <br>
              <h2 class="pageTitle">Personal Blog</h2>
              <div>
                <div class="blogPosts">
					<div>
                    <?php
                        try {

                            $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                            while($row = $stmt->fetch()){

                                echo '<div>';
                                    echo '<h1>'.$row['postTitle'].'</h1>';
                                    echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                                    echo '<p>'.$row['postDesc'].'</p>';
                                echo '</div>';

                            }

                        } catch(PDOException $e) {
                            echo $e->getMessage();
                        }
                    ?>
					</div>
                </div>
                <br>
                <br>
              </div>
            </div>
         </div>
       </div>
       <footer>
         <div id="pageFooter" class="footer">
           Website<br>
             of<br>
             Timothy Kang
         </div>
       </footer>
     </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script src="JS/index.js" type="text/javascript"></script>
  </body>
</html>