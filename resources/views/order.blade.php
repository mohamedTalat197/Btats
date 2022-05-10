<div class="be-order">
        <i class="fa-solid fa-bowl-food fa-shake"></i>
        <i class="fa-solid fa-carrot fa-bounce"></i>
        <i class="fa-solid fa-fire fa-beat-fade"></i>
    </div>
    <!-- <form action= "" method = "" enctype = "" ></form> -->
    <form action= "{{url('/order')}}" method = "post" enctype = "multipart/form-data"  class="order" id="order">
        @csrf
        <label for="name">Your Name</label>
        <input type="text" placeholder="Name" name="name" class="input" required="">
        <label for="num">Your number</label>
        <input type="text" placeholder="Your Number" name="number" class="input" required="">
        <label for="add">Your address</label>
        <input type="text" placeholder="Your Address" name="address" class="input" required="">
        <label for="the-order">Please Write Your Order</label>
        <input type="text" name="order" class="input-order" required="">
        <!-- -----ordr button----- -->
        <button type="submit" class="btn open-pop" onclick="openPopup()">Order</button>
        <div class="popup" id="popup">
            <img src="./images/404-tick.png">
            <h2>Thank You!</h2>
            <p>Your order has been successfully submitted. Thanks!</p>
            <button type="button open-popup" onclick="closePopup()">OK </button>
        </div>
    </form>