<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bilet Al</title>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <style>
          * {margin: 0; padding: 0;}
            html, body {

                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }


            .img-overlay{

                position: absolute;
                background-color: rgba(0,0,0,0.5);
                top:0;
                bottom:0;
                height: 100%;
                width: 100%;

            }
         
            .img {

                background-image:url('img1.jpg');
                background-size: cover;
                background-position: center center;
                position: relative;
                top:0;
                bottom: 0;
                height: 100vh;;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;

            }
            .card-search{
                background-color: rgba(0, 0, 0 ,0.4);
                 border-radius: 25px;
                 padding: 5px;
            }

            .card-buy{

                background-color: rgba(255 , 255, 255 ,0.8);

            }


            #list{

                background-color: rgba(255 , 255, 255 ,0.8);

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
           ///
          
        </style>
    </head>
    <body>

<div class="img">
    <div class="img-overlay">
    <div class="flex-center position-ref full-height">
        <div class="top-right links">   
          @if(Auth::guard('admin')->check())
          
            <a href="{{route('admin.dashboard')}}">Dashboard</a>
          
          @elseif(Auth::guard('web')->check())
            
            <a href="{{ url('/home')}}">Home </a>
            <a href="{{  route('user.logout') }}"> Logout </a>

          @elseif(Auth::guest() )
          
           <a href="{{ route('admin.login') }}">Admin Login</a>
           <a href="{{ route('login') }}">Login</a>
           <a href="{{ route('register') }}">Register</a>
          
          @endif 
        </div>      


<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-search">
                <div class="card-body">
                    <form id="search-form">
                      @csrf
                        <div class="form-row">
                            <div class="col-md-3 mr-3">
                                <select class="form-control" name="liman_adı">
                                    @foreach($havalimanları as $havalimanı)
                                    <option id="{{$havalimanı->liman_id}}">{{$havalimanı->liman_adı}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mr-3">
                                <select class="form-control" name="hedef_liman_adı">
                                   
                                   @foreach($havalimanları as $havalimanı)
                                    <option id="{{$havalimanı->liman_id}}">{{$havalimanı->liman_adı}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mr-3">
                                <input type="text" id="datepicker" class="form-control" name="tarih">
                            </div>
                            <div class="col  mr-3">
                                 <button type="submit" class="btn btn-danger" id="home-search"  >
                                    {{ __('Ara') }}
                                </button>       
                             </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-3"></div>
                <div class="col-md-auto">
                    <div class="card tablo" id="list">
                        <div class="card-body">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                    <th>Nereden</th>
                                    <th>Nereye</th>
                                    <th>Tarih</th>
                                    </tr>
                                </thead>
                                <tbody id="table" show="true">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>           
                </div>

                <div class="mt-3"></div>
                    <div class="col-md-auto form">
                        <div class="card-buy">
                            <div class="card-body">
                                <form id="form" show="true" class="buy-form">
                                  @csrf <!-- progressbar -->
                                  @if(Auth::check())
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                         <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{Auth::user()->email}}">    
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text"  readonly class="form-control-plaintext" userId="{{Auth::user()->id}}" id="staticName" value="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputÜcret">Ücret</label>
                                        <input type="text"  readonly class="form-control-plaintext" id="ücret1" value="">
                                      </div>
                                  @elseif(!Auth::check())
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="name" class="form-control" id="exampleInputName" placeholder="Enter name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputÜcret">Ücret</label>
                                        <input type="text"  readonly class="form-control-plaintext" id="ücret2" value="">
                                      </div>
                                    @endif 
                                    <button  class="btn btn-danger" id="satın-al"> Satın Al</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>
        
<script>
    $( function() {
        $('#datepicker').datepicker();
}); 
</script>

<script>
   
var a;

    $("#list").hide();
    $(".form").hide();

 $(document).ready(function() {   

    $("#home-search").click(function(e) { 
   
        //console.log($("#form").attr('show'));
        if($("#table").attr('show')=='true' && $("#form").attr('show')==='true')
        {
            $( "#list" ).fadeToggle( "slow" );
            $("#table").attr('show','true');   
        }
      
        if($("#form").attr('show')=='false')
        {
            $( ".form" ).fadeToggle( "slow" );
            $( "#list" ).fadeToggle( "slow" );
            $("#form").attr('show','true');        
        }

        e.preventDefault();

            $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:'/search',
                    type: 'post',
                    data : $('#search-form').serialize(),
                    success: function(update) {
             
                    var response =JSON.parse(update);

                     
                    console.log(response)

                    if(response.status)
                    {   
                        $('#table').html('');
                        $.each(response.data, function (key, val) {
                
                        $('#table').append("<tr><td>"+val.liman_adi+"</td><td>"+val.hedef_liman_adi+"</td><td>"+ val.baslangıc_tarihi+"</td><td><button class='btn btn-danger BUY' id='sefer' sefer-id="+val.sefer_id+" onclick='Buy("+val.sefer_id+");return false;' >Satın Al</button> </td></tr> "); 
                        

                         });
                    }
                    else
                    {
                      $('#table').html('<div class="badge badge-warning p-2 col-12">Sefer Bulunmamaktadır.</div>');
                    } 


                    $.each(response.data, function (key, val) {

                        $("#ücret1").attr('value',val.ücret);  $("#ücret2").attr('value',val.ücret);
                            
                            var name=$("#staticName").attr('userId')

                            var ucret=$("#ücret1").attr('value')  
                            
                            var sefer=$("#sefer").attr('sefer-id')

                           
                           myData={}
                            myData["name"]=name;
                            myData["ucret"]=ucret;
                            myData["sefer"]=sefer;


                            var token;
                            token='{{ csrf_token() }}';
                          

                            $("#satın-al").click(function(event) {
                        
                                event.preventDefault();
                             
                                

                                $.ajax({   
                                       
                                        headers: {
                                        'X-CSRF-TOKEN': token
                                        },
                                        url: '/buy',
                                        type: 'post',
                                        data: {object : myData},
                                        //contentType: "application/json; charset=utf-8",
                                        dataType: "json",
          
                                        success: function(response){
                                             
                                        console.log(response);
                                           

                                        }
                            });        
                        });
                    });
                }
            });
        });    
   });

        function Buy(id)
        {
            if($("#form").attr('show')==='true')
              {    
                  $( ".form" ).fadeToggle( "slow" );
                  $( ".form form" ).attr('sefer-id', id);
                  $("#form").attr('show','false');
              }
        }
</script>


















 