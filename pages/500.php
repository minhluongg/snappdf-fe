<?php
/**
 * Config
 */
// include 
include '../inc/config.php';

$isTitle = "500 Internal Server Error";
$isDesc = '500 Internal Server Error';

include '../inc/header.php';
?>
<style>
h1 {
    margin-top: 44px;
    font-weight: 700;
    font-size: 20px;
    line-height: 28px;
    color: #1D1C21;
}
.desc {
    font-size: 14px;
    line-height: 20px;
    letter-spacing: -0.01em;
    color: #515054;
    margin-top: 8px;
}
.btn-back {
    margin-top: 24px;
}
.btn-back .btn {
    background: #C7C6C8;
    border-radius: 8px;
    border: none;
    padding: 12px 20px;
    gap: 8px;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    color: #1D1C21;
}
.btn-back .btn.btn-try {
    background: #6D18DC;
    box-shadow: 0px 4px 8px rgba(64, 15, 127, 0.26);
    color: #fff;
    width: 100%;
}
.btn-back .btn:hover {
    background: #AEADAF;
    color: #000;

}
@media (min-width: 992px) {
    h1 {
        font-size: 32px;
        line-height: 32px;
    }
    .desc {
        font-size: 16px;
        margin-top: 16px;
    }
}
</style>
<main>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner container-wrap">
                        <div class="captionblock">
                            <div class="toolscapt">
                            <h1>500 Internal Server Error</h1>
                            </div>
                        </div>
                        <div class="desc" style="text-align:left;">Sorry! It seems there is a problem with our server! Our engineers are working to fix it. Please try again in a few moments!</div>
                        <div class="row btn-back">
                            <div class="col-6"><a href="/" class="btn btn-secondary d-block">Go home</a></div>
                            <div class="col-6"><button onClick="window.location.reload();" class="btn btn-try d-block">Retry</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>