<div>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">首页</a>
        </li>
        <li role="presentation">
            <a href="#product" aria-controls="product" role="tab" data-toggle="tab">产品示例</a>
        </li>
        <li role="presentation">
            <a href="#require" aria-controls="require" role="tab" data-toggle="tab">需求发布</a>
        </li>
        <li role="presentation">
            <a href="#communicate" aria-controls="communicate" role="tab" data-toggle="tab">沟通交流</a>
        </li>
        <li role="presentation">
            <a href="#about" aria-controls="about" role="tab" data-toggle="tab">关于我们</a>
        </li>
        <li role="presentation">
            <a href="#join" aria-controls="join" role="tab" data-toggle="tab">加入我们</a>
        </li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="tab-pane-left">
                <div id="home-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#home-carousel" data-slide-to="1"></li>
                        <li data-target="#home-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="..." alt="...">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="..." alt="...">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="..." alt="...">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="tab-pane-right">
                <div class="div1">
                    <ul class="list-group">
                        <li class="list-title">
                            <span class="label label-success">技术交流</span> 
                        </li>
                        <li class="list-group-item">1. TCP/IP通信原理</li>
                        <li class="list-group-item">2. PHP底层执行原理</li>
                        <li class="list-group-item">3. nginx你不知道的负载均衡</li>
                        <li class="list-group-item">4. mysql锁机制</li>
                        <li class="list-group-item">5. 解析支付宝交易体系</li>
                    </ul>
                </div>
                <div class="div2">
                    <ul class="list-group">
                        <li class="list-title">
                            <span class="label label-success">文档下载</span> 
                        </li>
                        <li class="list-group-item"><a>鸟哥的Linux私房菜</a></li>
                        <li class="list-group-item"><a>PHP核心技术与最佳实现</a></li>
                    </ul>
                </div>
                <div class="div3">
                    <ul class="list-group">
                        <li class="list-title">
                            <span class="label label-success">娱乐推荐</span> 
                        </li>
                        <li class="list-group-item"><a>第二届梦想车展大会</a></li>
                        <li class="list-group-item"><a>世界机器人大会</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="product">
        
        </div>
        <div role="tabpanel" class="tab-pane" id="require">.555..</div>
        <div role="tabpanel" class="tab-pane" id="communicate">.666..</div>
        <div role="tabpanel" class="tab-pane" id="about">.888..</div>
        <div role="tabpanel" class="tab-pane" id="join">.999..</div>
    </div>
</div>

<style type="text/css">
    .nav {
        padding: 10px 20%;
    }
    .nav li {
        text-align: center;
        width: 16%;
    }
    .nav li a{
        border: none;
    }
    .tab-pane {
        min-height: 500px;
        background-color: #F0F0F0;
        padding: 20px 5%;
        overflow: hidden;
    }
    .tab-pane-left {
        width: 60%;
        float: left;
        max-height: 600px;
        min-height: 450px;
        background-color: white;
    }
    .tab-pane-right {
        width: 36%;
        float: left;
        max-height: 600px;
        min-height: 450px;
        overflow: hidden;
        margin-left: 30px;
    }
    .tab-pane-right .div1 {
        width: 100%;
        background-color: white;
        min-height: 200px;
    }

    .tab-pane-right .div2 {
        background-color: white;
        width: 100%;
        min-height: 100px;
        margin-top: 25px;
    }

    .tab-pane-right .div3 {
        background-color: white;
        width: 100%;
        min-height: 100px;
        margin-top: 25px;
    }
    .list-group-item {
        border: none;
        margin-left: 20px;
        padding: 5px 15px;
        font-family: fantasy;
        color: blue;
    }
    .list-title {
        margin-left: 0px;
        padding: 10px 15px;
        font-size: 15px;
    }
</style>
<script src="/static/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="/static/js/bootstrap.min.js" type="text/javascript"></script>
