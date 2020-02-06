<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Add online Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            #time {
                font-family: 'Nova Mono', monospace;
                text-align: center;
                text-shadow: 0px 0px 20px;
            }

            #date {
                font-family: 'Eczar', serif;
                text-align: center;
                text-shadow: 0px 0px 20px blue;
            }
            .card{
                margin-top:15%;
                background:white;
                width: 400px;
                height: 700px;
                color:#024d08;
                border:1px solid #d9dbd9;
            }
            .card-header{
                background:#9e9e9e;
            }
            h3{
                color:#3048ff;
            }
            #show_button:hover{
                cursor:pointer;
            }
            button{
                width:120px;
            }
            .card-body{
                text-align:left;
            }
            span{
                margin-left:10px;
            }
            #name{
                font-size:15px;
            }
            #name:hover{
                cursor:pointer;
            }
        </style>
    </head>
    <body>
        <center>
            <div class="card">
                <div class="card-header">
                    <h3>clock</h3>
                </div>
                <div class="card-body">
                    <br>
                    <br>
                    <br>
                    <br>
                    <center>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                NAMES
                            </button>
                            <div class="dropdown-menu">
                                @foreach($names as $name)
                                    <p id="name" onclick='controller(<?php echo $name ?>)'>
                                        {{
                                            $name->first_name
                                            ." "
                                            .$name->middle_name
                                            ." "
                                            .$name->last_name
                                        }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </center>
                    <br>
                    <div id="show_time">
                        <p id="time"></p>
                        <p id="date"></p>
                    </div>
                    <br>
                    <button 
                        id="clock_in"
                        type="button" 
                        class="btn btn-outline-info"
                    >
                        CLOCK IN
                    </button><span id="clocked_time">clock in time</span>
                    <br>
                    <button 
                        id="start"
                        type="button" 
                        class="btn btn-outline-info"
                    >
                        START
                    </button><span id="start_time">break start</span>
                    <br>
                    <button 
                        id="end"
                        type="button" 
                        class="btn btn-outline-info"
                    >
                        END
                    </button><span id="end_time">end break</span>
                    <br>
                    <button 
                        id="clock_out"
                        type="button" 
                        class="btn btn-outline-info"
                    >
                        CLOCK OUT
                    </button><span id="clocked_out_time">clock out time</span>
                </div>
            </div>
        </center>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
    </script>
    <script>
        var show = true;
        var time = null;
        var date = null;
        var clock_in = null;
        var clock_out = null;
        var names = [];

        window.setInterval(ut, 1000);

        // $('#show_time').hide();

        $('#clock_in').prop('disabled', true);
        $('#start').prop('disabled', true);
        $('#end').prop('disabled', true);
        $('#clock_out').prop('disabled', true);

        function ut() {
            var d = new Date();
            time = d.toLocaleTimeString();
            date = d.toLocaleDateString();
            $('#time').html(time);
            $('#date').html(date);
        }
        $('#clock_in').on('click',function(){
            $('#start').prop('disabled', false);
            $('#end').prop('disabled', false);
            $('#clock_out').prop('disabled', false);
            $('#clock_in').prop('disabled', true);
            $('#clocked_time').html(time)
        });
        $('#start').on('click',function(){
            $('#start').prop('disabled', true);
            $('#end').prop('disabled', false);
            $('#start_time').html(time)
        });
        $('#end').on('click',function(){
            $('#start').prop('disabled', false);
            $('#end').prop('disabled', true);
            $('#end_time').html(time)
        });
        $('#clock_out').on('click',function(){
            $('#clock_out').prop('disabled', true);
            $('#clock_in').prop('disabled', false);
            $('#clocked_out_time').html(time)
        });

        function apiRequest(apiurl, apidata, method) {
            $.ajax({
                url: apiurl,
                data: apidata,
                type: method,
                success: function (result) {
                    console.log(result);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        
        function controller(name){
            if(!names.includes(name)){
                $('#clock_in').prop('disabled', false);
            }else{
                $('#clock_in').prop('disabled', true);
            }
        }
    </script>
    </body>
</html>
