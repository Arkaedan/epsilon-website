<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-12-05
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Epsilon Home page";
	$pageKeywords	= "";
	$pageAuthor		= "Dimitrios Kolovos";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	include('../news/scripts/news.php');
	$epsilonnews = get_epsilonnews(10);
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Middle part -->
	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="80%">
					<h1>$pageTitle</h1>
					<h3>Welcome</h3>
				      <p align="JUSTIFY">
						Epsilon is a metamodel-agnostic component for supporting model navigation, creation, and modification operations.<?="..."?>

<!--				      	The Epsilon component aims at building a framework for supporting the construction of domain-specific languages and tools for 
				      	model management tasks, i.e., model merging, model comparison, inter- and intra-model consistency checking, text generation, 
				      	etc. It will provide a metamodel-agnostic approach that supports model management tasks for any kind of metamodel and model 
				      	instances.
-->
				      	<br /><br />
				      	<a href="about.php">more about Epsilon &raquo;</a>, 
				      	<b><a href="cinema/">watch Flash demos &raquo;</a></b> 
				      	, <b><a href="http://epsilonblog.wordpress.com">read the Blog &raquo;</a></b> 
				      	
				      	     <form method="post" action="http://www.eclipseplugincentral.com/Web_Links.html">
						    <b>Rate Epsilon @ Eclipse Plugin Central!</b>
						    <select name="rating">
						    <option selected>--</option>
						    <option>10</option>
						    <option>9</option>
						    <option>8</option>
						    <option>7</option>
						    <option>6</option>
						    <option>5</option>
						    <option>4</option>
						    <option>3</option>
						    <option>2</option>
						    <option>1</option>
						    </select>
						    <input type="hidden" name="ratinglid" value="842">
						    <input type="hidden" name="ratinguser" value="outside">
						    <input type="hidden" name="req" value="addrating">
						    <input type="submit" value="Vote!">
						    </form>
						
										      	
				      	<br /><br />
				      </p>
		  		</td>
				<td align="right">
					<img align="right" src="resources/epsilonlogo.png" valign="top" alt="Epsilon Logo" />
				</td>
			</tr>
		</table>
		
		<hr/>
		
		<div class="homeitem">
			<h3>Quick Navigator</h3>
			<ul>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="news://news.eclipse.org/eclipse.modeling.gmt">Newsgroup</a></b>,
					            <a href="http://www.eclipse.org/search/search.cgi">Search</a>,
					            <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.modeling.gmt">Web Interface</a>
		  					</td>
							<td align="right">
								<a href="news://news.eclipse.org/eclipse.modeling.gmt"><img align="right" src="../resources/images/news.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="doc/">Documentation</a></b>
		  					</td>
							<td align="right">
								<a href="doc/"><img align="right" src="../resources/images/reference.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>

				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<div>
									<b><a href="cinema/">Cinema (Flash demos)</a></b>
								</div>
		  					</td>
							<td align="right">
								<a href="cinema/"><img align="right" src="images/cinema.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<div>
									<b><a href="doc/examples.php">Examples</a></b>
								</div>
		  					</td>
							<td align="right">
								<a href="doc/examples.php"><img align="right" src="../resources/images/reference.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<div>
									<b><a href="http://epsilonblog.wordpress.com">Blog</a></b><img align="left" src="../resources/images/new.gif" valign="top"/>
								</div>
		  					</td>
							<td align="right">
								<a href="http://epsilonblog.wordpress.com"><img align="right" src="images/wordpress.png" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="download.php">Download</a></b>
		  					</td>
							<td align="right">
								<a href="download.php"><img align="right" src="../resources/images/download.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>

				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.gmt/epsilon/?root=Technology_Project">CVS</a></b>
		  					</td>
							<td align="right">
								<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.gmt/epsilon/?root=Technology_Project"><img align="right" src="../resources/images/cvs.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>

				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="contributors.php">Contributors</a></b>
		  					</td>
							<td align="right">
								<a href="contributors.php"><img align="right" src="images/contributors.png" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				
				<li>
					<table width="100%">
						<tr>
							<td width="100%" valign="bottom">
								<a href="http://www4.clustrmaps.com/user/50849c1d"><img src="http://www4.clustrmaps.com/stats/maps-no_clusters/www.eclipse.org-gmt-epsilon-thumb.jpg" />
								</a>							
							</td>
						</tr>
					</table>
				</li>
				<!--
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="previews.php">Previews</a></b>
		  					</td>
							<td align="right">
								<a href="previews.php"><img align="right" src="images/comingup.png" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				-->							
			</ul>
		</div>
		
		<div class="homeitem">
			$epsilonnews
		</div>
		<hr class="clearer" />
	</div>
	

	
	<!-- Right Part -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting Started</h6>
			<ul>
				<li><a href="about.php">Project description</a></li>
				<li><a href="doc/">Documentation</a></li>
			</ul>
		</div>

	</div>

	<!-- Start of StatCounter Code -->
	<script type="text/javascript" language="javascript">
	var sc_project=2185757; 
	var sc_invisible=1; 
	var sc_partition=5; 
	var sc_security="2d5ff082"; 
	</script>
	
	<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c6.statcounter.com/counter.php?sc_project=2185757&java=0&security=2d5ff082&invisible=1" alt="free web hit counter" border="0"></a> </noscript>
	<!-- End of StatCounter Code -->

	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	_uacct = "UA-1498421-2";
	urchinTracker();
	</script>

EOHTML;


	# Generate the web page
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='Epsilon News' href='news/epsilonNewsArchive.rss'>");
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>