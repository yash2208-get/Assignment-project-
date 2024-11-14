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
                    <h3>Product Add Form <span></span></h3>
                </div>


                <!-- forms 2 -->
                <div class="card card_border py-2 mb-4">
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="input__label">Product Name</label>
                                    <input type="text" class="form-control input-style" id="inputEmail4"
                                        placeholder="Product Name" name="product_name" value={{old('product_name')}} >
                                        <div style="color: red">
                                            @error('product_name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Product Detail</label>
                                    <input type="text" class="form-control input-style" id="inputPassword4"
                                        placeholder="Product Detail" name="product_detail" value={{old('product_detail')}}>
                                        
                                    <div style="color: red">
                                        @error('product_detail')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Product Image</label>
                                    <input type="file" class="form-control input-style" id="inputPassword4"
                                        placeholder="Password" name="product_images" value={{old('product_images')}}>
                                        
                                    <div style="color: red">
                                        @error('product_images')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Product Price</label>
                                    <input type="file" class="form-control input-style" id="inputPassword4"
                                        placeholder="Product Price" name="price" value={{old('price')}}>
                                        
                                    <div style="color: red">
                                        @error('price')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Product Status</label>
                                    <select name="status" id="">
                                        <option value="Y">Active</option>
                                        <option value="N">Deactive</option>
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
                                                <option value={{$value->cagy_id}} @if ($value->cagy_id == old('cagy_id')) 
                                                    selected 
                                                @endif>{{$value->cagy_serv}}</option>
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
                            <button type="submit" class="btn btn-primary btn-style mt-4">Product Add</button>
                        </form>
                    </div>
                </div>
        </section>
    </div>
</div>
<!-- //content -->


<!--footer section start-->
@include('Admin.Menu.footer')
