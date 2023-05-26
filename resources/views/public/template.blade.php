<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Business Listing</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" href = "/html/style.css">
        
    </head>
<body class="">
        <div style="height:8vh !important">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        <a href="{{  route('logout')  }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logout</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

@yield('screen')
<script type="text/javascript">
        
        function clear_rating(){
            document.getElementById ("list_rating").value = 0
            y = document.querySelectorAll(".rating-select");
            y[0].innerHTML= "<i class='rating-edit fa fa-star-o'></i>" ;
            y[1].innerHTML= "<i class='rating-edit fa fa-star-o'></i>" ;
            y[2].innerHTML= "<i class='rating-edit fa fa-star-o'></i>" ;
            y[3].innerHTML= "<i class='rating-edit fa fa-star-o'></i>" ;
            y[4].innerHTML= "<i class='rating-edit fa fa-star-o'></i>" ;
        }
        document.getElementById ("clear-rating").addEventListener ("click", clear_rating, false);

        function change(cname,id)
        {
            var n = cname
            n.innerHTML= "<i class='rating-edit fa fa-star star_colour' ></i>";
            next =  n.nextElementSibling;
            while (next){
                if(next != ""){
                    next.innerHTML= "<i class='rating-edit fa fa-star-o'></i>" ;
                    next =  next.nextElementSibling;
                } else {
                    next = null;
                    break;
                }
            }
            prev = n.previousElementSibling;
            while (prev){
                if(prev != ''){
                    prev.innerHTML= "<i class='rating-edit fa fa-star star_colour' ></i>";
                    prev = prev.previousElementSibling;
                } else {
                    prev = null;
                    break;
                }
            }
            document.getElementById ("list_rating").value = id

        }
        function validateForm() {
            val = document.getElementById ("list_rating").value
            if(val == 0 ){
                alert("Atleast Rate One Star to Submit")
                return false;
            }
        }
        </script>
</body>
</html>