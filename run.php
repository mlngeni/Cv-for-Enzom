<?php


if (isset($_POST['yes'])) {
	
    shell_exec("python sendmail.py");
	echo "Thank you , I will be waiting to hear from you";
}

if (isset($_POST['no'])) {
	
    shell_exec("python sendmail2.py");
	echo "While I am disappointed that my experience wasn't quite what you are looking for in this position, I am still very interested in your company.

	    I would appreciate your further consideration should another position become available that you feel would be a better fit for my skills.";
}


if (isset($_POST['map'])) {
	shell_exec("python maps.py");
	echo "<a href='map.html'>View Map</a>";
	
}

echo "<hr><a href='index.php'>Go back</a>";

