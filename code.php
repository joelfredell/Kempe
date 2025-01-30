<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<link rel="icon" 
      type="image/png" 
      href="../images/logos/kempe.png">-->
      
<meta name="Description" content="A documentary edition of The Book of Margery Kempe and the the early print pamphlet by Wynkyn de Worde made up of extracts from The Book of Margery Kempe.  Both facsimiles and transcriptions are fully available.">

<meta name="Keywords" content="Margery Kempe, The Book of Margery Kempe, Wynkyn de Worde">

<meta name="Editor" content="Joel Fredell">

<title>The Book of Margery Kempe</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
  <div id="header"></div>
  <?php include("content-left.inc.php"); ?>
  <div id="content-right-expanded">
	<span class="heading-2">Code Samples</span>
    <hr/>
    <p>See below for samples of the CSS, HTML, and XML code used in <em>The Book of Margery Kempe</em>.</p>
    <br/>
    <p class="heading-2">CSS</p>
    <span class="heading-3">@font-face Rule (for Embedding Fonts within Web Pages)</span>
    <hr/>
	<p>With a manuscript with as many &quot;special characters&quot; and abbreviations as <em>The Book of Margery Kempe</em>, &quot;font&#x2010;embedding&quot; is all but imperative. Accordingly, one of the first challenges to be tackled by our project team was font&#x2010;embedding&#x2014;that is a mechanism through which a specialized font used in the construction of a Web page is provided automatically, invisibly, and directly to visitors' Web browsers so that the text on that page renders completely. To that end, our team, after selecting a font suitable for our project, worked to adapt the <em>@font-face</em> cascading style sheet (CSS) rule syntactically for support by the five major Web browsers.</p>
	<p>The result is seen the code below, which has been tested extensively and confirmed to work in Chrome, Firefox, Internet Explorer, Opera, and Safari. For ease of reference, it has been color&#x2010;coded on this page to match the colors used by popoular Web design software in validating CSS. Accordingly, should you wish to copy the code for use as a model in your own project, you should do so directly from this page and not from this page's source, which is written in <em>HTML</em>.</p>
    <p>Should you choose to use the code as a model in your own project, we ask only that, as a courtesy (both to us and to others who might encounter the code), you not remove the first two lines, which specify its origin and required syntax.</p>
    <p>To learn more about the Andron Scriptor Web font embedded by our project and referenced below, click <a href="software.php" target="_blank">here</a>.</p>
    <p>To learn more about why this project embeds fonts, click <a href="special_characters/embedded.php" target="_blank">here</a>.</p>
    <br/>
    <div class="block_text-indentedx2">
    	<span class="body-gray">/* @font-face rule syntax courtesy Charles W. Borchers, IV/Southeastern Louisiana University (http://english.selu.edu/humanitiesonline/kempe). */
	    <br/>
	    /* Cross-browser support REQUIRES that 1) the style sheet containing the @font-face rule(s), 2) the font(s) referenced by the rule(s), and 3) the Web page(s) that will use them share the SAME folder. */</span>
    	<br/>
	    <span class="body-pink">@font-face {</span>
    	<br/>
	    font-family<span class="body-pink">:</span> <span class="body-blue">Andron</span><span class="body-pink">;</span>
    	<br/>
	    src<span class="body-pink">:</span> <span class="body-blue">url(</span><span class="body-green">'andron_scriptor_web_3_1.eot'</span><span class="body-blue">)</span><span class="body-pink">;</span> <span class="body-gray">/* Embedded Font Type REQUIRED by IE8 */</span>
    	<br/>
	    <span class="body-pink">}</span>
    	<br/>
	    <span class="body-pink">@font-face {</span>
    	<br/>
	    font-family<span class="body-pink">:</span> <span class="body-blue">Andron</span><span class="body-pink">;</span>
    	<br/>
	    src<span class="body-pink">:</span> <span class="body-blue">url(</span><span class="body-green">'andron_scriptor_web_3_1.woff'</span><span class="body-blue">)</span><span class="body-pink">;</span> <span class="body-gray">/* Embedded Font Type Used by Other Browsers */</span>
   		<br/>
	    <span class="body-pink">}</span>
		<br/>
	    <span class="body-pink">.medieval {</span>
    	<br/>
	    font-family<span class="body-pink">:</span> <span class="body-blue">Andron</span><span class="body-pink">;</span>
    	<br/>
    	<span class="body-pink">}</span>
    </div>
  </div>
  <div id="footer"></div>
  <div id="affiliates"><a href="http://www.southeastern.edu"><img src="images/logos/CCLogo.jpg" width="96" height="62" longdesc="http://creativecommons.org/publicdomain/" /><img src="images/logos/southeastern.jpg" alt="Southeastern Logo" width="47" height="60" border="0" /></a>&nbsp;<a href="http://www.bl.uk/"><img src="images/logos/BL_From the collections of.jpg" alt="British Library Mark" width="83" height="60" border="0" /></a></div>
</div>
</body>
</html>
