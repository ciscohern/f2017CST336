<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>

        <meta charset="utf-8"/>
        <title>
            Juan Doe: Personal Website
        </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    
    <body>
        <header>
            <h1>
                Juan Doe
            </h1>
        </header>
        <nav>
            <hr width"75%"/>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        <br /><br />
        
       <div id="content">
           <table>
               <tr id="table-header">
                   <td><strong>Programming Language</strong></td>
                   <td><strong>Years Experience</strong></td>
               </tr>
               <tr class="table-row">
                   <td>Java</td>
                   <td>3</td>
               </tr>
               <tr class="table-row">
                   <td>C++</td>
                   <td>2</td>
               </tr>
               <tr class="table-row">
                   <td>PHP</td>
                   <td>1</td>
               </tr>
           </table>
           <ul>
               <li><span class="hobby">Video games</span></span>: I own four consoles and like all kind of games but my favorite is The Legend of Zelda</li>
               <li><span class="hobby">Soccer</span>: I am part of a team and we play every Saturday. I'm the goalie</li>
               <li><span class="hobby">Music</span>: I love all kind of music but my favorite is R&B and Pop</li>
               <li><span class="hobby">Programming</span>: I spend at least two hours every day using and learning programming languages</li>
                 
           </ul>
       </div>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            Course Name. 2017&copy; Your Last Name <br />
            <strong>
                Disclaimer:
            </strong>
            The information in this webpage is fictous.
            <br />
            It is used for academic purposes only.
            
            
        </footer>
        <!-- closing footer -->
        <img src="img/csumb.jpg" alt="CSUMB" height="50" width="100" />
        
        
    </body>
    <!-- closing body -->

</html>