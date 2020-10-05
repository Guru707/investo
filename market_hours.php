<?php 
   include 'header.php';
?>
<section class="inner-head-banner">
    <img src="images/header_inner.jpg" alt="" />
    <div class="top_heading">
        <div class="container">
            <h1>Market Hours</h1>
        </div>
    </div>
</section>
<section class="equal-p">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="product-image mb-3">
                    <img src="images/banner_inner.jpg" class="img-reponsive" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="porduct-content">

                    <h4>Forex Trading hours Schedule</h4>
                    <p>The time zone is GMT (Greenwich Mean Time)</p>
                 <table class="table">
    <tbody>
        <tr>
            <td width="154">
                <strong>Region</strong></td>
            <td width="148">
                <strong>City</strong></td>
            <td width="136">
                <strong>Open (GMT)</strong></td>
            <td width="117">
                <strong>Close (GMT)</strong></td>
        </tr>
        <tr>
            <td width="154" rowspan="2">
                <strong>Asia</strong></td>
            <td width="148">
                Tokyo</td>
            <td width="136">
                12:00 am</td>
            <td width="117">
                09:00 am</td>
        </tr>
        <tr>
            <td width="148">
                Hong Kong</td>
            <td width="136">
                01:00 am</td>
            <td width="117">
                10:00 am</td>
        </tr>
        <tr>
            <td width="154" rowspan="2">
                <strong>Europe</strong></td>
            <td width="148">
                Frankfurt</td>
            <td width="136">
                07:00 am</td>
            <td width="117">
                04:00 pm</td>
        </tr>
        <tr>
            <td width="148">
                London</td>
            <td width="136">
                08:00 am</td>
            <td width="117">
                05:00 pm</td>
        </tr>
        <tr>
            <td width="154" rowspan="2">
                <strong>America</strong></td>
            <td width="148">
                New York</td>
            <td width="136">
                01:00 pm</td>
            <td width="117">
                10:00 pm</td>
        </tr>
        <tr>
            <td width="148">
                Chicago</td>
            <td width="136">
                02:00 pm</td>
            <td width="117">
                11:00 pm</td>
        </tr>
        <tr>
            <td width="154" rowspan="2">
                <strong>Pacific</strong></td>
            <td width="148">
                Wellington</td>
            <td width="136">
                10:00 pm</td>
            <td width="117">
                06:00 am</td>
        </tr>
        <tr>
            <td width="148">
                Sydney</td>
            <td width="136">
                10:00 pm</td>
            <td width="117">
                07:00 am</td>
        </tr>
    </tbody>
</table>
                    
                </div>
            </div>
            <div class="col-md-3">
                <?php  include'trade_chart.php' ?>
            </div>
        </div>
    </div>
</section>

<?php 
   include'footer.php'
?>