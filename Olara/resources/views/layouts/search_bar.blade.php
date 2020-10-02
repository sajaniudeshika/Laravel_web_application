<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">

</head>

<body>

    <div class=search containr>
    
    <!--search bar -->
    <form action="{{ route('search') }}" method="GET" class="search-form" align="right">
    <i class="fa fa-search search-icon"> </i>
    <input type="text" name="query" id="query" value="{{ request()->input('query')}}" class="search-box" placeholder="Search for products">
  <!--  <i class="fa fa-search">-->
    </form>


  <!-- end of search bar -->

    </div>
</body>
</html>