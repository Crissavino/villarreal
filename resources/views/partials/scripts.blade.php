<script type="application/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/browser.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/breakpoints.min.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/util.js')}}"></script>
<script type="application/javascript" src="{{asset('assets/js/main.js')}}"></script>

<script type="application/javascript" src="{{asset('js/index.js')}}"></script>

<script type="application/javascript" src="{{asset('js/menu.js')}}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
  function goToIndexOne() {
    if (window.location.pathname !== '/') {
      window.location = "{!! route('index') . '#one'!!}";
    }
  }

  function goToIndexTwo() {
    if (window.location.pathname !== '/') {
      window.location = "{!! route('index') . '#two' !!}";
    }
  }
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>