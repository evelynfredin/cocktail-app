@if ($errors->any())
    <div class="bg-red text-white p-2 text-center my-2">
        <p>{{ $errors->first() }}</p>
    </div>
@endif
