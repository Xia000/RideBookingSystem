<!--
 -
 - @Name : TaxiBookingMap/index.html
 - @Version : 1.0
 - @Programmer : Max
 - @Date : 2019-07-09
 - @Released under : https://github.com/BaseMax/TaxiBookingMap/blob/master/LICENSE
 - @Repository : https://github.com/BaseMax/TaxiBookingMap
 -
-->
<!DOCTYPE html>
<html>

<head>
    <title>Booking Taxi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

</head>

<body>

<div class="container">
    <div class="row">
        <!-- left col -->
        <div id="form" class="form-horizontal col-sm-8">
            <div class="form-group">
                <b><label for="one-way">Type of Ride</label></b>
                <select class="form-control" id="ride-type-input">
                    <option value="One Way" selected>One Way</option>
                    <option value="return" >Return</option>
                    <option value="hourly">Hourly</option>
                </select>
            </div>
            <div class="form-group">
                <b><label for="from-input">From</label></b>
                <input type="search" class="form-control" id="from-input" placeholder="From">
                <!-- aria-describedby -->
            </div>
            <div class="form-group">
                <b><label for="to-input">To</label></b>
                <input type="search" class="form-control" id="to-input" placeholder="To">
            </div>
            <div class="form-group">
                <b><label for="date-input">Date</label></b>
                <input type="date" class="form-control" id="date-input" placeholder="">
            </div>
            <div class="form-group">
                <b><label for="time-input">Time</label></b>
                <input type="time" class="form-control" id="time-input" value="" placeholder="">
            </div>
            <div class="form-group">
                <b><label for="to-input">Passenger</label></b>
                <select  class="form-control" id="passenger-input">
                    <option value="1">1 Passenger</option>
                    <option value="2">2 Passenger</option>
                    <option value="3">3 Passenger</option>
                </select>
            </div>
            <button id="submit" type="submit" class="btn btn-primary">Booking</button>
        </div>
        <!-- right col -->
        <div id="form" class="form-horizontal col-sm-4">
            <br>

            <div class="form-group">
                <b><label for="to-input">Distance</label></b>
                <label id="value-distance" class="form-text">Press on the Booking button to calculate...</label>

            </div>
            <div class="form-group">
                <b><label for="to-type">Type of Ride</label></b>
                <label id="value-type-ride" class="form-text">Press on the Booking button</label>
            </div>
            <div class="form-group">
                <b><label for="to-passenger">Passenger</label></b>
                <label id="value-passenger" class="form-text">Press on the Booking button</label>
            </div>
            <div class="form-group">
                <b><label for="to-input">Price per KM</label></b>
                <label id="price" class="form-text">5 USD</label>
            </div>
            <div class="form-group">
                <b><label for="date-input">Date</label></b>
                <label id="value-date" for="value-date" class="form-text">Press on the Booking button</label>
            </div>
            <div class="form-group">
                <b><label for="time-input">Time</label></b>
                <label id="value-time" for="value-time" class="form-text">Press on the Booking button</label>
            </div>
            <div class="form-group">
                <b><label for="to-input">Total Price</label></b>
                <label id="value-price" class="form-text">Press on the Booking button to calculate...</label>
            </div>
        </div>
    </div>
</div>
<div id="map"></div>

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQLs1BjBeJ-FIvr_SZbIsCQlb75OFMlFs&libraries=places&callback=initAutocomplete" async defer></script>
</body>

</html>
