<?php include "libs/db.php"; ?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пошук підбірок</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" href="materials/fontawesome/css/all.css">
    <meta property="og:locale" content="ua_UA" />
    <!-- <script src="https://kit.fontawesome.com/607590d81b.js" crossorigin="anonymous"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="libs/jquerylib.js"></script>
    <meta name="theme-color" content="#202020">
</head>
<body class="auto" style="background-color: var(--container-color);">

<div id="search-header" style="position: sticky; top: 0px; background-color: var(--main-bg-color);">

<div id="nav-ph"></div>
<nav id="navigation-top">

    <a href="index"><svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3041.66 650"><path class="nav-logo" d="M783.32,258.58c-57-135.7-199.23-141-325.22-116.73-19.54,3.62-36.7-12.86-34.36-32.59.56-4.72-.09-6.46.49-17.17.68-12.29.77-32.54-1.87-42.94-5.7-22.45-33-34-45.13-39.17-55.82-23.67-151.9,1.25-226.16,53.6-27.37,19.29-98,74.84-127.23,170.54-6.6,21.62-14.95,53.54-12.79,85.64h0v.07a136.58,136.58,0,0,0,2.32,17.6c4.55,26.37,15.53,60.82,43.27,87.28,35.51,33.87,81.71,38.68,135.56,40.5,18.37.62,37.09.88,56,.88,88.45,0,181.35-5.61,265.06-5.61,42.33,0,82.3,1.44,118.17,5.75,22.17,2.66,60.49,8.56,78.48,37.53,9.77,15.73,10.67,33.64,9.12,47.9a40.2,40.2,0,0,1-19.54,30.18l-.1.06c-3.67,2.17-32.47,18.66-56,5.14-17.26-9.92-22.65-30.79-23.45-34.11-4.18-17.29,2.19-28.58-7.24-40.59-1.52-1.94-5.62-7-12.43-8.66-11.14-2.67-21.3,5.86-22.56,6.92-17,14.26-12.84,53.62,0,80.07,13.6,28,42.24,52.43,78.34,57.43,42.6,5.89,73.86-18.37,84.63-26.73,29.48-22.88,40.79-52.84,49.48-75.84a235,235,0,0,0,14-60.88C814.44,382.09,807.15,315.36,783.32,258.58ZM646.83,179.06a11.39,11.39,0,0,1,15-13.56,200.92,200.92,0,0,1,24,10.48,183.41,183.41,0,0,1,20.1,12.11,20.1,20.1,0,0,1,8.62,15.2c1.43,21.54-1.21,47.08-14.29,71.85-27.87,52.76-89.72,76.67-96.92,68.45-6.24-7.14,32.51-34.07,45.43-86C655.52,230.11,653.23,203.28,646.83,179.06Zm-151.75-5a14.48,14.48,0,0,1,11.49-20.29q24.44-2.91,46.81-3.52a14.87,14.87,0,0,1,14.74,12.56c3.42,25.24,3.16,59-12.36,93-23.76,52-73.71,83.67-81.17,77.53-7.3-6,32.18-43.27,33.31-99.94C508.34,211.71,503,191.76,495.08,174.09Zm-332.64-2.37c35.53,0,64.34,27.15,64.34,60.63S198,293,162.44,293,98.1,265.83,98.1,232.35,126.91,171.72,162.44,171.72ZM716.94,489.9l-.23-.37c-20.88-33.63-65.34-39-84.33-41.25-32.92-4-70.77-5.81-119.12-5.81-41.4,0-84,1.34-129.15,2.75-44.84,1.41-91.2,2.86-135.91,2.86-20.13,0-38.36-.29-55.73-.88-51.15-1.73-96.26-5.8-130.31-38.28l-.28-.27c-4.61-4.44.75-11.9,6.44-9,43.39,22.33,106.82,24.81,177,26.89,125.3,3.71,334.34-14.17,402.62,5,13.34,3.75,56.11,15.76,70.84,49.79h0c.74,1.71,1.67,3.84,2.65,6.33A2.51,2.51,0,0,1,716.94,489.9ZM138.87,200.77c0-12.27,10.55-22.22,23.57-22.22S186,188.5,186,200.77,175.46,223,162.44,223,138.87,213,138.87,200.77Z"/><path class="nav-logo" d="M963.28,172.63h0a10.12,10.12,0,0,1,10.13,10.13h0c0,9.27,11.48,13.7,17.64,6.76q21.39-24.09,57.55-24.09,30.68,0,49.47,14.71t23.77,35.27q5,20.57,5,65V465.69a10.12,10.12,0,0,1-10.12,10.12h-42.2a10.12,10.12,0,0,1-10.12-10.12V283.92q0-39.57-6.93-53.82t-29.52-14.24q-23.49,0-36.6,18.14t-13.1,72.11V465.69a10.12,10.12,0,0,1-10.12,10.12h-42.2a10.12,10.12,0,0,1-10.12-10.12V220.15A47.51,47.51,0,0,1,963.28,172.63Z"/><path class="nav-logo" d="M1365.48,333.53H1247.72a10.13,10.13,0,0,0-10.12,10.41q1.32,52.74,16.48,71.45,16.62,20.5,41.77,20.5,38.52,0,51-47.7a10.15,10.15,0,0,1,11.12-7.54h0c28.12,3.68,42.28,35.77,26.21,59.13q-29.94,43.55-90.28,43.54-54.93,0-87.65-39.33t-32.72-115.26q0-78,33-120.68t88.25-42.62q38.73,0,65.14,21.31t37.22,56q6,19.3,9,45.25A40.92,40.92,0,0,1,1365.48,333.53Zm-30.9-42.33a10.11,10.11,0,0,0,10.11-10.56q-3.32-69.58-52-69.58-45.37,0-52.8,68.93A10.13,10.13,0,0,0,1250,291.2Z"/><path class="nav-logo" d="M1498.31,172.63h0a10.12,10.12,0,0,1,10.13,10.13v.17c0,9.25,11.48,13.76,17.62,6.84q21.62-24.35,57-24.34,45,0,62,34.51a10.11,10.11,0,0,0,17.63.86q22.5-35.37,66.42-35.37,27.58,0,46,12t25.64,31.81Q1808,229.07,1808,284V465.69a10.13,10.13,0,0,1-10.13,10.12H1755.7a10.12,10.12,0,0,1-10.12-10.12V289.32q0-42.88-7.39-58.17t-29.67-15.29q-47.6,0-47.59,82.45V465.69a10.12,10.12,0,0,1-10.12,10.12h-42.2a10.12,10.12,0,0,1-10.12-10.12V291.41q0-39.27-3.15-50.82a33.17,33.17,0,0,0-11.71-18.13q-8.55-6.6-22.06-6.6-26.11,0-37.22,19.64t-11.11,64.31V465.69a10.12,10.12,0,0,1-10.12,10.12h-42.2a10.12,10.12,0,0,1-10.12-10.12V220.15A47.51,47.51,0,0,1,1498.31,172.63Z"/><path class="nav-logo" d="M2046.91,333.53H1929.23a10.14,10.14,0,0,0-10.12,10.41q1.34,52.74,16.49,71.45,16.62,20.5,41.76,20.5,38.54,0,51-47.7a10.15,10.15,0,0,1,11.12-7.54h0c28.11,3.68,42.28,35.77,26.21,59.13q-30,43.55-90.28,43.54-54.93,0-87.65-39.33t-32.72-115.26q0-78,33-120.68t88.25-42.62q38.73,0,65.14,21.31t37.22,56q6,19.28,9,45.16A41,41,0,0,1,2046.91,333.53Zm-30.82-42.33a10.11,10.11,0,0,0,10.12-10.56q-3.33-69.58-52-69.58-45.37,0-52.8,68.93a10.13,10.13,0,0,0,10.07,11.21Z"/><path class="nav-logo" d="M2184.94,66.07h0a10.12,10.12,0,0,1,10.12,10.12v389.5a10.12,10.12,0,0,1-10.12,10.12h-42.2a10.12,10.12,0,0,1-10.12-10.12V118.38A52.31,52.31,0,0,1,2184.94,66.07Z"/><path class="nav-logo" d="M2435.7,333.53H2317.78a10.13,10.13,0,0,0-10.12,10.41q1.32,52.74,16.48,71.45,16.62,20.5,41.77,20.5,38.52,0,51-47.7a10.15,10.15,0,0,1,11.12-7.54h0c28.12,3.68,42.29,35.77,26.21,59.13q-29.94,43.55-90.28,43.54-54.93,0-87.65-39.33t-32.72-115.26q0-78,33-120.68t88.25-42.62q38.73,0,65.14,21.31t37.23,56q6,19.36,9,45.4A40.78,40.78,0,0,1,2435.7,333.53Zm-31.06-42.33a10.11,10.11,0,0,0,10.11-10.56q-3.32-69.58-52-69.58-45.37,0-52.8,68.93A10.13,10.13,0,0,0,2320,291.2Z"/><path class="nav-logo" d="M2754.5,321.22q0,162.11-120.08,162.1-55.23,0-86.9-39.18t-31.67-119.92q0-158.79,120.08-158.79,54.63,0,86.6,38.72T2754.5,321.22Zm-66.64,3.15q0-63.86-14.22-87.68t-38.46-23.83q-52.69,0-52.69,111.51,0,57,12.27,84.24t40.42,27.28q27.83,0,40.25-27.73T2687.86,324.37Z"/><path class="nav-logo" d="M2851.14,172.63h0a10.13,10.13,0,0,1,10.13,10.13h0c0,9.27,11.48,13.7,17.64,6.76q21.39-24.09,57.54-24.09,30.68,0,49.48,14.71t23.76,35.27q5,20.57,5,65V465.69a10.13,10.13,0,0,1-10.13,10.12h-42.19a10.12,10.12,0,0,1-10.12-10.12V283.92q0-39.57-6.93-53.82t-29.52-14.24q-23.49,0-36.6,18.14t-13.1,72.11V465.69A10.12,10.12,0,0,1,2856,475.81h-42.2a10.12,10.12,0,0,1-10.12-10.12V220.15A47.51,47.51,0,0,1,2851.14,172.63Z"/></svg></a>

    <div id="linkbox">

    <a class="menulink hide2" href="article?id=last">Читати</a>

        <div class="hover-drop hide1" onmouseover="dropboxShow(0)" onmouseout="dropboxHide(0)">
            <a class="menulink" href="javascript:void(0);">Проект <i class="fa-solid fa-angle-down"></i></a>
            <div class="dropbox shadow">
                <a class="menulink" href="javascript:void(0);">Допомогти</a>
                <a class="menulink" href="javascript:void(0);">Підтримати</a>
                <a class="menulink" href="javascript:void(0);">Про нас</a>
            </div>
        </div>

        <a class="menulink hide3" href="javascript:void(0);">Контакти</a>

    </div>

    <div id="iconbox">
        <i id="theme-btn" onclick="themeToggle('light')" class="fa-solid fa-circle-dot"></i>


        <?php if(isset($_SESSION['logged_user'])) : ?>
        <?php echo '<i id="log-btn" onclick="location.href = \'user\'" class="fa-solid fa-user hide3"></i>'; ?>
        <?php else : ?>
        <?php echo '<i id="log-btn" onclick="location.href = \'login\'" class="fa-solid fa-user hide3"></i>'; ?>
        <?php endif; ?>

        <div id="menu-btn">
            <div class="bars">
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>

</nav>
<header id="searchbar-header">
    <form id="search-cont" method="get">
        <button type="submit" id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        <input type="text" name="text" placeholder="шукати.." autocomplete="off" onfocus="searchFocus()" onblur="searchBlur()">
        <button type="button" id="clear-btn" onclick="searchClear()"><i class="fa-solid fa-xmark"></i></button>
    </form>
    <div id="search-cond-cont">
        <?php
        if (isset($_GET['tag'])) {
            $qtag = $_GET['tag'];
            if ($qtag != "") {
                echo "<div class=\"cond tag\" onclick=\"location.href='search'\"><span>".$qtag."</span> <i class=\"fa-solid fa-xmark\"></i></div>";
            }
        }
        if (isset($_GET['theme'])) {
            $qtheme = $_GET['theme'];
            if ($qtheme != "") {
            switch ($qtheme) {
            case "Загальне":
                echo "<div class=\"cond themetag\" onclick=\"location.href='search'\">
                        <i class=\"fa-solid fa-apple-whole\"></i> <span>Загальне</span> <i class=\"fa-solid fa-xmark\"></i>
                    </div>";
                break;
            case "Політика":
                echo "<div class=\"cond themetag\" onclick=\"location.href='search'\">
                        <i class=\"fa-solid fa-people-group\"></i> <span>Політика</span> <i class=\"fa-solid fa-xmark\"></i>
                    </div>";
                break;
            case "Технології":
                echo "<div class=\"cond themetag\" onclick=\"location.href='search'\">
                        <i class=\"fa-solid fa-mobile-screen\"></i> <span>Технології</span> <i class=\"fa-solid fa-xmark\"></i>
                    </div>";
                break;
            case "Розваги":
                echo "<div class=\"cond themetag\" onclick=\"location.href='search'\">
                        <i class=\"fa-solid fa-gamepad\"></i> <span>Розваги</span> <i class=\"fa-solid fa-xmark\"></i>
                    </div>";
                break;
            case "Блог":
                echo "<div class=\"cond themetag\" onclick=\"location.href='search'\">
                        <i class=\"fa-solid fa-heart\"></i> <span>Блог</span> <i class=\"fa-solid fa-xmark\"></i>
                    </div>";
                break;
        }}}?>
    </div>
</header>
</div>

<div id="results-box">
<div id="results">
    <p class="label">Результати пошуку</p>

<?php

$addedids = array();
$link = mysqli_connect("localhost", "root", "", "nemeleon");

if (isset($_GET['text'])) { 
    $qtext = $_GET['text'];
    if ($qtext != "") {
        $qtext = trim($qtext," ");
        echo '<script>document.querySelector("#search-cont input").value = "'.$qtext.'";</script>';
        $qresult = mysqli_query($link, "SELECT * FROM articles WHERE header LIKE '%".$qtext."%' OR tags LIKE '%".$qtext."%' OR theme LIKE '%".$qtext."%'");
        // echo mysqli_num_rows($qresult);
        addArticles($qresult);
        $qwords = explode(' ', $qtext);
        foreach ($qwords as $qword) {
            $qresult = mysqli_query($link, "SELECT * FROM articles WHERE header LIKE '%".$qword."%' OR tags LIKE '%".$qword."%' OR theme LIKE '%".$qword."%'");
            // echo mysqli_num_rows($qresult); 
            addArticles($qresult);
        }
    } 
}

if (isset($_GET['tag'])) {
    $qtag = $_GET['tag'];
    if ($qtag != "") {
        $qresult = mysqli_query($link, "SELECT * FROM articles WHERE tags LIKE '%".$qtag."%'");
        addArticles($qresult);
    }
}

if (isset($_GET['theme'])) {
    $qtheme = $_GET['theme'];
    if ($qtheme != "") {
        $qresult = mysqli_query($link, "SELECT * FROM articles WHERE theme LIKE '%".$qtheme."%'");
        addArticles($qresult);
    } 
}

function addArticles($adding) {
    global $addedids;
    while ($article = mysqli_fetch_array($adding)) { $addedids[] = $article['id']; }
    $addedids = array_unique($addedids);
}


function showResults() {

global $addedids;
global $link;
if (empty($addedids)) {
    echo '<div class="no-results-box"><img src="css/img/magnificier.svg"><p>Нічого не знайдено((</p></div>'; 
    if (empty($_GET['text']) and empty($_GET['theme']) and empty($_GET['tag'])) {
        echo '<script> document.getElementById("results-box").classList.add("wide"); </script>';
    }
} else { 

foreach ($addedids as $addedid) {
    $qresult = mysqli_query($link, "SELECT * FROM articles WHERE id LIKE ".$addedid);
    while ($article = mysqli_fetch_array($qresult)) {
        $tags = explode(";", $article['tags']);
        $theme = $article['theme'];
        echo "
        <div class='article'>
            <div class=\"image\" style=\"position: relative; width: 100%; padding-top: 40%; overflow: hidden;\">
                <div style=\"position: absolute; top: 0; left: 0; bottom: 0; right: 0;\">
                    <img src=\"".$article['indeximg']."\" style=\"object-position: 50% 50%; object-fit: cover; width: 100%; height: 100%\"></img>
                </div>
            </div>
            <div class='text'>
                <div class='breadcrumps'>
                    <p>
                        <a href='index'>Головна</a> 
                        <i class='fa-solid fa-angle-right'></i> 
                        <a href='search?theme=".$theme."'>".$theme."</a> 
                        <i class='fa-solid fa-angle-right'></i> 
                    </p>
                </div>
                <h2 onclick=\"location.href='article?id=".$article['id']."'\">".$article['header']."</h2>
                <div class='tags'>";foreach ($tags as $tag) {echo "
                    <div class='tag' onclick=\"location.href='search?tag=".$tag."'\">".$tag."</div>";}echo "
                </div>
            </div>
        </div>
        ";
    }
}}} showResults() ?></div>

<div id="recommended">

<p class="label">Рекомендації</p>

<?php



?>

</div>

</div>


<script>
    


    window.onload = function() {
        if (getCookie('theme') == "dark") { themeToggle('dark'); } else {
	    if (getCookie('theme') == "light") { themeToggle('light'); } else { themeToggle('auto'); }}
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    var themebtn = document.getElementById('theme-btn');
    function themeToggle(theme) {

        document.body.classList = theme;
        document.cookie = "theme=" + theme + "; secure"

        if (theme == 'light') {
            themebtn.setAttribute('onclick', "themeToggle('dark')");
            themebtn.classList = "fa-solid fa-circle menulink";
        } else {
            if (theme == 'dark') {
                themebtn.setAttribute('onclick', "themeToggle('auto')");
                themebtn.classList = "fa-solid fa-moon menulink";
            } else {
                themebtn.setAttribute('onclick', "themeToggle('light')");
                themebtn.classList = "fa-solid fa-circle-dot menulink";
            }
        }
    }
    var searchContainer = document.getElementById('search-cont');
    function searchFocus() { 
        searchContainer.style.border = '4px solid var(--accent)'; 
    }
    function searchBlur() { 
        searchContainer.style.border = '4px solid transparent';
    }
    var searchInput = document.querySelector('#search-cont input');
    function searchClear() {
        searchInput.value = "";
    }
    window.onscroll = function() {
        if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
            document.getElementById('search-header').classList.add("shadow");
        } else {
            document.getElementById('search-header').classList.remove("shadow");
        }
    }
    var drop = document.getElementsByClassName("dropbox");
    var navlinkicon = document.querySelectorAll(".hover-drop .menulink i");
    function dropboxShow(num) { drop[num].style.display = "block"; navlinkicon[num].setAttribute('style', 'transform: rotate(180deg);')}
    function dropboxHide(num) { drop[num].style.display = "none"; navlinkicon[num].setAttribute('style', '')}

</script>
</body></html>