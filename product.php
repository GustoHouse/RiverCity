<?php include('header.php'); ?>

<div class="margin product-details">

    <div class="product-gallery">
        <div class="product-photo" style="background-image:url(images/highres.jpg)"></div>
        <div class="product-thumbnails">
            <a class="thumb" data-image="" style="background-image:url(images/highres.jpg)"></a>
            <a class="thumb" style="background-image:url(images/cat.png)"></a>
            <a class="thumb" style="background-image:url(images/laminate.jpg)"></a>
        </div>
    </div>
    
    <div class="product-quick-details">
        
        <h1>Bausen Timberline Gunstock Hickory</h1>
        <h3>SKU: THK6G</h3>
        <h3>COLOR: Brown</h3>
        
        <p>1/2" thickness, 6-1/2" wide, Engineered Handscraped Hickory, Gunstock color, Glue, Nail, Float installation, 2mm wear layer, 25 year residential finish warranty, by Bausen Hardwood</p>
        
    </div>
    
    <div class="product-ctas">
        <a class="brown" href="">Call For Price<img class="arrow" src="images/arrow.svg" /></a>
        <a class="burgundy" target="_blank" href="">Visit Our Showroom<img class="arrow" src="images/arrow.svg" /></a>
    </div>
    
</div>





<div class="margin product-full-details">
    
    <div class="product-full-details-image" style="background-image:url(images/cat.png)">
    
    </div>
    
    <div class="product-table lightbrown">
        
        <h2>Product Details</h2>
        
        <table class="table">
          <tr class="odd">
            <td class="a-left specname">Species</td>

            <td class="a-left specvalue">Hickory</td>
          </tr>

          <tr class="even">
            <td class="a-left specname">Width</td>

            <td class="a-left specvalue">6-1/2"</td>
          </tr>

          <tr class="odd">
            <td class="a-left specname">Thickness</td>

            <td class="a-left specvalue">1/2"</td>
          </tr>

          <tr class="even">
            <td class="a-left specname">Installation Method</td>

            <td class="a-left specvalue">Glue</td>
          </tr>

          <tr class="odd">
            <td class="a-left specname">Installation Method</td>

            <td class="a-left specvalue">Nail</td>
          </tr>

          <tr class="even">
            <td class="a-left specname">Installation Method</td>

            <td class="a-left specvalue">Float</td>
          </tr>

          <tr class="odd">
            <td class="a-left specname">Construction</td>

            <td class="a-left specvalue">Engineered</td>
          </tr>

          <tr class="even">
            <td class="a-left specname">Color</td>

            <td class="a-left specvalue">Dark Brown</td>
          </tr>

          <tr class="odd">
            <td class="a-left specname">Surface</td>

            <td class="a-left specvalue">Handscraped</td>
          </tr>

          <tr class="even">
            <td class="a-left specname">SquareFoot</td>

            <td class="a-left specvalue">19.2</td>
          </tr>

          <tr class="odd">
            <td class="a-left specname">Collection</td>

            <td class="a-left specvalue">Timberline</td>
          </tr>
      </table>
    
    </div>
    
</div>



<div class="divider"><img src="images/divider.jpg" /></div>





<script>
    $('document').ready(function(){
       
        $('body').on('click','.thumb', function(){
           
            $('.product-photo').css("background-image", $(this).css("background-image") );
            
        });
        
    });

</script>

<?php include('footer.php'); ?>