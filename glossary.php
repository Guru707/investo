<?php 
   include 'header.php';
?>
<section class="inner-head-banner">
    <img src="images/header_inner.jpg" alt="" />
    <div class="top_heading">
        <div class="container">
            <h1>Glossar</h1>
        </div>
    </div>
</section>
<section class="equal-p">
    <div class="container-fluid">
    <div class="accordion" data-expander="my-class">
        <h6 class="accordion__head" data-toggle>Accordion second item</h6>
        <div class="accordion__body" data-body>
         <p> Here's content for second accordion item. Click headings in order to open or close
          content.</p>
        </div>
      </div>
      <div class="accordion" data-expander="my-class">
        <div class="accordion__head" data-toggle>Accordion third item</div>
        <div class="accordion__body" data-body>
          Here's content for third accordion item. Click headings in order to open or close
          content.
        </div>
      </div>
</div>
</section>
<?php 
   include'footer.php'
?>