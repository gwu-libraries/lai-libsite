function gwSearch(searchTool, searchString, windowTarget, subSelector){

    var bentoSearchBase = "/search-all?query=";
    var articlesPlusSearchBase = "http://gw.summon.serialssolutions.com/search?s.q=";
    var articlesPlusSearchTail = "&s.fvf%5B%5D=ContentType%2CNewspaper+Article%2Ct";
    var finditSearchBase = "http://findit.library.gwu.edu/search?q=";
    var journalTitleSearchBase = "http://findit.library.gwu.edu/?V=1.0&N=100&L=UZ4UG4LZ9G&C=";
    var journalTitleSearchTail = "&S=T_W_A";
    var websiteSearchBase = "/search/node?keys=";
        
    var searchStringClean = encodeURIComponent(searchString);
    var searchURL = "";

    if (searchTool == "bento") {
        searchURL = bentoSearchBase + searchStringClean;
    } else if (searchTool == "catalog") {
        if (subSelector == "keyword"){
            searchURL = finditSearchBase + searchStringClean;
        } else if (subSelector == "title") {
            searchURL = finditSearchBase + "title:%22" + searchStringClean + "%22";
        } else if (subSelector == "author") {
            searchURL = finditSearchBase + "author:%22" + searchStringClean + "%22";
        } else if (subSelector == "subject") {
            searchURL = finditSearchBase + "subjjectterms:" + searchStringClean;
        } else if (subSelector == "call number") {
            searchURL = finditSearchBase + "lccallnum:" + searchStringClean;
        } else (subSelector == "journal title") {
            searchURL = finditSearchBase + "titlecombined:" + searchStringClean + "&facet=ContentType%3AJournal+%2F+eJournal&facet=ContentType%3ANewspaper&page=1";
        } 
    } else if (searchTool == "articles" ){
        searchURL = articlesPlusSearchBase + searchStringClean + articlesPlusSearchTail;
    } else if (searchTool == "journals"){
        if (subSelector == "title keywords") {
            searchURL = journalTitleSearchBase + searchStringClean + "&S=T_W_A";
        } else if subSelector == "title begins with") {
            searchURL = journalTitleSearchBase + searchStringClean + "&S=A_T_B";
        } else if subSelector == "title (exact)") {
            searchURL = journalTitleSearchBase + searchStringClean + "&S=A_T_M";
        } else subSelector == "ISSN") {
            searchURL = journalTitleSearchBase + searchStringClean + "&S=I_M";
        }
    } else if (searchTool == "website") {
        searchURL = websiteSearchBase + searchStringClean;
    } else {
        console.log("search-failed");
    }
    window.open(searchURL, windowTarget);
};
