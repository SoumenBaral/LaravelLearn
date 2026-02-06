<div>
    <h2>Dashboard</h2>
    <p>Welcome {{auth()->user()->name??'User'}}</p>
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <div>
        <livewire:counter />

    </div>

</div>
