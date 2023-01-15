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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
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
            <div>
                <b><label for="distance" id="add-input"></label></b>
            </div>
            <button id="submit" type="submit" class="btn btn-primary">Booking</button>
            <button id="reserve" class="btn btn-primary" onclick="reserv()" style="display: none">Book Now</button>
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
<div id="map" style="margin-top: 50px"></div>

<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
