@if ($errors->any())
    <div class="bg-red text-white p-3 my-3 text-center">
        <p>{{ $errors->first() }}</p>
    </div>
@endif
