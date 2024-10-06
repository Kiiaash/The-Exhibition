<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET["iMcr"])){
            $p=$_GET["iMcr"];
            switch($p){
                case "gMsa":
                    include("dashbored/fulloverview/index.php");
                    break;
                case "grdy":
                    include("dashbored/controlsandviews/index.php");
                    break;
                case "dyEc":
                    include("dashbored/statistics/index.php");
                    break;
                case "NJkx":
                    include("about/aboutoverviewandcontrols/index.php");
                    break;
                case "OUka":
                    include("about/photochanger/index.php");
                    break;
                case "Pecb":
                    include("about/textchanger/index.php");
                    break;
                case "erUb":
                    include("header/headerlogochanger/index.php");
                    break;
                case "Mooi":
                    include("header/titleanddatechanger/index.php");
                    break;
                case "Moqi":
                    include("header/logochanger/index.php");
                    break;
                case "fjiu":
                    include("articles/artsoverview/index.php");
                    break;
                case "sebD":
                    include("articles/nojudgeworks/index.php");
                    break;
                case "Dgse":
                    include("articles/setjudgestoarticles/index.php");
                    break;
                case "prtQ":
                    include("articles/articlesearch/index.php");
                    break;
                case "mKop":
                    include("articles/editsect/index.php");
                    break;
                case "Zdrt":
                    include("judges/overview/index.php");
                    break;
                case "eRty":
                    include("judges/editsect/index.php");
                    break;
                case "Gfdy":
                    include("judges/judgeworkdef/index.php");
                    break;
                case "Qwgh":
                    include("judges/judgeadd/index.php");
                    break;
                case "UijN":
                    include("newsandannoun/overview/index.php");
                    break;
                case "Errc":
                    include("newsandannoun/insertion/index.php");
                    break;
                case "CcVf":
                    include("newsandannoun/editsect/index.php");
                    break;
                case "NNJh":
                    include("quotsadd/overview/index.php");
                    break;
                case "DFji":
                    include("quotsadd/addanremove/index.php");
                    break;
                case "jiFQ":
                    include("quotsadd/editsec/index.php");
                    break;
                // case "Uiop":
                //     include("dashbored/fulloverview/index.php");
                //     break;
                case "AuRt":
                    include("contacts/overview/index.php");
                    break;
                case "MdXU":
                    include("contacts/reply/index.php");
                    break;
                case "Oipo":
                    include("contacts/replied/index.php");
                    break;
                case "Asdv":
                    include("users/useroverview/index.php");
                    break;
                case "CLxo":
                    include("users/editsect/index.php");
                    break;
                case "Bhhu":
                    include("users/finaldes/index.php");
                    break;
                case "Oyui":
                    include("sponsors/sponsorsaoverview/index.php");
                    break;
                case "DArt":
                    include("sponsors/addorremove/index.php");
                    break;
                case "kwCY":
                    include("sponsors/addphoto/index.php");
                    break;
                case "xbqs":
                    include("footer/menuchanger/index.php");
                    break;
                case "Ocxg":
                    include("footer/addressandphone/index.php");
                    break;
                case "NarT":
                    include("footer/footerlogochanger/index.php");
                    break;
            }
        }
    ?>
</body>
</html>