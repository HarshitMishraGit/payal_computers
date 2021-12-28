
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container1{
            background-color: rgb(224, 220, 220);
            padding: 30px 30px;
            padding-bottom: 0px;
        }
        footer{
            background-color: rgb(190, 183, 183);
            text-align: center;
            height: 30px;
            
           
        }
        
        .main{
            display: flex;
            flex-direction: row;
        }
        .items{
            width: 30%;
        }
        .main1{
            justify-content: space-around;
        }
        footer>a{
            text-decoration: none;
            color: black;
            font-weight: 600;
        }
        .main1{
    display: flex;
    flex-direction: row;
}
.items{
    width: 30%;
}
.main1{
    justify-content: space-around;
}
footer>a{
    text-decoration: none;
    color: black;
    font-weight: 600;
}


@media only screen and (max-width: 700px) {
   
 
   .main1{
       flex-direction: column;
      
   }
  
 }
 @media only screen and (max-width: 420px) {
   
    .main1 h2{
        font-size: 20px;
    }

  
  }
 

    </style>
</head>
<body>
    <div class="container1">
    <div class="main1">
        <div class="items1 sm:border-none pb-3 mb-2 border-b-2 border-gray-500">
           <h2 class="text-2xl ">Payal Computers</h2>

           <p class="text-sm text-gray-500 font-sans font-bold">Your Expextation Our Responsibility</p>
           
           
        </div>
        
        <div class="items3">
            <h2 class="text-xl pb-2">LOCATION</h2>
            <p>  <i style="font-size:24px" class="fa">&#xf015;</i>: Mill Bypass Road , Near Prahlab Patel House <br>
                Gola Gokarannath (Kheri),262802 </p>

           
           
               
                <p>  <i style="font-size:24px" class="fa">&#xf095;</i> : 9839976170 , 7007153331</p>
           
            
            
               
                <p>  <i style="font-size:24px" class="fa">&#xf0e0;</i> : info.payalgola@gmail.com</p>
        </div>
    </div>
    <hr>
    <footer class="mt-2">&copy; Copyright 2021 
        <a href="http://payalcomputers.com">payalcomputers.com</a>
    </footer>


