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
                                        <option value="29.7x42.0" dir="A3 SHEET" selected>A3 SHEET</option>
                                        <option value="21.0x29.7" dir="A4 SHEET" >A4 SHEET</option>
                                        <option value="custom" >Custom Format</option>
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
                                                <option value="100" selected>100 Pieces</option>
                                                <option value="200" >200 Pieces</option>
                                                <option value="300" >300 Pieces</option>
                                                <option value="400" >400 Pieces</option>
                                                <option value="500" >1 Rim</option>
                                                <option value="fqbtn">Other Quantity</option>
                                            </select>
                                        </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-5 order-1 order-lg-2">
                                    <label for="fir">MATERIAL<span>*</span></label>
                                        <div class="select-option">
                                            <select class="sorting">
                                            <option value="5" dir="210 GSM GLOSSY PAPER" selected>210 GSM GLOSSY PAPER</option>
                                            <option value="6" dir="230 GSM GLOSSY PAPER" >230 GSM GLOSSY PAPER</option>
                                            <option value="7" dir="260 GSM GLOSSY PAPER" >260 GSM GLOSSY PAPER</option>
                                            <option value="8" dir="310 GSM GLOSSY PAPER" >310 GSM GLOSSY PAPER</option>
                                            </select>
                                        </div>
            </div>
            </div>
            <br>
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