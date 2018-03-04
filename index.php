<!DOCTYPE html>
<html>
<head>
  <title>Resume</title>
  <link rel="stylesheet" type="text/css" href="style.css">

    <script >function hideloader(){
             document.getElementById("loading").style.display = "none";
            }
</script>

</head>


<body onload="hideloader()">
     <div id="loading"></div>
     
<div>
<nav class="links">
    <label for="rd_skills">skills</label>
    <label for="rd_contact">contact</label>
    <label for="rd_about">about</label>

    
    
</nav>

</div>


<div class="scroll">

<input type="radio" name="grupo" id="rd_about" checked="true">
<input type="radio" name="grupo" id="rd_contact" checked="true">
<input type="radio" name="grupo" id="rd_skills" checked="true">



<section class="sections">
	<section class="bloco" id="skills">
		
		
		<div class="container-1">
          
      <div class="box-1">

     
    <h2>Techincal and soft skills</h2>

    <img src="img/code.png" width="50px" height="50px">
           
           <br>
           <label>Languages:</label>
           <br><br>
           <ol>
           	<li>HTML</li>
           	<li>Css (flexbox and css grid)</li>
           	<li>Javascript</li>
           	<li>PhP</li>
           	<li>Python</li>
           </ol>
            
            <br><hr><br>
           <label>Frameworks Libraries:</label>
           <br><br>
           <ol>
            <li>Laravel</li>
            <li>Django</li>
            <li>Angularjs</li>
            <li>jquery</li>
            <li>Bootstrap</li>
            <li>Python</li>
           </ol>

           <br><hr><br>
           <label>Concepts and design patterns:</label>
           <br><br>
           <ol>
            <li>OOP (object oriented programming)</li>
            <li>MVC (model view controller)</li>
            <li>MTV (model template view)</li>
           </ol>
      </div>

      <div class="box-2">
        <h2>Soft Skills</h2>
        <img src="img/soft.png" height="50px" width="50px">
        <br><br>
        <ol>
          <li>Team work</li>
          <li>Critical and Creative Thinking</li>
          <li>Eager to learn new technologies</li>
          <li>Adaptability</li>
          <li>Communocation </li>
        </ol>
        <br>
        <a href="short.html">Click here for the short html version</a>
      </div>


      <div class="box-3">
          <h2>Github</h2> 
          <img src="img/github.png" width="50px" height="50px">

         <br><br>

         <p>To check out some of my repos on github click</p>
         <a target="_blank" href="https://github.com/mlngeni/">Github page</a>

         <br><br>
         <p>Please keep in mind that these github projects are not all I can create. I can also create other projects like a shoppinng cart, a
         url shortner, a like system, a booking system, a comment section, notifications and many other</p>
          
        
      </div>
    </div>



	</section>
	<section class="bloco" id="contact">
   
      <div class="container-2">
        <div class="container-2-box">
        <h3>Contact Information</h3>
        <br><hr><br>

        <p>Phone Number : +20 01018065656</p>
        <br><br>

        <p>Email Adress1 : mst.amd2@gmail.com</p>
        <br><br>

        <p>Email Adress2 : mst.amd@yahoo.com</p>
        <br><br>
      </div>

    


      <div class="container-2-box">
         
         <div class="choice">
          <h3>Email Me</h3>
          <br>
          
          <p>This is a small very simple script that will send me an email regarding your initial opinion about me choose yes to send an email that says 'Enzom liked your cv and will contact you soon' or no to send an email that says 'Enzom did not liked your cv. All this is done by using python and a dummy eamil address I know this is not the iddeal way to send an email but I chose this way for simplicity and since its not a real application. I tested it and it worked fine</p>
             <br>
          
            <form action="run.php" method="POST">
             <button class="button1" type="submit" name="yes">Yes</button>
             <button class="button2" type="submit" name="no">No</button>
            </form>
            
            <button></button>

          </div>
        
      </div>


   
 </div>
  </section>


	<section class="bloco" id="about">
   
   <div class="container-3-box">
         
          <h1>Some Information about me</h1>
          <br>

          <p>My name is Mostafa ahmed Mohamed .I am Located in alexandria, Egypt . I made this resume specific for this job application I hope you like it it is a little bit responsive 

           I am always pursuing new trends and technologies and I am currently learning C#, Angular 2 and mongo DB

          Also I intend to learn even more languages and skills in the future because in this field those who don't improve themselves 
          and there skills will be left behind</p>
          <br>
         <form method="POST" action="run.php">
         <label>Make a simple map of alex using python and view it as html by clicking </label>
         <button class="button3" type="submit" name="map">Map</button>
         </form>
      </div>

  </section>





</div>











   </body>
</html>