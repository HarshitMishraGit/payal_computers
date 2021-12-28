<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payal Computers</title>
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
  <style>
    .main-nav{
      background-color: rgba(0, 255, 255, 0.404);
      position: sticky;
      top: 0;
      backdrop-filter: blur(10px);
      z-index: 1;
    }
    .ai{
      font-family:cursive;
      font-weight: 600;
    }
  </style>

</head>
<body>
 

  <div class="main-nav h-4 p-5 pb-7 flex justify-between border-b-2 border-gray-300 ">

    <div class="flex justify-between space-x-3 flex-center items-center">
        <a href="#" class="text-blue-900 text-sm ai">Home</a>
        <a href="#" class="text-blue-900 text-sm ai">Products</a>
        <a href="#" class="text-blue-900 text-sm ai">About</a>
    </div>

        <form action="#" method="post" class="flex justify-between space-x-3 flex-center items-center">
          <input type="text" placeholder="Search.." class="rounded-lg px-2 py-1 sm:w-full ">
          <button type="submit">Search</button>
        </form>
    
    <div class="hidden sm:flex justify-around space-x-3 items-center">
        <a href="#" class="text-blue-900 text-sm ai">Login</a>
        <a href="" class=" bg-purple-300 text-purple-900 p-2 rounded py-1 hover:bg-purple-200 ai" >SignUp</a>
    </div>
    

    <!-- mobile menu  -->
    <div class="sm:hidden flex items-center">
    <button class="btn">
       <div class="border-2 border-gray-200 rounded-lg focus:ring focus:ring-violet-300">
         <div class="h-1 w-5 bg-gray-600 m-1 rounded-full"></div>
         <div class="h-1 w-5 bg-gray-600 m-1 rounded-full"></div>
         <div class="h-1 w-5 bg-gray-600 m-1 rounded-full"></div>
       </div>
    </button>
    </div>


      
    </div>

    <div class="hidden sm:hidden menu-items ">
        <a href="#" class="block text-center">login</a>
        <a href="" class="block bg-yellow-300 text-yellow-900 p-2 rounded py-1 hover:bg-yellow-200 text-center" >SignUp</a>
      
    </div>
  <!-- header -->
  <script>
    let btn=document.querySelector('button.btn')
    let menu=document.querySelector('.menu-items')
       btn.addEventListener('click',()=>{
           menu.classList.toggle('hidden');
       })
      
  </script>
</body>
</html>