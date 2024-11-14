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
                    <h3>Forms <span></span></h3>
                </div>
                <!-- forms 2 -->
                <div class="card card_border py-2 mb-4">
                    <div class="card-body">
                        <form action="{{ route('product.update', $product->ser_id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="input-label">Product Name</label>
                                    <input type="text" class="form-control input-style" id="inputEmail4"
                                        placeholder="Email" name="product_name" value={{$product->servic_name}} >
                                        
                                        <div style="color: red">
                                            @error('product_name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input-label">Product Detail</label>
                                    <input type="text" class="form-control input-style" id="inputPassword4"
                                        placeholder="Password" name="product_detail" value={{$product->servic_details}}>
                                    <div style="color: red">
                                        @error('cagy_detail')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Product Image</label>
                                    <input type="file" class="form-control input-style" id="inputPassword4"
                                        placeholder="Password" name="product_images" value="/product_images/{{$product->service_img}}">
                                    <div style="color: red">
                                        <img src="/product_images/{{$product->service_img}}" alt="not fonud" width="50" height="50">
                                        @error('product_images')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Product Price</label>
                                    <input type="text" class="form-control input-style" id="inputPassword4"
                                        placeholder="Product Price" name="price" value={{$product->price}}>
                                        
                                    <div style="color: red">
                                        @error('price')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Product Status</label>
                                    <select name="status" class="form-control input-style" id="">
                                        <option value="Y" @if ($product->status == 'Y') selected @endif>Active</option>
                                        <option value="N" @if ($product->status == 'N') selected @endif>Deactive</option>
                                    </select>
                                        
                                    <div style="color: red">
                                        @error('price')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                @php
                                $cagy = App\Models\CagyService::get();
                            @endphp
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Cagy Add</label>
                                        <select name="cagy_id" type='text' class="form-control input-style"    id="inputPassword4" >
                                            @foreach ($cagy as $value)
                                                <option value={{$value->cagy_id}} @selected($product->cagy_id == $value->cagy_id) 
                                                 >{{$value->cagy_serv}}</option>
                                            @endforeach
                                          </select>
                                    <div style="color: red">
                                        @error('cagy_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-check check-remember check-me-out">
                                <input class="form-check-input checkbox" type="checkbox" id="gridCheck">
                                <label class="form-check-label checkmark" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-style mt-4">Update</button>
                        </form>
                    </div>
                </div>
        </section>
    </div>
</div>

@include('Admin.Menu.footer')