<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!--
<link rel="icon" 
	type="image/png" 
	href="images/showcase.png">
-->
<title>Now Showcasing: The Book of Margery Kempe</title>
<link href="witness_styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

// Optimize for Mobile Devices //
$(document).ready(function(){
	var width = $(window).width();
	if (width < 641){
		$("#navbar").css({"height":"30px", "overflow-x":"auto", "overflow-y":"hidden", "white-space":"nowrap"});	
		$("[src*='images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='images/navbar/navbar.jpg']").css({"height":"22", "width":"300"});
		$("#first_button").css("margin-left", "68px");
		$(".navbar-navigation").css({"height":"30px", "width":"165px"});
		$(".navbar-location").css({"font-size":"12pt", "height":"21px", "margin-top":"4px", "margin-left":"12px", "margin-right":"12px", "width":"60px"});
		$("#navbar-facs").css({"border":"none", "height":"100%", "left":"50%", "top":"31px", "width":"100%", "z-index":"4"});
		$("#toggle-view").css("margin-left", "30px");
		$("#toggle-scribe").css("margin-left", "30px");
		$("#navbar-folio, #navbar-magnify, #navbar-enlarge, #navbar-scribe, #navbar-info").css({"border":"none", "height":"100%", "left":"0px", "opacity":"0.93", "position":"fixed", "top":"31px", "width":"100%"});
		$(".navbar-folio-text").css({"font-size":"12pt", "line-height":"21px", "padding-left":"15px", "padding-top":"15px"});
		$(".shortcut").css({"font-size":"12pt", "line-height":"21px", "padding-left":"15px", "width":"55px"});
		$("#facs_preview, #facs").css({"height":"905", "top":"31px"});
		$(".navbar-magnify-text, .navbar-enlarge-text, .navbar-scribe-text").css({"font-size":"12pt", "line-height":"21px", "padding-left":"15px", "padding-bottom":"60px", "padding-top":"15px"});
		$("#12pt").css("color", "#FFF");
		$("#8pt").css("color", "#09C");
		$("#vss").show();
		$("#x0").css("color","#09C");
		$("#x1").css("color","#FFF");
		$("#toggle-info, #toggle-info_ro").css({"float":"none", "margin-left":"30px"});
		//$("body").css("font-weight", "normal");
		$(".medieval").css({"line-height":"8pt", "font-size":"8pt", "-moz-text-size-adjust":"100%", "-ms-text-size-adjust":"100%", "-webkit-text-size-adjust":"100%"});
	}
	else if(/Android|BlackBerry|CriOS|IEMobile|iPad|iPhone|iPod|Opera Mini|Opera Mobi|Mobile|Tablet|Touch/i.test(navigator.userAgent)){
		$("#navbar").css("height", "30px");
		$("[src*='images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='images/navbar/navbar.jpg']").css({"width":"600", "height":"44"});
		$(".navbar-folio-text, .navbar-magnify-text, .navbar-enlarge-text, .navbar-scribe-text, .shortcut").css({"font-size":"10pt", "line-height":"20px"});
		$("#navbar-tab").css({"height":"18px", "width":"36px"});
		$("#toggle-navbar").css({"height":"15px", "width":"30px"});
		$("#first_button").css("margin-left", "68px");
		$(".navbar-navigation").css({"height":"30px", "width":"165px"});
		$(".navbar-location").css({"font-size":"12pt", "height":"21px", "margin-top":"4px", "margin-left":"12px", "margin-right":"12px", "width":"60px"});
		$("#navbar-folio").css({"left":"162px", "top":"30px", "width":"150px"});
		$("#navbar-facs").css({"left":"296px", "top":"30px"});
		$("#toggle-view").css("margin-left", "30px");
		$("#navbar-magnify").css({"left":"390px", "top":"30px"});
		$("#navbar-enlarge").css({"left":"429px", "top":"30px"});
		$("#toggle-scribe").css("margin-left", "30px");
		$("#navbar-scribe").css({"left":"498px", "top":"30px"});
	}
});

// Preload 1 r //
$(document).ready(function(){
	$("#facs").load(function(){
		$("#facs_preview").hide();
		$("#facs").show();
	});
});
// Toggle NavBar //
$(document).ready(function(){
    $("#navbar-tab").toggle(function(){
		$("#toggle-navbar").attr("src", "images/navbar/tab.jpg");
		$("#navbar").slideUp("fast");
		$("#content").css("padding-bottom", "0px");
		},function(){
		$("#toggle-navbar").attr("src", "images/navbar/tab_ro.jpg");
		$("#navbar").slideDown("fast");
		$("#content").css("padding-bottom", "21px");
	});
});


// Experimental Hover Functions //
//$(document).ready(function(){
    //$("#navbar").click(function(){
		//$(".navbar-location").hover(function(){									
			//$("#navbar-magnify").hide();
			//$("#navbar-enlarge").hide();
			//$("#navbar-scribe").hide();
			//$("#navbar-folio").show();
		//});
		//$("#toggle-magnify").hover(function(){										
			//$("#navbar-folio").hide();
			//$("#navbar-enlarge").hide();
			//$("#navbar-scribe").hide();
			//$("#navbar-magnify").show();
		//});
		//$("#toggle-enlarge").hover(function(){										
			//$("#navbar-folio").hide();
			//$("#navbar-magnify").hide();
			//$("#navbar-scribe").hide();
			//$("#navbar-enlarge").show();
		//});
		//$("#toggle-scribe").hover(function(){										
			//$("#navbar-folio").hide();
			//$("#navbar-magnify").hide();
			//$("#navbar-enlarge").hide();
			//$("#navbar-scribe").show();
		//});
	//});
//});


// Toggle Folio Drop-down //
$(document).ready(function(){
    $(".navbar-location").click(function(){
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-scribe").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-folio").toggle();
    });
});
// Select Front Binding //
$(document).ready(function(){
	$("#navbar-fbdg, #first_button, #previous-fpd").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-fbdg").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-fbdg").show();
		$(".folio").hide();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/front_binding_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/front_binding.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Front Binding //
$(document).ready(function(){
	$("#navbar-fbdg").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/front_binding_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select Front Pastedown //
$(document).ready(function(){
	$("#navbar-fpd, #next-fbdg, #previous-ir").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-fpd").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-fpd").show();
		$(".folio").hide();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/front_pastedown_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/front_pastedown.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Front Pastedown //
$(document).ready(function(){
	$("#navbar-fpd").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/front_pastedown_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select i r //
$(document).ready(function(){
	$("#navbar-folio-ir, #next-fpd, #previous-iiv").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-ir").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-ir").show();
		$(".folio").hide();
		//$("#ir").show();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/ir_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/ir.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile i r //
$(document).ready(function(){
	$("#navbar-folio-ir").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/ir_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select ii v //
$(document).ready(function(){
	$("#navbar-folio-iiv, #next-ir, #previous-iiir").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-iiv").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-iiv").show();
		$(".folio").hide();
		//$("#iiv").show();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/iiv_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/iiv.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile ii v //
$(document).ready(function(){
	$("#navbar-folio-iiv").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/iiv_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select iii r //
$(document).ready(function(){
	$("#navbar-folio-iiir, #next-iiv, #previous-iiiv").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-iiir").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-iiir").show();
		$(".folio").hide();
		//$("#iiir").show();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/iiir_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/iiir.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile iii r //
$(document).ready(function(){
	$("#navbar-folio-iiir").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/iiir_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select iii v //
$(document).ready(function(){
	$("#navbar-folio-iiiv, #next-iiir, #previous-ivr").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-iiiv").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-iiiv").show();
		$(".folio").hide();
		//$("#iiiv").show();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/iiiv_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/iiiv.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile iii v //
$(document).ready(function(){
	$("#navbar-folio-iiiv").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/iiiv_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select iv r //
$(document).ready(function(){
	$("#navbar-folio-ivr, #next-iiiv, #previous-ivv").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-ivr").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-ivr").show();
		$(".folio").hide();
		//$("#ivr").show();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/ivr_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/ivr.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile iv r //
$(document).ready(function(){
	$("#navbar-folio-ivr").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/ivr_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select iv v //
$(document).ready(function(){
	$("#navbar-folio-ivv, #next-ivr, #previous-1r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-ivv").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-ivv").show();
		$(".folio").hide();
		//$("#ivv").show();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/ivv_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/ivv.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile iv v //
$(document).ready(function(){
	$("#navbar-folio-ivv").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/ivv_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 1 r //
$(document).ready(function(){
	$("#navbar-folio-1r, #next-ivv, #previous-1v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-1r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-1r").show();
		$("#facs").attr("src", "images/facsimiles/1r.jpg");
		$(".folio").hide();
		$("#1r").show();
		$("#facs_preview").attr("src", "images/_previews/1r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/1r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 1 r //
$(document).ready(function(){
	$("#navbar-folio-1r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/1r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 1 v //
$(document).ready(function(){
	$("#navbar-folio-1v, #next-1r, #previous-2r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-1v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-1v").show();
		$(".folio").hide();
		$("#1v").show();
		$("#facs").hide();
		$("#facs_preview").attr("src", "images/_previews/1v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/1v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 1 v //
$(document).ready(function(){
	$("#navbar-folio-1v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/1v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 2 r //
$(document).ready(function(){
	$("#navbar-folio-2r, #next-1v, #previous-2v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-2r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-2r").show();
		$(".folio").hide();
		$("#2r").show();
		$("#facs").hide();
		$("#facs_preview").attr("src", "images/_previews/2r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/2r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 2 r //
$(document).ready(function(){
	$("#navbar-folio-2r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/2r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 2 v //
$(document).ready(function(){
	$("#navbar-folio-2v, #next-2r, #previous-3r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-2v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-2v").show();
		$(".folio").hide();
		$("#2v").show();
		$("#facs").hide();
		$("#facs_preview").attr("src", "images/_previews/2v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/2v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 2 v //
$(document).ready(function(){
	$("#navbar-folio-2v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/2v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 3 r //
$(document).ready(function(){
	$("#navbar-folio-3r, #next-2v, #previous-3v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-3r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-3r").show();
		$(".folio").hide();
		$("#3r").show();
		$("#facs_preview").attr("src", "images/_previews/3r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/3r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 3 r //
$(document).ready(function(){
	$("#navbar-folio-3r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/3r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 3 v //
$(document).ready(function(){
	$("#navbar-folio-3v, #next-3r, #previous-4r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-3v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-3v").show();
		$(".folio").hide();
		$("#3v").show();
		$("#facs_preview").attr("src", "images/_previews/3v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/3v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 3 v //
$(document).ready(function(){
	$("#navbar-folio-3v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/3v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 4 r //
$(document).ready(function(){
	$("#navbar-folio-4r, #next-3v, #previous-4v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-4r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-4r").show();
		$(".folio").hide();
		$("#4r").show();
		$("#facs_preview").attr("src", "images/_previews/4r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/4r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 4 r //
$(document).ready(function(){
	$("#navbar-folio-4r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/4r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 4 v //
$(document).ready(function(){
	$("#navbar-folio-4v, #next-4r, #previous-5r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-4v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-4v").show();
		$(".folio").hide();
		$("#4v").show();
		$("#facs_preview").attr("src", "images/_previews/4v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/4v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 4 v //
$(document).ready(function(){
	$("#navbar-folio-4v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/4v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 5 r/
$(document).ready(function(){
	$("#navbar-folio-5r, #next-4v, #previous-5v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-5r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-5r").show();
		$(".folio").hide();
		$("#5r").show();
		$("#facs_preview").attr("src", "images/_previews/5r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/5r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 5 r //
$(document).ready(function(){
	$("#navbar-folio-5r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/5r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 5 v //
$(document).ready(function(){
	$("#navbar-folio-5v, #next-5r, #previous-6r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-5v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-5v").show();
		$(".folio").hide();
		$("#5v").show();
		$("#facs_preview").attr("src", "images/_previews/5v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/5v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 5 v //
$(document).ready(function(){
	$("#navbar-folio-5v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/5v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 6 r //
$(document).ready(function(){
	$("#navbar-folio-6r, #next-5v, #previous-6v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-6r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-6r").show();
		$(".folio").hide();
		$("#6r").show();
		$("#facs_preview").attr("src", "images/_previews/6r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/6r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 6 r //
$(document).ready(function(){
	$("#navbar-folio-6r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/6r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 6 v //
$(document).ready(function(){
	$("#navbar-folio-6v, #next-6r, #previous-7r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-6v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-6v").show();
		$(".folio").hide();
		$("#6v").show();
		$("#facs_preview").attr("src", "images/_previews/6v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/6v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 6 v //
$(document).ready(function(){
	$("#navbar-folio-6v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/6v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 7 r //
$(document).ready(function(){
	$("#navbar-folio-7r, #next-6v, #previous-7v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-7r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-7r").show();
		$(".folio").hide();
		$("#7r").show();
		$("#facs_preview").attr("src", "images/_previews/7r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/7r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 7 r //
$(document).ready(function(){
	$("#navbar-folio-7r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/7r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 7 v //
$(document).ready(function(){
	$("#navbar-folio-7v, #next-7r, #previous-8r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-7v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-7v").show();
		$(".folio").hide();
		$("#7v").show();
		$("#facs_preview").attr("src", "images/_previews/7v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/7v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 7 v //
$(document).ready(function(){
	$("#navbar-folio-7v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/7v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 8 r //
$(document).ready(function(){
	$("#navbar-folio-8r, #next-7v, #previous-8v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-8r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-8r").show();
		$(".folio").hide();
		$("#8r").show();
		$("#facs_preview").attr("src", "images/_previews/8r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/8r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 8 r //
$(document).ready(function(){
	$("#navbar-folio-8r").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/8r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 8 v //
$(document).ready(function(){
	$("#navbar-folio-8v, #next-8r, #previous-9r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-8v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-8v").show();
		$(".folio").hide();
		$("#8v").show();
		$("#facs_preview").attr("src", "images/_previews/8v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/8v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 8 v //
$(document).ready(function(){
	$("#navbar-folio-8v").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/8v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 9 r //
$(document).ready(function(){
	$("#navbar-folio-9r, #next-8v, #previous-9v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-9r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-9r").show();
		$(".folio").hide();
		$("#9r").show();
		$("#facs_preview").attr("src", "images/_previews/9r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/9r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 9 r //		
$(document).ready(function(){		
	$("#navbar-folio-9r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/9r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 9 v //
$(document).ready(function(){
	$("#navbar-folio-9v, #next-9r, #previous-10r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-9v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-9v").show();
		$(".folio").hide();
		$("#9v").show();
		$("#facs_preview").attr("src", "images/_previews/9v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/9v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 9 v //		
$(document).ready(function(){		
	$("#navbar-folio-9v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/9v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 10 r //
$(document).ready(function(){
	$("#navbar-folio-10r, #next-9v, #previous-10v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-10r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-10r").show();
		$(".folio").hide();
		$("#10r").show();
		$("#facs_preview").attr("src", "images/_previews/10r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/10r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 10 r //		
$(document).ready(function(){		
	$("#navbar-folio-10r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/10r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 10 v //
$(document).ready(function(){
	$("#navbar-folio-10v, #next-10r, #previous-11r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-10v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-10v").show();
		$(".folio").hide();
		$("#10v").show();
		$("#facs_preview").attr("src", "images/_previews/10v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/10v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 10 v //		
$(document).ready(function(){		
	$("#navbar-folio-10v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/10v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 11 r //
$(document).ready(function(){
	$("#navbar-folio-11r, #next-10v, #previous-11v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-11r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-11r").show();
		$(".folio").hide();
		$("#11r").show();
		$("#facs_preview").attr("src", "images/_previews/11r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/11r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 11 r //		
$(document).ready(function(){		
	$("#navbar-folio-11r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/11r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 11 v //
$(document).ready(function(){
	$("#navbar-folio-11v, #next-11r, #previous-12r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-11v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-11v").show();
		$(".folio").hide();
		$("#11v").show();
		$("#facs_preview").attr("src", "images/_previews/11v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/11v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 11 v //		
$(document).ready(function(){		
	$("#navbar-folio-11v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/11v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 12 r //
$(document).ready(function(){
	$("#navbar-folio-12r, #next-11v, #previous-12v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-12r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-12r").show();
		$(".folio").hide();
		$("#12r").show();
		$("#facs_preview").attr("src", "images/_previews/12r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/12r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 12 r //		
$(document).ready(function(){		
	$("#navbar-folio-12r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/12r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 12 v //
$(document).ready(function(){
	$("#navbar-folio-12v, #next-12r, #previous-13r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-12v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-12v").show();
		$(".folio").hide();
		$("#12v").show();
		$("#facs_preview").attr("src", "images/_previews/12v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/12v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 12 v //		
$(document).ready(function(){		
	$("#navbar-folio-12v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/12v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 13 r //
$(document).ready(function(){
	$("#navbar-folio-13r, #next-12v, #previous-13v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-13r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-13r").show();
		$(".folio").hide();
		$("#13r").show();
		$("#facs_preview").attr("src", "images/_previews/13r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/13r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 13 r //		
$(document).ready(function(){		
	$("#navbar-folio-13r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/13r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 13 v //
$(document).ready(function(){
	$("#navbar-folio-13v, #next-13r, #previous-14r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-13v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-13v").show();
		$(".folio").hide();
		$("#13v").show();
		$("#facs_preview").attr("src", "images/_previews/13v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/13v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 13 v //		
$(document).ready(function(){		
	$("#navbar-folio-13v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/13v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 14 r //
$(document).ready(function(){
	$("#navbar-folio-14r, #next-13v, #previous-14v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-14r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-14r").show();
		$(".folio").hide();
		$("#14r").show();
		$("#facs_preview").attr("src", "images/_previews/14r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/14r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 14 r //		
$(document).ready(function(){		
	$("#navbar-folio-14r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/14r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 14 v //
$(document).ready(function(){
	$("#navbar-folio-14v, #next-14r, #previous-15r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-14v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-14v").show();
		$(".folio").hide();
		$("#14v").show();
		$("#facs_preview").attr("src", "images/_previews/14v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/14v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 14 v //		
$(document).ready(function(){		
	$("#navbar-folio-14v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/14v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 15 r //
$(document).ready(function(){
	$("#navbar-folio-15r, #next-14v, #previous-15v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-15r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-15r").show();
		$(".folio").hide();
		$("#15r").show();
		$("#facs_preview").attr("src", "images/_previews/15r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/15r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 15 r //		
$(document).ready(function(){		
	$("#navbar-folio-15r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/15r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 15 v //
$(document).ready(function(){
	$("#navbar-folio-15v, #next-15r, #previous-16r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-15v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-15v").show();
		$(".folio").hide();
		$("#15v").show();
		$("#facs_preview").attr("src", "images/_previews/15v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/15v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 15 v //		
$(document).ready(function(){		
	$("#navbar-folio-15v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/15v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 16 r //
$(document).ready(function(){
	$("#navbar-folio-16r, #next-15v, #previous-16v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-16r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-16r").show();
		$(".folio").hide();
		$("#16r").show();
		$("#facs_preview").attr("src", "images/_previews/16r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/16r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 16 r //		
$(document).ready(function(){		
	$("#navbar-folio-16r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/16r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 16 v //
$(document).ready(function(){
	$("#navbar-folio-16v, #next-16r, #previous-17r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-16v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-16v").show();
		$(".folio").hide();
		$("#16v").show();
		$("#facs_preview").attr("src", "images/_previews/16v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/16v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 16 v //		
$(document).ready(function(){		
	$("#navbar-folio-16v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/16v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 17 r //
$(document).ready(function(){
	$("#navbar-folio-17r, #next-16v, #previous-17v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-17r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-17r").show();
		$(".folio").hide();
		$("#17r").show();
		$("#facs_preview").attr("src", "images/_previews/17r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/17r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 17 r //		
$(document).ready(function(){		
	$("#navbar-folio-17r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/17r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 17 v //
$(document).ready(function(){
	$("#navbar-folio-17v, #next-17r, #previous-18r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-17v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-17v").show();
		$(".folio").hide();
		$("#17v").show();
		$("#facs_preview").attr("src", "images/_previews/17v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/17v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 17 v //		
$(document).ready(function(){		
	$("#navbar-folio-17v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/17v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 18 r //
$(document).ready(function(){
	$("#navbar-folio-18r, #next-17v, #previous-18v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-18r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-18r").show();
		$(".folio").hide();
		$("#18r").show();
		$("#facs_preview").attr("src", "images/_previews/18r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/18r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 18 r //		
$(document).ready(function(){		
	$("#navbar-folio-18r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/18r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 18 v //
$(document).ready(function(){
	$("#navbar-folio-18v, #next-18r, #previous-19r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-18v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-18v").show();
		$(".folio").hide();
		$("#18v").show();
		$("#facs_preview").attr("src", "images/_previews/18v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/18v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 18 v //		
$(document).ready(function(){		
	$("#navbar-folio-18v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/18v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 19 r //
$(document).ready(function(){
	$("#navbar-folio-19r, #next-18v, #previous-19v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-19r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-19r").show();
		$(".folio").hide();
		$("#19r").show();
		$("#facs_preview").attr("src", "images/_previews/19r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/19r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 19 r //		
$(document).ready(function(){		
	$("#navbar-folio-19r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/19r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 19 v //
$(document).ready(function(){
	$("#navbar-folio-19v, #next-19r, #previous-20r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-19v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-19v").show();
		$(".folio").hide();
		$("#19v").show();
		$("#facs_preview").attr("src", "images/_previews/19v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/19v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 19 v //		
$(document).ready(function(){		
	$("#navbar-folio-19v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/19v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 20 r //
$(document).ready(function(){
	$("#navbar-folio-20r, #next-19v, #previous-20v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-20r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-20r").show();
		$(".folio").hide();
		$("#20r").show();
		$("#facs_preview").attr("src", "images/_previews/20r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/20r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 20 r //		
$(document).ready(function(){		
	$("#navbar-folio-20r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/20r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 20 v //
$(document).ready(function(){
	$("#navbar-folio-20v, #next-20r, #previous-21r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-20v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-20v").show();
		$(".folio").hide();
		$("#20v").show();
		$("#facs_preview").attr("src", "images/_previews/20v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/20v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 20 v //		
$(document).ready(function(){		
	$("#navbar-folio-20v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/20v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 21 r //
$(document).ready(function(){
	$("#navbar-folio-21r, #next-20v, #previous-21v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-21r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-21r").show();
		$(".folio").hide();
		$("#21r").show();
		$("#facs_preview").attr("src", "images/_previews/21r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/21r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 21 r //		
$(document).ready(function(){		
	$("#navbar-folio-21r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/21r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 21 v //
$(document).ready(function(){
	$("#navbar-folio-21v, #next-21r, #previous-22r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-21v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-21v").show();
		$(".folio").hide();
		$("#21v").show();
		$("#facs_preview").attr("src", "images/_previews/21v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/21v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 21 v //		
$(document).ready(function(){		
	$("#navbar-folio-21v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/21v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 22 r //
$(document).ready(function(){
	$("#navbar-folio-22r, #next-21v, #previous-22v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-22r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-22r").show();
		$(".folio").hide();
		$("#22r").show();
		$("#facs_preview").attr("src", "images/_previews/22r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/22r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 22 r //		
$(document).ready(function(){		
	$("#navbar-folio-22r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/22r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 22 v //
$(document).ready(function(){
	$("#navbar-folio-22v, #next-22r, #previous-23r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-22v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-22v").show();
		$(".folio").hide();
		$("#22v").show();
		$("#facs_preview").attr("src", "images/_previews/22v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/22v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 22 v //		
$(document).ready(function(){		
	$("#navbar-folio-22v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/22v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 23 r //
$(document).ready(function(){
	$("#navbar-folio-23r, #next-22v, #previous-23v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-23r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-23r").show();
		$(".folio").hide();
		$("#23r").show();
		$("#facs_preview").attr("src", "images/_previews/23r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/23r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 23 r //		
$(document).ready(function(){		
	$("#navbar-folio-23r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/23r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 23 v //
$(document).ready(function(){
	$("#navbar-folio-23v, #next-23r, #previous-24r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-23v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-23v").show();
		$(".folio").hide();
		$("#23v").show();
		$("#facs_preview").attr("src", "images/_previews/23v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/23v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 23 v //		
$(document).ready(function(){		
	$("#navbar-folio-23v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/23v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 24 r //
$(document).ready(function(){
	$("#navbar-folio-24r, #next-23v, #previous-24v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-24r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-24r").show();
		$(".folio").hide();
		$("#24r").show();
		$("#facs_preview").attr("src", "images/_previews/24r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/24r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 24 r //		
$(document).ready(function(){		
	$("#navbar-folio-24r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/24r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 24 v //
$(document).ready(function(){
	$("#navbar-folio-24v, #next-24r, #previous-25r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-24v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-24v").show();
		$(".folio").hide();
		$("#24v").show();
		$("#facs_preview").attr("src", "images/_previews/24v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/24v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 24 v //		
$(document).ready(function(){		
	$("#navbar-folio-24v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/24v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 25 r //
$(document).ready(function(){
	$("#navbar-folio-25r, #next-24v, #previous-25v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-25r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-25r").show();
		$(".folio").hide();
		$("#25r").show();
		$("#facs_preview").attr("src", "images/_previews/25r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/25r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 25 r //		
$(document).ready(function(){		
	$("#navbar-folio-25r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/25r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 25 v //
$(document).ready(function(){
	$("#navbar-folio-25v, #next-25r, #previous-26r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-25v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-25v").show();
		$(".folio").hide();
		$("#25v").show();
		$("#facs_preview").attr("src", "images/_previews/25v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/25v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 25 v //		
$(document).ready(function(){		
	$("#navbar-folio-25v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/25v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 26 r //
$(document).ready(function(){
	$("#navbar-folio-26r, #next-25v, #previous-26v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-26r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-26r").show();
		$(".folio").hide();
		$("#26r").show();
		$("#facs_preview").attr("src", "images/_previews/26r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/26r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 26 r //		
$(document).ready(function(){		
	$("#navbar-folio-26r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/26r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 26 v //
$(document).ready(function(){
	$("#navbar-folio-26v, #next-26r, #previous-27r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-26v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-26v").show();
		$(".folio").hide();
		$("#26v").show();
		$("#facs_preview").attr("src", "images/_previews/26v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/26v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 26 v //		
$(document).ready(function(){		
	$("#navbar-folio-26v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/26v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 27 r //
$(document).ready(function(){
	$("#navbar-folio-27r, #next-26v, #previous-27v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-27r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-27r").show();
		$(".folio").hide();
		$("#27r").show();
		$("#facs_preview").attr("src", "images/_previews/27r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/27r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 27 r //		
$(document).ready(function(){		
	$("#navbar-folio-27r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/27r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 27 v //
$(document).ready(function(){
	$("#navbar-folio-27v, #next-27r, #previous-28r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-27v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-27v").show();
		$(".folio").hide();
		$("#27v").show();
		$("#facs_preview").attr("src", "images/_previews/27v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/27v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 27 v //		
$(document).ready(function(){		
	$("#navbar-folio-27v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/27v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 28 r //
$(document).ready(function(){
	$("#navbar-folio-28r, #next-27v, #previous-28v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-28r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-28r").show();
		$(".folio").hide();
		$("#28r").show();
		$("#facs_preview").attr("src", "images/_previews/28r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/28r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 28 r //		
$(document).ready(function(){		
	$("#navbar-folio-28r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/28r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 28 v //
$(document).ready(function(){
	$("#navbar-folio-28v, #next-28r, #previous-29r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-28v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-28v").show();
		$(".folio").hide();
		$("#28v").show();
		$("#facs_preview").attr("src", "images/_previews/28v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/28v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 28 v //		
$(document).ready(function(){		
	$("#navbar-folio-28v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/28v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 29 r //
$(document).ready(function(){
	$("#navbar-folio-29r, #next-28v, #previous-29v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-29r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-29r").show();
		$(".folio").hide();
		$("#29r").show();
		$("#facs_preview").attr("src", "images/_previews/29r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/29r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 29 r //		
$(document).ready(function(){		
	$("#navbar-folio-29r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/29r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select 29 v //
$(document).ready(function(){
	$("#navbar-folio-29v, #next-29r, #previous-30r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-29v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-29v").show();
		$(".folio").hide();
		$("#29v").show();
		$("#facs_preview").attr("src", "images/_previews/29v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/29v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 29 v //		
$(document).ready(function(){		
	$("#navbar-folio-29v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/29v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 30 r //
$(document).ready(function(){
	$("#navbar-folio-30r, #next-29v, #previous-30v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-30r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-30r").show();
		$(".folio").hide();
		$("#30r").show();
		$("#facs_preview").attr("src", "images/_previews/30r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/30r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 30 r //		
$(document).ready(function(){		
	$("#navbar-folio-30r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/30r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 30 v //
$(document).ready(function(){
	$("#navbar-folio-30v, #next-30r, #previous-31r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-30v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-30v").show();
		$(".folio").hide();
		$("#30v").show();
		$("#facs_preview").attr("src", "images/_previews/30v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/30v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 30 v //		
$(document).ready(function(){		
	$("#navbar-folio-30v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/30v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 31 r //
$(document).ready(function(){
	$("#navbar-folio-31r, #next-30v, #previous-31v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-31r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-31r").show();
		$(".folio").hide();
		$("#31r").show();
		$("#facs_preview").attr("src", "images/_previews/31r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/31r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 31 r //		
$(document).ready(function(){		
	$("#navbar-folio-31r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/31r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 31 v //
$(document).ready(function(){
	$("#navbar-folio-31v, #next-31r, #previous-32r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-31v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-31v").show();
		$(".folio").hide();
		$("#31v").show();
		$("#facs_preview").attr("src", "images/_previews/31v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/31v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 31 v //		
$(document).ready(function(){		
	$("#navbar-folio-31v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/31v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 32 r //
$(document).ready(function(){
	$("#navbar-folio-32r, #next-31v, #previous-32v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-32r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-32r").show();
		$(".folio").hide();
		$("#32r").show();
		$("#facs_preview").attr("src", "images/_previews/32r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/32r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 32 r //		
$(document).ready(function(){		
	$("#navbar-folio-32r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/32r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 32 v //
$(document).ready(function(){
	$("#navbar-folio-32v, #next-32r, #previous-33r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-32v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-32v").show();
		$(".folio").hide();
		$("#32v").show();
		$("#facs_preview").attr("src", "images/_previews/32v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/32v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 32 v //		
$(document).ready(function(){		
	$("#navbar-folio-32v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/32v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 33 r //
$(document).ready(function(){
	$("#navbar-folio-33r, #next-32v, #previous-33v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-33r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-33r").show();
		$(".folio").hide();
		$("#33r").show();
		$("#facs_preview").attr("src", "images/_previews/33r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/33r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 33 r //		
$(document).ready(function(){		
	$("#navbar-folio-33r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/33r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 33 v //
$(document).ready(function(){
	$("#navbar-folio-33v, #next-33r, #previous-34r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-33v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-33v").show();
		$(".folio").hide();
		$("#33v").show();
		$("#facs_preview").attr("src", "images/_previews/33v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/33v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 33 v //		
$(document).ready(function(){		
	$("#navbar-folio-33v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/33v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 34 r //
$(document).ready(function(){
	$("#navbar-folio-34r, #next-33v, #previous-34v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-34r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-34r").show();
		$(".folio").hide();
		$("#34r").show();
		$("#facs_preview").attr("src", "images/_previews/34r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/34r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 34 r //		
$(document).ready(function(){		
	$("#navbar-folio-34r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/34r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 34 v //
$(document).ready(function(){
	$("#navbar-folio-34v, #next-34r, #previous-35r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-34v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-34v").show();
		$(".folio").hide();
		$("#34v").show();
		$("#facs_preview").attr("src", "images/_previews/34v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/34v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 34 v //		
$(document).ready(function(){		
	$("#navbar-folio-34v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/34v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 35 r //
$(document).ready(function(){
	$("#navbar-folio-35r, #next-34v, #previous-35v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-35r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-35r").show();
		$(".folio").hide();
		$("#35r").show();
		$("#facs_preview").attr("src", "images/_previews/35r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/35r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 35 r //		
$(document).ready(function(){		
	$("#navbar-folio-35r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/35r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 35 v //
$(document).ready(function(){
	$("#navbar-folio-35v, #next-35r, #previous-36r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-35v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-35v").show();
		$(".folio").hide();
		$("#35v").show();
		$("#facs_preview").attr("src", "images/_previews/35v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/35v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 35 v //		
$(document).ready(function(){		
	$("#navbar-folio-35v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/35v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 36 r //
$(document).ready(function(){
	$("#navbar-folio-36r, #next-35v, #previous-36v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-36r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-36r").show();
		$(".folio").hide();
		$("#36r").show();
		$("#facs_preview").attr("src", "images/_previews/36r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/36r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 36 r //		
$(document).ready(function(){		
	$("#navbar-folio-36r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/36r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 36 v //
$(document).ready(function(){
	$("#navbar-folio-36v, #next-36r, #previous-37r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-36v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-36v").show();
		$(".folio").hide();
		$("#36v").show();
		$("#facs_preview").attr("src", "images/_previews/36v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/36v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 36 v //		
$(document).ready(function(){		
	$("#navbar-folio-36v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/36v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 37 r //
$(document).ready(function(){
	$("#navbar-folio-37r, #next-36v, #previous-37v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-37r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-37r").show();
		$(".folio").hide();
		$("#37r").show();
		$("#facs_preview").attr("src", "images/_previews/37r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/37r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 37 r //		
$(document).ready(function(){		
	$("#navbar-folio-37r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/37r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 37 v //
$(document).ready(function(){
	$("#navbar-folio-37v, #next-37r, #previous-38r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-37v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-37v").show();
		$(".folio").hide();
		$("#37v").show();
		$("#facs_preview").attr("src", "images/_previews/37v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/37v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 37 v //		
$(document).ready(function(){		
	$("#navbar-folio-37v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/37v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 38 r //
$(document).ready(function(){
	$("#navbar-folio-38r, #next-37v, #previous-38v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-38r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-38r").show();
		$(".folio").hide();
		$("#38r").show();
		$("#facs_preview").attr("src", "images/_previews/38r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/38r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 38 r //		
$(document).ready(function(){		
	$("#navbar-folio-38r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/38r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 38 v //
$(document).ready(function(){
	$("#navbar-folio-38v, #next-38r, #previous-39r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-38v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-38v").show();
		$(".folio").hide();
		$("#38v").show();
		$("#facs_preview").attr("src", "images/_previews/38v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/38v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 38 v //		
$(document).ready(function(){		
	$("#navbar-folio-38v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/38v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 39 r //
$(document).ready(function(){
	$("#navbar-folio-39r, #next-38v, #previous-39v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-39r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-39r").show();
		$(".folio").hide();
		$("#39r").show();
		$("#facs_preview").attr("src", "images/_previews/39r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/39r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 39 r //		
$(document).ready(function(){		
	$("#navbar-folio-39r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/39r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 39 v //
$(document).ready(function(){
	$("#navbar-folio-39v, #next-39r, #previous-40r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-39v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-39v").show();
		$(".folio").hide();
		$("#39v").show();
		$("#facs_preview").attr("src", "images/_previews/39v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/39v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 39 v //		
$(document).ready(function(){		
	$("#navbar-folio-39v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/39v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 40 r //
$(document).ready(function(){
	$("#navbar-folio-40r, #next-39v, #previous-40v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-40r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-40r").show();
		$(".folio").hide();
		$("#40r").show();
		$("#facs_preview").attr("src", "images/_previews/40r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/40r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 40 r //		
$(document).ready(function(){		
	$("#navbar-folio-40r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/40r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 40 v //
$(document).ready(function(){
	$("#navbar-folio-40v, #next-40r, #previous-41r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-40v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-40v").show();
		$(".folio").hide();
		$("#40v").show();
		$("#facs_preview").attr("src", "images/_previews/40v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/40v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 40 v //		
$(document).ready(function(){		
	$("#navbar-folio-40v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/40v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 41 r //
$(document).ready(function(){
	$("#navbar-folio-41r, #next-40v, #previous-41v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-41r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-41r").show();
		$(".folio").hide();
		$("#41r").show();
		$("#facs_preview").attr("src", "images/_previews/41r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/41r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 41 r //		
$(document).ready(function(){		
	$("#navbar-folio-41r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/41r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 41 v //
$(document).ready(function(){
	$("#navbar-folio-41v, #next-41r, #previous-42r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-41v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-41v").show();
		$(".folio").hide();
		$("#41v").show();
		$("#facs_preview").attr("src", "images/_previews/41v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/41v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 41 v //		
$(document).ready(function(){		
	$("#navbar-folio-41v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/41v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 42 r //
$(document).ready(function(){
	$("#navbar-folio-42r, #next-41v, #previous-42v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-42r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-42r").show();
		$(".folio").hide();
		$("#42r").show();
		$("#facs_preview").attr("src", "images/_previews/42r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/42r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 42 r //		
$(document).ready(function(){		
	$("#navbar-folio-42r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/42r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 42 v //
$(document).ready(function(){
	$("#navbar-folio-42v, #next-42r, #previous-43r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-42v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-42v").show();
		$(".folio").hide();
		$("#42v").show();
		$("#facs_preview").attr("src", "images/_previews/42v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/42v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 42 v //		
$(document).ready(function(){		
	$("#navbar-folio-42v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/42v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 43 r //
$(document).ready(function(){
	$("#navbar-folio-43r, #next-42v, #previous-43v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-43r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-43r").show();
		$(".folio").hide();
		$("#43r").show();
		$("#facs_preview").attr("src", "images/_previews/43r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/43r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 43 r //		
$(document).ready(function(){		
	$("#navbar-folio-43r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/43r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 43 v //
$(document).ready(function(){
	$("#navbar-folio-43v, #next-43r, #previous-44r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-43v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-43v").show();
		$(".folio").hide();
		$("#43v").show();
		$("#facs_preview").attr("src", "images/_previews/43v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/43v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 43 v //		
$(document).ready(function(){		
	$("#navbar-folio-43v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/43v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 44 r //
$(document).ready(function(){
	$("#navbar-folio-44r, #next-43v, #previous-44v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-44r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-44r").show();
		$(".folio").hide();
		$("#44r").show();
		$("#facs_preview").attr("src", "images/_previews/44r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/44r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 44 r //		
$(document).ready(function(){		
	$("#navbar-folio-44r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/44r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 44 v //
$(document).ready(function(){
	$("#navbar-folio-44v, #next-44r, #previous-45r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-44v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-44v").show();
		$(".folio").hide();
		$("#44v").show();
		$("#facs_preview").attr("src", "images/_previews/44v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/44v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 44 v //		
$(document).ready(function(){		
	$("#navbar-folio-44v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/44v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 45 r //
$(document).ready(function(){
	$("#navbar-folio-45r, #next-44v, #previous-45v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-45r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-45r").show();
		$(".folio").hide();
		$("#45r").show();
		$("#facs_preview").attr("src", "images/_previews/45r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/45r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 45 r //		
$(document).ready(function(){		
	$("#navbar-folio-45r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/45r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 45 v //
$(document).ready(function(){
	$("#navbar-folio-45v, #next-45r, #previous-46r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-45v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-45v").show();
		$(".folio").hide();
		$("#45v").show();
		$("#facs_preview").attr("src", "images/_previews/45v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/45v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 45 v //		
$(document).ready(function(){		
	$("#navbar-folio-45v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/45v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 46 r //
$(document).ready(function(){
	$("#navbar-folio-46r, #next-45v, #previous-46v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-46r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-46r").show();
		$(".folio").hide();
		$("#46r").show();
		$("#facs_preview").attr("src", "images/_previews/46r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/46r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 46 r //		
$(document).ready(function(){		
	$("#navbar-folio-46r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/46r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 46 v //
$(document).ready(function(){
	$("#navbar-folio-46v, #next-46r, #previous-47r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-46v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-46v").show();
		$(".folio").hide();
		$("#46v").show();
		$("#facs_preview").attr("src", "images/_previews/46v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/46v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 46 v //		
$(document).ready(function(){		
	$("#navbar-folio-46v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/46v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 47 r //
$(document).ready(function(){
	$("#navbar-folio-47r, #next-46v, #previous-47v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-47r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-47r").show();
		$(".folio").hide();
		$("#47r").show();
		$("#facs_preview").attr("src", "images/_previews/47r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/47r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 47 r //		
$(document).ready(function(){		
	$("#navbar-folio-47r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/47r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 47 v //
$(document).ready(function(){
	$("#navbar-folio-47v, #next-47r, #previous-48r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-47v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-47v").show();
		$(".folio").hide();
		$("#47v").show();
		$("#facs_preview").attr("src", "images/_previews/47v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/47v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 47 v //		
$(document).ready(function(){		
	$("#navbar-folio-47v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/47v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 48 r //
$(document).ready(function(){
	$("#navbar-folio-48r, #next-47v, #previous-48v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-48r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-48r").show();
		$(".folio").hide();
		$("#48r").show();
		$("#facs_preview").attr("src", "images/_previews/48r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/48r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 48 r //		
$(document).ready(function(){		
	$("#navbar-folio-48r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/48r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 48 v //
$(document).ready(function(){
	$("#navbar-folio-48v, #next-48r, #previous-49r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-48v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-48v").show();
		$(".folio").hide();
		$("#48v").show();
		$("#facs_preview").attr("src", "images/_previews/48v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/48v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 48 v //		
$(document).ready(function(){		
	$("#navbar-folio-48v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/48v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 49 r //
$(document).ready(function(){
	$("#navbar-folio-49r, #next-48v, #previous-49v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-49r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-49r").show();
		$(".folio").hide();
		$("#49r").show();
		$("#facs_preview").attr("src", "images/_previews/49r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/49r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 49 r //		
$(document).ready(function(){		
	$("#navbar-folio-49r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/49r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 49 v //
$(document).ready(function(){
	$("#navbar-folio-49v, #next-49r, #previous-50r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-49v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-49v").show();
		$(".folio").hide();
		$("#49v").show();
		$("#facs_preview").attr("src", "images/_previews/49v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/49v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 49 v //		
$(document).ready(function(){		
	$("#navbar-folio-49v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/49v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 50 r //
$(document).ready(function(){
	$("#navbar-folio-50r, #next-49v, #previous-50v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-50r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-50r").show();
		$(".folio").hide();
		$("#50r").show();
		$("#facs_preview").attr("src", "images/_previews/50r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/50r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 50 r //		
$(document).ready(function(){		
	$("#navbar-folio-50r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/50r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 50 v //
$(document).ready(function(){
	$("#navbar-folio-50v, #next-50r, #previous-51r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-50v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-50v").show();
		$(".folio").hide();
		$("#50v").show();
		$("#facs_preview").attr("src", "images/_previews/50v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/50v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 50 v //		
$(document).ready(function(){		
	$("#navbar-folio-50v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/50v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 51 r //
$(document).ready(function(){
	$("#navbar-folio-51r, #next-50v, #previous-51v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-51r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-51r").show();
		$(".folio").hide();
		$("#51r").show();
		$("#facs_preview").attr("src", "images/_previews/51r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/51r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 51 r //		
$(document).ready(function(){		
	$("#navbar-folio-51r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/51r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 51 v //
$(document).ready(function(){
	$("#navbar-folio-51v, #next-51r, #previous-52r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-51v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-51v").show();
		$(".folio").hide();
		$("#51v").show();
		$("#facs_preview").attr("src", "images/_previews/51v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/51v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 51 v //		
$(document).ready(function(){		
	$("#navbar-folio-51v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/51v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 52 r //
$(document).ready(function(){
	$("#navbar-folio-52r, #next-51v, #previous-52v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-52r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-52r").show();
		$(".folio").hide();
		$("#52r").show();
		$("#facs_preview").attr("src", "images/_previews/52r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/52r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 52 r //		
$(document).ready(function(){		
	$("#navbar-folio-52r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/52r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 52 v //
$(document).ready(function(){
	$("#navbar-folio-52v, #next-52r, #previous-53r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-52v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-52v").show();
		$(".folio").hide();
		$("#52v").show();
		$("#facs_preview").attr("src", "images/_previews/52v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/52v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 52 v //		
$(document).ready(function(){		
	$("#navbar-folio-52v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/52v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 53 r //
$(document).ready(function(){
	$("#navbar-folio-53r, #next-52v, #previous-53v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-53r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-53r").show();
		$(".folio").hide();
		$("#53r").show();
		$("#facs_preview").attr("src", "images/_previews/53r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/53r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 53 r //		
$(document).ready(function(){		
	$("#navbar-folio-53r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/53r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 53 v //
$(document).ready(function(){
	$("#navbar-folio-53v, #next-53r, #previous-54r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-53v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-53v").show();
		$(".folio").hide();
		$("#53v").show();
		$("#facs_preview").attr("src", "images/_previews/53v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/53v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 53 v //		
$(document).ready(function(){		
	$("#navbar-folio-53v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/53v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 54 r //
$(document).ready(function(){
	$("#navbar-folio-54r, #next-53v, #previous-54v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-54r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-54r").show();
		$(".folio").hide();
		$("#54r").show();
		$("#facs_preview").attr("src", "images/_previews/54r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/54r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 54 r //		
$(document).ready(function(){		
	$("#navbar-folio-54r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/54r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 54 v //
$(document).ready(function(){
	$("#navbar-folio-54v, #next-54r, #previous-55r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-54v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-54v").show();
		$(".folio").hide();
		$("#54v").show();
		$("#facs_preview").attr("src", "images/_previews/54v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/54v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 54 v //		
$(document).ready(function(){		
	$("#navbar-folio-54v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/54v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 55 r //
$(document).ready(function(){
	$("#navbar-folio-55r, #next-54v, #previous-55v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-55r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-55r").show();
		$(".folio").hide();
		$("#55r").show();
		$("#facs_preview").attr("src", "images/_previews/55r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/55r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 55 r //		
$(document).ready(function(){		
	$("#navbar-folio-55r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/55r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 55 v //
$(document).ready(function(){
	$("#navbar-folio-55v, #next-55r, #previous-56r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-55v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-55v").show();
		$(".folio").hide();
		$("#55v").show();
		$("#facs_preview").attr("src", "images/_previews/55v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/55v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 55 v //		
$(document).ready(function(){		
	$("#navbar-folio-55v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/55v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 56 r //
$(document).ready(function(){
	$("#navbar-folio-56r, #next-55v, #previous-56v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-56r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-56r").show();
		$(".folio").hide();
		$("#56r").show();
		$("#facs_preview").attr("src", "images/_previews/56r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/56r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 56 r //		
$(document).ready(function(){		
	$("#navbar-folio-56r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/56r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 56 v //
$(document).ready(function(){
	$("#navbar-folio-56v, #next-56r, #previous-57r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-56v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-56v").show();
		$(".folio").hide();
		$("#56v").show();
		$("#facs_preview").attr("src", "images/_previews/56v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/56v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 56 v //		
$(document).ready(function(){		
	$("#navbar-folio-56v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/56v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 57 r //
$(document).ready(function(){
	$("#navbar-folio-57r, #next-56v, #previous-57v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-57r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-57r").show();
		$(".folio").hide();
		$("#57r").show();
		$("#facs_preview").attr("src", "images/_previews/57r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/57r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 57 r //		
$(document).ready(function(){		
	$("#navbar-folio-57r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/57r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 57 v //
$(document).ready(function(){
	$("#navbar-folio-57v, #next-57r, #previous-58r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-57v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-57v").show();
		$(".folio").hide();
		$("#57v").show();
		$("#facs_preview").attr("src", "images/_previews/57v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/57v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 57 v //		
$(document).ready(function(){		
	$("#navbar-folio-57v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/57v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 58 r //
$(document).ready(function(){
	$("#navbar-folio-58r, #next-57v, #previous-58v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-58r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-58r").show();
		$(".folio").hide();
		$("#58r").show();
		$("#facs_preview").attr("src", "images/_previews/58r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/58r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 58 r //		
$(document).ready(function(){		
	$("#navbar-folio-58r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/58r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 58 v //
$(document).ready(function(){
	$("#navbar-folio-58v, #next-58r, #previous-59r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-58v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-58v").show();
		$(".folio").hide();
		$("#58v").show();
		$("#facs_preview").attr("src", "images/_previews/58v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/58v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 58 v //		
$(document).ready(function(){		
	$("#navbar-folio-58v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/58v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 59 r //
$(document).ready(function(){
	$("#navbar-folio-59r, #next-58v, #previous-59v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-59r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-59r").show();
		$(".folio").hide();
		$("#59r").show();
		$("#facs_preview").attr("src", "images/_previews/59r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/59r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 59 r //		
$(document).ready(function(){		
	$("#navbar-folio-59r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/59r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 59 v //
$(document).ready(function(){
	$("#navbar-folio-59v, #next-59r, #previous-60r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-59v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-59v").show();
		$(".folio").hide();
		$("#59v").show();
		$("#facs_preview").attr("src", "images/_previews/59v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/59v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 59 v //		
$(document).ready(function(){		
	$("#navbar-folio-59v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/59v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 60 r //
$(document).ready(function(){
	$("#navbar-folio-60r, #next-59v, #previous-60v").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-60r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-60r").show();
		$(".folio").hide();
		$("#60r").show();
		$("#facs_preview").attr("src", "images/_previews/60r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/60r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 60 r //		
$(document).ready(function(){		
	$("#navbar-folio-60r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/60r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 60 v //
$(document).ready(function(){
	$("#navbar-folio-60v, #next-60r, #previous-61r").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-60v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-60v").show();
		$(".folio").hide();
		$("#60v").show();
		$("#facs_preview").attr("src", "images/_previews/60v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/60v.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Facsimile 60 v //		
$(document).ready(function(){		
	$("#navbar-folio-60v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/60v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 61 r //			
$(document).ready(function(){			
	$("#navbar-folio-61r, #next-60v, #previous-61v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-61r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-61r").show();	
		$(".folio").hide();	
		$("#61r").show();	
		$("#facs_preview").attr("src", "images/_previews/61r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/61r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});
// Preview Facsimile 61 r //		
$(document).ready(function(){		
	$("#navbar-folio-61r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/61r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 61 v //			
$(document).ready(function(){			
	$("#navbar-folio-61v, #next-61r, #previous-62r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-61v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-61v").show();	
		$(".folio").hide();	
		$("#61v").show();	
		$("#facs_preview").attr("src", "images/_previews/61v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/61v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});
// Preview Facsimile 61 v //		
$(document).ready(function(){		
	$("#navbar-folio-61v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/61v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 62 r //			
$(document).ready(function(){			
	$("#navbar-folio-62r, #next-61v, #previous-62v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-62r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-62r").show();	
		$(".folio").hide();	
		$("#62r").show();	
		$("#facs_preview").attr("src", "images/_previews/62r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/62r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});	
});
// Preview Facsimile 62 r //		
$(document).ready(function(){		
	$("#navbar-folio-62r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/62r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 62 v //		
$(document).ready(function(){		
	$("#navbar-folio-62v, #next-62r, #previous-63r").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-62v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-62v").show();
		$(".folio").hide();
		$("#62v").show();
		$("#facs_preview").attr("src", "images/_previews/62v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/62v.jpg");
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});
// Preview Facsimile 62 v //		
$(document).ready(function(){		
	$("#navbar-folio-62v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/62v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 63 r //			
$(document).ready(function(){			
	$("#navbar-folio-63r, #next-62v, #previous-63v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-63r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-63r").show();	
		$(".folio").hide();	
		$("#63r").show();	
		$("#facs_preview").attr("src", "images/_previews/63r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/63r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});
// Preview Facsimile 63 r //		
$(document).ready(function(){		
	$("#navbar-folio-63r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/63r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 63 v //			
$(document).ready(function(){			
	$("#navbar-folio-63v, #next-63r, #previous-64r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-63v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-63v").show();	
		$(".folio").hide();	
		$("#63v").show();	
		$("#facs_preview").attr("src", "images/_previews/63v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/63v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 63 v //		
$(document).ready(function(){		
	$("#navbar-folio-63v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/63v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 64 r //			
$(document).ready(function(){			
	$("#navbar-folio-64r, #next-63v, #previous-64v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-64r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-64r").show();	
		$(".folio").hide();	
		$("#64r").show();	
		$("#facs_preview").attr("src", "images/_previews/64r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/64r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 64 r //		
$(document).ready(function(){		
	$("#navbar-folio-64r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/64r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 64 v //			
$(document).ready(function(){			
	$("#navbar-folio-64v, #next-64r, #previous-65r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-64v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-64v").show();	
		$(".folio").hide();	
		$("#64v").show();	
		$("#facs_preview").attr("src", "images/_previews/64v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/64v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});	
});		
// Preview Facsimile 64 v //		
$(document).ready(function(){		
	$("#navbar-folio-64v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/64v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 65 r //		
$(document).ready(function(){		
	$("#navbar-folio-65r, #next-64v, #previous-65v").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-65r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-65r").show();
		$(".folio").hide();
		$("#65r").show();
		$("#facs_preview").attr("src", "images/_previews/65r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/65r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 65 r //		
$(document).ready(function(){		
	$("#navbar-folio-65r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/65r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 65 v //			
$(document).ready(function(){			
	$("#navbar-folio-65v, #next-65r, #previous-66r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-65v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-65v").show();	
		$(".folio").hide();	
		$("#65v").show();	
		$("#facs_preview").attr("src", "images/_previews/65v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/65v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 65 v //		
$(document).ready(function(){		
	$("#navbar-folio-65v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/65v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 66 r //			
$(document).ready(function(){			
	$("#navbar-folio-66r, #next-65v, #previous-66v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-66r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-66r").show();	
		$(".folio").hide();	
		$("#66r").show();	
		$("#facs_preview").attr("src", "images/_previews/66r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/66r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 66 r //		
$(document).ready(function(){		
	$("#navbar-folio-66r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/66r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 66 v //			
$(document).ready(function(){			
	$("#navbar-folio-66v, #next-66r, #previous-67r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-66v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-66v").show();	
		$(".folio").hide();	
		$("#66v").show();
		$("#facs_preview").attr("src", "images/_previews/66v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/66v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 66 v //		
$(document).ready(function(){		
	$("#navbar-folio-66v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/66v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 67 r //			
$(document).ready(function(){			
	$("#navbar-folio-67r, #next-66v, #previous-67v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-67r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-67r").show();	
		$(".folio").hide();	
		$("#67r").show();	
		$("#facs_preview").attr("src", "images/_previews/67r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/67r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 67 r //		
$(document).ready(function(){		
	$("#navbar-folio-67r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/67r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 67 v //			
$(document).ready(function(){			
	$("#navbar-folio-67v, #next-67r, #previous-68r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-67v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-67v").show();	
		$(".folio").hide();	
		$("#67v").show();	
		$("#facs_preview").attr("src", "images/_previews/67v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/67v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 67 v //		
$(document).ready(function(){		
	$("#navbar-folio-67v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/67v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 68 r //			
$(document).ready(function(){			
	$("#navbar-folio-68r, #next-67v, #previous-68v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-68r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-68r").show();	
		$(".folio").hide();	
		$("#68r").show();	
		$("#facs_preview").attr("src", "images/_previews/68r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/68r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 68 r //		
$(document).ready(function(){		
	$("#navbar-folio-68r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/68r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 68 v //			
$(document).ready(function(){			
	$("#navbar-folio-68v, #next-68r, #previous-69r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-68v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-68v").show();	
		$(".folio").hide();	
		$("#68v").show();	
		$("#facs_preview").attr("src", "images/_previews/68v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/68v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 68 v //		
$(document).ready(function(){		
	$("#navbar-folio-68v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/68v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 69 r //			
$(document).ready(function(){			
	$("#navbar-folio-69r, #next-68v, #previous-69v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-69r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-69r").show();	
		$(".folio").hide();	
		$("#69r").show();	
		$("#facs_preview").attr("src", "images/_previews/69r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/69r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 69 r //		
$(document).ready(function(){		
	$("#navbar-folio-69r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/69r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 69 v //			
$(document).ready(function(){			
	$("#navbar-folio-69v, #next-69r, #previous-70r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-69v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-69v").show();	
		$(".folio").hide();	
		$("#69v").show();	
		$("#facs_preview").attr("src", "images/_previews/69v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/69v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 69 v //		
$(document).ready(function(){		
	$("#navbar-folio-69v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/69v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 70 r //			
$(document).ready(function(){			
	$("#navbar-folio-70r, #next-69v, #previous-70v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-70r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-70r").show();	
		$(".folio").hide();	
		$("#70r").show();	
		$("#facs_preview").attr("src", "images/_previews/70r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/70r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});	
});		
// Preview Facsimile 70 r //		
$(document).ready(function(){		
	$("#navbar-folio-70r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/70r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 70 v //		
$(document).ready(function(){		
	$("#navbar-folio-70v, #next-70r, #previous-71r").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-70v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-70v").show();
		$(".folio").hide();
		$("#70v").show();
		$("#facs_preview").attr("src", "images/_previews/70v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/70v.jpg");
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 70 v //		
$(document).ready(function(){		
	$("#navbar-folio-70v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/70v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 71 r //			
$(document).ready(function(){			
	$("#navbar-folio-71r, #next-70v, #previous-71v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-71r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-71r").show();	
		$(".folio").hide();	
		$("#71r").show();	
		$("#facs_preview").attr("src", "images/_previews/71r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/71r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 71 r //		
$(document).ready(function(){		
	$("#navbar-folio-71r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/71r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 71 v //			
$(document).ready(function(){			
	$("#navbar-folio-71v, #next-71r, #previous-72r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-71v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-71v").show();	
		$(".folio").hide();	
		$("#71v").show();	
		$("#facs_preview").attr("src", "images/_previews/71v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/71v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 71 v //		
$(document).ready(function(){		
	$("#navbar-folio-71v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/71v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 72 r //			
$(document).ready(function(){			
	$("#navbar-folio-72r, #next-71v, #previous-72v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-72r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-72r").show();	
		$(".folio").hide();	
		$("#72r").show();	
		$("#facs_preview").attr("src", "images/_previews/72r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/72r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 72 r //		
$(document).ready(function(){		
	$("#navbar-folio-72r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/72r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 72 v //			
$(document).ready(function(){			
	$("#navbar-folio-72v, #next-72r, #previous-73r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-72v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-72v").show();	
		$(".folio").hide();	
		$("#72v").show();	
		$("#facs_preview").attr("src", "images/_previews/72v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/72v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});	
});		
// Preview Facsimile 72 v //		
$(document).ready(function(){		
	$("#navbar-folio-72v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/72v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 73 r //		
$(document).ready(function(){		
	$("#navbar-folio-73r, #next-72v, #previous-73v").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-73r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-73r").show();
		$(".folio").hide();
		$("#73r").show();
		$("#facs_preview").attr("src", "images/_previews/73r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/73r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 73 r //		
$(document).ready(function(){		
	$("#navbar-folio-73r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/73r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 73 v //			
$(document).ready(function(){			
	$("#navbar-folio-73v, #next-73r, #previous-74r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-73v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-73v").show();	
		$(".folio").hide();	
		$("#73v").show();	
		$("#facs_preview").attr("src", "images/_previews/73v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/73v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 73 v //		
$(document).ready(function(){		
	$("#navbar-folio-73v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/73v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 74 r //			
$(document).ready(function(){			
	$("#navbar-folio-74r, #next-73v, #previous-74v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-74r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-74r").show();	
		$(".folio").hide();	
		$("#74r").show();	
		$("#facs_preview").attr("src", "images/_previews/74r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/74r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 74 r //		
$(document).ready(function(){		
	$("#navbar-folio-74r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/74r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 74 v //			
$(document).ready(function(){			
	$("#navbar-folio-74v, #next-74r, #previous-75r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-74v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-74v").show();	
		$(".folio").hide();	
		$("#74v").show();	
		$("#facs_preview").attr("src", "images/_previews/74v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/74v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 74 v //		
$(document).ready(function(){		
	$("#navbar-folio-74v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/74v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 75 r //			
$(document).ready(function(){			
	$("#navbar-folio-75r, #next-74v, #previous-75v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-75r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-75r").show();	
		$(".folio").hide();	
		$("#75r").show();	
		$("#facs_preview").attr("src", "images/_previews/75r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/75r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 75 r //		
$(document).ready(function(){		
	$("#navbar-folio-75r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/75r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 75 v //			
$(document).ready(function(){			
	$("#navbar-folio-75v, #next-75r, #previous-76r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-75v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-75v").show();	
		$(".folio").hide();	
		$("#75v").show();	
		$("#facs_preview").attr("src", "images/_previews/75v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/75v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 75 v //		
$(document).ready(function(){		
	$("#navbar-folio-75v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/75v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 76 r //			
$(document).ready(function(){			
	$("#navbar-folio-76r, #next-75v, #previous-76v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-76r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-76r").show();	
		$(".folio").hide();	
		$("#76r").show();	
		$("#facs_preview").attr("src", "images/_previews/76r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/76r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 76 r //		
$(document).ready(function(){		
	$("#navbar-folio-76r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/76r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 76 v //			
$(document).ready(function(){			
	$("#navbar-folio-76v, #next-76r, #previous-77r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-76v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-76v").show();	
		$(".folio").hide();	
		$("#76v").show();	
		$("#facs_preview").attr("src", "images/_previews/76v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/76v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 76 v //		
$(document).ready(function(){		
	$("#navbar-folio-76v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/76v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 77 r //			
$(document).ready(function(){			
	$("#navbar-folio-77r, #next-76v, #previous-77v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-77r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-77r").show();	
		$(".folio").hide();	
		$("#77r").show();	
		$("#facs_preview").attr("src", "images/_previews/77r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/77r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 77 r //		
$(document).ready(function(){		
	$("#navbar-folio-77r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/77r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 77 v //			
$(document).ready(function(){			
	$("#navbar-folio-77v, #next-77r, #previous-78r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-77v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-77v").show();	
		$(".folio").hide();	
		$("#77v").show();	
		$("#facs_preview").attr("src", "images/_previews/77v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/77v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 77 v //		
$(document).ready(function(){		
	$("#navbar-folio-77v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/77v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 78 r //			
$(document).ready(function(){			
	$("#navbar-folio-78r, #next-77v, #previous-78v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-78r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-78r").show();	
		$(".folio").hide();	
		$("#78r").show();	
		$("#facs_preview").attr("src", "images/_previews/78r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/78r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});	
});		
// Preview Facsimile 78 r //		
$(document).ready(function(){		
	$("#navbar-folio-78r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/78r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 78 v //		
$(document).ready(function(){		
	$("#navbar-folio-78v, #next-78r, #previous-79r").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-78v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-78v").show();
		$(".folio").hide();
		$("#78v").show();
		$("#facs_preview").attr("src", "images/_previews/78v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/78v.jpg");
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 78 v //		
$(document).ready(function(){		
	$("#navbar-folio-78v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/78v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 79 r //			
$(document).ready(function(){			
	$("#navbar-folio-79r, #next-78v, #previous-79v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-79r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-79r").show();	
		$(".folio").hide();	
		$("#79r").show();	
		$("#facs_preview").attr("src", "images/_previews/79r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/79r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 79 r //		
$(document).ready(function(){		
	$("#navbar-folio-79r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/79r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 79 v //			
$(document).ready(function(){			
	$("#navbar-folio-79v, #next-79r, #previous-80r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-79v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-79v").show();	
		$(".folio").hide();	
		$("#79v").show();	
		$("#facs_preview").attr("src", "images/_previews/79v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/79v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 79 v //		
$(document).ready(function(){		
	$("#navbar-folio-79v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/79v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 80 r //			
$(document).ready(function(){			
	$("#navbar-folio-80r, #next-79v, #previous-80v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-80r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-80r").show();	
		$(".folio").hide();	
		$("#80r").show();	
		$("#facs_preview").attr("src", "images/_previews/80r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/80r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 80 r //		
$(document).ready(function(){		
	$("#navbar-folio-80r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/80r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 80 v //			
$(document).ready(function(){			
	$("#navbar-folio-80v, #next-80r, #previous-81r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-80v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-80v").show();	
		$(".folio").hide();	
		$("#80v").show();	
		$("#facs_preview").attr("src", "images/_previews/80v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/80v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});	
});		
// Preview Facsimile 80 v //		
$(document).ready(function(){		
	$("#navbar-folio-80v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/80v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 81 r //		
$(document).ready(function(){		
	$("#navbar-folio-81r, #next-80v, #previous-81v").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-81r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-81r").show();
		$(".folio").hide();
		$("#81r").show();
		$("#facs_preview").attr("src", "images/_previews/81r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/81r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 81 r //		
$(document).ready(function(){		
	$("#navbar-folio-81r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/81r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 81 v //			
$(document).ready(function(){			
	$("#navbar-folio-81v, #next-81r, #previous-82r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-81v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-81v").show();	
		$(".folio").hide();	
		$("#81v").show();	
		$("#facs_preview").attr("src", "images/_previews/81v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/81v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 81 v //		
$(document).ready(function(){		
	$("#navbar-folio-81v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/81v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 82 r //			
$(document).ready(function(){			
	$("#navbar-folio-82r, #next-81v, #previous-82v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-82r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-82r").show();	
		$(".folio").hide();	
		$("#82r").show();	
		$("#facs_preview").attr("src", "images/_previews/82r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/82r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 82 r //		
$(document).ready(function(){		
	$("#navbar-folio-82r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/82r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 82 v //			
$(document).ready(function(){			
	$("#navbar-folio-82v, #next-82r, #previous-83r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-82v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-82v").show();	
		$(".folio").hide();	
		$("#82v").show();	
		$("#facs_preview").attr("src", "images/_previews/82v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/82v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 82 v //		
$(document).ready(function(){		
	$("#navbar-folio-82v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/82v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 83 r //			
$(document).ready(function(){			
	$("#navbar-folio-83r, #next-82v, #previous-83v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-83r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-83r").show();	
		$(".folio").hide();	
		$("#83r").show();	
		$("#facs_preview").attr("src", "images/_previews/83r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/83r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 83 r //		
$(document).ready(function(){		
	$("#navbar-folio-83r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/83r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 83 v //			
$(document).ready(function(){			
	$("#navbar-folio-83v, #next-83r, #previous-84r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-83v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-83v").show();	
		$(".folio").hide();	
		$("#83v").show();	
		$("#facs_preview").attr("src", "images/_previews/83v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/83v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 83 v //		
$(document).ready(function(){		
	$("#navbar-folio-83v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/83v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 84 r //			
$(document).ready(function(){			
	$("#navbar-folio-84r, #next-83v, #previous-84v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-84r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-84r").show();	
		$(".folio").hide();	
		$("#84r").show();	
		$("#facs_preview").attr("src", "images/_previews/84r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/84r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 84 r //		
$(document).ready(function(){		
	$("#navbar-folio-84r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/84r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 84 v //			
$(document).ready(function(){			
	$("#navbar-folio-84v, #next-84r, #previous-85r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-84v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-84v").show();	
		$(".folio").hide();	
		$("#84v").show();	
		$("#facs_preview").attr("src", "images/_previews/84v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/84v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 84 v //		
$(document).ready(function(){		
	$("#navbar-folio-84v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/84v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 85 r //			
$(document).ready(function(){			
	$("#navbar-folio-85r, #next-84v, #previous-85v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-85r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-85r").show();	
		$(".folio").hide();	
		$("#85r").show();	
		$("#facs_preview").attr("src", "images/_previews/85r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/85r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 85 r //		
$(document).ready(function(){		
	$("#navbar-folio-85r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/85r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 85 v //			
$(document).ready(function(){			
	$("#navbar-folio-85v, #next-85r, #previous-86r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-85v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-85v").show();	
		$(".folio").hide();	
		$("#85v").show();	
		$("#facs_preview").attr("src", "images/_previews/85v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/85v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 85 v //		
$(document).ready(function(){		
	$("#navbar-folio-85v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/85v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 86 r //			
$(document).ready(function(){			
	$("#navbar-folio-86r, #next-85v, #previous-86v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-86r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-86r").show();	
		$(".folio").hide();	
		$("#86r").show();	
		$("#facs_preview").attr("src", "images/_previews/86r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/86r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});	
});		
// Preview Facsimile 86 r //		
$(document).ready(function(){		
	$("#navbar-folio-86r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/86r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 86 v //		
$(document).ready(function(){		
	$("#navbar-folio-86v, #next-86r, #previous-87r").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-86v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-86v").show();
		$(".folio").hide();
		$("#86v").show();
		$("#facs_preview").attr("src", "images/_previews/86v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/86v.jpg");
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 86 v //		
$(document).ready(function(){		
	$("#navbar-folio-86v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/86v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 87 r //			
$(document).ready(function(){			
	$("#navbar-folio-87r, #next-86v, #previous-87v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-87r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-87r").show();	
		$(".folio").hide();	
		$("#87r").show();	
		$("#facs_preview").attr("src", "images/_previews/87r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/87r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 87 r //		
$(document).ready(function(){		
	$("#navbar-folio-87r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/87r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 87 v //			
$(document).ready(function(){			
	$("#navbar-folio-87v, #next-87r, #previous-88r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-87v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-87v").show();	
		$(".folio").hide();	
		$("#87v").show();	
		$("#facs_preview").attr("src", "images/_previews/87v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/87v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 87 v //		
$(document).ready(function(){		
	$("#navbar-folio-87v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/87v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 88 r //			
$(document).ready(function(){			
	$("#navbar-folio-88r, #next-87v, #previous-88v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-88r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-88r").show();	
		$(".folio").hide();	
		$("#88r").show();	
		$("#facs_preview").attr("src", "images/_previews/88r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/88r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 88 r //		
$(document).ready(function(){		
	$("#navbar-folio-88r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/88r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 88 v //			
$(document).ready(function(){			
	$("#navbar-folio-88v, #next-88r, #previous-89r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-88v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-88v").show();	
		$(".folio").hide();	
		$("#88v").show();	
		$("#facs_preview").attr("src", "images/_previews/88v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/88v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});	
});		
// Preview Facsimile 88 v //		
$(document).ready(function(){		
	$("#navbar-folio-88v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/88v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 89 r //		
$(document).ready(function(){		
	$("#navbar-folio-89r, #next-88v, #previous-89v").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-89r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-89r").show();
		$(".folio").hide();
		$("#89r").show();
		$("#facs_preview").attr("src", "images/_previews/89r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/89r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 89 r //		
$(document).ready(function(){		
	$("#navbar-folio-89r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/89r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 89 v //			
$(document).ready(function(){			
	$("#navbar-folio-89v, #next-89r, #previous-90r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-89v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-89v").show();	
		$(".folio").hide();	
		$("#89v").show();	
		$("#facs_preview").attr("src", "images/_previews/89v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/89v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 89 v //		
$(document).ready(function(){		
	$("#navbar-folio-89v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/89v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 90 r //			
$(document).ready(function(){			
	$("#navbar-folio-90r, #next-89v, #previous-90v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-90r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-90r").show();	
		$(".folio").hide();	
		$("#90r").show();	
		$("#facs_preview").attr("src", "images/_previews/90r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/90r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 90 r //		
$(document).ready(function(){		
	$("#navbar-folio-90r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/90r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 90 v //			
$(document).ready(function(){			
	$("#navbar-folio-90v, #next-90r, #previous-91r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-90v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-90v").show();	
		$(".folio").hide();	
		$("#90v").show();	
		$("#facs_preview").attr("src", "images/_previews/90v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/90v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 90 v //		
$(document).ready(function(){		
	$("#navbar-folio-90v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/90v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 91 r //			
$(document).ready(function(){			
	$("#navbar-folio-91r, #next-90v, #previous-91v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-91r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-91r").show();	
		$(".folio").hide();	
		$("#91r").show();	
		$("#facs_preview").attr("src", "images/_previews/91r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/91r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 91 r //		
$(document).ready(function(){		
	$("#navbar-folio-91r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/91r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 91 v //			
$(document).ready(function(){			
	$("#navbar-folio-91v, #next-91r, #previous-92r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-91v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-91v").show();	
		$(".folio").hide();	
		$("#91v").show();	
		$("#facs_preview").attr("src", "images/_previews/91v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/91v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 91 v //		
$(document).ready(function(){		
	$("#navbar-folio-91v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/91v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 92 r //			
$(document).ready(function(){			
	$("#navbar-folio-92r, #next-91v, #previous-92v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-92r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-92r").show();	
		$(".folio").hide();	
		$("#92r").show();	
		$("#facs_preview").attr("src", "images/_previews/92r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/92r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 92 r //		
$(document).ready(function(){		
	$("#navbar-folio-92r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/92r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 92 v //			
$(document).ready(function(){			
	$("#navbar-folio-92v, #next-92r, #previous-93r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-92v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-92v").show();	
		$(".folio").hide();	
		$("#92v").show();	
		$("#facs_preview").attr("src", "images/_previews/92v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/92v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 92 v //		
$(document).ready(function(){		
	$("#navbar-folio-92v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/92v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 93 r //			
$(document).ready(function(){			
	$("#navbar-folio-93r, #next-92v, #previous-93v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-93r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-93r").show();	
		$(".folio").hide();	
		$("#93r").show();	
		$("#facs_preview").attr("src", "images/_previews/93r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/93r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 93 r //		
$(document).ready(function(){		
	$("#navbar-folio-93r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/93r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 93 v //			
$(document).ready(function(){			
	$("#navbar-folio-93v, #next-93r, #previous-94r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-93v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-93v").show();	
		$(".folio").hide();	
		$("#93v").show();	
		$("#facs_preview").attr("src", "images/_previews/93v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/93v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 93 v //		
$(document).ready(function(){		
	$("#navbar-folio-93v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/93v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 94 r //			
$(document).ready(function(){			
	$("#navbar-folio-94r, #next-93v, #previous-94v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-94r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-94r").show();	
		$(".folio").hide();	
		$("#94r").show();	
		$("#facs_preview").attr("src", "images/_previews/94r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/94r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});	
});		
// Preview Facsimile 94 r //		
$(document).ready(function(){		
	$("#navbar-folio-94r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/94r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 94 v //		
$(document).ready(function(){		
	$("#navbar-folio-94v, #next-94r, #previous-95r").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-94v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-94v").show();
		$(".folio").hide();
		$("#94v").show();
		$("#facs_preview").attr("src", "images/_previews/94v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/94v.jpg");
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 94 v //		
$(document).ready(function(){		
	$("#navbar-folio-94v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/94v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 95 r //			
$(document).ready(function(){			
	$("#navbar-folio-95r, #next-94v, #previous-95v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-95r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-95r").show();	
		$(".folio").hide();	
		$("#95r").show();	
		$("#facs_preview").attr("src", "images/_previews/95r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/95r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 95 r //		
$(document).ready(function(){		
	$("#navbar-folio-95r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/95r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 95 v //			
$(document).ready(function(){			
	$("#navbar-folio-95v, #next-95r, #previous-96r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-95v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-95v").show();	
		$(".folio").hide();	
		$("#95v").show();	
		$("#facs_preview").attr("src", "images/_previews/95v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/95v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 95 v //		
$(document).ready(function(){		
	$("#navbar-folio-95v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/95v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 96 r //			
$(document).ready(function(){			
	$("#navbar-folio-96r, #next-95v, #previous-96v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-96r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-96r").show();	
		$(".folio").hide();	
		$("#96r").show();	
		$("#facs_preview").attr("src", "images/_previews/96r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/96r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 96 r //		
$(document).ready(function(){		
	$("#navbar-folio-96r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/96r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 96 v //			
$(document).ready(function(){			
	$("#navbar-folio-96v, #next-96r, #previous-97r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-96v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-96v").show();	
		$(".folio").hide();	
		$("#96v").show();	
		$("#facs_preview").attr("src", "images/_previews/96v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/96v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});	
});		
// Preview Facsimile 96 v //		
$(document).ready(function(){		
	$("#navbar-folio-96v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/96v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 97 r //		
$(document).ready(function(){		
	$("#navbar-folio-97r, #next-96v, #previous-97v").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-97r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-97r").show();
		$(".folio").hide();
		$("#97r").show();
		$("#facs_preview").attr("src", "images/_previews/97r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/97r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 97 r //		
$(document).ready(function(){		
	$("#navbar-folio-97r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/97r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 97 v //			
$(document).ready(function(){			
	$("#navbar-folio-97v, #next-97r, #previous-98r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-97v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-97v").show();	
		$(".folio").hide();	
		$("#97v").show();	
		$("#facs_preview").attr("src", "images/_previews/97v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/97v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 97 v //		
$(document).ready(function(){		
	$("#navbar-folio-97v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/97v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 98 r //			
$(document).ready(function(){			
	$("#navbar-folio-98r, #next-97v, #previous-98v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-98r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-98r").show();	
		$(".folio").hide();	
		$("#98r").show();	
		$("#facs_preview").attr("src", "images/_previews/98r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/98r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 98 r //		
$(document).ready(function(){		
	$("#navbar-folio-98r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/98r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 98 v //			
$(document).ready(function(){			
	$("#navbar-folio-98v, #next-98r, #previous-99r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-98v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-98v").show();	
		$(".folio").hide();	
		$("#98v").show();	
		$("#facs_preview").attr("src", "images/_previews/98v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/98v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 98 v //		
$(document).ready(function(){		
	$("#navbar-folio-98v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/98v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 99 r //			
$(document).ready(function(){			
	$("#navbar-folio-99r, #next-98v, #previous-99v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-99r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-99r").show();	
		$(".folio").hide();	
		$("#99r").show();	
		$("#facs_preview").attr("src", "images/_previews/99r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/99r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});
// Preview Facsimile 99 r //		
$(document).ready(function(){		
	$("#navbar-folio-99r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/99r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 99 v //			
$(document).ready(function(){			
	$("#navbar-folio-99v, #next-99r, #previous-100r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-99v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-99v").show();	
		$(".folio").hide();	
		$("#99v").show();	
		$("#facs_preview").attr("src", "images/_previews/99v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/99v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 99 v //		
$(document).ready(function(){		
	$("#navbar-folio-99v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/99v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 100 r //			
$(document).ready(function(){			
	$("#navbar-folio-100r, #next-99v, #previous-100v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-100r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-100r").show();	
		$(".folio").hide();	
		$("#100r").show();	
		$("#facs_preview").attr("src", "images/_previews/100r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/100r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 100 r //		
$(document).ready(function(){		
	$("#navbar-folio-100r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/100r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 100 v //			
$(document).ready(function(){			
	$("#navbar-folio-100v, #next-100r, #previous-101r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-100v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-100v").show();	
		$(".folio").hide();	
		$("#100v").show();	
		$("#facs_preview").attr("src", "images/_previews/100v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/100v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 100 v //		
$(document).ready(function(){		
	$("#navbar-folio-100v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/100v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 101 r //			
$(document).ready(function(){			
	$("#navbar-folio-101r, #next-100v, #previous-101v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-101r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-101r").show();	
		$(".folio").hide();	
		$("#101r").show();	
		$("#facs_preview").attr("src", "images/_previews/101r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/101r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 101 r //		
$(document).ready(function(){		
	$("#navbar-folio-101r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/101r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 101 v //			
$(document).ready(function(){			
	$("#navbar-folio-101v, #next-101r, #previous-102r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-101v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-101v").show();	
		$(".folio").hide();	
		$("#101v").show();	
		$("#facs_preview").attr("src", "images/_previews/101v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/101v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 101 v //		
$(document).ready(function(){		
	$("#navbar-folio-101v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/101v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 102 r //			
$(document).ready(function(){			
	$("#navbar-folio-102r, #next-101v, #previous-102v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-102r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-102r").show();	
		$(".folio").hide();	
		$("#102r").show();	
		$("#facs_preview").attr("src", "images/_previews/102r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/102r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});	
});		
// Preview Facsimile 102 r //		
$(document).ready(function(){		
	$("#navbar-folio-102r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/102r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 102 v //		
$(document).ready(function(){		
	$("#navbar-folio-102v, #next-102r, #previous-103r").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-102v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-102v").show();
		$(".folio").hide();
		$("#102v").show();
		$("#facs_preview").attr("src", "images/_previews/102v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/102v.jpg");
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 102 v //		
$(document).ready(function(){		
	$("#navbar-folio-102v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/102v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 103 r //			
$(document).ready(function(){			
	$("#navbar-folio-103r, #next-102v, #previous-103v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-103r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-103r").show();	
		$(".folio").hide();	
		$("#103r").show();	
		$("#facs_preview").attr("src", "images/_previews/103r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/103r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 103 r //		
$(document).ready(function(){		
	$("#navbar-folio-103r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/103r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 103 v //			
$(document).ready(function(){			
	$("#navbar-folio-103v, #next-103r, #previous-104r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-103v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-103v").show();	
		$(".folio").hide();	
		$("#103v").show();	
		$("#facs_preview").attr("src", "images/_previews/103v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/103v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 103 v //		
$(document).ready(function(){		
	$("#navbar-folio-103v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/103v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 104 r //			
$(document).ready(function(){			
	$("#navbar-folio-104r, #next-103v, #previous-104v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-104r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-104r").show();	
		$(".folio").hide();	
		$("#104r").show();	
		$("#facs_preview").attr("src", "images/_previews/104r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/104r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 104 r //		
$(document).ready(function(){		
	$("#navbar-folio-104r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/104r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 104 v //			
$(document).ready(function(){			
	$("#navbar-folio-104v, #next-104r, #previous-105r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-104v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-104v").show();	
		$(".folio").hide();	
		$("#104v").show();	
		$("#facs_preview").attr("src", "images/_previews/104v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/104v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});	
});		
// Preview Facsimile 104 v //		
$(document).ready(function(){		
	$("#navbar-folio-104v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/104v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 105 r //		
$(document).ready(function(){		
	$("#navbar-folio-105r, #next-104v, #previous-105v").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-105r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-105r").show();
		$(".folio").hide();
		$("#105r").show();
		$("#facs_preview").attr("src", "images/_previews/105r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/105r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 105 r //		
$(document).ready(function(){		
	$("#navbar-folio-105r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/105r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 105 v //			
$(document).ready(function(){			
	$("#navbar-folio-105v, #next-105r, #previous-106r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-105v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-105v").show();	
		$(".folio").hide();	
		$("#105v").show();	
		$("#facs_preview").attr("src", "images/_previews/105v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/105v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 105 v //		
$(document).ready(function(){		
	$("#navbar-folio-105v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/105v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 106 r //			
$(document).ready(function(){			
	$("#navbar-folio-106r, #next-105v, #previous-106v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-106r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-106r").show();	
		$(".folio").hide();	
		$("#106r").show();	
		$("#facs_preview").attr("src", "images/_previews/106r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/106r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 106 r //		
$(document).ready(function(){		
	$("#navbar-folio-106r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/106r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 106 v //			
$(document).ready(function(){			
	$("#navbar-folio-106v, #next-106r, #previous-107r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-106v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-106v").show();	
		$(".folio").hide();	
		$("#106v").show();	
		$("#facs_preview").attr("src", "images/_previews/106v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/106v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 106 v //		
$(document).ready(function(){		
	$("#navbar-folio-106v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/106v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 107 r //			
$(document).ready(function(){			
	$("#navbar-folio-107r, #next-106v, #previous-107v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-107r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-107r").show();	
		$(".folio").hide();	
		$("#107r").show();	
		$("#facs_preview").attr("src", "images/_previews/107r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/107r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 107 r //		
$(document).ready(function(){		
	$("#navbar-folio-107r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/107r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 107 v //			
$(document).ready(function(){			
	$("#navbar-folio-107v, #next-107r, #previous-108r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-107v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-107v").show();	
		$(".folio").hide();	
		$("#107v").show();	
		$("#facs_preview").attr("src", "images/_previews/107v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/107v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 107 v //		
$(document).ready(function(){		
	$("#navbar-folio-107v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/107v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 108 r //			
$(document).ready(function(){			
	$("#navbar-folio-108r, #next-107v, #previous-108v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-108r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-108r").show();	
		$(".folio").hide();	
		$("#108r").show();	
		$("#facs_preview").attr("src", "images/_previews/108r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/108r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 108 r //		
$(document).ready(function(){		
	$("#navbar-folio-108r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/108r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 108 v //			
$(document).ready(function(){			
	$("#navbar-folio-108v, #next-108r, #previous-109r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-108v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-108v").show();	
		$(".folio").hide();	
		$("#108v").show();	
		$("#facs_preview").attr("src", "images/_previews/108v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/108v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 108 v //		
$(document).ready(function(){		
	$("#navbar-folio-108v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/108v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 109 r //			
$(document).ready(function(){			
	$("#navbar-folio-109r, #next-108v, #previous-109v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-109r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-109r").show();	
		$(".folio").hide();	
		$("#109r").show();	
		$("#facs_preview").attr("src", "images/_previews/109r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/109r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 109 r //		
$(document).ready(function(){		
	$("#navbar-folio-109r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/109r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 109 v //			
$(document).ready(function(){			
	$("#navbar-folio-109v, #next-109r, #previous-110r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-109v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-109v").show();	
		$(".folio").hide();	
		$("#109v").show();	
		$("#facs_preview").attr("src", "images/_previews/109v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/109v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 109 v //		
$(document).ready(function(){		
	$("#navbar-folio-109v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/109v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 110 r //			
$(document).ready(function(){			
	$("#navbar-folio-110r, #next-109v, #previous-110v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-110r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-110r").show();	
		$(".folio").hide();	
		$("#110r").show();	
		$("#facs_preview").attr("src", "images/_previews/110r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/110r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});	
});		
// Preview Facsimile 110 r //		
$(document).ready(function(){		
	$("#navbar-folio-110r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/110r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 110 v //		
$(document).ready(function(){		
	$("#navbar-folio-110v, #next-110r, #previous-111r").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-110v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-110v").show();
		$(".folio").hide();
		$("#110v").show();
		$("#facs_preview").attr("src", "images/_previews/110v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/110v.jpg");
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 110 v //		
$(document).ready(function(){		
	$("#navbar-folio-110v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/110v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 111 r //			
$(document).ready(function(){			
	$("#navbar-folio-111r, #next-110v, #previous-111v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-111r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-111r").show();	
		$(".folio").hide();	
		$("#111r").show();	
		$("#facs_preview").attr("src", "images/_previews/111r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/111r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 111 r //		
$(document).ready(function(){		
	$("#navbar-folio-111r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/111r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 111 v //			
$(document).ready(function(){			
	$("#navbar-folio-111v, #next-111r, #previous-112r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-111v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-111v").show();	
		$(".folio").hide();	
		$("#111v").show();	
		$("#facs_preview").attr("src", "images/_previews/111v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/111v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 111 v //		
$(document).ready(function(){		
	$("#navbar-folio-111v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/111v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 112 r //			
$(document).ready(function(){			
	$("#navbar-folio-112r, #next-111v, #previous-112v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-112r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-112r").show();	
		$(".folio").hide();	
		$("#112r").show();	
		$("#facs_preview").attr("src", "images/_previews/112r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/112r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 112 r //		
$(document).ready(function(){		
	$("#navbar-folio-112r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/112r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 112 v //			
$(document).ready(function(){			
	$("#navbar-folio-112v, #next-112r, #previous-113r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-112v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-112v").show();	
		$(".folio").hide();	
		$("#112v").show();	
		$("#facs_preview").attr("src", "images/_previews/112v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/112v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});	
});		
// Preview Facsimile 112 v //		
$(document).ready(function(){		
	$("#navbar-folio-112v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/112v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 113 r //		
$(document).ready(function(){		
	$("#navbar-folio-113r, #next-112v, #previous-113v").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-113r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-113r").show();
		$(".folio").hide();
		$("#113r").show();
		$("#facs_preview").attr("src", "images/_previews/113r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/113r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 113 r //		
$(document).ready(function(){		
	$("#navbar-folio-113r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/113r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 113 v //			
$(document).ready(function(){			
	$("#navbar-folio-113v, #next-113r, #previous-114r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-113v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-113v").show();	
		$(".folio").hide();	
		$("#113v").show();	
		$("#facs_preview").attr("src", "images/_previews/113v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/113v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 113 v //		
$(document).ready(function(){		
	$("#navbar-folio-113v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/113v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 114 r //			
$(document).ready(function(){			
	$("#navbar-folio-114r, #next-113v, #previous-114v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-114r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-114r").show();	
		$(".folio").hide();	
		$("#114r").show();	
		$("#facs_preview").attr("src", "images/_previews/114r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/114r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 114 r //		
$(document).ready(function(){		
	$("#navbar-folio-114r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/114r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 114 v //			
$(document).ready(function(){			
	$("#navbar-folio-114v, #next-114r, #previous-115r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-114v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-114v").show();	
		$(".folio").hide();	
		$("#114v").show();	
		$("#facs_preview").attr("src", "images/_previews/114v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/114v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 114 v //		
$(document).ready(function(){		
	$("#navbar-folio-114v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/114v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 115 r //			
$(document).ready(function(){			
	$("#navbar-folio-115r, #next-114v, #previous-115v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-115r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-115r").show();	
		$(".folio").hide();	
		$("#115r").show();	
		$("#facs_preview").attr("src", "images/_previews/115r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/115r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 115 r //		
$(document).ready(function(){		
	$("#navbar-folio-115r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/115r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 115 v //			
$(document).ready(function(){			
	$("#navbar-folio-115v, #next-115r, #previous-116r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-115v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-115v").show();	
		$(".folio").hide();	
		$("#115v").show();	
		$("#facs_preview").attr("src", "images/_previews/115v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/115v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 115 v //		
$(document).ready(function(){		
	$("#navbar-folio-115v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/115v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 116 r //			
$(document).ready(function(){			
	$("#navbar-folio-116r, #next-115v, #previous-116v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-116r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-116r").show();	
		$(".folio").hide();	
		$("#116r").show();	
		$("#facs_preview").attr("src", "images/_previews/116r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/116r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 116 r //		
$(document).ready(function(){		
	$("#navbar-folio-116r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/116r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 116 v //			
$(document).ready(function(){			
	$("#navbar-folio-116v, #next-116r, #previous-117r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-116v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-116v").show();	
		$(".folio").hide();	
		$("#116v").show();	
		$("#facs_preview").attr("src", "images/_previews/116v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/116v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 116 v //		
$(document).ready(function(){		
	$("#navbar-folio-116v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/116v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 117 r //			
$(document).ready(function(){			
	$("#navbar-folio-117r, #next-116v, #previous-117v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-117r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-117r").show();	
		$(".folio").hide();	
		$("#117r").show();	
		$("#facs_preview").attr("src", "images/_previews/117r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/117r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 117 r //		
$(document).ready(function(){		
	$("#navbar-folio-117r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/117r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 117 v //			
$(document).ready(function(){			
	$("#navbar-folio-117v, #next-117r, #previous-118r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-117v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-117v").show();	
		$(".folio").hide();	
		$("#117v").show();	
		$("#facs_preview").attr("src", "images/_previews/117v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/117v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 117 v //		
$(document).ready(function(){		
	$("#navbar-folio-117v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/117v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 118 r //			
$(document).ready(function(){			
	$("#navbar-folio-118r, #next-117v, #previous-118v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-118r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-118r").show();	
		$(".folio").hide();	
		$("#118r").show();	
		$("#facs_preview").attr("src", "images/_previews/118r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/118r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});	
});		
// Preview Facsimile 118 r //		
$(document).ready(function(){		
	$("#navbar-folio-118r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/118r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 118 v //		
$(document).ready(function(){		
	$("#navbar-folio-118v, #next-118r, #previous-119r").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-118v").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-118v").show();
		$(".folio").hide();
		$("#118v").show();
		$("#facs_preview").attr("src", "images/_previews/118v_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/118v.jpg");
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 118 v //		
$(document).ready(function(){		
	$("#navbar-folio-118v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/118v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 119 r //			
$(document).ready(function(){			
	$("#navbar-folio-119r, #next-118v, #previous-119v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-119r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-119r").show();	
		$(".folio").hide();	
		$("#119r").show();	
		$("#facs_preview").attr("src", "images/_previews/119r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/119r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 119 r //		
$(document).ready(function(){		
	$("#navbar-folio-119r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/119r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 119 v //			
$(document).ready(function(){			
	$("#navbar-folio-119v, #next-119r, #previous-120r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-119v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-119v").show();	
		$(".folio").hide();	
		$("#119v").show();	
		$("#facs_preview").attr("src", "images/_previews/119v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/119v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 119 v //		
$(document).ready(function(){		
	$("#navbar-folio-119v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/119v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 120 r //			
$(document).ready(function(){			
	$("#navbar-folio-120r, #next-119v, #previous-120v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-120r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-120r").show();	
		$(".folio").hide();	
		$("#120r").show();	
		$("#facs_preview").attr("src", "images/_previews/120r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/120r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 120 r //		
$(document).ready(function(){		
	$("#navbar-folio-120r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/120r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 120 v //			
$(document).ready(function(){			
	$("#navbar-folio-120v, #next-120r, #previous-121r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-120v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-120v").show();	
		$(".folio").hide();	
		$("#120v").show();	
		$("#facs_preview").attr("src", "images/_previews/120v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/120v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});	
});		
// Preview Facsimile 120 v //		
$(document).ready(function(){		
	$("#navbar-folio-120v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/120v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 121 r //		
$(document).ready(function(){		
	$("#navbar-folio-121r, #next-120v, #previous-121v").click(function(){	
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-121r").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-121r").show();
		$(".folio").hide();
		$("#121r").show();
		$("#facs_preview").attr("src", "images/_previews/121r_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/121r.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 121 r //		
$(document).ready(function(){		
	$("#navbar-folio-121r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/121r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 121 v //			
$(document).ready(function(){			
	$("#navbar-folio-121v, #next-121r, #previous-122r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-121v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-121v").show();	
		$(".folio").hide();	
		$("#121v").show();	
		$("#facs_preview").attr("src", "images/_previews/121v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/121v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 121 v //		
$(document).ready(function(){		
	$("#navbar-folio-121v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/121v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 122 r //			
$(document).ready(function(){			
	$("#navbar-folio-122r, #next-121v, #previous-122v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-122r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-122r").show();	
		$(".folio").hide();	
		$("#122r").show();	
		$("#facs_preview").attr("src", "images/_previews/122r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/122r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 122 r //		
$(document).ready(function(){		
	$("#navbar-folio-122r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/122r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 122 v //			
$(document).ready(function(){			
	$("#navbar-folio-122v, #next-122r, #previous-123r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-122v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-122v").show();	
		$(".folio").hide();	
		$("#122v").show();	
		$("#facs_preview").attr("src", "images/_previews/122v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/122v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 122 v //		
$(document).ready(function(){		
	$("#navbar-folio-122v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/122v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 123 r //			
$(document).ready(function(){			
	$("#navbar-folio-123r, #next-122v, #previous-123v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-123r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-123r").show();	
		$(".folio").hide();	
		$("#123r").show();	
		$("#facs_preview").attr("src", "images/_previews/123r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/123r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 123 r //		
$(document).ready(function(){		
	$("#navbar-folio-123r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/123r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 123 v //			
$(document).ready(function(){			
	$("#navbar-folio-123v, #next-123r, #previous-124r").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-123v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-123v").show();	
		$(".folio").hide();	
		$("#123v").show();	
		$("#facs_preview").attr("src", "images/_previews/123v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/123v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 123 v //		
$(document).ready(function(){		
	$("#navbar-folio-123v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/123v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 124 r //			
$(document).ready(function(){			
	$("#navbar-folio-124r, #next-123v, #previous-124v").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-124r").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-124r").show();	
		$(".folio").hide();	
		$("#124r").show();	
		$("#facs_preview").attr("src", "images/_previews/124r_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/124r.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 124 r //		
$(document).ready(function(){		
	$("#navbar-folio-124r").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/124r_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});		
// Select 124 v //			
$(document).ready(function(){			
	$("#navbar-folio-124v, #next-124r, #previous-rpd").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-folio-124v").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-124v").show();	
		$(".folio").hide();	
		//$("#124v").show();	
		$("#na").show();	
		$("#facs_preview").attr("src", "images/_previews/124v_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "images/facsimiles/124v.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});	
// Preview Facsimile 124 v //		
$(document).ready(function(){		
	$("#navbar-folio-124v").hover(function(){	
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/124v_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select Rear Pastedown //
$(document).ready(function(){
	$("#navbar-rpd, #next-124v, #previous-rbdg").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-rpd").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-rpd").show();
		$(".folio").hide();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/rear_pastedown_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/rear_pastedown.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Rear Pastedown //
$(document).ready(function(){
	$("#navbar-rpd").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/rear_pastedown_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Select Rear Binding //
$(document).ready(function(){
	$("#navbar-rbdg, #next-rpd, #last_button").click(function(){
		$(".shortcut").css("color", "#FFF");
		$("#navbar-folio-rbdg").css("color", "#09C");
		$(".navbar-navigation").hide();
		$("#navbar-navigation-rbdg").show();
		$(".folio").hide();
		$("#na").show();
		$("#facs_preview").attr("src", "images/_previews/rear_binding_preview.jpg");
		$("#facs_preview").show();
		$("#facs").attr("src", "images/facsimiles/rear_binding.jpg");
		$("#facs").load(function(){
			$("#facs_preview").hide();
			$("#facs").show();
		});
	});
});
// Preview Rear Binding //
$(document).ready(function(){
	$("#navbar-rbdg").hover(function(){
		$("#navbar-facs").show();
		$("#navbar-facs_preview").attr("src", "images/_previews/rear_binding_preview.jpg");
		$("#navbar-facs_preview").show();
		},function(){
		$("#navbar-facs").hide();
		$("#navbar-facs_preview").attr("src", "images/_previews/blank.jpg");
	});
});
// Toggle View //
$(document).ready(function(){
	$("#toggle-view").toggle(function(){ //Facsimile View//
		$("#toggle-view").attr("src", "images/navbar/facsimile_ro.jpg");
		$("#content-right").css("width", "0");
		$("#content-right").css("height", "0");
		$("#content-left").css("width", "100%");
		$("#content-left").css("height", "100%");},
		function(){ //Transcription View//
		$("#toggle-view").attr("src", "images/navbar/transcription_ro.jpg");
		$("#content-left").css("width", "0");
		$("#content-left").css("height", "0");
		$("#content-right").css("width", "100%");
		$("#content-right").css("height", "100%");
		$("#copyright").css("display", "none");},
		function(){ //Facsimile-Transcription View//
		$("#toggle-view").attr("src", "images/navbar/facsimile-transcription_ro.jpg");
		$("#content-right").css("width", "49.97%");
		$("#content-right").css("height", "100%");
		$("#content-left").css("width", "49.97%");
		$("#content-left").css("height", "100%");
		$("#copyright").css("display", "");}
	);
});
// Toggle Magnification Drop-down //
$(document).ready(function(){
    $("#toggle-magnify").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-scribe").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-magnify").toggle();
    });
});
// Reset Image Magnification for Very Small Screens //
$(document).ready(function(){
	$("#x0").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x0").css("color", "#09C");
		//$("#facs").attr("width", "900");
		$("#facs_preview, #facs").attr("height", "905");
		//$("#facs_preview, #facs").attr("width", "100%");//
	});
});
// Reset Image Magnification to One Times (Default) //
$(document).ready(function(){
	$("#x1").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x1").css("color", "#09C");
		//$("#facs").attr("width", "900");
		$("#facs_preview, #facs").attr("height", "1350");
		//$("#facs_preview, #facs").attr("width", "100%");//
	});
});
// Magnify Image Two Times //
$(document).ready(function(){
	$("#x2").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x2").css("color", "#09C");
		//$("#facs").attr("width", "1800");
		$("#facs_preview, #facs").attr("height", "2700");
		//$("#facs_preview, #facs").attr("width", "200%");//
	});
});
// Magnify Image Four Times //
$(document).ready(function(){
	$("#x4").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x4").css("color", "#09C");
		//$("#facs").attr("width", "3600");
		$("#facs_preview, #facs").attr("height", "5400");
		//$("#facs_preview, #facs").attr("width", "400%");//
	});
});
// Magnify Image Eight Times //
$(document).ready(function(){
	$("#x8").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#09C");
		//$("#facs").attr("width", "7200");
		$("#facs_preview, #facs").attr("height", "10800");
		//$("#facs_preview, #facs").attr("width", "800%");//
	});
});
// Toggle Point Size Drop-down //
$(document).ready(function(){
    $("#toggle-enlarge").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-magnify").hide();
		$("#navbar-scribe").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-enlarge").toggle();
    });
});
// Reduce Text to 8pt (Very Small Screen Default) //
$(document).ready(function(){
	$("#8pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#8pt").css("color", "#09C");
		$(".medieval").css("line-height", "8pt");
		$(".medieval").css("font-size", "8pt");
	});
});
// Reset Text to 12pt (Default) //
$(document).ready(function(){
	$("#12pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#12pt").css("color", "#09C");
		$(".medieval").css("line-height", "12pt");
		$(".medieval").css("font-size", "12pt");
	});
});
// Enlarge Text to 16pt //
$(document).ready(function(){
	$("#16pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#16pt").css("color", "#09C");
		$(".medieval").css("line-height", "16pt");
		$(".medieval").css("font-size", "16pt");
	});
});
// Enlarge Text to 20pt //
$(document).ready(function(){
	$("#20pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#20pt").css("color", "#09C");
		$(".medieval").css("line-height", "20pt");
		$(".medieval").css("font-size", "20pt");
	});
});
// Enlarge Text to 24pt //
$(document).ready(function(){
	$("#24pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#09C");
		$(".medieval").css("line-height", "24pt");
		$(".medieval").css("font-size", "24pt");
	});
});
// Toggle Scribe Drop-down //
$(document).ready(function(){
    $("#toggle-scribe").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-scribe").toggle();
	});
});
// Toggle Salthows //
$(document).ready(function(){
	$("#toggle-SALTHOWS").toggle(function(){
		$("#toggle-SALTHOWS").css("color", "#FFF");
		$(".underline").css("border", "none");
		$(".box8").css("border", "none");
		$(".del-expunction").hide();
		$(".del-strikethrough").css("text-decoration", "none");
		$(".del-strikethrough-expunction").css("text-decoration", "none");							// XSLT? //
		$(".del-strikethrough-RED_INK_ANNOTATOR-SALTHOWS").css("text-decoration", "none");
		$(".add").hide();
		$(".add-above").hide();
		$(".add-below").hide();
		$(".subst-del-strikethrough").css("text-decoration", "none");
		$(".subst-add-above").hide();
		$(".subst-add-above-overwriting").hide();
		$(".subst-add-below").hide();
		$(".subst-add-below-overwriting").hide();
		$(".add-top-left-corner-SALTHOWS").hide();
		$(".add-top-right-corner-SALTHOWS").hide();
		$(".add-margin-left-SALTHOWS").hide();
		$(".add-inclusion-margin-left-SALTHOWS").hide();
		$(".add-box2-RIA-margin-left-SALTHOWS").css("color", "#FFF");
		$(".add-box5-RP-margin-left-SALTHOWS").css("color", "#FFF");
		$(".add-bottom-right-SALTHOWS").hide();
		$(".add-margin-right-SALTHOWS").hide();
		$(".add-box1-BBR-margin-right-SALTHOWS").css("color", "#FFF");
		$(".add-box2-RIA-margin-right-SALTHOWS").css("color", "#FFF");
		$(".add-box3-RIA-margin-right-SALTHOWS").css("color", "#FFF");
		$(".add-box5-RIA-margin-right-SALTHOWS").css("color", "#FFF");
		$(".add-box5-RP-margin-right-SALTHOWS").css("color", "#FFF");
		$(".add-box8-SAL-bottom-right-SALTHOWS").css("border", "none");},
		function(){
		$("#toggle-SALTHOWS").css("color", "#09C");
		$(".underline").css("border-bottom", "1px solid #000");
		$(".box8").css({"border-left":"1px solid #000", "border-bottom":"1px solid #000"});
		$(".del-expunction").show();
		$(".del-strikethrough").css("text-decoration","line-through");
		$(".del-strikethrough-expunction").css("text-decoration","line-through");					// XSLT? //
		if ($(".subst-del").is(":visible")){
			$(".del-strikethrough-RED_INK_ANNOTATOR-SALTHOWS").css("text-decoration", "line-through");
		}
		$(".add").show();
		$(".add-above").show();
		$(".add-below").show();
		$(".subst-del-strikethrough").css("text-decoration", "line-through");
		$(".subst-add-above").show();
		$(".subst-add-above-overwriting").show();
		$(".subst-add-below").show();
		$(".subst-add-below-overwriting").show();
		$(".add-top-left-corner-SALTHOWS").show();
		$(".add-top-right-corner-SALTHOWS").show();
		$(".add-margin-left-SALTHOWS").show();
		$(".add-inclusion-margin-left-SALTHOWS").show();
		$(".add-box2-RIA-margin-left-SALTHOWS").css("color", "#000");
		$(".add-box5-RP-margin-left-SALTHOWS").css("color", "#000");
		$(".add-bottom-right-SALTHOWS").show();
		$(".add-margin-right-SALTHOWS").show();
		$(".add-box1-BBR-margin-right-SALTHOWS").css("color", "000");
		$(".add-box2-RIA-margin-right-SALTHOWS").css("color", "#000");
		$(".add-box3-RIA-margin-right-SALTHOWS").css("color", "#000");
		$(".add-box5-RIA-margin-right-SALTHOWS").css("color", "#000");
		$(".add-box5-RP-margin-right-SALTHOWS").css("color", "#000");
		$(".add-box8-SAL-bottom-right-SALTHOWS").css({"border-left":"1px solid #000", "border-bottom":"1px solid #000"});}
	);
});
// Toggle Little Brown //
$(document).ready(function(){
	$("#toggle-LITTLE_BROWN").toggle(function(){
		$("#toggle-LITTLE_BROWN").css("color", "#FFF");
		$(".add-LITTLE_BROWN").hide();
		$(".add-above-LITTLE_BROWN").hide();
		$(".add-below-LITTLE_BROWN").hide();
		$(".add-inclusion-margin-left-LITTLE_BROWN").css("color", "#FFF");
		$(".add-margin-left-LITTLE_BROWN").hide();
		$(".add-box1-RIA-margin-left-LITTLE_BROWN").css("color", "#FFF");
		$(".add-box8-RIA-margin-left-LITTLE_BROWN").css("color", "#FFF");
		$(".add-margin-right-LITTLE_BROWN").hide();
		$(".add-box1-RIA-margin-right-LITTLE_BROWN").css("color", "#FFF");},
		function(){
		$("#toggle-LITTLE_BROWN").css("color", "#09C");
		$(".add-LITTLE_BROWN").show();
		$(".add-above-LITTLE_BROWN").show();
		$(".add-below-LITTLE_BROWN").show();
		$(".add-inclusion-margin-left-LITTLE_BROWN").css("color", "#960");
		$(".add-margin-left-LITTLE_BROWN").show();
		$(".add-box1-RIA-margin-left-LITTLE_BROWN").css("color", "#960");
		$(".add-box8-RIA-margin-left-LITTLE_BROWN").css("color", "#960");
		$(".add-margin-right-LITTLE_BROWN").show();
		$(".add-box1-RIA-margin-right-LITTLE_BROWN").css("color", "#960");}
	);
});
// Toggle Mount Grace //
$(document).ready(function(){
	$("#toggle-MOUNT_GRACE").toggle(function(){
		$("#toggle-MOUNT_GRACE").css("color", "#FFF");
		$(".add-MOUNT_GRACE").hide();
		$(".add-above-MOUNT_GRACE").hide();
		$(".add-below-MOUNT_GRACE").hide();
		$(".add-margin-left-MOUNT_GRACE").hide();
		$(".add-margin-right-MOUNT_GRACE").hide();},
		function(){
		$("#toggle-MOUNT_GRACE").css("color", "#09C");
		$(".add-MOUNT_GRACE").show();
		$(".add-above-MOUNT_GRACE").show();
		$(".add-below-MOUNT_GRACE").show();
		$(".add-margin-left-MOUNT_GRACE").show();
		$(".add-margin-right-MOUNT_GRACE").show();}
	);
});
// Toggle Flag //
$(document).ready(function(){
	$("#toggle-FLAG").toggle(function(){
		$("#toggle-FLAG").css("color", "#FFF");
		$(".add-FLAG").hide();
		$(".add-above-FLAG").hide();
		$(".add-below-FLAG").hide();
		$(".add-margin-left-FLAG").hide();
		$(".add-margin-right-FLAG").hide();},
		function(){
		$("#toggle-FLAG").css("color", "#09C");
		$(".add-FLAG").show();
		$(".add-above-FLAG").show();
		$(".add-below-FLAG").show();
		$(".add-margin-left-FLAG").show();
		$(".add-margin-right-FLAG").show();}
	);
});
// Toggle Tiny Brown Notae //
$(document).ready(function(){
	$("#toggle-TINY_BROWN_NOTAE").toggle(function(){
		$("#toggle-TINY_BROWN_NOTAE").css("color", "#FFF");
		$(".add-TINY_BROWN_NOTAE").hide();
		$(".add-above-TINY_BROWN_NOTAE").hide();
		$(".add-below-TINY_BROWN_NOTAE").hide();
		$(".add-margin-left-TINY_BROWN_NOTAE").hide();
		$(".add-margin-right-TINY_BROWN_NOTAE").hide();},
		function(){
		$("#toggle-TINY_BROWN_NOTAE").css("color", "#09C");
		$(".add-TINY_BROWN_NOTAE").show();
		$(".add-above-TINY_BROWN_NOTAE").show();
		$(".add-below-TINY_BROWN_NOTAE").show();
		$(".add-margin-left-TINY_BROWN_NOTAE").show();
		$(".add-margin-right-TINY_BROWN_NOTAE").show();}
	);
});
// Toggle Big Brown //
$(document).ready(function(){
	$("#toggle-BIG_BROWN").toggle(function(){
		$("#toggle-BIG_BROWN").css("color", "#FFF");
		$(".add-BIG_BROWN").hide();
		$(".add-above-BIG_BROWN").hide();
		$(".add-below-BIG_BROWN").hide();
		$(".add-margin-left-BIG_BROWN").hide();
		$(".add-box1-RIA-margin-left-BIG_BROWN").css("color", "#FFF");
		$(".add-margin-right-BIG_BROWN").hide();},
		function(){
		$("#toggle-BIG_BROWN").css("color", "#09C");
		$(".add-BIG_BROWN").show();
		$(".add-above-BIG_BROWN").show();
		$(".add-below-BIG_BROWN").show();
		$(".add-margin-left-BIG_BROWN").show();
		$(".add-box1-RIA-margin-left-BIG_BROWN").css("color", "#630");
		$(".add-margin-right-BIG_BROWN").show();}
	);
});
// Toggle Plummet //
$(document).ready(function(){
	$("#toggle-PLUMMET").toggle(function(){
		$("#toggle-PLUMMET").css("color", "#FFF");
		$(".add-PLUMMET").hide();
		$(".add-above-PLUMMET").hide();
		$(".add-below-PLUMMET").hide();
		$(".add-margin-left-PLUMMET").hide();
		$(".add-margin-right-PLUMMET").hide();
		$(".add-box1-RIA-margin-left-PLUMMET").css("color", "#FFF");},
		function(){
		$("#toggle-PLUMMET").css("color", "#09C");
		$(".add-PLUMMET").show();
		$(".add-above-PLUMMET").show();
		$(".add-below-PLUMMET").show();
		$(".add-margin-left-PLUMMET").show();
		$(".add-margin-right-PLUMMET").show();
		$(".add-box1-RIA-margin-left-PLUMMET").css("color", "#999");}
	);
});
// Toggle Big Black //
$(document).ready(function(){
	$("#toggle-BIG_BLACK").toggle(function(){
		$("#toggle-BIG_BLACK").css("color", "#FFF");
		$(".highlight-BBL").css("background-color", "#FFF");										// XSLT? //
		$(".underline-BBL").css("border", "none");													// XSLT? //
		$(".del-strikethrough-BIG_BLACK").css("text-decoration", "none");
		$(".add-BIG_BLACK").hide();
		$(".add-above-BIG_BLACK").hide();
		$(".add-below-BIG_BLACK").hide();
		$(".subst-add-overwriting-BIG_BLACK").hide();												// XSLT? //
		$(".subst-del").show();																		// XSLT Fix //
		$(".add-margin-left-BIG_BLACK").hide();
		$(".add-box1-RIA-margin-left-BIG_BLACK").css("color", "#FFF");
		$(".add-box8-RIA-margin-left-BIG_BLACK").css("color", "#FFF");
		$(".add-box8-RIA-margin-left-underline-BIG_BLACK").css({"color":"#FFF", "text-decoration":"none"});
		$(".add-box14-RIA-margin-left-BIG_BLACK").css("color", "#FFF");
		$(".add-box14-RIA-margin-left-underline-BIG_BLACK").css({"color":"#FFF", "text-decoration":"none"});
		$(".add-margin-right-BIG_BLACK").hide();
		$(".add-box1-RIA-margin-right-BIG_BLACK").css("color", "#FFF");},
		function(){
		$("#toggle-BIG_BLACK").css("color", "#09C");
		$(".highlight-BBL").css("background-color", "#333");										// XSLT? //
		$(".underline-BBL").css("border-bottom", "2px solid #333");									// XSLT? //
		$(".del-strikethrough-BIG_BLACK").show("text-decoration", "line-through");
		$(".add_BIG_BLACK").show();
		$(".add-above-BIG_BLACK").show();
		$(".add-below-BIG_BLACK").show();
		$(".subst-add-overwriting-BIG_BLACK").show();												// XSLT? //
		$(".subst-del").hide();																		// XSLT Fix //
		$(".add-margin-left-BIG_BLACK").show();
		$(".add-box1-RIA-margin-left-BIG_BLACK").css("color", "#333");
		$(".add-box8-RIA-margin-left-BIG_BLACK").css("color", "#333");
		$(".add-box8-RIA-margin-left-underline-BIG_BLACK").css({"color":"#333", "text-decoration":"underline"});
		$(".add-box14-RIA-margin-left-BIG_BLACK").css("color", "#333");
		$(".add-box14-RIA-margin-left-underline-BIG_BLACK").css({"color":"#333", "text-decoration":"underline"});
		$(".add-margin-right-BIG_BLACK").show();
		$(".add-box1-RIA-margin-right-BIG_BLACK").css("color", "#333");}
	);
});
// Toggle Ruby Paraph //
$(document).ready(function(){
	$("#toggle-RUBY_PARAPH").toggle(function(){
		$("#toggle-RUBY_PARAPH").css("color", "#FFF");
		$(".add-RUBY_PARAPH").hide();
		$(".add-above-RUBY_PARAPH").hide();
		$(".add-below-RUBY_PARAPH").hide();
		$(".add-margin-left-RUBY_PARAPH").hide();
		$(".add-box1-RIA-margin-left-RUBY_PARAPH").css("color", "#FFF");
		$(".add-margin-right-RUBY_PARAPH").hide();
		$(".add-box5-RIA-margin-right-RUBY_PARAPH").css("color", "#FFF");
		$(".add-box5-RP-margin-right-SALTHOWS").css("border", "none");},
		function(){
		$("#toggle-RUBY_PARAPH").css("color", "#09C");
		$(".add-RUBY_PARAPH").show();
		$(".add-above-RUBY_PARAPH").show();
		$(".add-below-RUBY_PARAPH").show();
		$(".add-margin-left-RUBY_PARAPH").show();
		$(".add-box1-RIA-margin-left-RUBY_PARAPH").css("color", "#C03");
		$(".add-margin-right-RUBY_PARAPH").show();
		$(".add-box5-RIA-margin-right-RUBY_PARAPH").css("color", "#C03");
		$(".add-box5-RP-margin-right-SALTHOWS").css({"border-top":"1px solid #C03", "border-left":"1px solid #C03", "border-bottom":"1px solid #000"});}
	);
});
// Toggle Red Brackets //
$(document).ready(function(){
	$("#toggle-RED_BRACKETS").toggle(function(){
		$("#toggle-RED_BRACKETS").css("color", "#FFF");
		$(".add-RED_BRACKETS").hide();
		$(".add-above-RED_BRACKETS").hide();
		$(".add-below-RED_BRACKETS").hide();
		$(".add-margin-left-RED_BRACKETS").hide();
		$(".add-margin-right-RED_BRACKETS").hide();},
		function(){
		$("#toggle-RED_BRACKETS").css("color", "#09C");
		$(".add-RED_BRACKETS").show();
		$(".add-above-RED_BRACKETS").show();
		$(".add-below-RED_BRACKETS").show();
		$(".add-margin-left-RED_BRACKETS").show();
		$(".add-margin-right-RED_BRACKETS").show();}
	);
});
// Toggle Big Red N //
$(document).ready(function(){
	$("#toggle-BIG_RED_N").toggle(function(){
		$("#toggle-BIG_RED_N").css("color", "#FFF");
		$(".add-BIG_RED_N").hide();
		$(".add-above-BIG_RED_N").hide();
		$(".add-below-BIG_RED_N").hide();
		$(".add-margin-left-BIG_RED_N").hide();
		$(".add-margin-right-BIG_RED_N").hide();
		$(".add-box3-RIA-margin-right-BIG_RED_N").css("color", "#FFF");},
		function(){
		$("#toggle-BIG_RED_N").css("color", "#09C");
		$(".add-BIG_RED_N").show();
		$(".add-above-BIG_RED_N").show();
		$(".add-below-BIG_RED_N").show();
		$(".add-margin-left-BIG_RED_N").show();
		$(".add-margin-right-BIG_RED_N").show();
		$(".add-box3-RIA-margin-right-BIG_RED_N").css("color", "#F00");}
	);
});
// Toggle Faded Red Blotch //
$(document).ready(function(){
	$("#toggle-FADED_RED_BLOTCH").toggle(function(){
		$("#toggle-FADED_RED_BLOTCH").css("color", "#FFF");
		$(".add-FADED_RED_BLOTCH").hide();
		$(".add-above-FADED_RED_BLOTCH").hide();
		$(".add-below-FADED_RED_BLOTCH").hide();
		$(".add-margin-left-FADED_RED_BLOTCH").hide();
		$(".add-margin-right-FADED_RED_BLOTCH").hide();
		$(".add-box2-RIA-margin-left-FADED_RED_BLOTCH").css("color", "#FFF");},
		function(){
		$("#toggle-FADED_RED_BLOTCH").css("color", "#09C");
		$(".add-FADED_RED_BLOTCH").show();
		$(".add-above-FADED_RED_BLOTCH").show();
		$(".add-below-FADED_RED_BLOTCH").show();
		$(".add-margin-left-FADED_RED_BLOTCH").show();
		$(".add-margin-right-FADED_RED_BLOTCH").show();
		$(".add-box2-RIA-margin-left-FADED_RED_BLOTCH").css("color", "#09C");}
	);
});
// Toggle Red Ink Annotator //
$(document).ready(function(){
	$("#toggle-RED_INK_ANNOTATOR").toggle(function(){
		$("#toggle-RED_INK_ANNOTATOR").css("color", "#FFF");
		$(".box2-RIA").css("border", "none");
		$(".dropcap-x3").hide();
		$(".dropcap-x4").hide();
		$(".highlight-RIA").css("background-color", "#FFF");
		$(".underline-RIA").css("border", "none");
		$(".del-expunction-RED_INK_ANNOTATOR").hide();
		$(".del-strikethrough-RED_INK_ANNOTATOR").css({"text-decoration":"none", "color":"#000"});
		$(".add-RED_INK_ANNOTATOR").hide();
		$(".add-above-RED_INK_ANNOTATOR").hide();
		$(".add-below-RED_INK_ANNOTATOR").hide();
		$(".subst-add-overwriting-RED_INK_ANNOTATOR").hide();
		$(".subst-del").show();																		// XSLT Fix //
		$(".add-top-RED_INK_ANNOTATOR").hide();
		$(".add-top-left-corner-RED_INK_ANNOTATOR").hide();
		$(".add-top-right-corner-RED_INK_ANNOTATOR").hide();
		$(".add-margin-left-RED_INK_ANNOTATOR").hide();
		$(".add-box1-RIA-margin-left-RED_INK_ANNOTATOR").hide();
		$(".add-box2-RIA-margin-left-RED_INK_ANNOTATOR").hide();
		$(".add-box3-RIA-margin-left-RED_INK_ANNOTATOR").hide();
		$(".add-box5-RIA-margin-left-RED_INK_ANNOTATOR").hide();
		$(".add-box6-RIA-margin-left-RED_INK_ANNOTATOR").hide();
		$(".add-box7-RIA-margin-left-RED_INK_ANNOTATOR").hide();
		$(".add-bottom-left-RED_INK_ANNOTATOR").hide();
		$(".add-bottom-right-RED_INK_ANNOTATOR").hide();
		$(".add-box8-RIA-bottom-right-RED_INK_ANNOTATOR").hide();
		$(".add-margin-right-RED_INK_ANNOTATOR").hide();
		$(".add-box1-RIA-margin-right-RED_INK_ANNOTATOR").hide();
		$(".add-box2-RIA-margin-right-RED_INK_ANNOTATOR").hide();
		$(".add-box3-RIA-margin-right-RED_INK_ANNOTATOR").hide();
		$(".add-box5-RIA-margin-right-RED_INK_ANNOTATOR").hide();
		$(".add-box8-RIA-margin-right-RED_INK_ANNOTATOR").hide();
		$(".add-box9-RIA-margin-right-RED_INK_ANNOTATOR").hide();
		$(".del-strikethrough-RED_INK_ANNOTATOR-SALTHOWS").css("text-decoration", "line-through");
		$(".add-box2-RIA-margin-left-SALTHOWS").css("border", "none");
		$(".add-box2-RIA-margin-right-SALTHOWS").css("border", "none");
		$(".add-box3-RIA-margin-right-SALTHOWS").css("border", "none");
		$(".add-box5-RIA-margin-right-SALTHOWS").css("border", "none");
		$(".add-box1-RIA-margin-left-LITTLE_BROWN").css("border", "none");
		$(".add-box8-RIA-margin-left-LITTLE_BROWN").css("border", "none");
		$(".add-box1-RIA-margin-right-LITTLE_BROWN").css("border", "none");
		$(".add-box1-RIA-margin-left-BIG_BROWN").css("border", "none");
		$(".add-box1-RIA-margin-left-PLUMMET").css("border", "none");
		$(".add-box1-RIA-margin-left-BIG_BLACK").css("border", "none");
		$(".add-box8-RIA-margin-left-BIG_BLACK").css("border", "none");
		$(".add-box8-RIA-margin-left-underline-BIG_BLACK").css("border", "none");
		$(".add-box14-RIA-margin-left-BIG_BLACK").css("border", "none");
		$(".add-box14-RIA-margin-left-underline-BIG_BLACK").css("border", "none");
		$(".add-box1-RIA-margin-right-BIG_BLACK").css("border", "none");
		$(".add-box1-RIA-margin-left-RUBY_PARAPH").css("border", "none");
		$(".add-box5-RIA-margin-right-RUBY_PARAPH").css("border", "none");
		$(".add-box3-RIA-margin-right-BIG_RED_N").css("border", "none");
		$(".add-box2-RIA-margin-left-FADED_RED_BLOTCH").css("border", "none");},
		function(){
		$("#toggle-RED_INK_ANNOTATOR").css("color", "#09C");
		$(".box2-RIA").css({"border-bottom":"1px solid #C00", "border-left":"1px solid #C00", "border-right":"1px solid #C00"});
		$(".dropcap-x3").show();
		$(".dropcap-x4").show();
		$(".highlight-RIA").css("background-color", "#C00");
		$(".underline-RIA").css("border-bottom", "1px solid #C00");
		$(".del-expunction-RED_INK_ANNOTATOR").show();
		$(".del-strikethrough-RED_INK_ANNOTATOR").css({"text-decoration":"line-through", "color":"#C00"});
		$(".add-RED_INK_ANNOTATOR").show();
		$(".add-above-RED_INK_ANNOTATOR").show();
		$(".add-below-RED_INK_ANNOTATOR").show();
		$(".subst-add-overwriting-RED_INK_ANNOTATOR").show();
		$(".subst-del").hide();																		// XSLT Fix //
		$(".add-top-RED_INK_ANNOTATOR").show();
		$(".add-top-left-corner-RED_INK_ANNOTATOR").show();
		$(".add-top-right-corner-RED_INK_ANNOTATOR").show();
		$(".add-margin-left-RED_INK_ANNOTATOR").show();
		$(".add-box1-RIA-margin-left-RED_INK_ANNOTATOR").show();
		$(".add-box2-RIA-margin-left-RED_INK_ANNOTATOR").show();
		$(".add-box3-RIA-margin-left-RED_INK_ANNOTATOR").show();
		$(".add-box5-RIA-margin-left-RED_INK_ANNOTATOR").show();
		$(".add-box6-RIA-margin-left-RED_INK_ANNOTATOR").show();
		$(".add-box7-RIA-margin-left-RED_INK_ANNOTATOR").show();
		$(".add-bottom-left-RED_INK_ANNOTATOR").show();
		$(".add-bottom-right-RED_INK_ANNOTATOR").show();
		$(".add-box8-RIA-bottom-right-RED_INK_ANNOTATOR").hide();
		$(".add-margin-right-RED_INK_ANNOTATOR").show();
		$(".add-box1-RIA-margin-right-RED_INK_ANNOTATOR").show();
		$(".add-box2-RIA-margin-right-RED_INK_ANNOTATOR").show();
		$(".add-box3-RIA-margin-right-RED_INK_ANNOTATOR").show();
		$(".add-box5-RIA-margin-right-RED_INK_ANNOTATOR").show();
		$(".add-box8-RIA-margin-right-RED_INK_ANNOTATOR").show();
		$(".add-box9-RIA-margin-right-RED_INK_ANNOTATOR").show();
		$(".del-strikethrough-RED_INK_ANNOTATOR-SALTHOWS").css("text-decoration", "none");
		$(".add-box2-RIA-margin-left-SALTHOWS").css({"border-left":"1px solid #C00", "border-bottom":"1px solid #C00", "border-right":"1px solid #C00"});
		$(".add-box2-RIA-margin-right-SALTHOWS").css({"border-left":"1px solid #C00", "border-bottom":"1px solid #C00", "border-right":"1px solid #C00"});
		$(".add-box3-RIA-margin-right-SALTHOWS").css({"border-top":"1px solid #C00", "border-bottom":"1px solid #C00", "border-right":"1px solid #C00"});
		$(".add-box5-RIA-margin-right-SALTHOWS").css({"border-top":"1px solid #C00", "border-left":"1px solid #C00", "border-bottom":"1px solid #C00"});
		$(".add-box1-RIA-margin-left-LITTLE_BROWN").css("border", "1px solid #C00");
		$(".add-box8-RIA-margin-left-LITTLE_BROWN").css({"border-left":"1px solid #C00", "border-bottom":"1px solid #C00"});
		$(".add-box1-RIA-margin-right-LITTLE_BROWN").css("border", "1px solid #C00");
		$(".add-box1-RIA-margin-left-BIG_BROWN").css("border", "1px solid #C00");
		$(".add-box1-RIA-margin-left-PLUMMET").css("border", "1px solid #C00");
		$(".add-box1-RIA-margin-left-BIG_BLACK").css("border", "1px solid #C00");
		$(".add-box8-RIA-margin-left-BIG_BLACK").css({"border-left":"1px solid #C00;", "border-bottom":"1px solid #C00;"});
		$(".add-box8-RIA-margin-left-underline-BIG_BLACK").css({"border-left":"1px solid #C00", "border-bottom":"1px solid #C00"});
		$(".add-box14-RIA-margin-left-BIG_BLACK").css("border-left", "1px solid #C00");
		$(".add-box14-RIA-margin-left-underline-BIG_BLACK").css("border-left", "1px solid #C00");
		$(".add-box1-RIA-margin-right-BIG_BLACK").css("border", "1px solid #C00");
		$(".add-box1-RIA-margin-left-RUBY_PARAPH").css("border", "1px solid #C00");
		$(".add-box5-RIA-margin-right-RUBY_PARAPH").css({"border-top":"1px solid #C00", "border-left":"1px solid #C00", "border-bottom":"1px solid #C00"});
		$(".add-box3-RIA-margin-right-BIG_RED_N").css({"border-top":"1px solid #C00", "border-bottom":"1px solid #C00", "border-right":"1px solid #C00"});
		$(".add-box2-RIA-margin-left-FADED_RED_BLOTCH").css({"border-left":"1px solid #C00", "border-bottom":"1px solid #C00", "border-right":"1px solid #C00"});}
	);
});
// Toggle Final Folio 1 //
$(document).ready(function(){
	$("#toggle-FINAL_FOLIO_1").toggle(function(){
		$("#toggle-FINAL_FOLIO_1").css("color", "#FFF");
		$(".add-FINAL_FOLIO_1").hide();
		$(".add-above-FINAL_FOLIO_1").hide();
		$(".add-below-FINAL_FOLIO_1").hide();
		$(".add-margin-left-FINAL_FOLIO_1").hide();
		$(".add-margin-right-FINAL_FOLIO_1").hide();},
		function(){
		$("#toggle-FINAL_FOLIO_1").css("color", "#09C");
		$(".add-FINAL_FOLIO_1").show();
		$(".add-above-FINAL_FOLIO_1").show();
		$(".add-below-FINAL_FOLIO_1").show();
		$(".add-margin-left-FINAL_FOLIO_1").show();
		$(".add-margin-right-FINAL_FOLIO_1").show();}
	);
});
// Toggle Final Folio 2 //
$(document).ready(function(){
	$("#toggle-FINAL_FOLIO_2").toggle(function(){
		$("#toggle-FINAL_FOLIO_2").css("color", "#FFF");
		$(".add-FINAL_FOLIO_2").hide();
		$(".add-above-FINAL_FOLIO_2").hide();
		$(".add-below-FINAL_FOLIO_2").hide();
		$(".add-margin-left-FINAL_FOLIO_2").hide();
		$(".add-margin-right-FINAL_FOLIO_2").hide();},
		function(){
		$("#toggle-FINAL_FOLIO_2").css("color", "#09C");
		$(".add- FINAL_FOLIO_2").show();
		$(".add-above-FINAL_FOLIO_2").show();
		$(".add-below-FINAL_FOLIO_2").show();
		$(".add-margin-left-FINAL_FOLIO_2").show();
		$(".add-margin-right-FINAL_FOLIO_2").show();}
	);
});
// Toggle Librarian //
$(document).ready(function(){
	$("#toggle-LIBRARIAN").toggle(function(){
		$("#toggle-LIBRARIAN").css("color", "#FFF");
		$(".add-LIBRARIAN").hide();
		$(".add-above-LIBRARIAN").hide();
		$(".add-below-LIBRARIAN").hide();
		$(".add-top-right-corner-LIBRARIAN").hide();
		$(".add-margin-left-LIBRARIAN").hide();
		$(".add-margin-right-LIBRARIAN").hide();},
		function(){
		$("#toggle-LIBRARIAN").css("color", "#09C");
		$(".add-LIBRARIAN").show();
		$(".add-above-LIBRARIAN").show();
		$(".add-below-LIBRARIAN").show();
		$(".add-top-right-corner-LIBRARIAN").show();
		$(".add-margin-left-LIBRARIAN").show();
		$(".add-margin-right-LIBRARIAN").show();}
	);
});
// Close Drop-downs //
$(document).ready(function(){
	$("#content, #first_button, .previous_button, .next_button, #last_button, #toggle-view, #toggle-marginalia, #toggle-expansion").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-scribe").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
	});
});
// Toggle Marginalia //
$(document).ready(function(){
	$("#toggle-marginalia").toggle(function(){
		$("#toggle-marginalia").attr("src", "images/navbar/marginalia.jpg");
		$("[class*='top']").hide();
		$("[class*='margin']").hide();
		$("[class*='bottom']").hide();},
		function(){
		$("#toggle-marginalia").attr("src", "images/navbar/marginalia_ro.jpg");
		$("[class*='top']").show();
		$("[class*='margin']").show();
		$("[class*='bottom']").show();}
	);
});
// Toggle Expansions //
$(document).ready(function(){
	$("#toggle-expansion").toggle(function(){
		$("#toggle-expansion").attr("src", "images/navbar/expand_ro.jpg");
		$(".abbr").hide();
		$(".expan").show();},
		function(){
		$("#toggle-expansion").attr("src", "images/navbar/expand.jpg");
		$(".expan").hide();
		$(".abbr").show();}
	);
});
// Toggle Info Panel //
$(document).ready(function(){
	$("#toggle-info, #toggle-info_ro").click(function(){
		$("#navbar-folio").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-scribe").hide();
		$("#toggle-info_ro").toggle();
		$("#toggle-info").toggle();
		$("#navbar-info").toggle();
	});
});
</script>
</head>
<body>
<div id="main">
  <div id="navbar-tab">
	<img id="toggle-navbar" src="images/navbar/tab_ro.jpg" alt="Show/Hide NavBar Button" title="Show/Hide the Navbar" width="20" height="10" />
  </div>
  <div id="navbar">
	<img id="first_button" src="images/navbar/first.jpg" alt="First Folio Button" title="Go to the First Folio" width="26" height="20" />
	<div id="navbar-navigation-fbdg" class="navbar-navigation" style="display:none">
		<img id="previous-fbdg" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">fbdg</div><img id="next-fbdg" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-fpd" class="navbar-navigation" style="display:none">
		<img id="previous-fpd" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">fpd</div><img id="next-fpd" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-ir" class="navbar-navigation" style="display:none">
		<img id="previous-ir" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">i r</div><img id="next-ir" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-iiv" class="navbar-navigation" style="display:none">
		<img id="previous-iiv" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">ii v</div><img id="next-iiv" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-iiir" class="navbar-navigation" style="display:none">
		<img id="previous-iiir" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">iii r</div><img id="next-iiir" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-iiiv" class="navbar-navigation" style="display:none">
		<img id="previous-iiiv" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">iii v</div><img id="next-iiiv" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-ivr" class="navbar-navigation" style="display:none">
		<img id="previous-ivr" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">iv r</div><img id="next-ivr" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-ivv" class="navbar-navigation" style="display:none">
		<img id="previous-ivv" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">iv v</div><img id="next-ivv" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-1r" class="navbar-navigation">
		<img id="previous-1r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">1 r</div><img id="next-1r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-1v" class="navbar-navigation" style="display:none">
		<img id="previous-1v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">1 v</div><img id="next-1v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-2r" class="navbar-navigation" style="display:none">
		<img id="previous-2r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">2 r</div><img id="next-2r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
	</div>
	<div id="navbar-navigation-2v" class="navbar-navigation" style="display:none">
		<img id="previous-2v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">2 v</div><img id="next-2v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
	</div>
	<div id="navbar-navigation-3r" class="navbar-navigation" style="display:none">
		<img id="previous-3r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">3 r</div><img id="next-3r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-3v" class="navbar-navigation" style="display:none">
		<img id="previous-3v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">3 v</div><img id="next-3v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-4r" class="navbar-navigation" style="display:none">
		<img id="previous-4r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">4 r</div><img id="next-4r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-4v" class="navbar-navigation" style="display:none">
		<img id="previous-4v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">4 v</div><img id="next-4v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-5r" class="navbar-navigation" style="display:none">
		<img id="previous-5r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">5 r</div><img id="next-5r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-5v" class="navbar-navigation" style="display:none">
		<img id="previous-5v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">5 v</div><img id="next-5v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-6r" class="navbar-navigation" style="display:none">
		<img id="previous-6r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">6 r</div><img id="next-6r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-6v" class="navbar-navigation" style="display:none">
		<img id="previous-6v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">6 v</div><img id="next-6v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-7r" class="navbar-navigation" style="display:none">
		<img id="previous-7r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">7 r</div><img id="next-7r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-7v" class="navbar-navigation" style="display:none">
		<img id="previous-7v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">7 v</div><img id="next-7v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-8r" class="navbar-navigation" style="display:none">
		<img id="previous-8r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">8 r</div><img id="next-8r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-8v" class="navbar-navigation" style="display:none">
		<img id="previous-8v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">8 v</div><img id="next-8v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-9r" class="navbar-navigation" style="display:none">
		<img id="previous-9r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">9 r</div><img id="next-9r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-9v" class="navbar-navigation" style="display:none">
		<img id="previous-9v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">9 v</div><img id="next-9v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-10r" class="navbar-navigation" style="display:none">
		<img id="previous-10r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">10 r</div><img id="next-10r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-10v" class="navbar-navigation" style="display:none">
		<img id="previous-10v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">10 v</div><img id="next-10v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-11r" class="navbar-navigation" style="display:none">
		<img id="previous-11r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">11 r</div><img id="next-11r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-11v" class="navbar-navigation" style="display:none">
		<img id="previous-11v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">11 v</div><img id="next-11v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-12r" class="navbar-navigation" style="display:none">
		<img id="previous-12r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">12 r</div><img id="next-12r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-12v" class="navbar-navigation" style="display:none">
		<img id="previous-12v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">12 v</div><img id="next-12v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-13r" class="navbar-navigation" style="display:none">
		<img id="previous-13r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">13 r</div><img id="next-13r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-13v" class="navbar-navigation" style="display:none">
		<img id="previous-13v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">13 v</div><img id="next-13v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-14r" class="navbar-navigation" style="display:none">
		<img id="previous-14r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">14 r</div><img id="next-14r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
  <div id="navbar-navigation-14v" class="navbar-navigation" style="display:none">
		<img id="previous-14v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">14 v</div><img id="next-14v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
	</div>
	<div id="navbar-navigation-15r" class="navbar-navigation" style="display:none">
		<img id="previous-15r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">15 r</div><img id="next-15r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
	</div>
  <div id="navbar-navigation-15v" class="navbar-navigation" style="display:none">
		<img id="previous-15v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">15 v</div><img id="next-15v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-16r" class="navbar-navigation" style="display:none">
		<img id="previous-16r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">16 r</div><img id="next-16r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-16v" class="navbar-navigation" style="display:none">
		<img id="previous-16v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">16 v</div><img id="next-16v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-17r" class="navbar-navigation" style="display:none">
		<img id="previous-17r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">17 r</div><img id="next-17r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-17v" class="navbar-navigation" style="display:none">
		<img id="previous-17v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">17 v</div><img id="next-17v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-18r" class="navbar-navigation" style="display:none">
		<img id="previous-18r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">18 r</div><img id="next-18r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-18v" class="navbar-navigation" style="display:none">
		<img id="previous-18v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">18 v</div><img id="next-18v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-19r" class="navbar-navigation" style="display:none">
		<img id="previous-19r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">19 r</div><img id="next-19r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-19v" class="navbar-navigation" style="display:none">
		<img id="previous-19v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">19 v</div><img id="next-19v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-20r" class="navbar-navigation" style="display:none">
		<img id="previous-20r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">20 r</div><img id="next-20r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-20v" class="navbar-navigation" style="display:none">
		<img id="previous-20v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">20 v</div><img id="next-20v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-21r" class="navbar-navigation" style="display:none">
		<img id="previous-21r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">21 r</div><img id="next-21r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-21v" class="navbar-navigation" style="display:none">
		<img id="previous-21v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">21 v</div><img id="next-21v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-22r" class="navbar-navigation" style="display:none">
		<img id="previous-22r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">22 r</div><img id="next-22r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-22v" class="navbar-navigation" style="display:none">
		<img id="previous-22v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">22 v</div><img id="next-22v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-23r" class="navbar-navigation" style="display:none">
		<img id="previous-23r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">23 r</div><img id="next-23r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-23v" class="navbar-navigation" style="display:none">
		<img id="previous-23v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">23 v</div><img id="next-23v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-24r" class="navbar-navigation" style="display:none">
		<img id="previous-24r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">24 r</div><img id="next-24r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-24v" class="navbar-navigation" style="display:none">
		<img id="previous-24v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">24 v</div><img id="next-24v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-25r" class="navbar-navigation" style="display:none">
		<img id="previous-25r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">25 r</div><img id="next-25r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-25v" class="navbar-navigation" style="display:none">
		<img id="previous-25v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">25 v</div><img id="next-25v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-26r" class="navbar-navigation" style="display:none">
		<img id="previous-26r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">26 r</div><img id="next-26r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-26v" class="navbar-navigation" style="display:none">
		<img id="previous-26v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">26 v</div><img id="next-26v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-27r" class="navbar-navigation" style="display:none">
		<img id="previous-27r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">27 r</div><img id="next-27r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-27v" class="navbar-navigation" style="display:none">
		<img id="previous-27v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">27 v</div><img id="next-27v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-28r" class="navbar-navigation" style="display:none">
		<img id="previous-28r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">28 r</div><img id="next-28r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-28v" class="navbar-navigation" style="display:none">
		<img id="previous-28v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">28 v</div><img id="next-28v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-29r" class="navbar-navigation" style="display:none">
		<img id="previous-29r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">29 r</div><img id="next-29r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-29v" class="navbar-navigation" style="display:none">
		<img id="previous-29v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">29 v</div><img id="next-29v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-30r" class="navbar-navigation" style="display:none">
		<img id="previous-30r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">30 r</div><img id="next-30r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-30v" class="navbar-navigation" style="display:none">
		<img id="previous-30v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">30 v</div><img id="next-30v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-31r" class="navbar-navigation" style="display:none">
		<img id="previous-31r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">31 r</div><img id="next-31r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-31v" class="navbar-navigation" style="display:none">
		<img id="previous-31v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">31 v</div><img id="next-31v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-32r" class="navbar-navigation" style="display:none">
		<img id="previous-32r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">32 r</div><img id="next-32r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-32v" class="navbar-navigation" style="display:none">
		<img id="previous-32v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">32 v</div><img id="next-32v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-33r" class="navbar-navigation" style="display:none">
		<img id="previous-33r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">33 r</div><img id="next-33r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-33v" class="navbar-navigation" style="display:none">
		<img id="previous-33v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">33 v</div><img id="next-33v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-34r" class="navbar-navigation" style="display:none">
		<img id="previous-34r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">34 r</div><img id="next-34r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-34v" class="navbar-navigation" style="display:none">
		<img id="previous-34v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">34 v</div><img id="next-34v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-35r" class="navbar-navigation" style="display:none">
		<img id="previous-35r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">35 r</div><img id="next-35r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-35v" class="navbar-navigation" style="display:none">
		<img id="previous-35v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">35 v</div><img id="next-35v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-36r" class="navbar-navigation" style="display:none">
		<img id="previous-36r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">36 r</div><img id="next-36r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-36v" class="navbar-navigation" style="display:none">
		<img id="previous-36v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">36 v</div><img id="next-36v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-37r" class="navbar-navigation" style="display:none">
		<img id="previous-37r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">37 r</div><img id="next-37r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-37v" class="navbar-navigation" style="display:none">
		<img id="previous-37v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">37 v</div><img id="next-37v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-38r" class="navbar-navigation" style="display:none">
		<img id="previous-38r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">38 r</div><img id="next-38r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-38v" class="navbar-navigation" style="display:none">
		<img id="previous-38v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">38 v</div><img id="next-38v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-39r" class="navbar-navigation" style="display:none">
		<img id="previous-39r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">39 r</div><img id="next-39r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-39v" class="navbar-navigation" style="display:none">
		<img id="previous-39v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">39 v</div><img id="next-39v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-40r" class="navbar-navigation" style="display:none">
		<img id="previous-40r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">40 r</div><img id="next-40r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-40v" class="navbar-navigation" style="display:none">
		<img id="previous-40v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">40 v</div><img id="next-40v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-41r" class="navbar-navigation" style="display:none">
		<img id="previous-41r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">41 r</div><img id="next-41r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-41v" class="navbar-navigation" style="display:none">
		<img id="previous-41v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">41 v</div><img id="next-41v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-42r" class="navbar-navigation" style="display:none">
		<img id="previous-42r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">42 r</div><img id="next-42r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-42v" class="navbar-navigation" style="display:none">
		<img id="previous-42v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">42 v</div><img id="next-42v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-43r" class="navbar-navigation" style="display:none">
		<img id="previous-43r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">43 r</div><img id="next-43r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-43v" class="navbar-navigation" style="display:none">
		<img id="previous-43v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">43 v</div><img id="next-43v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-44r" class="navbar-navigation" style="display:none">
		<img id="previous-44r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">44 r</div><img id="next-44r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-44v" class="navbar-navigation" style="display:none">
		<img id="previous-44v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">44 v</div><img id="next-44v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-45r" class="navbar-navigation" style="display:none">
		<img id="previous-45r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">45 r</div><img id="next-45r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-45v" class="navbar-navigation" style="display:none">
		<img id="previous-45v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">45 v</div><img id="next-45v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-46r" class="navbar-navigation" style="display:none">
		<img id="previous-46r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">46 r</div><img id="next-46r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-46v" class="navbar-navigation" style="display:none">
		<img id="previous-46v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">46 v</div><img id="next-46v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-47r" class="navbar-navigation" style="display:none">
		<img id="previous-47r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">47 r</div><img id="next-47r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-47v" class="navbar-navigation" style="display:none">
		<img id="previous-47v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">47 v</div><img id="next-47v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-48r" class="navbar-navigation" style="display:none">
		<img id="previous-48r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">48 r</div><img id="next-48r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-48v" class="navbar-navigation" style="display:none">
		<img id="previous-48v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">48 v</div><img id="next-48v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-49r" class="navbar-navigation" style="display:none">
		<img id="previous-49r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">49 r</div><img id="next-49r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-49v" class="navbar-navigation" style="display:none">
		<img id="previous-49v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">49 v</div><img id="next-49v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-50r" class="navbar-navigation" style="display:none">
		<img id="previous-50r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">50 r</div><img id="next-50r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-50v" class="navbar-navigation" style="display:none">
		<img id="previous-50v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">50 v</div><img id="next-50v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-51r" class="navbar-navigation" style="display:none">
		<img id="previous-51r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">51 r</div><img id="next-51r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-51v" class="navbar-navigation" style="display:none">
		<img id="previous-51v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">51 v</div><img id="next-51v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-52r" class="navbar-navigation" style="display:none">
		<img id="previous-52r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">52 r</div><img id="next-52r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-52v" class="navbar-navigation" style="display:none">
		<img id="previous-52v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">52 v</div><img id="next-52v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-53r" class="navbar-navigation" style="display:none">
		<img id="previous-53r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">53 r</div><img id="next-53r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-53v" class="navbar-navigation" style="display:none">
		<img id="previous-53v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">53 v</div><img id="next-53v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-54r" class="navbar-navigation" style="display:none">
		<img id="previous-54r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">54 r</div><img id="next-54r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-54v" class="navbar-navigation" style="display:none">
		<img id="previous-54v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">54 v</div><img id="next-54v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-55r" class="navbar-navigation" style="display:none">
		<img id="previous-55r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">55 r</div><img id="next-55r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-55v" class="navbar-navigation" style="display:none">
		<img id="previous-55v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">55 v</div><img id="next-55v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-56r" class="navbar-navigation" style="display:none">
		<img id="previous-56r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">56 r</div><img id="next-56r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-56v" class="navbar-navigation" style="display:none">
		<img id="previous-56v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">56 v</div><img id="next-56v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-57r" class="navbar-navigation" style="display:none">
		<img id="previous-57r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">57 r</div><img id="next-57r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-57v" class="navbar-navigation" style="display:none">
		<img id="previous-57v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">57 v</div><img id="next-57v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-58r" class="navbar-navigation" style="display:none">
		<img id="previous-58r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">58 r</div><img id="next-58r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-58v" class="navbar-navigation" style="display:none">
		<img id="previous-58v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">58 v</div><img id="next-58v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-59r" class="navbar-navigation" style="display:none">
		<img id="previous-59r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">59 r</div><img id="next-59r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-59v" class="navbar-navigation" style="display:none">
		<img id="previous-59v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">59 v</div><img id="next-59v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-60r" class="navbar-navigation" style="display:none">
		<img id="previous-60r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">60 r</div><img id="next-60r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
	<div id="navbar-navigation-60v" class="navbar-navigation" style="display:none">
		<img id="previous-60v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">60 v</div><img id="next-60v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
    <div id="navbar-navigation-61r" class="navbar-navigation" style="display:none">
		<img id="previous-61r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">61 r</div><img id="next-61r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
    <div id="navbar-navigation-61v" class="navbar-navigation" style="display:none">
		<img id="previous-61v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">61 v</div><img id="next-61v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
    <div id="navbar-navigation-62r" class="navbar-navigation" style="display:none">		
		<img id="previous-62r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">62 r</div><img id="next-62r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-62v" class="navbar-navigation" style="display:none">		
		<img id="previous-62v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">62 v</div><img id="next-62v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-63r" class="navbar-navigation" style="display:none">		
		<img id="previous-63r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">63 r</div><img id="next-63r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-63v" class="navbar-navigation" style="display:none">		
		<img id="previous-63v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">63 v</div><img id="next-63v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-64r" class="navbar-navigation" style="display:none">		
		<img id="previous-64r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">64 r</div><img id="next-64r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-64v" class="navbar-navigation" style="display:none">		
		<img id="previous-64v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">64 v</div><img id="next-64v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-65r" class="navbar-navigation" style="display:none">		
		<img id="previous-65r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">65 r</div><img id="next-65r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-65v" class="navbar-navigation" style="display:none">		
		<img id="previous-65v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">65 v</div><img id="next-65v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
    <div id="navbar-navigation-66r" class="navbar-navigation" style="display:none">		
		<img id="previous-66r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">66 r</div><img id="next-66r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-66v" class="navbar-navigation" style="display:none">		
		<img id="previous-66v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">66 v</div><img id="next-66v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-67r" class="navbar-navigation" style="display:none">		
		<img id="previous-67r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">67 r</div><img id="next-67r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-67v" class="navbar-navigation" style="display:none">		
		<img id="previous-67v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">67 v</div><img id="next-67v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-68r" class="navbar-navigation" style="display:none">		
		<img id="previous-68r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">68 r</div><img id="next-68r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-68v" class="navbar-navigation" style="display:none">		
		<img id="previous-68v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">68 v</div><img id="next-68v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-69r" class="navbar-navigation" style="display:none">		
		<img id="previous-69r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">69 r</div><img id="next-69r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-69v" class="navbar-navigation" style="display:none">		
		<img id="previous-69v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">69 v</div><img id="next-69v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-70r" class="navbar-navigation" style="display:none">		
		<img id="previous-70r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">70 r</div><img id="next-70r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-70v" class="navbar-navigation" style="display:none">		
		<img id="previous-70v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">70 v</div><img id="next-70v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-71r" class="navbar-navigation" style="display:none">		
		<img id="previous-71r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">71 r</div><img id="next-71r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-71v" class="navbar-navigation" style="display:none">		
		<img id="previous-71v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">71 v</div><img id="next-71v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-72r" class="navbar-navigation" style="display:none">		
		<img id="previous-72r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">72 r</div><img id="next-72r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-72v" class="navbar-navigation" style="display:none">		
		<img id="previous-72v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">72 v</div><img id="next-72v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-73r" class="navbar-navigation" style="display:none">		
		<img id="previous-73r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">73 r</div><img id="next-73r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-73v" class="navbar-navigation" style="display:none">		
		<img id="previous-73v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">73 v</div><img id="next-73v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-74r" class="navbar-navigation" style="display:none">		
		<img id="previous-74r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">74 r</div><img id="next-74r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-74v" class="navbar-navigation" style="display:none">		
		<img id="previous-74v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">74 v</div><img id="next-74v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-75r" class="navbar-navigation" style="display:none">		
		<img id="previous-75r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">75 r</div><img id="next-75r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-75v" class="navbar-navigation" style="display:none">		
		<img id="previous-75v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">75 v</div><img id="next-75v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-76r" class="navbar-navigation" style="display:none">		
		<img id="previous-76r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">76 r</div><img id="next-76r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-76v" class="navbar-navigation" style="display:none">		
		<img id="previous-76v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">76 v</div><img id="next-76v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-77r" class="navbar-navigation" style="display:none">		
		<img id="previous-77r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">77 r</div><img id="next-77r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-77v" class="navbar-navigation" style="display:none">		
		<img id="previous-77v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">77 v</div><img id="next-77v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-78r" class="navbar-navigation" style="display:none">		
		<img id="previous-78r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">78 r</div><img id="next-78r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-78v" class="navbar-navigation" style="display:none">		
		<img id="previous-78v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">78 v</div><img id="next-78v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-79r" class="navbar-navigation" style="display:none">		
		<img id="previous-79r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">79 r</div><img id="next-79r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-79v" class="navbar-navigation" style="display:none">		
		<img id="previous-79v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">79 v</div><img id="next-79v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-80r" class="navbar-navigation" style="display:none">		
		<img id="previous-80r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">80 r</div><img id="next-80r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-80v" class="navbar-navigation" style="display:none">		
		<img id="previous-80v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">80 v</div><img id="next-80v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-81r" class="navbar-navigation" style="display:none">		
		<img id="previous-81r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">81 r</div><img id="next-81r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-81v" class="navbar-navigation" style="display:none">		
		<img id="previous-81v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">81 v</div><img id="next-81v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-82r" class="navbar-navigation" style="display:none">		
		<img id="previous-82r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">82 r</div><img id="next-82r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-82v" class="navbar-navigation" style="display:none">		
		<img id="previous-82v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">82 v</div><img id="next-82v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-83r" class="navbar-navigation" style="display:none">		
		<img id="previous-83r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">83 r</div><img id="next-83r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-83v" class="navbar-navigation" style="display:none">		
		<img id="previous-83v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">83 v</div><img id="next-83v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-84r" class="navbar-navigation" style="display:none">		
		<img id="previous-84r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">84 r</div><img id="next-84r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-84v" class="navbar-navigation" style="display:none">		
		<img id="previous-84v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">84 v</div><img id="next-84v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-85r" class="navbar-navigation" style="display:none">		
		<img id="previous-85r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">85 r</div><img id="next-85r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-85v" class="navbar-navigation" style="display:none">		
		<img id="previous-85v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">85 v</div><img id="next-85v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-86r" class="navbar-navigation" style="display:none">		
		<img id="previous-86r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">86 r</div><img id="next-86r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-86v" class="navbar-navigation" style="display:none">		
		<img id="previous-86v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">86 v</div><img id="next-86v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-87r" class="navbar-navigation" style="display:none">		
		<img id="previous-87r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">87 r</div><img id="next-87r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-87v" class="navbar-navigation" style="display:none">		
		<img id="previous-87v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">87 v</div><img id="next-87v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-88r" class="navbar-navigation" style="display:none">		
		<img id="previous-88r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">88 r</div><img id="next-88r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-88v" class="navbar-navigation" style="display:none">		
		<img id="previous-88v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">88 v</div><img id="next-88v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-89r" class="navbar-navigation" style="display:none">		
		<img id="previous-89r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">89 r</div><img id="next-89r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-89v" class="navbar-navigation" style="display:none">		
		<img id="previous-89v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">89 v</div><img id="next-89v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-90r" class="navbar-navigation" style="display:none">		
		<img id="previous-90r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">90 r</div><img id="next-90r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-90v" class="navbar-navigation" style="display:none">		
		<img id="previous-90v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">90 v</div><img id="next-90v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-91r" class="navbar-navigation" style="display:none">		
		<img id="previous-91r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">91 r</div><img id="next-91r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-91v" class="navbar-navigation" style="display:none">		
		<img id="previous-91v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">91 v</div><img id="next-91v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-92r" class="navbar-navigation" style="display:none">		
		<img id="previous-92r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">92 r</div><img id="next-92r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-92v" class="navbar-navigation" style="display:none">		
		<img id="previous-92v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">92 v</div><img id="next-92v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-93r" class="navbar-navigation" style="display:none">		
		<img id="previous-93r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">93 r</div><img id="next-93r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-93v" class="navbar-navigation" style="display:none">		
		<img id="previous-93v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">93 v</div><img id="next-93v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-94r" class="navbar-navigation" style="display:none">		
		<img id="previous-94r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">94 r</div><img id="next-94r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-94v" class="navbar-navigation" style="display:none">		
		<img id="previous-94v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">94 v</div><img id="next-94v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-95r" class="navbar-navigation" style="display:none">		
		<img id="previous-95r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">95 r</div><img id="next-95r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-95v" class="navbar-navigation" style="display:none">		
		<img id="previous-95v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">95 v</div><img id="next-95v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-96r" class="navbar-navigation" style="display:none">		
		<img id="previous-96r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">96 r</div><img id="next-96r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-96v" class="navbar-navigation" style="display:none">		
		<img id="previous-96v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">96 v</div><img id="next-96v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-97r" class="navbar-navigation" style="display:none">		
		<img id="previous-97r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">97 r</div><img id="next-97r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-97v" class="navbar-navigation" style="display:none">		
		<img id="previous-97v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">97 v</div><img id="next-97v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-98r" class="navbar-navigation" style="display:none">		
		<img id="previous-98r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">98 r</div><img id="next-98r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-98v" class="navbar-navigation" style="display:none">		
		<img id="previous-98v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">98 v</div><img id="next-98v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-99r" class="navbar-navigation" style="display:none">		
		<img id="previous-99r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">99 r</div><img id="next-99r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-99v" class="navbar-navigation" style="display:none">		
		<img id="previous-99v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">99 v</div><img id="next-99v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-100r" class="navbar-navigation" style="display:none">		
		<img id="previous-100r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">100 r</div><img id="next-100r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-100v" class="navbar-navigation" style="display:none">		
		<img id="previous-100v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">100 v</div><img id="next-100v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-101r" class="navbar-navigation" style="display:none">		
		<img id="previous-101r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">101 r</div><img id="next-101r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-101v" class="navbar-navigation" style="display:none">		
		<img id="previous-101v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">101 v</div><img id="next-101v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-102r" class="navbar-navigation" style="display:none">		
		<img id="previous-102r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">102 r</div><img id="next-102r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-102v" class="navbar-navigation" style="display:none">		
		<img id="previous-102v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">102 v</div><img id="next-102v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-103r" class="navbar-navigation" style="display:none">		
		<img id="previous-103r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">103 r</div><img id="next-103r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-103v" class="navbar-navigation" style="display:none">		
		<img id="previous-103v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">103 v</div><img id="next-103v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-104r" class="navbar-navigation" style="display:none">		
		<img id="previous-104r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">104 r</div><img id="next-104r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-104v" class="navbar-navigation" style="display:none">		
		<img id="previous-104v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">104 v</div><img id="next-104v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-105r" class="navbar-navigation" style="display:none">		
		<img id="previous-105r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">105 r</div><img id="next-105r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-105v" class="navbar-navigation" style="display:none">		
		<img id="previous-105v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">105 v</div><img id="next-105v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-106r" class="navbar-navigation" style="display:none">		
		<img id="previous-106r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">106 r</div><img id="next-106r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-106v" class="navbar-navigation" style="display:none">		
		<img id="previous-106v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">106 v</div><img id="next-106v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-107r" class="navbar-navigation" style="display:none">		
		<img id="previous-107r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">107 r</div><img id="next-107r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-107v" class="navbar-navigation" style="display:none">		
		<img id="previous-107v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">107 v</div><img id="next-107v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-108r" class="navbar-navigation" style="display:none">		
		<img id="previous-108r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">108 r</div><img id="next-108r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-108v" class="navbar-navigation" style="display:none">		
		<img id="previous-108v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">108 v</div><img id="next-108v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-109r" class="navbar-navigation" style="display:none">		
		<img id="previous-109r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">109 r</div><img id="next-109r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-109v" class="navbar-navigation" style="display:none">		
		<img id="previous-109v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">109 v</div><img id="next-109v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-110r" class="navbar-navigation" style="display:none">		
		<img id="previous-110r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">110 r</div><img id="next-110r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-110v" class="navbar-navigation" style="display:none">		
		<img id="previous-110v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">110 v</div><img id="next-110v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-111r" class="navbar-navigation" style="display:none">		
		<img id="previous-111r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">111 r</div><img id="next-111r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-111v" class="navbar-navigation" style="display:none">		
		<img id="previous-111v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">111 v</div><img id="next-111v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-112r" class="navbar-navigation" style="display:none">		
		<img id="previous-112r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">112 r</div><img id="next-112r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-112v" class="navbar-navigation" style="display:none">		
		<img id="previous-112v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">112 v</div><img id="next-112v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-113r" class="navbar-navigation" style="display:none">		
		<img id="previous-113r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">113 r</div><img id="next-113r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-113v" class="navbar-navigation" style="display:none">		
		<img id="previous-113v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">113 v</div><img id="next-113v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-114r" class="navbar-navigation" style="display:none">		
		<img id="previous-114r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">114 r</div><img id="next-114r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-114v" class="navbar-navigation" style="display:none">		
		<img id="previous-114v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">114 v</div><img id="next-114v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-115r" class="navbar-navigation" style="display:none">		
		<img id="previous-115r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">115 r</div><img id="next-115r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-115v" class="navbar-navigation" style="display:none">		
		<img id="previous-115v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">115 v</div><img id="next-115v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-116r" class="navbar-navigation" style="display:none">		
		<img id="previous-116r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">116 r</div><img id="next-116r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-116v" class="navbar-navigation" style="display:none">		
		<img id="previous-116v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">116 v</div><img id="next-116v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-117r" class="navbar-navigation" style="display:none">		
		<img id="previous-117r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">117 r</div><img id="next-117r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-117v" class="navbar-navigation" style="display:none">		
		<img id="previous-117v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">117 v</div><img id="next-117v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-118r" class="navbar-navigation" style="display:none">		
		<img id="previous-118r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">118 r</div><img id="next-118r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-118v" class="navbar-navigation" style="display:none">		
		<img id="previous-118v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">118 v</div><img id="next-118v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-119r" class="navbar-navigation" style="display:none">		
		<img id="previous-119r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">119 r</div><img id="next-119r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-119v" class="navbar-navigation" style="display:none">		
		<img id="previous-119v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">119 v</div><img id="next-119v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-120r" class="navbar-navigation" style="display:none">		
		<img id="previous-120r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">120 r</div><img id="next-120r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-120v" class="navbar-navigation" style="display:none">		
		<img id="previous-120v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">120 v</div><img id="next-120v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-121r" class="navbar-navigation" style="display:none">		
		<img id="previous-121r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">121 r</div><img id="next-121r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-121v" class="navbar-navigation" style="display:none">		
		<img id="previous-121v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">121 v</div><img id="next-121v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-122r" class="navbar-navigation" style="display:none">		
		<img id="previous-122r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">122 r</div><img id="next-122r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-122v" class="navbar-navigation" style="display:none">		
		<img id="previous-122v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">122 v</div><img id="next-122v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-123r" class="navbar-navigation" style="display:none">		
		<img id="previous-123r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">123 r</div><img id="next-123r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-123v" class="navbar-navigation" style="display:none">		
		<img id="previous-123v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">123 v</div><img id="next-123v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-124r" class="navbar-navigation" style="display:none">		
		<img id="previous-124r" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">124 r</div><img id="next-124r" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-124v" class="navbar-navigation" style="display:none">		
		<img id="previous-124v" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">124 v</div><img id="next-124v" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
    <div id="navbar-navigation-rpd" class="navbar-navigation" style="display:none">		
		<img id="previous-rpd" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">rpd</div><img id="next-rpd" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>		
    <div id="navbar-navigation-rbdg" class="navbar-navigation" style="display:none">		
		<img id="previous-rbdg" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Folio Button" title="Go to the Previous Folio" width="26" height="20" /><div class="navbar-location" title="Select a Folio">rbdg</div><img id="next-rbdg" class="next_button" src="images/navbar/next.jpg" alt="Next Folio Button" title="Go to the Next Folio" width="26" height="20" />
    </div>
<img id="last_button" src="images/navbar/last.jpg" alt="Last Folio Button" title="Go to the Last Folio" width="26" height="20" /><img id="toggle-view" src="images/navbar/facsimile-transcription_ro.jpg" alt="Toggle Views Button" title="Toggle Views" width="26" height="20" /><img id="toggle-magnify" src="images/navbar/magnify_ro.jpg" alt="Magnification Button" title="Increase the Magnification of the Facsimile" width="26" height="20" /><img id="toggle-enlarge" src="images/navbar/enlarge_ro.jpg" alt="Point Size Button" title="Increase the Point Size of the Transcription" width="26" height="20" /><img id="toggle-scribe" src="images/navbar/scribe_ro.jpg" alt="Scribes Button" title="Toggle Scribes On/Off" width="26" height="20" /><img id="toggle-marginalia" src="images/navbar/marginalia_ro.jpg" alt="Marginalia Button" title="Toggle Marginalia On/Off" width="26" height="20" /><img id="toggle-expansion" src="images/navbar/expand.jpg" alt="Expansion Button" title="Toggle Expansions On/Off" width="26" height="20" /><img id="toggle-info" src="images/navbar/info.jpg" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="float:right" /><img id="toggle-info_ro" src="images/navbar/info_ro.jpg" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="display:none; float:right" />
	<div id="navbar-folio" title="Select a Folio">
    	<span class="navbar-folio-text">Folio:
            <br/>
            <br/><div id="navbar-fbdg" class="shortcut">fbdg</div>
            <br/>
            <br/><div id="navbar-fpd" class="shortcut">fpd</div>
			<br/>
            <br/><div id="navbar-folio-ir" class="shortcut">i r</div>
            <br/>
            <br/><div id="navbar-folio-iiv" class="shortcut">ii v</div>
            <br/>
            <br/><div id="navbar-folio-iiir" class="shortcut">iii r</div>
            <br/>
            <br/><div id="navbar-folio-iiiv" class="shortcut">iii v</div>
            <br/>
            <br/><div id="navbar-folio-ivr" class="shortcut">iv r</div>
            <br/>
            <br/><div id="navbar-folio-ivv" class="shortcut">iv v</div>
            <br/>
            <br/><div id="navbar-folio-1r" class="shortcut" style="color:#09C">1 r</div>
            <br/>
            <br/><div id="navbar-folio-1v" class="shortcut">1 v</div>
            <br/>
            <br/><div id="navbar-folio-2r" class="shortcut">2 r</div>
            <br/>
            <br/><div id="navbar-folio-2v" class="shortcut">2 v</div>
            <br/>
            <br/><div id="navbar-folio-3r" class="shortcut">3 r</div>
            <br/>
            <br/><div id="navbar-folio-3v" class="shortcut">3 v</div>
            <br/>
            <br/><div id="navbar-folio-4r" class="shortcut">4 r</div>
            <br/>
            <br/><div id="navbar-folio-4v" class="shortcut">4 v</div>
            <br/>
            <br/><div id="navbar-folio-5r" class="shortcut">5 r</div>
            <br/>
            <br/><div id="navbar-folio-5v" class="shortcut">5 v</div>
            <br/>
            <br/><div id="navbar-folio-6r" class="shortcut">6 r</div>
            <br/>
            <br/><div id="navbar-folio-6v" class="shortcut">6 v</div>
            <br/>
            <br/><div id="navbar-folio-7r" class="shortcut">7 r</div>
            <br/>
            <br/><div id="navbar-folio-7v" class="shortcut">7 v</div>
            <br/>
            <br/><div id="navbar-folio-8r" class="shortcut">8 r</div>
            <br/>
            <br/><div id="navbar-folio-8v" class="shortcut">8 v</div>
            <br/>
            <br/><div id="navbar-folio-9r" class="shortcut">9 r</div>
            <br/>
            <br/><div id="navbar-folio-9v" class="shortcut">9 v</div>
            <br/>
            <br/><div id="navbar-folio-10r" class="shortcut">10 r</div>
            <br/>
            <br/><div id="navbar-folio-10v" class="shortcut">10 v</div>
            <br/>
            <br/><div id="navbar-folio-11r" class="shortcut">11 r</div>
            <br/>
            <br/><div id="navbar-folio-11v" class="shortcut">11 v</div>
            <br/>
            <br/><div id="navbar-folio-12r" class="shortcut">12 r</div>
            <br/>
            <br/><div id="navbar-folio-12v" class="shortcut">12 v</div>
            <br/>
            <br/><div id="navbar-folio-13r" class="shortcut">13 r</div>
            <br/>
            <br/><div id="navbar-folio-13v" class="shortcut">13 v</div>
            <br/>
            <br/><div id="navbar-folio-14r" class="shortcut">14 r</div>
            <br/>
            <br/><div id="navbar-folio-14v" class="shortcut">14 v</div>
            <br/>
            <br/><div id="navbar-folio-15r" class="shortcut">15 r</div>
            <br/>
            <br/><div id="navbar-folio-15v" class="shortcut">15 v</div>
            <br/>
            <br/><div id="navbar-folio-16r" class="shortcut">16 r</div>
            <br/>
            <br/><div id="navbar-folio-16v" class="shortcut">16 v</div>
            <br/>
            <br/><div id="navbar-folio-17r" class="shortcut">17 r</div>
            <br/>
            <br/><div id="navbar-folio-17v" class="shortcut">17 v</div>
            <br/>
            <br/><div id="navbar-folio-18r" class="shortcut">18 r</div>
            <br/>
            <br/><div id="navbar-folio-18v" class="shortcut">18 v</div>
            <br/>
            <br/><div id="navbar-folio-19r" class="shortcut">19 r</div>
            <br/>
            <br/><div id="navbar-folio-19v" class="shortcut">19 v</div>
            <br/>
            <br/><div id="navbar-folio-20r" class="shortcut">20 r</div>
            <br/>
            <br/><div id="navbar-folio-20v" class="shortcut">20 v</div>
            <br/>
            <br/><div id="navbar-folio-21r" class="shortcut">21 r</div>
            <br/>
            <br/><div id="navbar-folio-21v" class="shortcut">21 v</div>
            <br/>
            <br/><div id="navbar-folio-22r" class="shortcut">22 r</div>
            <br/>
            <br/><div id="navbar-folio-22v" class="shortcut">22 v</div>
            <br/>
            <br/><div id="navbar-folio-23r" class="shortcut">23 r</div>
            <br/>
            <br/><div id="navbar-folio-23v" class="shortcut">23 v</div>
            <br/>
            <br/><div id="navbar-folio-24r" class="shortcut">24 r</div>
            <br/>
            <br/><div id="navbar-folio-24v" class="shortcut">24 v</div>
            <br/>
            <br/><div id="navbar-folio-25r" class="shortcut">25 r</div>
            <br/>
            <br/><div id="navbar-folio-25v" class="shortcut">25 v</div>
            <br/>
            <br/><div id="navbar-folio-26r" class="shortcut">26 r</div>
            <br/>
            <br/><div id="navbar-folio-26v" class="shortcut">26 v</div>
            <br/>
            <br/><div id="navbar-folio-27r" class="shortcut">27 r</div>
            <br/>
            <br/><div id="navbar-folio-27v" class="shortcut">27 v</div>
            <br/>
            <br/><div id="navbar-folio-28r" class="shortcut">28 r</div>
            <br/>
            <br/><div id="navbar-folio-28v" class="shortcut">28 v</div>
            <br/>
            <br/><div id="navbar-folio-29r" class="shortcut">29 r</div>
            <br/>
            <br/><div id="navbar-folio-29v" class="shortcut">29 v</div>
            <br/>
            <br/><div id="navbar-folio-30r" class="shortcut">30 r</div>
            <br/>
            <br/><div id="navbar-folio-30v" class="shortcut">30 v</div>
            <br/>
			<br/><div id="navbar-folio-31r" class="shortcut">31 r</div>
            <br/>
            <br/><div id="navbar-folio-31v" class="shortcut">31 v</div>
            <br/>
            <br/><div id="navbar-folio-32r" class="shortcut">32 r</div>
            <br/>
            <br/><div id="navbar-folio-32v" class="shortcut">32 v</div>
            <br/>
            <br/><div id="navbar-folio-33r" class="shortcut">33 r</div>
            <br/>
            <br/><div id="navbar-folio-33v" class="shortcut">33 v</div>
            <br/>
            <br/><div id="navbar-folio-34r" class="shortcut">34 r</div>
            <br/>
            <br/><div id="navbar-folio-34v" class="shortcut">34 v</div>
            <br/>
            <br/><div id="navbar-folio-35r" class="shortcut">35 r</div>
            <br/>
            <br/><div id="navbar-folio-35v" class="shortcut">35 v</div>
            <br/>
            <br/><div id="navbar-folio-36r" class="shortcut">36 r</div>
            <br/>
            <br/><div id="navbar-folio-36v" class="shortcut">36 v</div>
            <br/>
            <br/><div id="navbar-folio-37r" class="shortcut">37 r</div>
            <br/>
            <br/><div id="navbar-folio-37v" class="shortcut">37 v</div>
            <br/>
            <br/><div id="navbar-folio-38r" class="shortcut">38 r</div>
            <br/>
            <br/><div id="navbar-folio-38v" class="shortcut">38 v</div>
            <br/>
            <br/><div id="navbar-folio-39r" class="shortcut">39 r</div>
            <br/>
            <br/><div id="navbar-folio-39v" class="shortcut">39 v</div>
            <br/>
            <br/><div id="navbar-folio-40r" class="shortcut">40 r</div>
            <br/>
            <br/><div id="navbar-folio-40v" class="shortcut">40 v</div>
            <br/>
            <br/><div id="navbar-folio-41r" class="shortcut">41 r</div>
            <br/>
            <br/><div id="navbar-folio-41v" class="shortcut">41 v</div>
            <br/>
            <br/><div id="navbar-folio-42r" class="shortcut">42 r</div>
            <br/>
            <br/><div id="navbar-folio-42v" class="shortcut">42 v</div>
            <br/>
            <br/><div id="navbar-folio-43r" class="shortcut">43 r</div>
            <br/>
            <br/><div id="navbar-folio-43v" class="shortcut">43 v</div>
            <br/>
            <br/><div id="navbar-folio-44r" class="shortcut">44 r</div>
            <br/>
            <br/><div id="navbar-folio-44v" class="shortcut">44 v</div>
            <br/>
            <br/><div id="navbar-folio-45r" class="shortcut">45 r</div>
            <br/>
            <br/><div id="navbar-folio-45v" class="shortcut">45 v</div>
            <br/>
            <br/><div id="navbar-folio-46r" class="shortcut">46 r</div>
            <br/>
            <br/><div id="navbar-folio-46v" class="shortcut">46 v</div>
            <br/>
            <br/><div id="navbar-folio-47r" class="shortcut">47 r</div>
            <br/>
            <br/><div id="navbar-folio-47v" class="shortcut">47 v</div>
            <br/>
            <br/><div id="navbar-folio-48r" class="shortcut">48 r</div>
            <br/>
            <br/><div id="navbar-folio-48v" class="shortcut">48 v</div>
            <br/>
            <br/><div id="navbar-folio-49r" class="shortcut">49 r</div>
            <br/>
            <br/><div id="navbar-folio-49v" class="shortcut">49 v</div>
            <br/>
            <br/><div id="navbar-folio-50r" class="shortcut">50 r</div>
            <br/>
            <br/><div id="navbar-folio-50v" class="shortcut">50 v</div>
            <br/>
            <br/><div id="navbar-folio-51r" class="shortcut">51 r</div>
            <br/>
            <br/><div id="navbar-folio-51v" class="shortcut">51 v</div>
            <br/>
            <br/><div id="navbar-folio-52r" class="shortcut">52 r</div>
            <br/>
            <br/><div id="navbar-folio-52v" class="shortcut">52 v</div>
            <br/>
            <br/><div id="navbar-folio-53r" class="shortcut">53 r</div>
            <br/>
            <br/><div id="navbar-folio-53v" class="shortcut">53 v</div>
            <br/>
            <br/><div id="navbar-folio-54r" class="shortcut">54 r</div>
            <br/>
            <br/><div id="navbar-folio-54v" class="shortcut">54 v</div>
            <br/>
            <br/><div id="navbar-folio-55r" class="shortcut">55 r</div>
            <br/>
            <br/><div id="navbar-folio-55v" class="shortcut">55 v</div>
            <br/>
            <br/><div id="navbar-folio-56r" class="shortcut">56 r</div>
            <br/>
            <br/><div id="navbar-folio-56v" class="shortcut">56 v</div>
            <br/>
            <br/><div id="navbar-folio-57r" class="shortcut">57 r</div>
            <br/>
            <br/><div id="navbar-folio-57v" class="shortcut">57 v</div>
            <br/>
            <br/><div id="navbar-folio-58r" class="shortcut">58 r</div>
            <br/>
            <br/><div id="navbar-folio-58v" class="shortcut">58 v</div>
            <br/>
            <br/><div id="navbar-folio-59r" class="shortcut">59 r</div>
            <br/>
            <br/><div id="navbar-folio-59v" class="shortcut">59 v</div>
            <br/>
            <br/><div id="navbar-folio-60r" class="shortcut">60 r</div>
			<br/>
            <br/><div id="navbar-folio-60v" class="shortcut">60 v</div>
            <br/>
            <br/><div id="navbar-folio-61r" class="shortcut">61 r</div>
            <br/>
            <br/><div id="navbar-folio-61v" class="shortcut">61 v</div>
            <br/>
            <br/><div id="navbar-folio-62r" class="shortcut">62 r</div>
            <br/>
            <br/><div id="navbar-folio-62v" class="shortcut">62 v</div>
            <br/>
            <br/><div id="navbar-folio-63r" class="shortcut">63 r</div>
            <br/>
            <br/><div id="navbar-folio-63v" class="shortcut">63 v</div>
            <br/>
            <br/><div id="navbar-folio-64r" class="shortcut">64 r</div>
            <br/>
            <br/><div id="navbar-folio-64v" class="shortcut">64 v</div>
            <br/>
            <br/><div id="navbar-folio-65r" class="shortcut">65 r</div>
            <br/>
            <br/><div id="navbar-folio-65v" class="shortcut">65 v</div>
            <br/>
            <br/><div id="navbar-folio-66r" class="shortcut">66 r</div>
            <br/>
            <br/><div id="navbar-folio-66v" class="shortcut">66 v</div>
            <br/>
            <br/><div id="navbar-folio-67r" class="shortcut">67 r</div>
            <br/>
            <br/><div id="navbar-folio-67v" class="shortcut">67 v</div>
            <br/>
            <br/><div id="navbar-folio-68r" class="shortcut">68 r</div>
            <br/>
            <br/><div id="navbar-folio-68v" class="shortcut">68 v</div>
            <br/>
            <br/><div id="navbar-folio-69r" class="shortcut">69 r</div>
            <br/>
            <br/><div id="navbar-folio-69v" class="shortcut">69 v</div>
            <br/>
            <br/><div id="navbar-folio-70r" class="shortcut">70 r</div>
			<br/>
            <br/><div id="navbar-folio-70v" class="shortcut">70 v</div>
            <br/>
            <br/><div id="navbar-folio-71r" class="shortcut">71 r</div>
            <br/>
            <br/><div id="navbar-folio-71v" class="shortcut">71 v</div>
            <br/>
            <br/><div id="navbar-folio-72r" class="shortcut">72 r</div>
            <br/>
            <br/><div id="navbar-folio-72v" class="shortcut">72 v</div>
            <br/>
            <br/><div id="navbar-folio-73r" class="shortcut">73 r</div>
            <br/>
            <br/><div id="navbar-folio-73v" class="shortcut">73 v</div>
            <br/>
            <br/><div id="navbar-folio-74r" class="shortcut">74 r</div>
            <br/>
            <br/><div id="navbar-folio-74v" class="shortcut">74 v</div>
            <br/>
            <br/><div id="navbar-folio-75r" class="shortcut">75 r</div>
            <br/>
            <br/><div id="navbar-folio-75v" class="shortcut">75 v</div>
            <br/>
            <br/><div id="navbar-folio-76r" class="shortcut">76 r</div>
            <br/>
            <br/><div id="navbar-folio-76v" class="shortcut">76 v</div>
            <br/>
            <br/><div id="navbar-folio-77r" class="shortcut">77 r</div>
            <br/>
            <br/><div id="navbar-folio-77v" class="shortcut">77 v</div>
            <br/>
            <br/><div id="navbar-folio-78r" class="shortcut">78 r</div>
            <br/>
            <br/><div id="navbar-folio-78v" class="shortcut">78 v</div>
            <br/>
            <br/><div id="navbar-folio-79r" class="shortcut">79 r</div>
            <br/>
            <br/><div id="navbar-folio-79v" class="shortcut">79 v</div>
            <br/>
            <br/><div id="navbar-folio-80r" class="shortcut">80 r</div>
			<br/>
            <br/><div id="navbar-folio-80v" class="shortcut">80 v</div>
            <br/>
            <br/><div id="navbar-folio-81r" class="shortcut">81 r</div>
            <br/>
            <br/><div id="navbar-folio-81v" class="shortcut">81 v</div>
            <br/>
            <br/><div id="navbar-folio-82r" class="shortcut">82 r</div>
            <br/>
            <br/><div id="navbar-folio-82v" class="shortcut">82 v</div>
            <br/>
            <br/><div id="navbar-folio-83r" class="shortcut">83 r</div>
            <br/>
            <br/><div id="navbar-folio-83v" class="shortcut">83 v</div>
            <br/>
            <br/><div id="navbar-folio-84r" class="shortcut">84 r</div>
            <br/>
            <br/><div id="navbar-folio-84v" class="shortcut">84 v</div>
            <br/>
            <br/><div id="navbar-folio-85r" class="shortcut">85 r</div>
            <br/>
            <br/><div id="navbar-folio-85v" class="shortcut">85 v</div>
            <br/>
            <br/><div id="navbar-folio-86r" class="shortcut">86 r</div>
            <br/>
            <br/><div id="navbar-folio-86v" class="shortcut">86 v</div>
            <br/>
            <br/><div id="navbar-folio-87r" class="shortcut">87 r</div>
            <br/>
            <br/><div id="navbar-folio-87v" class="shortcut">87 v</div>
            <br/>
            <br/><div id="navbar-folio-88r" class="shortcut">88 r</div>
            <br/>
            <br/><div id="navbar-folio-88v" class="shortcut">88 v</div>
            <br/>
            <br/><div id="navbar-folio-89r" class="shortcut">89 r</div>
            <br/>
            <br/><div id="navbar-folio-89v" class="shortcut">89 v</div>
            <br/>
            <br/><div id="navbar-folio-90r" class="shortcut">90 r</div>
			<br/>
            <br/><div id="navbar-folio-90v" class="shortcut">90 v</div>
            <br/>
            <br/><div id="navbar-folio-91r" class="shortcut">91 r</div>
            <br/>
            <br/><div id="navbar-folio-91v" class="shortcut">91 v</div>
            <br/>
            <br/><div id="navbar-folio-92r" class="shortcut">92 r</div>
            <br/>
            <br/><div id="navbar-folio-92v" class="shortcut">92 v</div>
            <br/>
            <br/><div id="navbar-folio-93r" class="shortcut">93 r</div>
            <br/>
            <br/><div id="navbar-folio-93v" class="shortcut">93 v</div>
            <br/>
            <br/><div id="navbar-folio-94r" class="shortcut">94 r</div>
            <br/>
            <br/><div id="navbar-folio-94v" class="shortcut">94 v</div>
            <br/>
            <br/><div id="navbar-folio-95r" class="shortcut">95 r</div>
            <br/>
            <br/><div id="navbar-folio-95v" class="shortcut">95 v</div>
            <br/>
            <br/><div id="navbar-folio-96r" class="shortcut">96 r</div>
            <br/>
            <br/><div id="navbar-folio-96v" class="shortcut">96 v</div>
            <br/>
            <br/><div id="navbar-folio-97r" class="shortcut">97 r</div>
            <br/>
            <br/><div id="navbar-folio-97v" class="shortcut">97 v</div>
            <br/>
            <br/><div id="navbar-folio-98r" class="shortcut">98 r</div>
            <br/>
            <br/><div id="navbar-folio-98v" class="shortcut">98 v</div>
            <br/>
            <br/><div id="navbar-folio-99r" class="shortcut">99 r</div>
            <br/>
            <br/><div id="navbar-folio-99v" class="shortcut">99 v</div>
            <br/>
            <br/><div id="navbar-folio-100r" class="shortcut">100 r</div>
			<br/>
            <br/><div id="navbar-folio-100v" class="shortcut">100 v</div>
            <br/>
            <br/><div id="navbar-folio-101r" class="shortcut">101 r</div>
            <br/>
            <br/><div id="navbar-folio-101v" class="shortcut">101 v</div>
            <br/>
            <br/><div id="navbar-folio-102r" class="shortcut">102 r</div>
            <br/>
            <br/><div id="navbar-folio-102v" class="shortcut">102 v</div>
            <br/>
            <br/><div id="navbar-folio-103r" class="shortcut">103 r</div>
            <br/>
            <br/><div id="navbar-folio-103v" class="shortcut">103 v</div>
            <br/>
            <br/><div id="navbar-folio-104r" class="shortcut">104 r</div>
            <br/>
            <br/><div id="navbar-folio-104v" class="shortcut">104 v</div>
            <br/>
            <br/><div id="navbar-folio-105r" class="shortcut">105 r</div>
            <br/>
            <br/><div id="navbar-folio-105v" class="shortcut">105 v</div>
            <br/>
            <br/><div id="navbar-folio-106r" class="shortcut">106 r</div>
            <br/>
            <br/><div id="navbar-folio-106v" class="shortcut">106 v</div>
            <br/>
            <br/><div id="navbar-folio-107r" class="shortcut">107 r</div>
            <br/>
            <br/><div id="navbar-folio-107v" class="shortcut">107 v</div>
            <br/>
            <br/><div id="navbar-folio-108r" class="shortcut">108 r</div>
            <br/>
            <br/><div id="navbar-folio-108v" class="shortcut">108 v</div>
            <br/>
            <br/><div id="navbar-folio-109r" class="shortcut">109 r</div>
            <br/>
            <br/><div id="navbar-folio-109v" class="shortcut">109 v</div>
            <br/>
            <br/><div id="navbar-folio-110r" class="shortcut">110 r</div>
            <br/>
            <br/><div id="navbar-folio-110v" class="shortcut">110 v</div>
            <br/>
            <br/><div id="navbar-folio-111r" class="shortcut">111 r</div>
            <br/>
            <br/><div id="navbar-folio-111v" class="shortcut">111 v</div>
            <br/>
            <br/><div id="navbar-folio-112r" class="shortcut">112 r</div>
            <br/>
            <br/><div id="navbar-folio-112v" class="shortcut">112 v</div>
            <br/>
            <br/><div id="navbar-folio-113r" class="shortcut">113 r</div>
            <br/>
            <br/><div id="navbar-folio-113v" class="shortcut">113 v</div>
            <br/>
            <br/><div id="navbar-folio-114r" class="shortcut">114 r</div>
            <br/>
            <br/><div id="navbar-folio-114v" class="shortcut">114 v</div>
            <br/>
            <br/><div id="navbar-folio-115r" class="shortcut">115 r</div>
            <br/>
            <br/><div id="navbar-folio-115v" class="shortcut">115 v</div>
            <br/>
            <br/><div id="navbar-folio-116r" class="shortcut">116 r</div>
            <br/>
            <br/><div id="navbar-folio-116v" class="shortcut">116 v</div>
            <br/>
            <br/><div id="navbar-folio-117r" class="shortcut">117 r</div>
            <br/>
            <br/><div id="navbar-folio-117v" class="shortcut">117 v</div>
            <br/>
            <br/><div id="navbar-folio-118r" class="shortcut">118 r</div>
            <br/>
            <br/><div id="navbar-folio-118v" class="shortcut">118 v</div>
            <br/>
            <br/><div id="navbar-folio-119r" class="shortcut">119 r</div>
            <br/>
            <br/><div id="navbar-folio-119v" class="shortcut">119 v</div>
            <br/>
            <br/><div id="navbar-folio-120r" class="shortcut">120 r</div>
            <br/>
            <br/><div id="navbar-folio-120v" class="shortcut">120 v</div>
            <br/>
            <br/><div id="navbar-folio-121r" class="shortcut">121 r</div>
            <br/>
            <br/><div id="navbar-folio-121v" class="shortcut">121 v</div>
            <br/>
            <br/><div id="navbar-folio-122r" class="shortcut">122 r</div>
            <br/>
            <br/><div id="navbar-folio-122v" class="shortcut">122 v</div>
            <br/>
            <br/><div id="navbar-folio-123r" class="shortcut">123 r</div>
            <br/>
            <br/><div id="navbar-folio-123v" class="shortcut">123 v</div>
            <br/>
            <br/><div id="navbar-folio-124r" class="shortcut">124 r</div>
            <br/>
            <br/><div id="navbar-folio-124v" class="shortcut">124 v</div>
            <br/>
            <br/><div id="navbar-rpd" class="shortcut">rpd</div>
            <br/>
            <br/><div id="navbar-rbdg" class="shortcut">rbdg</div>
            <br/>
            <br/>
        </span>
	</div>
    <div id="navbar-facs" style="display:none">
    	<img id="navbar-facs_preview" src="images/_previews/blank.jpg" height="100%" />
    </div>    
	<div id="navbar-magnify" title="Increase the Magnification of the Facsimile">
		<span class="navbar-magnify-text">Facsimile Magnification:
            <span id="vss" style="display:none">
            	<br/>
            	<br/><span id="x0" class="navbar-magnify-text">Default</span>
            </span>
            <br/>
            <br/><span id="x1" class="navbar-magnify-text" style="color:#09C">100%</span>
            <br/>
            <br/><span id="x2" class="navbar-magnify-text">200%</span>
            <br/>
            <br/><span id="x4" class="navbar-magnify-text">400%</span>
            <br/>
            <br/><span id="x8" class="navbar-magnify-text">800%</span>
            <br/>
            <br/>
		</span>
	</div>
    <div id="navbar-enlarge" title="Increase the Point Size of the Transcription">
		<span class="navbar-enlarge-text">Transcription Point Size:
            <br/>
            <br/><span id="8pt" class="navbar-enlarge-text">8pt</span>
            <br/>
            <br/><span id="12pt" class="navbar-enlarge-text" style="color:#09C">12pt</span>
            <br/>
            <br/><span id="16pt" class="navbar-enlarge-text">16pt</span>
            <br/>
            <br/><span id="20pt" class="navbar-enlarge-text">20pt</span>
            <br/>
            <br/><span id="24pt" class="navbar-enlarge-text">24pt</span>
            <br/>
            <br/>
        </span>
	</div>
	<div id="navbar-scribe" title="Toggle Scribes On/Off">
		<span class="navbar-scribe-text">
        	<span style="color:#FFF">Scribe:</span>
            <br/>
            <br/><span id="toggle-SALTHOWS" class="navbar-scribe-text" title="Note: clicking or tapping this base hand will toggle only revisions made by the hand.">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salthows</span>
            <br/>
            <br/><span id="toggle-LITTLE_BROWN" class="navbar-scribe-text"><span style="background-color:#960">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Little Brown</span>
            <br/>
            <br/><span id="toggle-MOUNT_GRACE" class="navbar-scribe-text"><span style="background-color:#003">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Mount Grace</span>
            <br/>
            <br/><span id="toggle-FLAG" class="navbar-scribe-text"><span style="background-color:#FC6">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Flag</span>
            <br/>
            <br/><span id="toggle-TINY_BROWN_NOTAE" class="navbar-scribe-text"><span style="background-color:#F90">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Tiny Brown Notae</span>
            <br/>
            <br/><span id="toggle-BIG_BROWN" class="navbar-scribe-text"><span style="background-color:#630">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Big Brown</span>
            <br/>
            <br/><span id="toggle-PLUMMET" class="navbar-scribe-text"><span style="background-color:#999">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Plummet</span>
            <br/>
            <br/><span id="toggle-BIG_BLACK" class="navbar-scribe-text"><span style="background-color:#333">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Big Black</span>
            <br/>
            <br/><span id="toggle-RUBY_PARAPH" class="navbar-scribe-text"><span style="background-color:#C03">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Ruby Paraph</span>
            <br/>
            <br/><span id="toggle-RED_BRACKETS" class="navbar-scribe-text"><span style="background-color:#900">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Red Brackets</span>
            <br/>
            <br/><span id="toggle-BIG_RED_N" class="navbar-scribe-text"><span style="background-color:#F00">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Big Red N</span>
            <br/>
            <br/><span id="toggle-FADED_RED_BLOTCH" class="navbar-scribe-text"><span style="background-color:#F60">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Faded Red Blotch</span>
            <br/>
            <br/><span id="toggle-RED_INK_ANNOTATOR" class="navbar-scribe-text"><span style="background-color:#C00">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Red Ink Annotator</span>
            <br/>
            <br/><span id="toggle-FINAL_FOLIO_1" class="navbar-scribe-text"><span style="background-color:#300">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Final Folio 1</span>
            <br/>
            <br/><span id="toggle-FINAL_FOLIO_2" class="navbar-scribe-text"><span style="background-color:#633">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Final Folio 2</span>
            <br/>
            <br/><span id="toggle-LIBRARIAN" class="navbar-scribe-text"><span style="background-color:#CCC">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Librarian</span>
            <br/>
            <br/>
        </span>
	</div>
  </div>
  <div id="navbar-info">
  		<span class="navbar-info-text">
            <div style="color:#999; font-size:48pt; font-weight:normal; left:106px; position:absolute; top:19px">2</div>
            <p class="heading_1">Showcase</p>
            <br/>
            <hr/>
            <span class="heading_1">Using</span> <span class="heading_2">Showcase</span>
            <hr/>
            <p>Everything in Showcase starts with the Navbar, the svelte toolbar at the top of this browser window. From left to right, the controls in the Navbar perform the following functions (when active, these controls appear <span style="color:#09F">blue</span>):</p>
            <br/>
            <div style="text-align:center"><img src="images/navbar/navbar.jpg" alt="Image of the Navbar" width="600" height="44" /></div>
            <br/>
            <p><span class="heading_3">1&#x2012;Show/Hide the Navbar</span><br/>Clicking or tapping this control reduces the Navbar to a small tab in the top left corner of the browser window. Clicking or tapping this tab restores the Navbar.</p>
            <br/>
            <p><span class="heading_3">2&#x2012;Go to the First Folio</span><br/>Clicking or tapping this control takes the user to Folio i r of <i>The Book of Margery Kempe</i>.</p>
            <br/>
            <p><span class="heading_3">3&#x2012;Go to the Previous Folio</span><br/>Clicking or tapping this control takes the user one recto or verso backward in <i>The Book of Margery Kemep</i>.</p>
            <br/>
            <p><span class="heading_3">4&#x2012;Select a Folio</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual rectos and versos may be previewed and "jumped" to directly. The control also displays the id of the current recto or verso.</p>
            <br/>
            <p><span class="heading_3">5&#x2012;Go to the Next Folio</span><br/>Clicking or tapping this control takes the user one recto or verso forward in <i>The Book of Margery Kemep</i>.</p>
            <br/>
            <p><span class="heading_3">6&#x2012;Go to the Last Folio</span><br/>Clicking or tapping this control takes the user to Folio 124 v of <i>The Book of Margery Kempe</i>.</p>
            <br/>
            <p><span class="heading_3">7&#x2012;Toggle Views</span><br/>Clicking or tapping this control enables the following views: Facsimile-Transcription, Facsimile-only, and Transcription-only.</p>
            <br/>
            <p><span class="heading_3">8&#x2012;Increase the Magnification of the Facsimile</span><br/>Clicking or tapping this control opens a drop-down menu, from which the magnification level of the facsimile can be adjusted between 100% and 800%.</p>
            <br/>
            <p><span class="heading_3">9&#x2012;Increase the Point Size of the Transcription</span><br/>Clicking or tapping this control opens a drop-down menu, from which the the font size of the transcription can be adjusted between 8 pt. and 24 pt.</p>
            <br/>
            <p><span class="heading_3">10&#x2012;Toggle Scribes On/Off</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual scribes/annotators may be toggled on (default) or off.</p>
            <br/>
            <p><span class="heading_3">11&#x2012;Toggle Marginalia On/Off</span><br/>Clicking or tapping this control turns marginalia on (default) or off.</p>
            <br/>
            <p><span class="heading_3">12&#x2012;Toggle Expansions On/Off</span><br/>Clicking or tapping this control turns expansions on or off (default). When expansions are turned off, Showcase displays the medieval abbreviations that appear in <i>The Book of Margery Kempe</i>.</p>
            <br/>
            <p><span class="heading_3">13&#x2012;Learn about Showcase</span><br/>Clicking or tapping this control shows or hides this window.</p>
            <br/>
            <!--<hr/>
            <span class="heading_1">About</span> <span class="heading_2">Showcase</span>
            <hr/>
            <p>Showcase debuted at the 2011 Annual Conference and Members' Meeting of the TEI Consortium in W&#x00FC;rzburg, Germany.</p>
            <p>Showcase 2 was released in March 2014. The new version</p>
                <ol style="padding-right: 20px">
                    <li>has been optimzed to load more than four times faster;</li>
                    <br/>
                    <li>features simplified controls and drop-down menus that extend the webapp's functionality;</li>
                    <br/>
                    <li>features improved previews and jump navigation&#x2014;via Scroll-to-Preview for desktop and Tap-to-Preview for mobile;</li>
                    <br/>
                    <li>now intelligently adapts to screen size&#x2014;upscaling controls, menus, and windows for large screens and downscaling them for small&#x2014;automatically, without significantly altering the user interface, and without sacrificing functionality; and</li>
                    <br/>
					<li>features early support for very small screens, such as the iPhone's.</li>
                </ol>
            <p>Showcase continues to be developed by its author, Charles W. Borchers, IV, for Southeastern Louisiana University's Digital Humanities Program and <i>Humanities Online</i>. This build of Showcase includes code specifically developed for <i>The Book of Margery Kempe</i></p>
            <p>Universities and colleges interested in adapting Showcase for their own projects are encouraged to contact the author at <a href="mailto:charles.borchers@selu.edu">charles.borchers@selu.edu</a>.</p>
            <br/>-->
            <hr/>
            <span class="heading_1">Copyright Notice</span> <span class="heading_2">&#x0026; Conditions of Use</span>
            <hr/>
            <p>This edition of Showcase was created exclusively for <i>The Book of Margery Kempe</i>, a Digital Humanities project of Southeastern Louisiana University's Department of English. Showcase remains the intellectual property of and is &#x00A9; by its author, <a href="mailto:charles.borchers@selu.edu">Charles W. Borchers, IV</a>, and may not be modified or copied without his express permission. Your use of this software constitutes acknowledgement of this copyright and of the software's conditions of use.</p>
            <p>All images of London, British Library MS Add. 61823 are courtesy of the British Library Board, and freely available on this site as materials in the Public Domain under the terms specified by the <a href="http://creativecommons.org/publicdomain/">Creative Commons</a>.</p>
            <p>All transcripts of London, British Library MS Add. 61823 are made by Joel Fredell, and freely available on this site as materials in the Public Domain under the terms specified by the <a href="http://creativecommons.org/publicdomain/zero/1.0">Creative Commons</a>.</p>
            <p><a href="../software.php" target="_blank">Andron Scriptor Web 3.1</a>, the webfont developed for and used by Showcase, is a special edition of <a href="http://www.signographie.de/cms/front_content.php?idart=69&changelang=2" target="_blank">Andron&#x2122;</a>, financed by the Norwegian Research Council and the University of Bergen. <a href="http://www.mufi.info/fonts/#Andron" target="_blank">Andron Scriptor Web</a> exists to support scholarly editing in medieval philological studies and is provided free of charge by its creator and provider, Andreas St&#x00F6;tzner and the <a href="http://www.mufi.info" target="_blank">Medieval Unicode Font Initiative (MUFI)</a>. Both must be credited in any work which utilizes the font. Any alteration of the font, including, but not limited to, any alteration of its content, glyphs, or name, is a violation of international copyright law. If enhancements or improvements to the font are desired, these should be forwarded to MUFI for consideration in future releases of the font. Andron&#x2122; is a trademark of Andreas St&#x00F6;tzner; its design is &#x00A9; by Andreas St&#x00F6;tzner all rights reserved.</p>
		</span>
	</div>
  <div id="content">
	<div id="content-left">
        <img id="facs_preview" src="images/_previews/1r_preview.jpg" />
    	<img id="facs" src="images/facsimiles/1r.jpg" height="1350" style="display:none"/>
	  <div id="copyright"><img src="images/logos/british_library.jpg" alt="British Library Mark" title="Manuscript images &#x00A9; the British Library Board." width="30" height="60" /></div>
	</div>
  	<div id="content-right" class="medieval">
		<?php include("folios/1r.inc.php"); ?>
		<?php include("folios/1v.inc.php"); ?>
		<?php include("folios/2r.inc.php"); ?>
		<?php include("folios/2v.inc.php"); ?>
		<?php include("folios/3r.inc.php"); ?>
		<?php include("folios/3v.inc.php"); ?>
		<?php include("folios/4r.inc.php"); ?>
		<?php include("folios/4v.inc.php"); ?>
		<?php include("folios/5r.inc.php"); ?>
		<?php include("folios/5v.inc.php"); ?>
		<?php include("folios/6r.inc.php"); ?>
		<?php include("folios/6v.inc.php"); ?>
		<?php include("folios/7r.inc.php"); ?>
		<?php include("folios/7v.inc.php"); ?>
		<?php include("folios/8r.inc.php"); ?>
		<?php include("folios/8v.inc.php"); ?>
		<?php include("folios/9r.inc.php"); ?>
		<?php include("folios/9v.inc.php"); ?>
		<?php include("folios/10r.inc.php"); ?>
		<?php include("folios/10v.inc.php"); ?>
		<?php include("folios/11r.inc.php"); ?>
		<?php include("folios/11v.inc.php"); ?>
		<?php include("folios/12r.inc.php"); ?>
		<?php include("folios/12v.inc.php"); ?>
		<?php include("folios/13r.inc.php"); ?>
		<?php include("folios/13v.inc.php"); ?>
		<?php include("folios/14r.inc.php"); ?>
		<?php include("folios/14v.inc.php"); ?>
		<?php include("folios/15r.inc.php"); ?>
		<?php include("folios/15v.inc.php"); ?>
		<?php include("folios/16r.inc.php"); ?>
		<?php include("folios/16v.inc.php"); ?>
		<?php include("folios/17r.inc.php"); ?>
		<?php include("folios/17v.inc.php"); ?>
		<?php include("folios/18r.inc.php"); ?>
		<?php include("folios/18v.inc.php"); ?>
		<?php include("folios/19r.inc.php"); ?>
		<?php include("folios/19v.inc.php"); ?>
		<?php include("folios/20r.inc.php"); ?>
		<?php include("folios/20v.inc.php"); ?>
		<?php include("folios/21r.inc.php"); ?>
		<?php include("folios/21v.inc.php"); ?>
		<?php include("folios/22r.inc.php"); ?>
		<?php include("folios/22v.inc.php"); ?>
		<?php include("folios/23r.inc.php"); ?>
		<?php include("folios/23v.inc.php"); ?>
		<?php include("folios/24r.inc.php"); ?>
		<?php include("folios/24v.inc.php"); ?>
		<?php include("folios/25r.inc.php"); ?>
		<?php include("folios/25v.inc.php"); ?>
		<?php include("folios/26r.inc.php"); ?>
		<?php include("folios/26v.inc.php"); ?>
		<?php include("folios/27r.inc.php"); ?>
		<?php include("folios/27v.inc.php"); ?>
		<?php include("folios/28r.inc.php"); ?>
		<?php include("folios/28v.inc.php"); ?>
		<?php include("folios/29r.inc.php"); ?>
		<?php include("folios/29v.inc.php"); ?>
		<?php include("folios/30r.inc.php"); ?>
		<?php include("folios/30v.inc.php"); ?>
		<?php include("folios/31r.inc.php"); ?>
		<?php include("folios/31v.inc.php"); ?>
		<?php include("folios/32r.inc.php"); ?>
		<?php include("folios/32v.inc.php"); ?>
		<?php include("folios/33r.inc.php"); ?>
		<?php include("folios/33v.inc.php"); ?>
		<?php include("folios/34r.inc.php"); ?>
		<?php include("folios/34v.inc.php"); ?>
		<?php include("folios/35r.inc.php"); ?>
		<?php include("folios/35v.inc.php"); ?>
		<?php include("folios/36r.inc.php"); ?>
		<?php include("folios/36v.inc.php"); ?>
		<?php include("folios/37r.inc.php"); ?>
		<?php include("folios/37v.inc.php"); ?>
		<?php include("folios/38r.inc.php"); ?>
		<?php include("folios/38v.inc.php"); ?>
		<?php include("folios/39r.inc.php"); ?>
		<?php include("folios/39v.inc.php"); ?>
		<?php include("folios/40r.inc.php"); ?>
		<?php include("folios/40v.inc.php"); ?>
		<?php include("folios/41r.inc.php"); ?>
		<?php include("folios/41v.inc.php"); ?>
		<?php include("folios/42r.inc.php"); ?>
		<?php include("folios/42v.inc.php"); ?>
		<?php include("folios/43r.inc.php"); ?>
		<?php include("folios/43v.inc.php"); ?>
		<?php include("folios/44r.inc.php"); ?>
		<?php include("folios/44v.inc.php"); ?>
		<?php include("folios/45r.inc.php"); ?>
		<?php include("folios/45v.inc.php"); ?>
		<?php include("folios/46r.inc.php"); ?>
		<?php include("folios/46v.inc.php"); ?>
		<?php include("folios/47r.inc.php"); ?>
		<?php include("folios/47v.inc.php"); ?>
		<?php include("folios/48r.inc.php"); ?>
		<?php include("folios/48v.inc.php"); ?>
		<?php include("folios/49r.inc.php"); ?>
		<?php include("folios/49v.inc.php"); ?>
		<?php include("folios/50r.inc.php"); ?>
		<?php include("folios/50v.inc.php"); ?>
		<?php include("folios/51r.inc.php"); ?>
		<?php include("folios/51v.inc.php"); ?>
		<?php include("folios/52r.inc.php"); ?>
		<?php include("folios/52v.inc.php"); ?>
		<?php include("folios/53r.inc.php"); ?>
		<?php include("folios/53v.inc.php"); ?>
		<?php include("folios/54r.inc.php"); ?>
		<?php include("folios/54v.inc.php"); ?>
		<?php include("folios/55r.inc.php"); ?>
		<?php include("folios/55v.inc.php"); ?>
		<?php include("folios/56r.inc.php"); ?>
		<?php include("folios/56v.inc.php"); ?>
		<?php include("folios/57r.inc.php"); ?>
		<?php include("folios/57v.inc.php"); ?>
		<?php include("folios/58r.inc.php"); ?>
		<?php include("folios/58v.inc.php"); ?>
		<?php include("folios/59r.inc.php"); ?>
		<?php include("folios/59v.inc.php"); ?>
		<?php include("folios/60r.inc.php"); ?>
		<?php include("folios/60v.inc.php"); ?>
		<?php include("folios/61r.inc.php"); ?>
		<?php include("folios/61v.inc.php"); ?>
		<?php include("folios/62r.inc.php"); ?>
		<?php include("folios/62v.inc.php"); ?>
		<?php include("folios/63r.inc.php"); ?>
		<?php include("folios/63v.inc.php"); ?>
		<?php include("folios/64r.inc.php"); ?>
		<?php include("folios/64v.inc.php"); ?>
		<?php include("folios/65r.inc.php"); ?>
		<?php include("folios/65v.inc.php"); ?>
		<?php include("folios/66r.inc.php"); ?>
		<?php include("folios/66v.inc.php"); ?>
		<?php include("folios/67r.inc.php"); ?>
		<?php include("folios/67v.inc.php"); ?>
		<?php include("folios/68r.inc.php"); ?>
		<?php include("folios/68v.inc.php"); ?>
		<?php include("folios/69r.inc.php"); ?>
		<?php include("folios/69v.inc.php"); ?>
		<?php include("folios/70r.inc.php"); ?>
		<?php include("folios/70v.inc.php"); ?>
		<?php include("folios/71r.inc.php"); ?>
		<?php include("folios/71v.inc.php"); ?>
		<?php include("folios/72r.inc.php"); ?>
		<?php include("folios/72v.inc.php"); ?>
		<?php include("folios/73r.inc.php"); ?>
		<?php include("folios/73v.inc.php"); ?>
		<?php include("folios/74r.inc.php"); ?>
		<?php include("folios/74v.inc.php"); ?>
		<?php include("folios/75r.inc.php"); ?>
		<?php include("folios/75v.inc.php"); ?>
		<?php include("folios/76r.inc.php"); ?>
		<?php include("folios/76v.inc.php"); ?>
		<?php include("folios/77r.inc.php"); ?>
		<?php include("folios/77v.inc.php"); ?>
		<?php include("folios/78r.inc.php"); ?>
		<?php include("folios/78v.inc.php"); ?>
		<?php include("folios/79r.inc.php"); ?>
		<?php include("folios/79v.inc.php"); ?>
		<?php include("folios/80r.inc.php"); ?>
		<?php include("folios/80v.inc.php"); ?>
		<?php include("folios/81r.inc.php"); ?>
		<?php include("folios/81v.inc.php"); ?>
		<?php include("folios/82r.inc.php"); ?>
		<?php include("folios/82v.inc.php"); ?>
		<?php include("folios/83r.inc.php"); ?>
		<?php include("folios/83v.inc.php"); ?>
		<?php include("folios/84r.inc.php"); ?>
		<?php include("folios/84v.inc.php"); ?>
		<?php include("folios/85r.inc.php"); ?>
		<?php include("folios/85v.inc.php"); ?>
		<?php include("folios/86r.inc.php"); ?>
		<?php include("folios/86v.inc.php"); ?>
		<?php include("folios/87r.inc.php"); ?>
		<?php include("folios/87v.inc.php"); ?>
		<?php include("folios/88r.inc.php"); ?>
		<?php include("folios/88v.inc.php"); ?>
		<?php include("folios/89r.inc.php"); ?>
		<?php include("folios/89v.inc.php"); ?>
		<?php include("folios/90r.inc.php"); ?>
		<?php include("folios/90v.inc.php"); ?>
		<?php include("folios/91r.inc.php"); ?>
		<?php include("folios/91v.inc.php"); ?>
		<?php include("folios/92r.inc.php"); ?>
		<?php include("folios/92v.inc.php"); ?>
		<?php include("folios/93r.inc.php"); ?>
		<?php include("folios/93v.inc.php"); ?>
		<?php include("folios/94r.inc.php"); ?>
		<?php include("folios/94v.inc.php"); ?>
		<?php include("folios/95r.inc.php"); ?>
		<?php include("folios/95v.inc.php"); ?>
		<?php include("folios/96r.inc.php"); ?>
		<?php include("folios/96v.inc.php"); ?>
		<?php include("folios/97r.inc.php"); ?>
		<?php include("folios/97v.inc.php"); ?>
		<?php include("folios/98r.inc.php"); ?>
		<?php include("folios/98v.inc.php"); ?>
		<?php include("folios/99r.inc.php"); ?>
		<?php include("folios/99v.inc.php"); ?>
		<?php include("folios/100r.inc.php"); ?>
		<?php include("folios/100v.inc.php"); ?>
		<?php include("folios/101r.inc.php"); ?>
		<?php include("folios/101v.inc.php"); ?>
		<?php include("folios/102r.inc.php"); ?>
		<?php include("folios/102v.inc.php"); ?>
		<?php include("folios/103r.inc.php"); ?>
		<?php include("folios/103v.inc.php"); ?>
		<?php include("folios/104r.inc.php"); ?>
		<?php include("folios/104v.inc.php"); ?>
		<?php include("folios/105r.inc.php"); ?>
		<?php include("folios/105v.inc.php"); ?>
		<?php include("folios/106r.inc.php"); ?>
		<?php include("folios/106v.inc.php"); ?>
		<?php include("folios/107r.inc.php"); ?>
		<?php include("folios/107v.inc.php"); ?>
		<?php include("folios/108r.inc.php"); ?>
		<?php include("folios/108v.inc.php"); ?>
		<?php include("folios/109r.inc.php"); ?>
		<?php include("folios/109v.inc.php"); ?>
		<?php include("folios/110r.inc.php"); ?>
		<?php include("folios/110v.inc.php"); ?>
		<?php include("folios/111r.inc.php"); ?>
		<?php include("folios/111v.inc.php"); ?>
		<?php include("folios/112r.inc.php"); ?>
		<?php include("folios/112v.inc.php"); ?>
		<?php include("folios/113r.inc.php"); ?>
		<?php include("folios/113v.inc.php"); ?>
		<?php include("folios/114r.inc.php"); ?>
		<?php include("folios/114v.inc.php"); ?>
		<?php include("folios/115r.inc.php"); ?>
		<?php include("folios/115v.inc.php"); ?>
		<?php include("folios/116r.inc.php"); ?>
		<?php include("folios/116v.inc.php"); ?>
		<?php include("folios/117r.inc.php"); ?>
		<?php include("folios/117v.inc.php"); ?>
		<?php include("folios/118r.inc.php"); ?>
		<?php include("folios/118v.inc.php"); ?>
		<?php include("folios/119r.inc.php"); ?>
		<?php include("folios/119v.inc.php"); ?>
		<?php include("folios/120r.inc.php"); ?>
		<?php include("folios/120v.inc.php"); ?>
		<?php include("folios/121r.inc.php"); ?>
		<?php include("folios/121v.inc.php"); ?>
		<?php include("folios/122r.inc.php"); ?>
		<?php include("folios/122v.inc.php"); ?>
		<?php include("folios/123r.inc.php"); ?>
		<?php include("folios/123v.inc.php"); ?>
		<?php include("folios/124r.inc.php"); ?>

		<?php include("folios/na.inc.php"); ?>
	</div>
  </div>
</div>
</body>
</html>