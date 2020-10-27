@extends ('user.main')
@section('content')

<section class="contact-section spad">
        <div class="container">
        <form action="">
            <div class="row">
            
                <div class="col-lg-5 order-1 order-lg-2">
                                    <div class="product-show-option">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                 <label for="fir">SIZE/FORMAT<span>*</span></label>
                                                <div class="select-option">
                                                    <select class="sorting">
                                                        <option value="25x40" dir="25 x 40 cm" selected>25 x 40 cm</option>
                                                        <option value="60x160" dir=">60 x 160 cm" >60 x 160 cm</option>
                                                        <option value="80x180" dir="80 x 180 cm" >80 x 180 cm</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                        <label for="fir">QUANTITY<span>*</span></label>
                            <div class="select-option">
                                <select class="sorting">
                                    <option value="1" selected>1 Pieces</option>
                                    <option value="5" >5 Pieces</option>
                                    <option value="10" >10 Pieces</option>
                                    <option value="50" >50 Pieces</option>
                                    <option value="100" >100 Pieces</option>
                                    <option value="fqbtn">Other Quantity</option>
                                </select>
                            </div>
                </div>
            </div>
            <div class="row">
            <label for="fir">UPLOAD FILE DESIGN<span>*</span></label>
                <div class="custom-file mb-3">
                 <input type="file" class="custom-file-input" id="customFile" name="filename">
                <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>    
             </div>
            <center> <a href="#" class="primary-btn">Shop Now</a></center>
            </form>
        </div>
        
</section>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endsection