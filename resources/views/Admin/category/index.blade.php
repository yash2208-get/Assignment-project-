@include('Admin.Menu.header')
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">
        <!-- //breadcrumbs -->
        <!-- forms -->
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @elseif (session('error'))
            <p class="alert alert-danger">{{ session('error') }}</p>
        @endif
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>List<span></span></h3>
                </div>
            </div>
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    
                    <a href="{{ route('category.create') }}"class="btn btn-primary btn-style mt-1">New Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Deatil</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                       @php
                           $a=1
                       @endphp
                          @foreach ($category as $value)
                    <tr>
                        <td>{{$a}}</td>
                        <td>{{$value->cagy_serv}}</td>
                        <td>{{$value->detail_cagy}}</td>
                        
                        <td style="cursor: pointer;"><a href="{{ route('category.edit', $value->cagy_id) }}"><i class="fa fa-pencil"></i></a></td>
                        <td style="cursor: pointer;">
                            <form action="{{ route('category.destroy', $value->cagy_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i
                                    class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                        @php
                           $a++;
                       @endphp
                    @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </section>
    </div>
</div>
@include('Admin.Menu.footer')
