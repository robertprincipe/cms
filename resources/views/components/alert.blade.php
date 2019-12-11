@if (Session::has('message'))
  <div class="my-3">
      <div class="alert alert-{{ Session::get('typealert') }}" style="display: none;">
        {{ Session::get('message') }}
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <script>
            $('.alert').slideDown();
            setTimeout(() => {
                $('.alert').slideUp();
            }, 10000)
        </script>
      </div>
  </div>
@endif
