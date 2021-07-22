<nav class="gtco-nav" role="navigation">
  <div class="gtco-container">
  
    <div class="row">
      <div class="col-sm-2 col-xs-12">
        <div id="gtco-logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="Free HTML5 Website Template by FreeHTML5.co"></a></div>
      </div>
      <div class="col-xs-10 text-right menu-1">
        <ul>
          {{-- {{ dd( url()->getRequest()->path()) }} --}}
          <li class="{{ url()->getRequest()->path() == '' ? 'active' : '' }}"><a href="/">Home</a></li>
          <li class="{{ url()->getRequest()->path() == 'contact' ? 'active' : '' }}"><a href="/contact">Contact</a></li>
          <li class="{{ url()->getRequest()->path() == 'fruit' ? 'active' : '' }}"><a href="/fruits">Fruits</a></li>
          <li class="{{ url()->getRequest()->path() == 'legume' ? 'active' : '' }}"><a href="/legumes">Légumes</a></li>
          <li>
            <form action="/administration" method="GET">
              @csrf
              <label for="">Nom d'utilisateur</label>
              <input name="login" type="text" value=" ">
              <input type="submit" value="Connexion">
            </form>
          </li>
        </ul>
      </div>
    </div>
    
  </div>
</nav>