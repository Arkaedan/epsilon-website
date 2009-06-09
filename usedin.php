<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2006-05-29
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Used in...";
	$pageKeywords	= "";
	$pageAuthor		= "Dimitrios Kolovos";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<!-- Main part -->
	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="50%">
					<h1>$pageTitle</h1>
				</td>
				<td align="right">
					<img alt="Epsilon Logo" src="resources/epsilonlogo.png" valign="top" />
				</td>
			</tr>
		</table>
		
		In order to provide first-time visitors with a quick overview of the places/projects
		where Epsilon is used, we have assembled a respective list,
		using evidence provided in respective posts in the eclipse.epsilon newsgroup,
		and through personal communication. So, for each organization/project that appears
		in the list, to the best of our knowledge, at least one person there uses 
		some aspect(s) of Epsilon for research or development purposes. Of course, this does <b>not</b> imply 
		that the organization/project itself as a whole endorses Epsilon in any way.</p>
		
		<p>If you are using Epsilon and you would like your organization/project to be added to 
		the list of users, please let us know
		through the newsgroup. Similarly, if your organization/project is 
		currently in the list of users and you would like it to be removed 
		(e.g. Epsilon is not used there any more, or you simply just don't want it to be on the list) 
		please also let us know (through the newsgroup or in private) and we will see to your
		request as soon as possible.
		
		<hr class="clearer" />

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>