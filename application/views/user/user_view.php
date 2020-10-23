<!DOCTYPE html>
<html lang="en-us">

<head>
<title>SURABHI CINIMAS</title>
   <link href="<?php echo base_url();?>/images/fav.png" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SURABHI CINIMAS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
    
body
{
    padding-top:55px;

}
#myCarousel .nav a small
{
    display: block;
}
#myCarousel .nav
{

    background: rgb(0,0,0);
    background: rgba(0,0,0, 0.7);
    overflow-y: hidden;
    transition: 0.5s;
}

#myCarousel .nav :hover
{

    background: rgb(0,0,0);
    background: rgba(0,0,0, 0.7);
    overflow-y: hidden;
    transition: 0.5s;
}
.carousel-inner{
  width:100%;
  max-height: 500px !important;
}

.nav-justified > li > a
{
    border-radius: 0px;
}
.nav-pills>li[data-slide-to="0"].active a { background-color:  rgba(76,76,76, 0.7); color:#fff;}
.nav-pills>li[data-slide-to="1"].active a { background-color:  rgba(76,76,76, 0.7); color:#fff;}
.nav-pills>li[data-slide-to="2"].active a { background-color:  rgba(76,76,76, 0.7); color:#fff;}
.nav-pills>li[data-slide-to="3"].active a { background-color:  rgba(76,76,76, 0.7); color:#fff;}

.nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    position: absolute;
    bottom: 0;
}

</style>
</head>

<body>
<?php echo $nav ?>
<div class="container">

    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
        <!-- Wrapper for slides -->
        
               
        <div class="carousel-inner">
 
          
        
           
        <?php foreach($slider as $key=> $row)
           

             {

            if($key==0)
            {
            $active="active";

            }
            else
            {
            $active="";
            }
                   

                      ?> 
       
               <div class="item <?php echo $active;?>">
            <img src="<?php echo base_url();?>uploads/<?php echo $row->Image;?>" width="100%" height="40%" >
            </div>
                
         <?php } ?>
            <!-- End Item -->
        
           
        </div>
         
        <!-- End Carousel Inner -->
    
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem
                ipsum dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
                dolor sit</small></a></li>
        </ul>
         
    </div>
    <!-- End Carousel -->
   
</div>
<?Php echo $footer;?>

<script type="text/javascript">
    
$(document).ready( function() {
    $('#myCarousel').carousel({
        interval: 2000
    });
    
    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');        
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');    
            }
        }
        clickEvent = false;
    });
});


</script>
<script type="text/javascript"></script>

</body>


</html>