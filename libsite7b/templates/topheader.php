<!--  inline styling will move to stylesheet -->
<style>

  #header-hours {
  float: right;
  font-family: helvetica, arial;
  font-size: .7em;
  }
  #header-hours .handheld { display: none; }
  @media screen and (max-width:720px) {
    #header-hours .handheld { 
      display: inline-block;
      margin-right: 4px; 
    }
    #header-hours .handheld > * {
      color: #fff; 
      display: block;
    }
    #header-hours .handheld-hours { font-size: 1.4em; margin-top: 4px; }
    #header-hours .handheld-hours-links { font-size: 1.2em; margin-top: 6px; text-align: right; }
    #header-hours .handheld-hours-links a { color: #fff; text-decoration: none; font-style: italic; }
    #header-hours .handheld-hours-links a:hover { text-decoration: underline; }

  }
  #header-hours table {
  border-spacing: 0;
  float: right;
  }
  #header-hours table td {
  padding: .3em .4em;
  margin: 0;
  border-left: 4px solid #005581;
  max-width: 52px;
  white-space: initial;
  }
  #header-hours table tr:first-child {
  background-color: #005581;
  color: /*#ffcB2e*/ #fff /*#ffeebb*/;
  }
  #header-hours table tr:first-child td {
  padding-left: 0;
  font-size: 1.1em;
  }
  #header-hours table tr:nth-child(2) {
  background-color: /*#ffcB2e*/ #fff /*#ffeebb*/;
  color: #005581;
  }
  #header-hours table tr:nth-child(3) {
  color: #fff /*#ffeebb*/;
  }
  #header-hours table tr:nth-child(4) td {
  /*background-color: #005581 !important;*/
  color: #fff /*#ffeebb*/ !important;
  text-align: right;
  padding-right: 0;
  padding-top: .4em;
  font-size: 1.1em;
  padding-bottom: 0;
  }
  #header-hours table tr:nth-child(4) td a {
  color: #fff /*#ffeebb*/;
  text-decoration: none;
  }
  #header-hours table tr:nth-child(4) td a:hover {
  text-decoration: underline;
  }
  #header-hours table tr:nth-child(2) td:first-child, table tr:nth-child(3) td:first-child {
  background-color: #fff /*#ffeebb*/;
  color: #005581;
  padding-left: .6em;
  font-weight: bold;
  }
  #header-hours table tr:first-child td:first-child {
  /*border-bottom-right-radius: 0px;*/
  }
  #header-hours table tr:nth-child(3) td:first-child {
  /*border-top-right-radius: 0px;*/
  }
  #header-hours .container {
  padding:7px 0;
  }

</style>

