    <form id="primo-search-form">
      <div id="primo-container">
        <!-- The main search box/input -->
        <input type="text" id="search-input" autocomplete="off" aria-label="searchbox: enter your search terms here" placeholder="<?php echo $bentoPlaceholder; ?>"/>
        <!-- The div that gets populated with a copy of the entered text and shortcuts to the scopes -->
        <div id="primo-dropdown-copy"></div>
        <!-- The slash between the search input and the dropdown -->
        <div class="primo-divider"></div>
        <!-- The clickable menu of search scopes available -->
        <div id="scope-dropdown">
          <span aria-haspopup="true" id="current-scope" tabindex="0" title="Select an option to limit your search">
            Articles + GW &amp; Consortium Catalog
          </span>
          <ul>
            <li id="primo-all" tabindex="0" data-placeholder="<?php echo $bentoPlaceholder; ?>" data-description="Articles, books, e-books, media, and archival resources at GW and WRLC libraries, plus &lt;a href=&quot;http://libguides.gwu.edu/&quot;&gt;research guides&lt;/a&gt;">
              Articles + GW &amp; Consortium Catalog
            </li>
            <li id="primo-catalog" tabindex="0" data-placeholder="The Communist Manifesto, calculus, Blade Runner ..." data-description="Books, e-books, media, and archival resources at GW and WRLC libraries">
              GW &amp; Consortium Catalog
            </li>
            <li id="primo-articles" tabindex="0" data-placeholder="Fidel Castro, sustainable energy, gender and identity ..." data-description="Journal &amp; newspaper articles">
              Articles
            </li>
            <li id="primo-course-reserves" tabindex="0" data-placeholder="history, ANTH 1001 ..." data-description="Materials placed on reserve at the library for specific courses">
              Course Reserves
            </li>
            <li id="primo-libsite" tabindex="0" data-placeholder="building hours, study rooms, Churchill ..." data-description="Library policies, news and events, and research help">
              Library Website
            </li>
          </ul>
        </div>
        <button type="button" id="primo-go" aria-label="Search">
          <!-- Mangifying glass icon -->
          <svg width="100%" height="100%" viewBox="0 0 24 24" y="264" xmlns="http://www.w3.org/2000/svg" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
            <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
          </svg>
       </button>
      </div>
    </form>
