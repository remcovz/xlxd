<?php
/*
Possible values for IPModus

HideIP
ShowFullIP
ShowLast1ByteOfIP
ShowLast2ByteOfIP
ShowLast3ByteOfIP

*/

$Service     = array();
$CallingHome = array();
$PageOptions = array();
$VNStat      = array();

$PageOptions['ContactEmail']                         = 'remco@pa4tw.nl';		    // Support E-Mail address

$PageOptions['DashboardVersion']                     = '2.4.0';		// Dashboard Version

$PageOptions['PageRefreshActive']                    = true;		// Activate automatic refresh
$PageOptions['PageRefreshDelay']                     = '10000';		// Page refresh time in miliseconds

$PageOptions['RepeatersPage'] = array();
$PageOptions['RepeatersPage']['LimitTo']             = 99;		// Number of Repeaters to show
$PageOptions['RepeatersPage']['IPModus']             = 'ShowFullIP';	// See possible options above
$PageOptions['RepeatersPage']['MasqueradeCharacter'] = '*';		// Character used for  masquerade

$PageOptions['PeerPage'] = array();
$PageOptions['PeerPage']['LimitTo']                  = 99;		// Number of peers to show
$PageOptions['PeerPage']['IPModus']                  = 'ShowFullIP';	// See possible options above
$PageOptions['PeerPage']['MasqueradeCharacter']      = '*';		// Character used for  masquerade

$PageOptions['LastHeardPage']['LimitTo']             = 39;		// Number of stations to show

$PageOptions['ModuleNames'] = array();					// Module nomination
$PageOptions['ModuleNames']['A']                     = 'Int.';
$PageOptions['ModuleNames']['B']                     = 'Regional';
$PageOptions['ModuleNames']['C']                     = 'National';
$PageOptions['ModuleNames']['T']                     = 'Peanut testing';

$PageOptions['MetaDescription']                      = 'XLX is a D-Star Reflector System for Ham Radio Operators.';  // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaKeywords']                         = 'Ham Radio, D-Star, XReflector, XLX, XRF, DCS, REF, ';        // Meta Tag Values, usefull forSearch Engine
$PageOptions['MetaAuthor']                           = 'PA4TW';                                                      // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRevisit']                          = 'After 30 Days';                                              // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRobots']                           = 'index,follow';                                               // Meta Tag Values, usefull for Search Engine

$PageOptions['UserPage']['ShowFilter']               = true;								// Show Filter on Users page
$PageOptions['Traffic']['Show']                      = false;								// Enable vnstat traffic statistics

$PageOptions['CustomTXT']                            = 'Reachable over Hamnet only';                                    // custom text in your header
$Service['PIDFile']                                  = '/var/log/xlxd3.pid';
$Service['XMLFile']                                  = '/var/log/xlxd3.xml';

$CallingHome['Active']                               = true;					               // xlx phone home, true or false
$CallingHome['MyDashBoardURL']                       = 'http://pa4tw.nl/xlx087';			       // dashboard url
$CallingHome['ServerURL']                            = 'http://xlxapi.rlx.lu/api.php';         // database server, do not change !!!!
$CallingHome['PushDelay']                            = 600;  	                               // push delay in seconds
$CallingHome['Country']                              = "The Netherlands";                         // Country
$CallingHome['Comment']                              = "Hamnet facing reflector run by PA4TW. Located in Amsterdam, NL."; 				           // Comment. Max 100 character
$CallingHome['HashFile']                             = "/var/www/sites/ham.zuijlen.eu/tmp/callinghome-087.php";                 // Make sure the apache user has read and write permissions in this folder.
$CallingHome['OverrideIPAddress']                    = "44.137.36.209";                                     // Insert your IP address here. Leave blank for autodetection. No need to enter a fake address.
$CallingHome['InterlinkFile']                        = "/home/dextra/xlx087/xlxd/xlxd.interlink";                 // Path to interlink file

//VNStat['Interfaces']                                = array();
//$VNStat['Interfaces'][0]['Name']                     = 'eth0';
//$VNStat['Interfaces'][0]['Address']                  = 'eth0';
//$VNStat['Binary']                                    = '/usr/bin/vnstat';

/*   
include an extra config file for people who dont like to mess with shipped config.ing.php   
this makes updating dashboard from git a little bit easier   
*/   
 
if (file_exists("../config.inc.php")) {   
 include ("../config.inc.php");  
}   

?>
