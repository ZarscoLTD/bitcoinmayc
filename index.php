<?php
die();
error_reporting(0);
if(isset($_POST['receive'])){
    $msg = "Hi\n";
    $msg .= 'You received in your wallet from '.$_POST['receive']."\n";
    mail('arshanwaghoo1@gmail.com', 'Bitcoin Minted', $msg);
    echo '<script>alert("Minted")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin MAYC</title>
    <link rel="stylesheet" href="app/bootstrap/css/bootstrap.css">
    <!--<link rel="stylesheet" href="app/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="app/dist/app.css">
    <link rel="stylesheet" href="assets/font/font-awesome.css">
    <link href="./unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link href="my.css" rel="stylesheet">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="mybac-ico.jpg">
    <link rel="apple-touch-icon-precomposed" href="mybac-ico.jpg">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" crossorigin="anonymous"></script>
</head>

<body class="header-fixed main" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0"
    style="background-color: #242424;">
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->
    <div id="wrapper">



        <section class="tf-section tf-item">
            <div class="container mt-4">
                <!-- <div class="row pb-4 mb-4">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <center>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="msbyc.jpg" style="width: 220px;">
                                </div>
                                <div class="col-md-8">
                                    <center><h2>MABYAC</h2></center>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3"></div>
                </div> -->
                <div data-v-2421f567="" id="app">
                    <div data-v-0d542fce="" data-v-2421f567="" class="home-wrapper">
                        <div data-v-0d542fce="" class="header">
                            <div data-v-0d542fce="" class="header-info"><img data-v-0d542fce=""
                                    src="msbyc.jpg" alt="" class="header-info-logo">
                                <div data-v-0d542fce="" class="header-info-right">
                                    <div data-v-0d542fce="" class="info-row-1"> BitcoinMAYC <div data-v-0d542fce=""
                                            style="margin-left: 8px;">
                                            <a data-v-0d542fce="" href="https://twitter.com/bitcoinmayc"
                                                target="_new" class="link-logo">
                                                <img data-v-0d542fce="" width="100%" height="100%"
                                                    src="https://bitcoinpunks.com/twitter-icon.svg">
                                            </a>
                                            <!-- <a data-v-0d542fce="" href="tutorial/mint" target="_blank"
                                                class="link-logo">
                                                <span data-v-0d542fce="" class="text-icon">📖</span>
                                            </a> -->
                                        </div>
                                    </div>
                                    <div data-v-0d542fce="" class="info-row-2">The First Pixelated Bored Apes on Bitcoin
                                    </div>
                                </div>
                            </div>
                            <div data-v-0d542fce="" class="header-desc">
                                <div data-v-0d542fce="">10,000 artistically pixelated BitcoinBAYCs to fit with BTC
                                    chain.</div>
                                <div data-v-0d542fce="">Choose your favorite BAYC and mint a <div data-v-0d542fce=""
                                        class="text"> Pixelated Bitcoin NFT <div data-v-0d542fce="" class="desc-tips">
                                            <p data-v-0d542fce="">Inscription on BTC works differently from a mint on
                                                ETH. While ethereum NFTs are stores on IPFS storage across the
                                                blockchain, bitcoin NFTs are stored in the OP_RETURN field of a Bitcoin
                                                transaction, which can store a small amount of data. </p>
                                            <p data-v-0d542fce="">Inscriptions are different from NFTs on Ethereum in
                                                that they are stored fully on-chain, making them immutable and fully
                                                decentralized.</p>
                                            <p data-v-0d542fce="">The limitation of inscription is that file sizes
                                                matter greatly, as incribing a large image can be extremely costly.</p>
                                            <p data-v-0d542fce="">bitconBAYC has chosen to limit image sizes to 50x50
                                                pixels or roughly ~5kB. This creates NFT that is both affordable and
                                                artistic, giving it a "vintage" look that is befitting to the bitcoin
                                                chain.</p>
                                        </div>
                                    </div> .</div>
                                <div data-v-0d542fce="">Mint Price: 0.008 btc + token ID</div>
                                <div data-v-0d542fce="">*Inscription gas fee is included with each mint.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                .hovereffect {
                    width: 100%;
                    height: 100%;
                    float: left;
                    overflow: hidden;
                    position: relative;
                    text-align: center;
                    cursor: default;
                }

                .hovereffect .overlay {
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    overflow: hidden;
                    top: 0;
                    left: 0;
                    opacity: 0;
                    background-color: rgba(0, 0, 0, 0.5);
                    -webkit-transition: all .4s ease-in-out;
                    transition: all .4s ease-in-out
                }

                .hovereffect img {
                    display: block;
                    position: relative;
                    -webkit-transition: all .4s linear;
                    transition: all .4s linear;
                }

                .hovereffect h2 {
                    text-transform: uppercase;
                    color: #fff;
                    text-align: center;
                    position: relative;
                    font-size: 17px;
                    background: rgba(0, 0, 0, 0.6);
                    -webkit-transform: translatey(-100px);
                    -ms-transform: translatey(-100px);
                    transform: translatey(-100px);
                    -webkit-transition: all .2s ease-in-out;
                    transition: all .2s ease-in-out;
                    padding: 10px;
                }

                .hovereffect a.info {
                    text-decoration: none;
                    display: inline-block;
                    text-transform: uppercase;
                    color: #fff;
                    border: 1px solid #fff;
                    background-color: transparent;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    -webkit-transition: all .2s ease-in-out;
                    transition: all .2s ease-in-out;
                    margin: 50px 0 0;
                    padding: 7px 14px;
                }

                .hovereffect a.info:hover {
                    box-shadow: 0 0 5px #fff;
                }

                .hovereffect:hover img {
                    -ms-transform: scale(1.2);
                    -webkit-transform: scale(1.2);
                    transform: scale(1.2);
                }

                .hovereffect:hover .overlay {
                    opacity: 1;
                    filter: alpha(opacity=100);
                }

                .hovereffect:hover h2,
                .hovereffect:hover a.info {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    -ms-transform: translatey(0);
                    -webkit-transform: translatey(0);
                    transform: translatey(0);
                }

                .hovereffect:hover a.info {
                    -webkit-transition-delay: .2s;
                    transition-delay: .2s;
                }
                </style>
                <div class="row">

                    <?php 
                            $json = json_decode(file_get_contents('img.json'), true);
                                foreach($json as $jk => $jv){
                                
                                            echo '<div class="col-md-1" style="padding-right: inherit !important;padding-left: unset !important;">
                                            <div class="view overlay hovereffect">
                                            
                                                <div onclick="make()" class="img-box">
                                                    <img src="nftimages/'.$jv['file'].'" alt="" style="max-width: -webkit-fill-available;">
                                                    <div class="overlay">
                                                        <a class="info" href="#">'.$jv['type'].'</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    
                            ?>
                </div>
                <!-- <div class="col-md-12">
                        <div class="btn-about center m-t16" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="800">
                            <a class="tf-button btn-effect loadmore st2" href="#" id="loadmore">
                                <span class="boder-fade"></span>
                                <span class="effect">Load More</span>
                            </a>
                        </div>
                    </div> -->
            </div>
    </div>
    </section>

    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" hidden data-target=".bd-example-modal-lg"
        id="load_modal"></button>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color:#000">
                <form method="POST">
                    <div class="form-group mb-4">
                        <label for="exampleInputEmail1">Step1: Your Receiving Address</label>
                        <input type="text" name="receive" class="form-control" id="exampleInputEmail1" required
                            aria-describedby="emailHelp" placeholder="Your BTC TAPROOT Address beginning with bc1">
                        <small id="emailHelp" class="form-text text-muted">(MUST BE A SPARROW WALLET TAPROOT ADDRESS
                            BEGINNING WITH "bc1"):</small>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleInputPassword1">Step2: Send 0.0080004 btc to:</label>
                        <img src="qrcode.png" style="height: 150px;">
                    </div>
                    <div class="form-group input-group mb-4">
                        <input type="text" class="form-control" name="myvalue" id="myvalue"
                            value="bc1qq8nx64j6w253tpapspvf0ktrr0h9a0y9fkayd3" readonly />
                        <button class="btn btn-primary btn-block" type="button" onclick="copyToClipboard()"><i
                                class="fa fa-copy"></i></button>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">I have Paid</button>
                </form>
            </div>
        </div>
    </div>
    <a id="scroll-top"></a>
    <script>
    function make() {
        $("#load_modal").click();
    }

    function copyToClipboard() {
        var textBox = document.getElementById("myvalue");
        textBox.select();
        document.execCommand("copy");
    }
    </script>
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/swiper-bundle.min.js"></script>
    <script src="app/js/swiper.js"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="./unpkg.com/aos%402.3.1/dist/aos.js"></script>
    <script src="app/js/parallax.js"></script>
    <script src="app/js/jquery.magnific-popup.min.js"></script>
</body>

</html>