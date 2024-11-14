@include('Admin.Menu.header')
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">
        <!-- //breadcrumbs -->
        
        <!-- forms -->
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>List<span></span></h3>
                </div>
                @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @elseif (session('error'))
            <p class="alert alert-danger">{{ session('error') }}</p>
        @endif
            </div>
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">

                    <a href="{{ route('product.create') }}"class="btn btn-primary btn-style mt-1">New Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Deatil</th>
                                <th scope="col">Price</th>
                                <th scope="col">Images</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $a = 1;
                            @endphp
                            @foreach ($product as $value)
                                <tr>
                                    <td>{{ $a }}</td>
                                    <td>{{ $value->servic_name }}</td>
                                    <td>{{ $value->servic_details }}</td>
                                    <td>{{ $value->price }}</td>
                                    
                                    <td> <img src="product_images/{{ $value->service_img }}" alt=""
                                            width="200" height="100"></td>
                                    <td>{{ $value->cagy_serv }}</td>
                                    <td> <b> {{ $value->status == 'Y' ? 'Active' : 'Inactive' }}</b></td>
                                    <td style="cursor: pointer;"><a
                                            href="{{ route('product.edit', $value->ser_id) }}"><i
                                                class="fa fa-pencil"></i></a></td>
                                    <td style="cursor: pointer;">
                                        <form action="{{ route('product.destroy', $value->ser_id) }}" method="POST" style="display:inline;">
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
