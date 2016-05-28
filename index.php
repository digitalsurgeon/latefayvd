<?php
error_reporting(0);
$u=$_GET['u'];
$utm_source = $_GET['utm_source'];

if (!empty($u) && $utm_source != "browser"){
    header("Location: video.php?url=$u");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="keywords" content="save, video, store, youtube, flickr, instagram, apple, trailers, html5, dailymotion, vimeo, blip.tv, ted, vevo, flickr, collegehumor,ویڈو ڈون لوڈ">
        <meta name="description" content="vd.latefay.com :: simple and fast way to save youtube, facebook, vine, instagram videos ">
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <meta property="og:site_name" content="vd.latefay.com">
        <meta property="og:url" content="http://vd.latefay.com">
        <meta property="og:locale" content="en_us">
        <meta property="og:title" content="vd.latefay.com :: simple and fast way to save youtube, facebook, vine, instagram videos" >
        <meta property="og:type" content="website">
        <meta property="og:image" content="//vd.latefay.com/i/savevideo.png">
        <meta property="og:description" content="vd.latefay.com :: simple and fast way to save youtube, facebook, vine, instagram videos ">
        <link rel="shortcut icon" href="/favicon.ico"/>
        <title>vd.latefay.com :: simple and fast way to save youtube, facebook, vine, instagram videos. ویڈو ڈون لوڈ </title> 
        <!-- Bootstrap -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/green/pace-theme-loading-bar.css">
        <link rel="stylesheet" href="c/savevideo.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">vd.latefay.com</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#sites">Supported sites</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="javascript:(e=document.createElement('script')).src='https://vd.latefay.com/js/savevideo.bookmarklet.js',document.body.appendChild(e);void(0);" title="Drag to your bookmarks to have one click access to vd.latefay.com" id="bookmark-link">Save video</a></li>
                </ul>
            </div>
        </div>
    </div>
    </nav>
<main class="savevideo-header" id="content">
<div class="container">
<span class="glyphicon glyphicon-arrow-down" aria-hidden="true" alt="ویڈو ڈون لوڈ"></span>
        <p class="lead">Save your favorite videos to view at home, share with friends, watch offline...
        <br/>Paste the link below and click download.</p>
        <p class="lead">
            <form id="videoUrlForm" role="form" class="lead">
                <fieldset>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="input-group">
                                <input type="text" name="url" id="url" class="form-control input-md" placeholder="paste the url here..." required>
<span class="input-group-btn">
<input type="submit" class="btn btn-info" value="Download">
</span>

                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </p>
    </div>
        <div id="noResults" class="alert alert-warning alert-dismissible fade in" role="alert" style="display:none;">
            <strong>Sorry!</strong> either the URL is not supported, or unable to download the video.
        </div>
        <div id="results" class="container" style="display:none;">
            <div class="row">
                <h4 id="videoTitle" class="col-md-12 format-name"></h4>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <img id="videoThumbnail" class="img-rounded" width="180" height="140">
                    </img>
                </div>

                <div id="videoFormats" class="col-md-10">
                </div>
            </div>
        </div>
</main>
    <section id="sites">
    <div class="container">
        <h2>Supported sites</h2>
        <div class="row" id="supportedSites">
        </div>
    </div>
    </section>

    <section id="about">
    <div class="container">
        <h2>About</h2>
        <p>
        Internnet has truly gone mobile, we now have fast internet access on our phones. But still some times there is a certain video
        which you would rather have on your phone: a song, some motivational video, some educational video. Internet access might not always
        be available, for example when you are in a subway. There are many similar sites already. But this one does not show you ads.
        </p>
        <h3>Command line <small>with curl and wget</small></h3>
        <div class="well">
            <p>You can use vd.latefay.com also from command line, to me this is even better than using the web app to save video. So here is how you will use it:
            </p>
            <code>
                $ wget http://vd.latefay.com/?u=https://youtube.com/watch?v=k4zgEWjoWrQ -O video.mp4
            </code>
        </div>
    </div>
    </section>
<footer class="savevideo-footer">
<div class="container">
Made in <img src="i/pak.png"></img>
</div>
</footer>
<!-- Modal -->
<div class="modal fade" id="bookmark-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Bookmark me!</h4>
      </div>
      <div class="modal-body">
        Drag this link to your bookmarks bar to have one click access to save the video in your open tab.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
<script type="text/javascript" src="//www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="e9v6gyqlverls13"></script>
    <script src="js/newrelic/browser.js"></script>
<script id="supportedsites-template" type="text/x-handlebars-template">
{{#each sites}}
<div class="col-md-2">
    <a href="#" class="thumbnail">
    <img src="i/ss/{{name}}.png">
    </a>
    </div>
{{/each}}
</script>
<script id="format-partial" type="text/x-handlebars-template">
<div class="col-md-10">
    <span class="col-md-5 format-name">{{format}}</span>
    <span class="col-md-1 format-name" >{{ext}}</span>
    <span class="col-md-4"><a href="{{url}}" download="{{format}}.{{ext}}">download</a>  <a data-url="{{url}}" onclick="Dropbox.save(this.dataset['url'], '{{format}}.{{ext}}');"  class="dropbox-saver dropbox-dropin-btn dropbox-dropin-default"><span class="dropin-btn-status"></span>dropbox</a></span>
    </div>
    </script>
<script id="format-template" type="text/x-handlebars-template">
{{> format}}
{{#each formats}}
{{> format}}
{{/each}}
</script>
<script>
$(document).ready(function() {
    var supportedSites = {
        sites:[
{"name":"youtube"},
{"name":"vimeo"},
{"name":"facebook"},
{"name":"ted"},
{"name":"apple"},
{"name":"metacafe"},
{"name":"bliptv"},
{"name":"flickr"},
{"name":"mixcloud"},
{"name":"twitch"},
{"name":"vine"},
{"name":"adobetv"},
{"name":"collegehumor"},
{"name":"instagram"},
{"name":"soundcloud"},
{"name":"vevo"},
{"name":"vk"},
{"name":"dailymotion"}
]
    };

    $("#bookmark-link").click(function() {
        $("#bookmark-modal").modal( {
        }); return false;
    });

    var source = $("#supportedsites-template").html();
    var template = Handlebars.compile(source);
    var html = template(supportedSites);
    $("#supportedSites").html(html);

    Handlebars.registerPartial("format",$("#format-partial").html());

    $("#videoUrlForm").validate({
        rules: {
            url: {
                url: true
            }
        },
            submitHandler:function(form) {
                $("#noResults").fadeOut();
                $("#results").fadeOut();
                $.get("video.php", $("#videoUrlForm").serialize(), 
                    function (response) {
                        if (response.result == 1) {
                            $("#results").fadeIn();

                            $("#videoTitle").text(response.video.fulltitle);
                            $("#videoThumbnail").attr("src", response.video.thumbnail);

                            var source = $("#format-template").html();
                            var template = Handlebars.compile(source);
                            var html = template(response.video);
                            $("#videoFormats").html(html);

                        }
                        else {
                            $("#noResults").fadeIn();
                        }
                    });

            }
    });
<?php
if (!empty($u)) {
?>
    $("#url").attr("value", "<?=$u?>");
    $("#videoUrlForm").submit();
<?
}
?>
});
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-616044-17', 'auto');
ga('send', 'pageview');ga('require', 'displayfeatures');
</script>
</body>
</html>
