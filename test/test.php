<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title> pjax</title>

  
  <meta name="apple-mobile-web-app-capable" content="yes">
  
  <link rel="apple-touch-icon" href="/pjax-57.png"  sizes="57x57">
  <link rel="apple-touch-icon" href="/pjax-72.png"  sizes="72x72">
  <link rel="apple-touch-icon" href="/pjax-114.png" sizes="114x114">
  
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <script  src="jquery-1.7.2.js" ></script>
  <script src="jquery.cookie.js"></script>
  <script src="pages.js"></script>

  <script src="jquery.pjax.js"></script>
  <script type="text/javascript">
    $(function(){
      // pjax
      $('ul a').pjax('#main')
    })
  </script>

  <style>
    pre{
      float:left;
    }
    #main{
      font-family:Helvetica,Arial,sans-serif;
      float:left;
      margin-left:-120px;
      padding-top:80px;
      width:30%;
    }
    ul{padding-left:15px;}
  </style>
</head>

<pre>

               ????????????????????
               |?<b>It's 04:18:45 AM</b>
               ??? ????????????????
        .--.     (  )
       /    \   ( )
      ## a  a  .
      (   '._)
       |'-- |
     _.\___/_   ___
   ."\> \Y/|<'.  '._.-'
  /  \ \_\/ /  '-' /
  | --'\_/|/ |   _/
  |___.-' |  |`'`
    |     |  |
    |    / './
   /__./` | |
      \   | |
       \  | |
       ;  | |
       /  | |
 jgs  |___\_.\_
      `-"--'---'
<label><input type="checkbox" name="pjax" />pjax</label>___
<a href="https://github.com/defunkt/jquery-pjax">github.com/defunkt/jquery-pjax</a>
</pre>

<div id="main">
  <ul>
  <li>home</li>
  <li><a href="dinosaurs.html">dinosaurs</a></li>
  <li><a href="aliens.html">aliens</a></li>
</ul>

<p>
  pjax loads html from your server into the current page
  without a full page load. It's ajax with real permalinks,
  page titles, and a working back button that fully degrades.
</p>

<p>
  Check the box to toggle pjax.
</p>

<p>
  Whenever the time changes, a full page load has happened.
  If the time doesn't change,  no full page load has occurred.
</p>

<p>
  The idea is you can't tell the difference between pjax
  page loads and normal page loads. On complicated sites,
  browsing just "feels faster."
</p>

<p>
  <a href="https://github.com/defunkt/jquery-pjax/tree/heroku">
    view this example's source code
  </a>
</p>

</div>

</html>