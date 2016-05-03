<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Read Book Easily</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a data-toggle="modal" data-target="#myModal">Instructions</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Read Book Easily</h4>
            </div>
            <div class="modal-body text-justify">
                <strong>Read Book Easily</strong> is a simple PHP based web-app to easily read books available online without clicking the next button over and again<br>
                <hr>
                <ul>
                    <li>
                        I built this when I ran across several sites such as <a href="http://www.bookrix.com/">BookRix</a>, <a href="http://www.read.gov/"> Library of Congress</a> which offered online reading but through the cumbersome process of pressing the next buttons.
                    </li>
                    <li>
                        You simply need to enter the URL of the book containing the bookid.
                        <pre>Example: When you open 'Of Mice and Men' on BookRix,<br>URL in task bar is: "http://www.bookrix.com/book.html?bookID=kuroi.zetsubo_1316643307.5298490524#1512,504,2106"<br>URL you need to enter is "http://www.bookrix.com/book.html?bookID=kuroi.zetsubo_1316643307.529849052"<br> ie. exclude the '#' sign.
                        </pre>

                 </ul>  

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/imagebg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>Read Book Easily</h1>
                    <span class="meta">Built by <a href="#">Prachi Manchanda</a></span>
                </div>
            </div>
        </div>
    </div>
</header>
