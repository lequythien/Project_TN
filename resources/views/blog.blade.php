@extends('layout')

@section('title', 'Blog Page')

@section('content')

    <!--Hero Section-->
    <div class="hero-section hero-background style-02">
        <h1 class="page-title">Organic Fruits</h1>
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Our Blog</span></li>
            </ul>
        </nav>
    </div>

    <!-- Page Contain -->
    <div class="page-contain blog-page left-sidebar">
        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--Single Post Contain-->
                    <div class="single-post-contain">

                        <div class="post-head">
                            <div class="thumbnail">
                                <figure><img src="./images/blogpost/post_thumbnail.jpg" width="870" height="635" alt=""></figure>
                            </div>
                            <h2 class="post-name">Ashwagandha: The #1 Herb in the World for Anxiety?</h2>
                            <p class="post-archive"><b class="post-cat">ORGANIC</b><span class="post-date"> / 20 Nov, 2018</span><span class="author">Posted By: Braum J.Teran</span></p>
                        </div>

                        <div class="post-content">
                            <p>The best Organic Food blogs from thousands of top Organic food blogs in our index using search and social metrics. We’ve carefully selected these websites because they are actively working to educate, inspire, and empower their readers with frequent updates and high-quality information.</p>
                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>
                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie. </p>
                            <blockquote>
                                <p>Maecenas vel nulla eleifend, euismod magna sed, tristique velit. Nam sed eleifend dui, eu eleifend leo. Mauris ornare eros quis placerat mollis. Duis ornare euismod risus at dictum. Proin at porttitor metus. Nunc luctus nisl suscipit, hendrerit ligula non, mattis dolor.</p>
                                <address>
                                    <a href="#" class="author">Koan Conella</a>
                                    <span>Creative Copywriter</span>
                                </address>
                            </blockquote>
                        </div>

                        <div class="post-foot">

                            <div class="post-tags">
                                <span class="tag-title">Tags:</span>
                                <ul class="tags">
                                    <li><a href="#" class="tag-link">Juice Drink</a></li>
                                    <li><a href="#" class="tag-link">Fast Food</a></li>
                                    <li><a href="#" class="tag-link">Fresh Food</a></li>
                                    <li><a href="#" class="tag-link">Hot</a></li>
                                    <li><a href="#" class="tag-link">Backpack</a></li>
                                    <li><a href="#" class="tag-link">Grooming</a></li>
                                </ul>
                            </div>

                            <div class="auth-info">
                                <div class="ath">
                                    <a href="#" class="avata"><img src="./images/blogpost/author-02.png" width="29" height="28" alt="Christian Doe">Christian Doe</a>
                                    <span class="count-item viewer"><i class="fa fa-eye" aria-hidden="true"></i>630</span>
                                    <span class="count-item commented"><i class="fa fa-commenting" aria-hidden="true"></i>26</span>
                                </div>
                                <div class="socials-connection">
                                    <span class="title">Share:</span>
                                    <ul class="social-list">
                                        <li><a href="#" class="socail-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="socail-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="socail-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="socail-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="socail-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!--Comment Block-->
                    <div class="post-comments">
                        <h3 class="cmt-title">Comments<sup>(26)</sup></h3>

                        <div class="comment-form">
                            <form action="#" method="post" name="frm-post-comment">
                                <p class="form-row">
                                    <textarea name="txt-comment" id="txt-comment-ath-3364" cols="30" rows="10" placeholder="Write your comment"></textarea>
                                    <a href="#" class="current-author"><img src="./images/blogpost/viewer-avt.png" width="41" height="41" alt=""></a>
                                </p>
                                <p class="form-row last-btns">
                                    <button type="submit" class="btn btn-sumit">post a comment</button>
                                    <a href="#" class="btn btn-fn-1"><i class="fa fa-smile-o" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-fn-1"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-fn-1"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                                </p>
                            </form>
                        </div>

                        <div class="comment-list">

                            <ol class="post-comments lever-0">
                                <li class="comment-elem">
                                    <div class="wrap-post-comment">

                                        <div class="cmt-inner">
                                            <div class="auth-info">
                                                <a href="#" class="author-contact"><img src="./images/blogpost/author-02.png" alt="" width="29" height="28">Christiano Bale</a>
                                                <span class="cmt-time">4 days ago</span>
                                            </div>
                                            <div class="cmt-content">
                                                <p>Nam sed eleifend dui, eu eleifend leo.Mauris ornare eros quis placerat mollis. Duis ornare euismod risus at dictum. Proin<br>
                                                    at porttitor metus. Nunc luctus nisl suscipit, hendrerit ligula non.</p>
                                            </div>
                                            <div class="cmt-fooot">
                                                <a href="#" class="btn btn-response"><i class="fa fa-commenting" aria-hidden="true"></i>Comment</a>
                                                <a href="#" class="btn btn-like"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>9</a>
                                                <a href="#" class="btn btn-dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>1</a>
                                            </div>
                                        </div>

                                        <div class="comment-resposes">
                                            <ol class="post-comments lever-1">
                                                <li class="comment-elem">
                                                    <div class="wrap-post-comment">
                                                        <div class="cmt-inner">
                                                            <div class="auth-info">
                                                                <a href="#" class="author-contact"><img src="./images/blogpost/author-03.png" alt="" width="29" height="28">Samuel Godi</a>
                                                                <span class="cmt-time">4 days ago</span>
                                                            </div>
                                                            <div class="cmt-content">
                                                                <p>Ut pellentesque gravida justo non rhoncus. Nunc ullamcorper tortor id aliquet luctus. Proin varius aliquam<br>
                                                                    consequat.Curabitur a commodo diam, vitae pellentesque urna.</p>
                                                            </div>
                                                            <div class="cmt-fooot">
                                                                <a href="#" class="btn btn-response"><i class="fa fa-commenting" aria-hidden="true"></i>Comment</a>
                                                                <a href="#" class="btn btn-like"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>9</a>
                                                                <a href="#" class="btn btn-dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>1</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>

                                    </div>
                                </li>
                            </ol>

                            <div class="biolife-panigations-block ">
                                <ul class="panigation-contain">
                                    <li><span class="current-page">1</span></li>
                                    <li><a href="#" class="link-page">2</a></li>
                                    <li><a href="#" class="link-page">3</a></li>
                                    <li><span class="sep">....</span></li>
                                    <li><a href="#" class="link-page">20</a></li>
                                    <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Sidebar -->
                <aside id="sidebar" class="sidebar blog-sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">

                    <div class="biolife-mobile-panels">
                        <span class="biolife-current-panel-title">Sidebar</span>
                        <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                    </div>

                    <div class="sidebar-contain">

                        <!--Search Widget-->
                        <div class="widget search-widget">
                            <div class="wgt-content">
                                <form action="#" name="frm-search" method="get" class="frm-search">
                                    <input type="text" name="s" value="" placeholder="SEACH..." class="input-text">
                                    <button type="submit" name="ok"><i class="biolife-icon icon-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <!--Categories Widget-->
                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Categories</h4>
                            <div class="wgt-content">
                                <ul class="cat-list">
                                    <li class="cat-list-item"><a href="#" class="cat-link">Beauty (30)</a></li>
                                    <li class="cat-list-item"><a href="#" class="cat-link">Fashion (50)</a></li>
                                    <li class="cat-list-item"><a href="#" class="cat-link">Food (10)</a></li>
                                    <li class="cat-list-item"><a href="#" class="cat-link">Life Style (60)</a></li>
                                    <li class="cat-list-item"><a href="#" class="cat-link">Travel (10)</a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Posts Widget-->
                        <div class="widget posts-widget">
                            <h4 class="wgt-title">Recent post</h4>
                            <div class="wgt-content">
                                <ul class="posts">
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#"><img src="./images/blogpost/post-wgt-01.jpg" width="80" height="58" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                                <p class="post-archive">22 Jan 2019<span class="comment">15 Comments</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#"><img src="./images/blogpost/post-wgt-02.jpg" width="80" height="58" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                                <p class="post-archive">06 Apr 2019<span class="comment">06 Comments</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#"><img src="./images/blogpost/post-wgt-03.jpg" width="80" height="58" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                                <p class="post-archive">12 May 2019<span class="comment">08 Comments</span></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Twitter Widget-->
                        <div class="widget twitter-widget">
                            <h4 class="wgt-title">Latest Tweets</h4>
                            <div class="wgt-content">
                                <ul class="content">
                                    <li>
                                        <div class="wgt-twitter-item">
                                            <div class="author"><a href="#"><img src="./images/blogpost/author.png" width="38" height="38" alt="author"></a></div>
                                            <div class="detail">
                                                <h4 class="account-info">
                                                    <a href="#" class="ath-name">Braum J. Teran</a>
                                                    <a href="#" class="ath-taglink">@real BraumTeran</a>
                                                </h4>
                                                <p class="tweet-content">President XI told me he appreciates that the U.S.<br/><a href="#">http://company/googletzd</a>
                                                </p>
                                                <div class="tweet-count">
                                                    <a class="btn responsed"><i class="fa fa-comment" aria-hidden="true"></i>2.9N</a>
                                                    <a class="btn liked"><i class="fa fa-heart" aria-hidden="true"></i>10N</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-twitter-item">
                                            <div class="author"><a href="#"><img src="./images/blogpost/author.png" width="38" height="38" alt="author"></a></div>
                                            <div class="detail">
                                                <h4 class="account-info">
                                                    <a href="#" class="ath-name">Braum J. Teran</a>
                                                    <a href="#" class="ath-taglink">@real BraumTeran</a>
                                                </h4>
                                                <p class="tweet-content">President XI told me he appreciates that the U.S.<br/><a href="#">http://company/googletzd</a>
                                                </p>
                                                <div class="tweet-count">
                                                    <a class="btn responsed"><i class="fa fa-comment" aria-hidden="true"></i>2.9N</a>
                                                    <a class="btn liked"><i class="fa fa-heart" aria-hidden="true"></i>10N</a>
                                                </div>
                                                <div class="viewall">
                                                    <a href="#" class="view-all">view all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Comments Widget-->
                        <div class="widget comment-widget">
                            <h4 class="wgt-title">Recent Comments</h4>
                            <div class="wgt-content">
                                <ul class="comment-list">
                                    <li>
                                        <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                    </li>
                                    <li>
                                        <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Best Organics</a></p>
                                    </li>
                                    <li>
                                        <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                    </li>
                                    <li>
                                        <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </div>

@endsection