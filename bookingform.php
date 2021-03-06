<link rel="stylesheet" href="./css/style.css">


<div class="row mt-3">
    <div class="col-12" id="header-text" style="text-align: center;">
        <h1>GET TOGETHER
            WITH GEORGE</h1>
        <p id="header-text">Over the years, we've hosted a variety of events. From private birthday parties, PR-events and exclusive product launches, to corporate events, luncheons and walking dinners for large groups. So whether you want to celebrate in style or have a business meeting that is anything but ordinary,
            George will offer you just that – and more.
        <p>
    </div>
</div>
<div class="row" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="col-6" id="booking-form" style="padding-bottom: 20px; padding-top: 20px;">
        <img src="./img/dewallen.jpg" alt="foto de wallen" class="w-75">
    </div>
    <div class="col-6">
        <p id="header-text" style="text-align: center">Our venues come in various sizes, each with their own style. With great food & beverages options, top-notch facilities and an amazing crew that is highly experienced.f</p>
        <div class="card" style="width: 18rem; margin: auto;">
            <div class="card-body">
                <h5 class="card-title">Learn more about us</h5>
                <p class="card-text">if you want to learn more about our franchise read here</p>
                <a href="./index.php?content=about-us" class="btn btn-dark">about us</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-6 " id="booking-form">
        <h2>
            Contact us about planning an event:
        </h2>
        <div class="container mt-5">
            <div class="row">
                <div class="col-6">
                    <form action="./index.php?content=booking_form_script" method="post">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="inputFirstName">first name:</label>
                                    <input name="FirstName" type="text" class="form-control" id="inputFirstName" aria-describedby="firstNameHelp">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="inputInfix">infix:</label>
                                    <input name="Infix" type="text" class="form-control" id="inputInfix" aria-describedby="InfixHelp">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="inputLastName">last name:</label>
                                    <input name="LastName" type="text" class="form-control" id="inputLastName" aria-describedby="lastNameHelp">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhoneNumber">phone number:</label>
                            <input name="PhoneNumber" type="phone" class="form-control" id="inputPhoneNumber" aria-describedby="phoneNumberHelp" pattern="06[0-9]{8}" placeholder="0612345678">
                        </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <input name="Message" type="text" class="form-control" id="inputMessage" aria-describedby="messageHelp" style="height: 125px;">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block">send</button>
            </div>
        </div>
    </div>
    <div class="col-6" style="text-align: center;">
        <img src="./img/dewallen2.jpg" alt="" class="w-75">
    </div>
</div>
<div class="row" style="padding-top: 50px;">
    <div class="col-6" style="text-align: center; border-right-style: solid;">
        <img src="./img/dewallen3.jpg" alt="" class="w-75">
    </div>
    <div class="col-6" style="text-align: center; padding-top: 50px;">
        <form action="./index.php?content=booking_form_script" method="post">
            <h2>Leave your phone number and we will contact you</h2>
            <div class="form-group">
                <label for="inputPhoneNumber">phone number:</label>
                <input name="PhoneNumber" type="phone" class="form-control" id="inputPhoneNumber" aria-describedby="phoneNumberHelp" pattern="06[0-9]{8}" placeholder="0612345678">
            </div>
        </form>
        <button type="submit" class="btn btn-dark btn-lg btn-block">send</button>
    </div>
</div>