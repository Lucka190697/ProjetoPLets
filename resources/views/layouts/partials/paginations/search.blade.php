@if($title == 'Books List')
    <form action="{{route('books.search')}}" id="pesquisar" method="get" role="search">
        @elseif($title == 'User List')
            <form action="{{route('user.search')}}" id="pesquisar" method="get" role="search">
                @elseif($title == 'Loan records')
                    <form action="{{route('loans.search')}}" id="pesquisar" method="get" role="search">
                        @endif
                        @csrf
                        <div class="form-group input-group m-0">
                            <input type="text" class="form-control"
                                   id="search" name="search"
                                   placeholder="Search" required>
                            <button type="submit" class="btn btn-primary">
                                <span class="fa fa-search"></span>
                            </button>
                            <span class="input-group-btn">

    </span>
                        </div>
                    </form>
