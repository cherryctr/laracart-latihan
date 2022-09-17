
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Masukan Pilihan</h4>
            </div>
            
                <div class="modal-body">
                <form method="POST" action="{{ url('cart') }}">
                {{ csrf_field()}}
                <input type="hidden" name="id" value="{{$item->id}}">
                <input type="hidden" name="name" value="{{$item->prdname}}">
                <input type="hidden" name="price" value="{{$item->prdprice}}">
                <input type="hidden" name="thumb" value="{{$item->prdthumb}}">                	

                <div class="form-group">
                <label for="exampleInputEmail1">Pilih Warna</label>
                    <select class="form-control" name="warna" class="attr2">
                                    <option value="">PILIH WARNA</option>
                                    <option value="biru">Biru</option>
                                    <option value="merah muda">Merah muda</option>
                                    
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Size</label>
                    <select class="form-control" name="size" class="attr2">
                                    <option value="">PILIH SIZE</option>
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <!-- <input type="number" class="form-control" placeholder="Text input Qty"> -->
                    <input type="text" class="form-control" name="quantity" id="exampleInputEmail1" placeholder="Qty">

                </div>
            
            
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    