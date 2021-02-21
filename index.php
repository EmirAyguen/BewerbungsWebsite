<?php

// declaration of global variables and configurations
 $author="Emir Aygün";
 $version="2021-02-20";
 $title="Beispielseite von " .$author ; 
 $headerTitle="Willkommen auf der Beispielseite"; 

 $naviElement1_link = "index.php";
 $naviElement2_link = "site2.php";
 $naviElement1_Text = "Hauptseite";
 $naviElement2_Text = "&Uuml;ber die Seite";

 $contentTitle="Der Zweck dieser Seite";
 $contentText="Diese Seite wurde erstellt, um zu pr&uuml;fen, dass der Bewerber: " .$author. " wirklich auch eine seite aufbauen/code schreiben kann.";
 $contentText2="Aufgrund der herrschenden Leere, hier ein kleines Programm/Spiel auf WebGL Basis, dass mittels Unity Engine und der Programmiersprache C# erstellt wurde. Ein Code Abschnitt dieses Spieles können sie unter '&Uuml;ber die Seite' sehen.";
 
 $tip = "bilder/tip.png";

 $footerText=" Made by ".$author." - Version: ".$version;
 $footerOn=false;
 
// declaration of functions / modules
 include("inc_tools.php");


 /*
 * creates a formular for the website
 * 
 * @author Emir Ayguen
 * @version 2021-02-20
 * @param -
 * @return -  
 */ 
 
// activity diagram (ad)
 
     createHeader($title,$headerTitle);
     createNavi($naviElement1_link,$naviElement1_Text,
					     $naviElement2_link,$naviElement2_Text);
    createContent($contentTitle,$contentText,$contentText2);
    createGame();
    displayGameTips($tip);
    createFooter($footerText,TRUE);
?>