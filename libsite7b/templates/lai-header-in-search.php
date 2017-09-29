<div id="internal-search">
	  <form id="search-form">
		<div id="search-dropdown">
		  <div id="current-search-text"><a href="#" aria-haspopup="true" aria-controls="home-search-dropdown-ul" id="current-search-text-a">Search All</a></div>
		  <ul id="home-search-dropdown-ul" aria-labelledby="current-search-text-a">
			<li id="search-all" data-placeholder="<?php echo $bentoPlaceholder; ?>">
			  <a href="#">
		        <span class="search-label">Search All</span>
		        <div class="search-description">Articles and books, plus library databases, research guides and tutorials</div>
			  </a>
		    </li>
		    <li id="search-articlesplus" data-placeholder="Fidel Castro, sustainable energy, gender and identity ...">
			  <a href="#">
		        <span class="search-label">ArticlesPlus</span>
			    <div class="search-description">Journal &amp; newspaper articles, plus books and more</div>
			  </a>
		    </li>
		    <li id="search-catalog" data-placeholder="The Communist Manifesto, calculus, Blade Runner ...">
		      <a href="#">
		        <span class="search-label">Books & More</span>
				<div class="search-description">Books (including e-books), A/V media, and archival resources</div>
			  </a>
			</li>
			<li id="search-journals" data-placeholder="Wall Street Journal, Journal of American History, sociology, ...">
		      <a href="#">
				<span class="search-label">Browse Journals</span>
				<div class="search-description">Online access to journals and other periodicals, by subject area and title</div>
			  </a>
			</li>
			<li id="search-website" data-placeholder="building hours, study rooms, Churchill ...">
		      <a href="#">
				<span class="search-label">Library Website</span>
				<div class="search-description">Library policies, news and events, and research help</div>
			  </a>
		    </li>
		  </ul>
		</div>
	    <input type="text" aria-label="searchbox: enter your search terms here" placeholder="<?php echo $bentoPlaceholder; ?>" />
		<select id="catalog-options" title="Narrow down your Books &amp; More search by selecting one of these options">
		  <option>title</option>
		  <option>journal title</option>
		  <option selected="selected">keyword</option>
		  <option>author</option>
		  <option>subject</option>
		  <option>call number</option>
		</select>
		<select id="journals-options" title="Narrow down your Browse Journals search by selecting one of these options">
		  <option>title begins with</option>
		  <option>title (exact)</option>
		  <option selected="selected">title keywords</option>
		  <option>ISSN</option>
		</select>
		<input type="image" src="<?php print $front_page . drupal_get_path('theme', $themename); ?>/images/search.png" alt="Submit search"/>
	  </form>
	</div>

 <script type="text/javascript">

  jQuery("#search-dropdown").on("click", "li", function() {
	  jQuery("#current-search-text-a").text(jQuery(this).find(".search-label").text());
	  jQuery("#search-form input[type=text]").attr("placeholder",jQuery(this).data("placeholder"));
	  jQuery("#home-search-explanation").html(jQuery(this).find(".search-description").html());
	  jQuery("#search-dropdown ul").hide();
	  jQuery("#search-form input[type=text]").focus();
	  jQuery("#catalog-options").hide();
	  jQuery("#journals-options").hide();
	  if (this.id == "search-catalog") {
	    jQuery("#catalog-options").show();
	  }
	  if (this.id == "search-journals") {
	    jQuery("#journals-options").show();
	  }
  });

	jQuery("#search-dropdown").on("click", "a", function(e) {
	  e.preventDefault();
	});

	jQuery("#search-dropdown").on("keydown", function(e) {
	  var ul = jQuery(this).find("ul");
	  if (ul.is(":hidden")) {
	    ul.show();
	  }
	  var searchLabels = jQuery("#internal-search a");
	  var nearestLabel = searchLabels.filter(":focus");
	  var nearestLabelIndex = searchLabels.index(searchLabels.filter(":focus"));
	  if (e.which == 38) { // Up arrow
	    if (nearestLabel.length == 0) {
	      searchLabels.last().focus();
	    } else {
	      searchLabels.eq(nearestLabelIndex - 1).focus();
	    }
	    e.preventDefault(); // page scrolling
	  }
	  if (e.which == 40) { // Down arrow
	    if (nearestLabelIndex == searchLabels.length - 1) {
	      searchLabels.first().focus();
	    } else {
	      searchLabels.eq(nearestLabelIndex + 1).focus();
	    }
	    e.preventDefault(); // page scrolling
	  }
	});

	jQuery("#search-dropdown").on("mouseenter mouseover", function(e) {
	  jQuery(this).find("ul").show();
	});
	jQuery("#search-dropdown").on("mouseleave", function(e) {
	  jQuery(this).find("ul").hide();
	});


  </script>
