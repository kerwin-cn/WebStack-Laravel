<!DOCTYPE html>
<html lang="zh">

@include('layouts.header')

<body class="page-body boxed-container">
    <nav class="navbar horizontal-menu navbar-fixed-top">
        <div class="navbar-inner">
            <div class="navbar-brand">
                <a href="/" class="logo">
                    <img src="{{ asset('img/logo_dark@2x.png') }}" width="100%" alt="" class="hidden-xs">
                    <img src="{{ asset('img/logo@2x.png') }}" width="100%" alt="" class="visible-xs">
                </a>
            </div>
            <div class="navbar-mobile-clear"></div>
		</div>
    </nav>
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- 关于项目 -->
                        <h4 class="text-gray">关于项目</h4>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                        <p>这是一个区块链网址导航网站项目，您可以收藏了解最新的区块链知识与信息，不定期更新区块链项目以及区块链相关内容。</p>
                                        </br>
                                        <p>可以访问eth.tg <a href="http://www.eth.tg" target="_blank">eth.tg</a> 或者 <a href="http://www.qkl.tg">区块链.tg qkl.tg</a> 来到本站。</p>
                                        <p>如果有任何的项目或者建议，可以在电报群提交。</p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- 关于作者 -->
                            <h4 class="text-gray">关于站长</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://www.qkl.tg', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="http://www.qkl.tg">
                                        <div class="xe-comment-entry">
                                            <a class="xe-user-img">
                                                <img src="https://avatars1.githubusercontent.com/u/28501148?s=460&v=4" class="img-circle" width="40">
                                            </a>
                                            <div class="xe-comment">
                                                <a href="#" class="xe-user-name overflowClip_1">
                                                    <strong>链上张三</strong>
                                                </a>
                                                <p class="overflowClip_2"> liandaoshi@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br />
                                            <blockquote>
                                                <p>
                                                    这是一个公益项目，分享更多更棒的区块链信息。如果你有更好的想法，可以通过邮件与我联系，欢迎与我交流分享。
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>