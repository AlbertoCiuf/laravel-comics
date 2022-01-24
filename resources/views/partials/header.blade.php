<header>
  <div class="container">
    <a href="#">
     <img src="{{asset('img/dc-logo.png')}}" alt="">
    </a>
    <nav>
      <ul>
       @foreach ($links as $link)
         <li>
          <a href="#">{{$link['text']}}</a> 
        </li>
       @endforeach
      </ul>
    </nav>
  </div>
</header>