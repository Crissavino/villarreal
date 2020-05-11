<script type="application/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/browser.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/breakpoints.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/util.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/main.js')}}"></script>

<script type="application/javascript" src="{{asset('js/index.js')}}"></script>

<script type="application/javascript" src="{{asset('js/menu.js')}}"></script>

<script>
  function goToIndexOne() {
    if(window.location.pathname !== '/') {
      window.location = "{!! route('index') . '#one'!!}"
    }
  }
  function goToIndexTwo() {
    if(window.location.pathname !== '/') {
      window.location = "{!! route('index') . '#two' !!}"
    }
  }
</script>