<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Testimonial Carousel with Star Ratings</title>
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <style>
    .img1{
        width: 100%;
        height: 40vh;
       
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0, 0, 0, 0.595)), url("../asset/img/hero-fullscreen-bg.jpg");   
    background-size:  cover;
    background-position: center ;
    background-repeat: no-repeat;
     
        display:flex;
        align-items:center;
        
    }
    /* .img-ovrelay{
        width: 100%;
        height: 40vh;
        background-color: #08a6373f;
        display:flex;
        align-items:center;

    } */
    .img1 .img-overlay h2{
        margin-top :30px;       
        color:#ffff;    
    }

    .subscribe-btn{
        color:#ffff; 
        border-radius:10px;  
        
    }
    .div{
        display:flex;
        top:0px;
    }
    .div .subscribe-btn{
 
    }
 </style>
 
   
</head>

<body>
   <div class="container-fluid bg-dark mt-5">
      <div class="container">
        <div class="row">
            <div class="col-md-7 bg-light">
            <div class="div bg-dark">
                        <button class="subscribe-btn" type="submit">Subscribe</button>
                        <button class="subscribe-btn" type="submit">Subscribe</button>
                        
                    </div>

                <div class="img1 ">
                    
                   
                        <div class="img-overlay">
                            <h2>Lorem, ipsum aperiam rerum odit tenetur nisi inventore, provident aspernatur animi? Odio, qui itaque?</h2>
                            <button class="subscribe-btn" type="submit">Subscribe</button>
                        </div>                 
                                  
                 </div>
            </div>
            <div class="col-md-5"></div>
            <!-- <img src="../asset/img/banner.jpg"> -->
        </div>
      </div>
      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
   </div>
     
 

                 
               
</body>
</html>