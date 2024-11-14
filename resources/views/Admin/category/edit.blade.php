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
                        <form action="{{ route('category.update', $edit->cagy_id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="input__label">Name</label>
                                    <input type="text" class="form-control input-style" id="inputEmail4"
                                        placeholder="Email" name="cagy_name" value={{$edit->cagy_serv}} >
                                        <div style="color: red">
                                            @error('cagy_name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="input__label">Detail</label>
                                    <input type="text" class="form-control input-style" id="inputPassword4"
                                        placeholder="Password" name="cagy_detail" value={{$edit->detail_cagy}}>
                                        
                                    <div style="color: red">
                                        @error('cagy_detail')
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