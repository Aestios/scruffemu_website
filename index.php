<?php
session_start();
require_once('modules/configuration/database.php'); 
require_once('modules/configuration/config.php');
require_once('modules/fonctions/get.php');
require_once('modules/fonctions/guilds.php');
include('modules/includes/header.php');



						if(isset($_GET['p'])) {
						if(!isset($pages)) {
							$tPage = 'pages/'.$_GET['p'].'.php';
							switch($_GET['p']) {
								default:
									$ALLOW_ACCESS = FALSE;
									break;
									case "checkvote":
									case "connection":
								case "404":
								case "home":
								case "deletespells":
								case "addspells":
								case "register":
								case "join":
								case "connexion":
								case "vote":
								case "classements":
								case "staff":
								case "logout":
								case "guilds":
								case "change_pass": 
								case "delete_c":
								case "persos":
								case "buy":
								case "my_tickets":
								case "tickets":
								case "faq":
								case "deleteitems":
								case "implantcac":
								case "shop":
								case "drops":
								case "search":
									$ALLOW_ACCESS = TRUE;
									break;
							}
														
							$pSyst = explode("p=", $_SERVER['REQUEST_URI']);
							if(count($pSyst) <= 2) {					
								if(file_exists($tPage) AND $ALLOW_ACCESS) {
									include($tPage);
									
								} else {
									include('pages/404.php');
								
								}
							} else {
								include('pages/404.php');
								
							}
						} else {
								echo $pages;
						}
						} else {
							include('pages/home.php');
						}	
include('modules/includes/footer.php');
			

