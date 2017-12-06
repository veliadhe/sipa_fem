<!DOCTYPE html>
<html>
@include('templates.partials._head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>SI</b>AS</span>
      <span class="logo-lg"><b>Simak</b>Asrama</span>
    </a>
    @include('templates.partials._navbar')
  </header>
  {{--  @include('templates.partials._sidebar')  --}}
  <div class="content-wrapper">
    @yield('content')
  </div>
  @include('templates.partials._footer')
</div>
@include('templates.partials._scripts')
</body>
</html>
