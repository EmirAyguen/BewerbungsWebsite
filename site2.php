<?php

// declaration of global variables and configurations
 $author="Emir Ayg&uuml;n";
 $version="2021-02-20";
 $title="Beispielseite von " .$author ; 

 $headerTitle= '&Uuml;'."ber die Seite"; 

 $naviElement1_link = "index.php";
 $naviElement2_link = "site2.php";
 $naviElement1_Text = "Hauptseite";
 $naviElement2_Text = "&Uuml;ber die Seite";

 $SourceCodeLink = "sourceCode.php";
 $SourceCodeLink_text = "Sourcecode der Seiten";

 $contentTitle="&Uuml;ber die Seite";
 $contentText="Den Source Code, also auch den PHP teil der Seite sollten sie auch per E-mail erhalten haben, ansonsten k&ouml;nnen sie unten, den Link zum Source Code der Seite finden.";
 $contentText2="Hier ein Codeabschnitt vom Programm/Spiel. Beide der Codeabschnitte sind f&uuml;r die Erstellung bzw. Instandsetzung der Gegner zust&auml;ndigen Script entnommen";

 $bild1 ="bilder/1.png";
 $bild2 ="bilder/2.png";

 $footerText=" Made by ".$author." - Version: ".$version;
 $footerOn=false;
 
// declaration of functions / modules
 include("inc_tools.php");
 
 /*
 * creates a formular for the website
 * 
 * @author Emir Ayguen
 * @version 2021-02-21
 * @param -
 * @return -  
 */ 

 
// activity diagram (ad)
 
     createHeader($title,$headerTitle);
     
     createNavi($naviElement1_link,$naviElement1_Text,
					     $naviElement2_link,$naviElement2_Text);

    
    createContent($contentTitle,$contentText,$contentText2);
    
    createSourceCodeLink($SourceCodeLink, $SourceCodeLink_text);
                         
    DisplayScreenshots($bild1,$bild2);
    createFooter($footerText,TRUE);
?>