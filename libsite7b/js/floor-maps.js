jQuery(document).ready(function() {

	// This should probably done via a loop, but every time I try to write such a loop, the line that calls svgFunctions() gives a console error. Open to suggestions.
	// Starts at [1] instead of [0] because there isn't the same processing for the key/legend SVG.  Alternatively, the key/legend could probably just be output as a raster image. 
	var object1 = document.getElementsByTagName("object")[1];
	var object2 = document.getElementsByTagName("object")[2];
	var object3 = document.getElementsByTagName("object")[3];
	var object4 = document.getElementsByTagName("object")[4];
	var object5 = document.getElementsByTagName("object")[5];
	var object6 = document.getElementsByTagName("object")[6];
	var object7 = document.getElementsByTagName("object")[7];
	var object8 = document.getElementsByTagName("object")[8];

	// If the SVGs appear to already be loaded (see below), run their functions right away.
	function runSVGFunctionsNow() {
                svgFunctions(object1.contentDocument, object1);
                svgFunctions(object2.contentDocument, object2);
                svgFunctions(object3.contentDocument, object3);
                svgFunctions(object4.contentDocument, object4);
                svgFunctions(object5.contentDocument, object5);
                svgFunctions(object6.contentDocument, object6);
                svgFunctions(object7.contentDocument, object7);
                svgFunctions(object8.contentDocument, object8);
	}

	// If the SVGs appear not to be loaded (see below), run their functions after the SVG has loaded.
	function runSVGFunctionsOnLoad() {
		// IE Edge seems to need a slight delay
		if (/Edge/.test(navigator.userAgent)) {
			setTimeout(function() {
				svgOnloads();
			}, 200);
		// but Chrome seems not to work when the slight delay is added
		} else {
			svgOnloads();
		}
	}
	function svgOnloads() {
		object1.addEventListener("load", function() {
			svgFunctions(object1.contentDocument, object1);
		});
		object2.addEventListener("load", function() {
			svgFunctions(object2.contentDocument, object2);
		});
		object3.addEventListener("load", function() {
			svgFunctions(object3.contentDocument, object3);
		});
		object4.addEventListener("load", function() {
			svgFunctions(object4.contentDocument, object4);
		});
		object5.addEventListener("load", function() {
			svgFunctions(object5.contentDocument, object5);
		});
		object6.addEventListener("load", function() {
			svgFunctions(object6.contentDocument, object6);
		});
		object7.addEventListener("load", function() {
			svgFunctions(object7.contentDocument, object7);
		});
		object8.addEventListener("load", function() {
			svgFunctions(object8.contentDocument, object8);
		});
	}


	// Some color variables for different kinds of elements in the maps.
	// Not sure why, but these need to be set before the following code runs, else they are returning as "undefined" in some browsers/OSs/servers.
	var roombg = "#7AC143";
	var stackbg = "#0096d6";
	var defaultbg = "#FFD261";
	var roomUnhighlightedBG = "transparent";
	var stackUnhighlightedBG = "#AFCCDD";
	var defaultUnhighlightedBG = "transparent";
	var roomInterstitialBG = "#B3D998";
	var stacksInterstitialBG = "#6FB8DA";
	var defaultInterstitialBG = "#FFE6A9";
	
	// In an ideal world, we'd just be able to run svgFunctions() on the load eventListener, but whether they're already loaded or not 
	// appears to vary widely depending on OS, browser, and even server (and if they're already loaded, the eventListener is skipped).  
	// The following conditionals seem to be the best I could do for figuring out whether the SVGs were already loaded or not.
	if (object1.contentDocument) {
		var loaded = object1.contentDocument.rootElement ? true : null;
		if (loaded) {
			runSVGFunctionsNow();
		} else {
			runSVGFunctionsOnLoad();
		}
	} else {
		runSVGFunctionsOnLoad();
	}

	// IE 9 and 10 don't respect the addEventListener("load") stuff from above, but they seem to have the SVGs already loaded, so just run svgFunctions() right away
	// Browser detection by weroro at http://stackoverflow.com/questions/10964966/detect-ie-version-prior-to-v9-in-javascript
	function isIE () {
		var myNav = navigator.userAgent.toLowerCase();
		return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
	}
	if (isIE() == 9 || isIE() == 10) {
		runSVGFunctionsNow();
	}

	// Pre-processing on each SVG file for proper display and functionality
	function svgFunctions(svgDoc, svg) {
		// Inject CSS into the SVG via JavaScript because any added by hand would get blown away on subsequent edits in Illustrator, 
		// and any added to the parent HTML file does't get recognized by the SVG.
		// The CSS fixes the font, adds styling for the "flashing" effect when a specific element has been linked via a hash, and various hover colors
		var styleElement = svgDoc.createElementNS("http://www.w3.org/2000/svg", "style");
		styleElement.textContent = "@namespace xlink 'http://www.w3.org/1999/xlink'; "
		  // Illustrator outputs the font as ArialMT, which the browser doesn't recognize.
		  // "pointer-events: none" prevents text nodes from triggering mouse events
		  + " text, tspan { font-family: arial, helvetica, sans-serif !important; font-size: 24px; pointer-events: none; } "
		  // If an element has been given an ID that ends in -inner (i.e. those information circles, the blue squares behind the stack text, etc.), 
		  // prevent those from triggering mouse events
		  + " a[xlink|href$='-inner'] * { pointer-events: none; } "
		  // Add CSS that makes a room/feature flash when it's been linked via a hash
		  + " .flashmeStack { animation: flasherStack 1.5s; animation-iteration-count: 1; } " 
		  + " .flashmeRoom { animation: flasherRoom 1.5s; animation-iteration-count: 1; } " 
		  + " .flashmeDefault { animation: flasherDefault 1.5s; animation-iteration-count: 1; } " 
		  + " @keyframes flasherStack   { 0% { fill: " + stackUnhighlightedBG + "; } 20% { fill: " + stackbg + "; } 40% { fill: #fff; } 60% { fill: " + stackbg + "; } 80% { fill: #fff; } 100% { fill: " + stackbg + "; } } " 
		  + " @keyframes flasherRoom    { 0% { fill: " + roomUnhighlightedBG + "; } 20% { fill: " + roombg + "; } 40% { fill: #fff; } 60% { fill: " + roombg + "; } 80% { fill: #fff; } 100% { fill: " + roombg + "; } } " 
		  + " @keyframes flasherDefault { 0% { fill: " + defaultUnhighlightedBG + "; } 20% { fill: " + defaultbg + "; } 40% { fill: #fff; } 60% { fill: " + defaultbg + "; } 80% { fill: #fff; } 100% { fill: " + defaultbg + "; } } " 
		  // Colors of elements when the SVG is hovered
		  + " .roomInterstitial { fill: " + roomInterstitialBG + "; } .stacksInterstitial { fill: " + stacksInterstitialBG + "; } .defaultInterstitial { fill: " + defaultInterstitialBG + "; } "
		  // Colors of elements when that specific element 
		  + " .roomHighlighted { fill: " + roombg + "; } .stacksHighlighted { fill: " + stackbg + "; } .defaultHighlighted { fill: " + defaultbg + "; } ";
		// .append to the bottom instead of .prepend in order to override some existing Illustrator-set styles w/o having to set !important
		jQuery(svgDoc).find("svg").append(styleElement);
		
		// Check if a specific part of an SVG has been linked to
		var hash = window.location.hash;
		if (hash) {
			setTimeout(function() { // else things get misaligned since the SVGs are still loading and .offset().top isn't calculated correctly
				// Go through each of the links in the SVG ...
				jQuery(svgDoc).find("[xlink\\:href]").each(function() {
					// ... until one matches the hash
					if (jQuery(this).attr("xlink:href") == hash.substring(1)) {
						var aThis = jQuery(this);
						// Scroll to the SVG in question
						jQuery("html, body").animate({
							scrollTop: jQuery(svg).closest(".map-info-wrap").offset().top
						}, 1000, function() {
							// After scrolling to the appropriate SVG, get the element (path, rect, polygon or circle) to "flash", 
							// as well as any visually "contained" element that also needs to flash at the same time (e.g. the rectangles under stack text).
							var thisPath = aThis.find("path, rect, polygon, circle");
							var hashEscaped = hash.substring(1).replace(/\./g,"\\.");
							var innerA = jQuery(svgDoc).find("[xlink\\:href=" + hashEscaped + "-inner]");
							var innerPath = false;
							if (innerA.length) {
								innerPath = innerA.find("path, rect, polygon, circle");
							}
							// Figure out which kind/color of element it is that's going to flash
							var flashType = "flashmeDefault";
							if (hash.indexOf("#stack") == 0) { 
								flashType = "flashmeStack";
							} else if (hash.indexOf("#room") == 0) {
								flashType = "flashmeRoom";
							}
							// Add a class to the element that gives the element a CSS animation on its fill colors (flashing them on and off several times)
							if (thisPath[0].classList) {
								thisPath[0].classList.add(flashType);
								if (innerPath) innerPath[0].classList.add(flashType);
							} else {
								// IE
								currentClass = thisPath[0].getAttribute("class");
								thisPath[0].setAttribute("class",currentClass + " " + flashType);
								if (innerPath) {
									currentInnerClass = innerPath[0].getAttribute("class");
									innerPath[0].setAttribute("class",currentInnerClass + " " + flashType);
								}
							}
							// After 1500ms (the duration of the CSS animation), trigger a "hover" over the element so that its tooltip pops up, 
							// but also trigger an exit over the SVG as a whole, since the above "hover" triggers other effects (that would be disconcerting
							// since the user didn't explicitly mouse over the SVG).
							setTimeout(function() {
								aThis.mouseover();
								jQuery(svgDoc).mouseleave();
/*
							if (thisPath[0].classList) {
								thisPath[0].classList.add("found");
								if (innerPath) innerPath[0].classList.add("found");
							} else {
								currentClass = thisPath[0].getAttribute("class");
								thisPath[0].setAttribute("class",currentClass + " found");
								if (innerPath) {
									currentInnerClass = innerPath[0].getAttribute("class");
									innerPath[0].setAttribute("class",currentInnerClass + " found");
								}
							}
							*/
							}, 1500);
						});
					}
				});
			}, 1000);
		}
		
		// When hovering over a specific triggerable element in the SVG, open its tooltip in the correct location and "highlight" it by changing the background color
		jQuery(svgDoc).on("mouseover", "a[xlink\\:href]", function(e) {
			// To figure out the absolute positioning in the HTML of the HTML tooltip relative to the location it needs to line up to in the SVG, 
			// first figure out which floor map we're talking about, and get the offset values of that map in the HTML.
			// http://stackoverflow.com/questions/30721319/how-to-get-parent-element-of-embedded-svg-in-dom Thank you to Paul LeBeau
			// (Originally tried to use jQuery(e.target.ownerDocument.defaultView.frameElement), but this didn't work in IE
			// http://stackoverflow.com/questions/10485232/how-to-call-a-function-in-the-parent-html-document-from-an-embedded-svg)
			var objects = document.getElementsByTagName("object");
			for (var i=0; i<objects.length; i++) {
				if (objects[i].contentDocument === svgDoc) {
					var thisMapTop = jQuery(objects[i]).closest(".map-wrap").offset().top;
					var thisMapLeft = jQuery(objects[i]).closest(".map-wrap").offset().left;
				}
			}
			// Get the proportional width of the SVG's purported width relative to its with on the screen
			// Certain Illustrator editions don't output a "width" attribute, so use viewBox value instead.
			var ratio = parseInt(jQuery(svgDoc).find("svg").attr("viewBox").split(" ")[2]) / jQuery(svgDoc).find("svg").width();
			// Turn on the tooltip and set its absolute positioning
			// The "top" value is the above calculated offset of the SVG from the page plus the offset of the element relative to the SVG
			// The "left" value is the above calculated offset of the SVG from the page plus the offset of the element relative to the SVG plus the proportional width of the element (so that the tooltip appears at its right)
			// Also remove the empty paragraph that Drupal seems to be inserting.
			if (jQuery("#map-feature").children("p:empty")) {
				jQuery("#map-feature").children("p:empty").remove();
			}
			jQuery("#map-feature").show().css({
				top: jQuery(this).offset().top + thisMapTop, 
				left: jQuery(this).offset().left + thisMapLeft +  jQuery(this).find("path,polygon,rect,circle")[0].getBBox().width / ratio,
			});
			// Depending on the type of element it is, populate its tooltip message, 
			// and give it the appropriate class so that its background color changes
			var loc = jQuery(this).attr("xlink:href");
			var locEscaped = loc.replace(/\./g,"\\.");
			// Rooms
			if ( loc.indexOf("room") == 0) {
				// For now a generic message for rooms. Later we can do fancy stuff to check for room availability
				jQuery("#map-feature-message").html(jQuery("#rooms").html());
				if (this.classList) {
					jQuery(this).find("path,rect,polygon,circle")[0].classList.add("roomHighlighted");
				} else {
					// IE
					currentClass = jQuery(this).find("path,rect,polygon,circle")[0].getAttribute("class");
					jQuery(this).find("path,rect,polygon,circle")[0].setAttribute("class",currentClass + " roomHighlighted");
				}
			// Stacks
			} else if (loc.indexOf("stack") == 0) {
				// Mostly explanations of what the LoC classification subclasses are for that block of stacks
				jQuery("#map-feature-message").html(jQuery("#" + locEscaped).html());
				if (this.classList) {
					jQuery(this).find("path,rect,polygon,circle")[0].classList.add("stacksHighlighted");
				} else {
					// IE
					currentClass = jQuery(this).find("path,rect,polygon,circle")[0].getAttribute("class");
					jQuery(this).find("path,rect,polygon,circle")[0].setAttribute("class",currentClass + " stacksHighlighted");
				}
				// For stacks, also change the background color of the corresponding rectangle behind the call number text.
				var stackText = jQuery(svgDoc).find("a[xlink\\:href=" + locEscaped + "-inner]");
				if (stackText.length) {
					if (this.classList) {
						stackText.find("path,rect,polygon")[0].classList.add("stacksHighlighted");
					} else {
						currentClass = stackText.find("path,rect,polygon")[0].getAttribute("class");
						stackText.find("path,rect,polygon")[0].setAttribute("class",currentClass + " stacksHighlighted");
					}
				}
			// Everything else (excluding things like the "i"-in-the-circle information icons)
			} else if (loc.indexOf("default-inner") != 0) {
				// Brief information about each triggerable feature on the floor maps that isn't a reservable room or a set of stacks
				jQuery("#map-feature-message").html(jQuery("#" + locEscaped).html());
				if (this.classList) {
					jQuery(this).find("path,rect,polygon,circle")[0].classList.add("defaultHighlighted");
				} else {
					currentClass = jQuery(this).find("path,rect,polygon,circle")[0].getAttribute("class");
					jQuery(this).find("path,rect,polygon,circle")[0].setAttribute("class",currentClass + " defaultHighlighted");
				}
			}
		});

		// When removing the hover from a triggerable element, remove its highlighted background color and in some cases, hide its tooltip
		jQuery(svgDoc).on("mouseout", "a[xlink\\:href]", function(e) {
			// e.relatedTarget returns null when the mouseout goes from the SVG element to the HTML tooltip (i.e. not an element that the SVG knows about).
			// If that happens, keep the tooltip open (necessary for one to be able to click links in the tooltip).
			// Else, if the user mouses out in a direction that's not the tooltip, go ahead and hide it.
			if (e.relatedTarget !== null) {
				jQuery("#map-feature").hide();
			}
			// Remove classes that gave the element its highlighted background color ...
			if (this.classList) {
				jQuery(this).find("path,rect,polygon,circle")[0].classList.remove("roomHighlighted");
				jQuery(this).find("path,rect,polygon,circle")[0].classList.remove("stacksHighlighted");
				jQuery(this).find("path,rect,polygon,circle")[0].classList.remove("defaultHighlighted");
			} else {
				// IE
				currentClass = jQuery(this).find("path,rect,polygon,circle")[0].getAttribute("class");
				jQuery(this).find("path,rect,polygon,circle")[0].setAttribute("class",currentClass.replace(" roomHighlighted","").replace(" stacksHighlighted","").replace(" defaultHighlighted",""));
			}
			var loc = jQuery(this).attr("xlink:href");
			var locEscaped = loc.replace(/\./g,"\\.");
			// ... as well as such a highlighted color on the "stack-inner" rectangles
			var stackText = jQuery(svgDoc).find("a[xlink\\:href=" + locEscaped + "-inner]");
			if (stackText.length) {
				if (this.classList) {
					stackText.find("path,rect,polygon")[0].classList.remove("stacksHighlighted");
				} else {
					// IE
					stackText.find("path,rect,polygon")[0].setAttribute("class", stackText.find("path,rect,polygon")[0].getAttribute("class").replace(" stacksHighlighted",""));
				}
			}
		});
	
		// When hovering over any part of an SVG, slightly highlight the colors of all the triggerable elements in that map.
		jQuery(svgDoc).on("mouseenter", function() {
			jQuery(this).find("a[xlink\\:href] path, a[xlink\\:href] rect, a[xlink\\:href] polygon, a[xlink\\:href] circle").each(function() { 
				var loc = jQuery(this).closest("a").attr("xlink:href");
				if ( loc.indexOf("room") == 0) {
					if (this.classList) {
						this.classList.add("roomInterstitial");
					} else {
						// IE
						this.setAttribute("class",this.getAttribute("class") + " roomInterstitial");
					}
				} else if (loc.indexOf("stack") == 0) {
					if (this.classList) {
						this.classList.add("stacksInterstitial");
					} else {
						// IE
						this.setAttribute("class",this.getAttribute("class") + " stacksInterstitial");
					}
				} else if (loc.indexOf("default-inner") != 0) { // Unless it's something like the "i"-in-a-circle information icons
					if (this.classList) {
						this.classList.add("defaultInterstitial");
					} else {
						// IE
						this.setAttribute("class",this.getAttribute("class") + " defaultInterstitial");
					}
				}
			});
			// Also, display the key/legend if it's not already showing
			jQuery("#legend").slideDown();
		});
	
		// When hovering out of any part of the SVG, remove the slight highlight on the triggerable elements in that map
		jQuery(svgDoc).on("mouseleave", function(e) {
			jQuery(this).find("a[xlink\\:href] path, a[xlink\\:href] rect, a[xlink\\:href] polygon, a[xlink\\:href] circle").each(function() {
				if (this.classList) {
					this.classList.remove("highlighted");
					this.classList.remove("roomInterstitial");
					this.classList.remove("stacksInterstitial");
					this.classList.remove("defaultInterstitial");
				} else {
					var currClass = jQuery(this).attr("class") ? jQuery(this).attr("class") : "";
					var newClass = currClass.replace(" highlighted","").replace(" roomInterstitial","").replace(" stacksInterstitial","").replace(" defaultInterstitial","");
					jQuery(this).attr("class",newClass);
				}
			});
		});
	
		// Don't follow any "links" in the SVG
		jQuery(svgDoc).on("click", "a", function(e) {
			e.preventDefault();
		});
	
	}
	
	// The "x" in the tooltip
	jQuery("#map-feature .closeme").on("click", function() {
		jQuery("#map-feature").hide();
	});
	
	// The toggle for the key/legend
	jQuery("#legend .closeme").on("click", function() {
		var closeMe = jQuery(this);
		if (jQuery("#legend object").is(":hidden")) {
			jQuery("#legend").animate({
				height: "100px",
			}, function() {
				jQuery("#legend object").show();
				closeMe.text("»");
			});
		} else {
			jQuery("#legend").animate({
				height: "30px",
			}, function() {
				closeMe.text("«");
				jQuery("#legend object").hide();
			});
		}
	});
	
});
