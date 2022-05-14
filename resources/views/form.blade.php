@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

<form action="{{ route('create') }}" method="post">
    @csrf
    <h2 class="card-title">Todo list</h2>
    <div class="add-items d-flex">
        <input type="text" class="form-control todo-list-input" name="text" placeholder="What do you need to do today?">
        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>
    </div>
</form>
