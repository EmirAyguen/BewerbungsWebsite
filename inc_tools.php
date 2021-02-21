 <?php
 // Funktionen der INC_TOOLS Datei

/*
 *
 * @author Emir Ayguen
 * @version 2021-02-20
 * @param -
 * @return -  
 */ 
 function createHeader($title,$headerTitle)
 {
	 echo '<!DOCTYPE html>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="mystyle.css"/>
				<meta charset="utf-8">
				<title>';
	echo $title;
	echo '</title>
		</head>
	
		<body>
		';
	 echo '	<div class="header">';	
	 echo '		<div class="headerTitle">';
	 echo $headerTitle;
	 echo '		</div>'; 	
	 echo ' </div>'; 	
	
 }
  
 function createNavi($naviElement1_link,$naviElement1_Text,
					 $naviElement2_link,$naviElement2_Text)
 {
	echo '<div class="navi">';
	
	echo '<nav>
			<ul>
				<li class="naviElement">';
	echo ' 			<a href="'.$naviElement1_link.'">';
						echo $naviElement1_Text.'</a>';
	
	echo '			</li>
				<li class="naviElement">';
	echo ' 			<a href="'.$naviElement2_link.'">';
						echo $naviElement2_Text.'</a>';
	
	echo '			</li>
			</ul>
		  </nav>
		  ';
	
	echo '</div>'; 	
 }
 
 function createContent($contentTitle,$contentText,$contentText2)
 {
	 echo '<div class="content">'; 
	 
	 echo '	<div class="contentTitle">';
	 echo $contentTitle;
	 echo ' </div>'; 	 
	 
	 echo '	<div class="contentText">';
	 echo $contentText;

	 echo '	<div class="contentText2">';
	 echo $contentText2;

	 echo ' </div>'; 
	 echo '</div>'; 	 
	 echo '</div>';
 }


 
 function createSourceCodeLink($SourceCodeLink, $SourceCodeLink_text)
 {
    echo '<div class="Sourcecode">';
	echo '<a href="'.$SourceCodeLink.'">';
	echo $SourceCodeLink_text.'</a>';
	echo '</div>'; 
 }

 function createGame()
 {
	echo '<iframe src="game/index.html" style="border:0px #000000 none;" name="Legless Shooter" scrolling="no" frameborder="1" marginheight="px" marginwidth="320px" height="735px" width="1024px"></iframe>';
 }

 function DisplayScreenshots($bild1,$bild2)
 {
	echo'<div>
		<img scr="'.$bild1.'" alt="Screenshot 1">
		<img scr="'.$bild2.'" alt="Screenshot 1">
	</div>';
 }

 function displayGameTips($tip)
 {
 	 echo'<div>
		<img scr="'.$tip.'" alt="Screenshot 1">
	</div>';
 }


 function createFooter($footerText)
 {
	echo '<div class="footer">';
	echo '	<div class="footerText">';
	 echo $footerText;
	 echo ' </div>'; 	
	echo '</div>'; 
	echo '
		</body>
	</html>';
		
 }

 
 function createForm()
 {
 /*
	echo '<div class="form">';
	echo '<form action="button_gedrueckt.php" method="GET">
	<table border="0">
	 <tr> 
		<td> 
			<input type="Submit" 
				name="bpress" 
				value="Dr&uuml;ck mich!"/>
		</td>
	 </tr>
	</table>
</form>';
	echo '</div>'; 	
	*/
 }
  //Ende Funktionen der INC_TOOLS Datei
?>