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
      background-color: rgba(220, 236, 236, 0.404);
      position: sticky;
      top: 0;
      backdrop-filter: blur(10px);
      z-index: 1;
    }
    .ai{
      font-family:cursive;
      font-weight: 600;
    }
    .payal{
      font-family: cursive;
    }
    .pp{
      color: rgb(13, 88, 88);
    }
  </style>

</head>
<body>
 
  <div class="main-nav">
  <div class=" h-4 p-5 pb-7 flex justify-between border-b-2 border-gray-300 ">


    <div class="flex items-center sm:hidden ">
    <a href="/index.php">  <p class="text-sm pp cursor-pointer"> <span class="text-2xl font-bold payal">P</span>ayal <span class="text-2xl font-bold payal">C</span>omputer's</p> </a>

    </div>
    <div class="hidden sm:flex justify-between space-x-3 flex-center items-center">
      <a href="/index.php"> <p class="text-sm pp cursor-pointer"> <span class="text-2xl font-bold payal">P</span>ayal <span class="text-2xl font-bold payal">C</span>omputer's</p>  </a>
        <a href="#" class="text-blue-900 text-sm ai">Home</a>
        <a href="../products.php" class="text-blue-900 text-sm ai">Products</a>
        <a href="#" class="text-blue-900 text-sm ai">About</a>
    </div>

        <form action="#" method="post" class="hidden sm:flex justify-between space-x-3 flex-center items-center">
          <input type="text" placeholder="Search.." class="rounded-lg px-2 py-1 sm:w-full border-b-2 border-gray-400 ">
          <button type="submit">Search</button>
        </form>

        <form action="#" method="post" class="flex sm:hidden justify-between space-x-3 flex-center items-center">
          <input type="text" placeholder="Search.." class="rounded-lg px-2 py-1 sm:w-full border-b-2 border-gray-400">
          <button type="submit" class="text-blue-700">

            <svg class="w-6 h-6 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
          </button>
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
        <a href="#" class="block text-center">Home</a>
        <a href="../products.php" class="block text-center">Products</a>
        <a href="#" class="block text-center">About</a>
        <a href="" class=" block bg-purple-300 text-purple-900 p-2 rounded py-1 hover:bg-purple-200 ai text-center" >SignUp</a>
      
    </div>
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