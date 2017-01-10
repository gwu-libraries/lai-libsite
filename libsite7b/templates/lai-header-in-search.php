<style type="text/css">

  #hero {
    position: relative;
  	max-width: 1080px;
  	margin: auto;
  	visibility: visible;
  }

  @media screen and (max-width: 1080px) {
    #hero {
	    width: 100%;
  	}
  }

  #hero img {
    width: 100%;
  }

  @media screen and (max-width: 640px) {
     #hero img {
	     display: none;
    }
  }

  .is-branch #hero {
    border-right: 1px solid rgb(200,177,139);
  }

  #internal-search {
    position: absolute;
		top: auto;
	 	left: 0;
		bottom: 100%;
		min-height: 3rem;
		line-height: 3rem;
		z-index: 50000;
		padding: 0 .5em;
  }

  #internal-search:hover {
    background-color: #007FB7;
  }

  @media screen and (max-width: 1080px) {
    #internal-search {
      bottom: auto;
      top: 0;
      position: static;
      background-color: #004065;
      z-index: 10;
    }
  }

  #internal-search form select, #internal-search form input {
    color: #333;
  	padding: .75em;
	  font-size: 1em;
  }

  #internal-search form input[type=image] {
    padding-top: 0;
  	padding-bottom: 0;
  }

  @media screen and (max-width: 960px) {
    #internal-search input[type=text] { }
  }

  @media screen and (max-width: 640px) {
    #internal-search input[type=text] {
	    width: calc(100% - 120px);
  	}

  }

  #internal-search-dropdown, #internal-search-dropdown li {
    margin: 0;
		padding: 0;
		display: inline-block;
		background-color: #0096d6;
		color: #fff;
		text-align: left;
		line-height: normal;
  }

  #internal-search-dropdown {
    position: relative;
  	cursor: pointer;
  }

  #internal-search-dropdown ul {
    position: absolute;
		display: none;
		top: 100%;
		margin: 0;
		padding: 0;
		left: 0;
    z-index: 100;
  }

  #internal-search-dropdown:hover ul {
    display: block;
  }

  #internal-search-dropdown li {
    padding: .75em 1em;
  }

  #internal-search-dropdown li div {
    width: 350px;
    font-size: .85em;
    color: #000;
  	margin-top: .5em;
  }

  #internal-search-dropdown li div a {
    color: #000;
	  text-decoration: underline;
  }

  #internal-search-dropdown li:not(:first-child) {
    border-top: 1px dotted #007FB7;
  }

  #internal-search-dropdown  ul li:hover {
    background-color: #007FB7;
  }

  .current-search {
  	display: block;
  	padding: .75em 1em;
  }

  .current-search::after {
    content: " ▼";
  }

  .current-search-text {
    display: none;
  }

  @media screen and (max-width: 960px) {
    #current-search-text-a {
      display: inline;
    }
  }

  @media screen and (max-width: 640px) {
    #current-search-text-a {
	    display: none;
	  }
  }

  #branch-name {
    position: absolute;
	  bottom: 46px;
		color: #fff;
		font-size: 1.3em;
		text-shadow: 1px 1px 10px rgba(0,0,0,0.5);
		border: 1px solid rgb(200,177,139);
		background-color: rgba(200,177,139,.85);
		right: 0;
		padding: .5em 1em;
		width: 100%;
		box-sizing: border-box;
		text-align: right;
  }

  @media screen and (max-width: 1080px) {
    #branch-name {
      bottom: 94px;
  	  font-size: 1em;
  	}
  }

  @media screen and (max-width: 795px) {
    #branch-name {
      /* bottom: 132px; */
    }
  }

  @media screen and (max-width: 640px) {
    #branch-name {
      /* bottom: calc(100% + 6em); */
  	}
  }  
  
  #internal-search a {
    color: #fff;
  }

  #search-form {
    display: flex;
  	align-items: center;
  }

  #internal-search #search-form {
  	height: 3rem;
  }

  #search-form input[type=text] {
  	flex: 2;
  }

  #internal-search #search-form input[type=text] {
  	max-width: 100%; /* to override existing style */
  }

  #internal-search #search-form {
    width: 500px;
  }

  @media screen and (max-width: 1080px) {
    #internal-search #search-form {
  	  width: 550px;
    }
  }

  @media screen and (max-width: 640px) {
    #internal-search #search-form {
  	  width: 100%;
  	}
  }

  #catalog-options, #journals-options {
    display: none;
  }

  #search-dropdown, #search-dropdown li {
    margin: 0;
		padding: 0;
		display: block;
		background-color: #0096d6;
		color: #fff;
		text-align: left;
  }

  #search-dropdown {
    position: relative;
  	cursor: pointer;
  }

  #search-dropdown ul {
    position: absolute;
    display: none;
    top: 100%;
    margin: 0;
    padding: 0;
    z-index: 10;
  }

  #search-dropdown li {
    padding: .75em 1em;
  }

  #search-dropdown a {
    color: #fff;
  }

  #search-dropdown a:hover {
    text-decoration: none;
  }

  .search-label {
    font-weight: bold;
  }

  .search-description {
    width: 350px;
    font-size: .85em;
    color: rgba(255,255,255,.9);
  	margin-top: .5em;
  }

  #search-dropdown li:not(:first-child) {
    border-top: 1px dotted #007FB7;
  }

  #search-dropdown  ul li:hover {
    background-color: #007FB7;
  }

  #current-search-text {
  	display: block;
	  padding: .75em 2.5em .75em 1em;
  }

  #internal-search #current-search-text a {
    width: 0;
  	overflow: hidden;
  	display: block;
  	height: 1.4em;
  }

  @media screen and (max-width: 1080px) {
    #internal-search #current-search-text a {
  	  width: auto;
  	  overflow: visible;
      height: auto;
  	  line-height: normal;
	  }
  }

  #current-search-text::after {
    content: "";
  	width: 0;
  	height: 0;
  	border-style: solid;
  	border-width: 10.4px 6px 0 6px;
  	border-color: #fff transparent transparent transparent;
    position: absolute;
  	right: 1em;
  	bottom: calc(50% - 6px);
  }

</style>

<div id="internal-search">
	  <form id="search-form">
		<div id="search-dropdown">
		  <div id="current-search-text"><a href="#" aria-haspopup="true" aria-controls="home-search-dropdown-ul" id="current-search-text-a">Search All</a></div>
		  <ul id="home-search-dropdown-ul" aria-labelledby="current-search-text-a">
			<li id="search-all" data-placeholder="feminism, Les Miserables, economics, JSTOR, 3-D printing ...">
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
		    <li id="search-catalog" data-placeholder="The Communist Manifesto, calculus, Bladerunner ...">
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
	    <input type="text" placeholder="feminism, Les Miserables, economics, JSTOR, 3-D printing ..."/>
		<select id="catalog-options">
		  <option>title</option>
		  <option>journal title</option>
		  <option selected="selected">keyword</option>
		  <option>author</option>
		  <option>subject</option>
		  <option>call number</option>
		</select>
		<select id="journals-options">
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

	jQuery("#search-dropdown").on("click", function(e) {
	  var ul = jQuery(this).find("ul");
	  if (ul.is(":hidden")) {
	    ul.show();
		e.stopPropagation();
	  } else {
	    jQuery("#search-dropdown ul").hide();
	    jQuery("#search-form input[type=text]").focus();
	  }
	});

	jQuery("html").on("click", function() {
	  jQuery("#search-dropdown ul").hide();
	});


  </script>
