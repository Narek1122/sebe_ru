<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/reg_mod.css')}}">



  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
 @yield('style')
</head>

<body>
  <header>
    <section class="w-100">
      <div class="container align-items-center">

        <div class="logo" onclick="location.href='{{route('welcome')}}';">
          <img src="{{asset('storage/main-images/logo.png')}}">
        </div>
        <div class="filter-div">
          <div class="kat">
            <button type="button" class="btn1" data-bs-toggle="button" autocomplete="off">
              <img src="{{asset('storage/main-images/Group 1 (1).png')}}"> &nbsp &nbsp
              ??????????????</button>

          </div>

          <div id="inp-gr" class="input-group">
            <button class="btn btn-outline-secondary dropdown-toggle ??1" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">?????? ?????????????</button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action before</a></li>
              <li><a class="dropdown-item" href="#">Another action before</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
            <input type="text" class="form-control ipt" placeholder="?????????????? ???????????????? ????????????"
              aria-label="Text input with 2 dropdown buttons">
            <button type="button" data-bs-toggle="dropdown" aria-expanded="false">??????????</button>
            <ul class="dropdown-menu dropdown-menu-end">

            </ul>
          </div>
          <div class="fnc">
            <div class="icns"> <button type="button" class="btn btn-light"style="height: 48px; width: 77px;" onclick="location.href='{{route('orders')}}';">
              <img src="{{asset('storage/main-images/orders.png')}}" style="height:20px">????????????</button></div>
              <div class="icns"> <button type="button" class="btn btn-light"style="height: 48px; width: 77px;" onclick="location.href='{{route('shop_cart')}}';">
              <i class="fa fa-shopping-basket" style="font-size:20px; color:grey"></i><br />??????????????</button>
            </div>

             <!-- <div class="icns"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="height: 48px; width: 77px;" >
              <img src="../images/user.png" style="height:20px"><br /> ????????</button>

          </div> -->

          <div class="icns">
            @if(Auth::check())
              <form class="" action="{{route('logout')}}" method="post">
                @csrf
                  <input type="submit" name="" value="Logout">
              </form>
            @else
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" style="height: 48px; width: 77px;">
            <img src="{{asset('storage/main-images/user.png')}}" style="height:20px"><br />
            ????????
            </button>
            @endif


          </div>
        </div>

      </div>
    </section>
    <section>
      <div class="container align-items-center " id="hed1">
        <div>????????????</div>
        <div>???????????? ?? ??????????????????????</div>
        <div>??????????</div>
        <div>????????????????</div>
        <div>?????????????? ?? ????????!</div>
      </div>
    </section>
  </header>
  <section class="w-100">
    @yield('content')
  </section>
  <section>
    <div class="all_modals">
      <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <form method="POST" action="{{ route('login') }}">
                @csrf

              <h5 class="w-100 modal-title h4 text-center" id="exampleModalLabel">????????</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="input-group mb-3">
                <input type="text" class=" psw form-control @error('email') @error('login_error') is-invalid  @enderror @enderror" placeholder="?????????????? email ?????? ??????????????*" aria-label="Recipient's username"
                  aria-describedby="basic-addon2" name="email" >
                  @error('login_error')
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  @enderror
              </div>
            <div class="input-group mb-3">
                <input type="password" class="hideShowEye1 psw form-control  icn @error('password') @error('login_error') is-invalid @enderror @enderror" placeholder="?????????????? ????????????*"
                  aria-label="Recipient's username" aria-describedby="basic-addon2" name="password">
                <span class="input-group-text" id="basic-addon2" onclick="hideShowEye('hideShowEye1')"><img src="{{asset('storage/main-images/password.png')}}"></span>
                @error('login_error')
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @enderror
              </div>

              <div class="check">
                  <input type="checkbox" id="ve" name="remember" {{ old('remember') ? 'checked' : '' }}><label id="check1" for="vehicle1">??????????????????</label>

              </div>

              @if (Route::has('password.request'))
                                      <a id="end" href="{{ route('password.request') }}">
                                          ???????????????????????? ????????????
                                      </a>
                                  @endif
            <button id="inpg">??????????</button>

            <div  data-bs-dismiss="modal" aria-label="Close" ><u><button type="button" id="endd" class="btn btn-light" data-bs-toggle="modal" data-bs-target=
              "#exampleModalXl">???????? ?? ?????? ?????? ?????? ???????????????? ???????????????? ??????????????????????</button></u></div>
          </div>
          </form>

            </div>
          </div>
        </div>
        <div class="modal fade show" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true"
          role="dialog">

          <div class="modal-dialog modal-xl">
            <div class="modal-dialog">
              <div class="modal-content">
                <div id="header" class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">?????????? ????????????????????!</h5>
                  <button type="button" class="btn-close kk" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="" action="{{route('register')}}" method="post">
                  @csrf

                <div class="modal-body">
                  <div class="input-group mb-3">
                    <input type="text" class="@error('register_error') @error('email') is-invalid @enderror @enderror psw form-control" placeholder="?????????????? ?????? email*"
                      aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
                      @error('register_error')
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      @enderror
                  </div>
                  <!-- <div class="input-group mb-3">
                    <input type="text" class=" psw form-control" placeholder="?????????????? ?????? ??????????????*"
                      aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div> -->
                  <div class="input-group mb-3">
                    <input type="text" class="@error('name') is-invalid @enderror psw form-control" placeholder="??????*" aria-label="Recipient's username"
                      aria-describedby="basic-addon2" name="name">
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="input-group mb-3">
                    <input type="text" class="@error('surname') is-invalid @enderror psw form-control" placeholder="??????????????*" aria-label="Recipient's username"
                      aria-describedby="basic-addon2" name="surname">
                      @error('surname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="input-group mb-3">
                    <input type="text" class="@error('patronymic') is-invalid @enderror psw form-control" placeholder="????????????????" aria-label="Recipient's username"
                      aria-describedby="basic-addon2" name="patronymic">
                      @error('patronymic')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>


                  <div class="input-group mb-3">
                    <input type="password" class="hideShowEye2 @error('register_error') @error('password') is-invalid @enderror @enderror psw form-control icn" placeholder="?????????????? ????????????*"
                      aria-label="Recipient's username" aria-describedby="basic-addon2" name="password">
                    <span class="input-group-text" id="basic-addon2" onclick="hideShowEye('hideShowEye2')"><img src="{{asset('storage/main-images/password.png')}}"></span>
                    @error('register_error')
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @enderror
                  </div>


                   <div class="input-group mb-3">
                     <input type="password" class=" psw form-control  icn" placeholder="?????????????????? ????????????*"
                       aria-label="Recipient's username" aria-describedby="basic-addon2" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                   </div>


                  <div id="sel">?? ?????????????????????????? ????. ????????/???? <span id="sp" class="glyphicon glyphicon-play sp"></span></div>
                  <div id="rbs">

                    <input type="radio" id="r1" data-name="ip" name="gender" class="radio">
                    <label for="r1" class="r2">???????????????????????????? ??????????????????????????????</label>
                    <br />

                    <div class="addRegForm">

                    </div>
                    <input type="radio" id="r2" data-name="yl" class="r2" name="gender" class="radio">
                    <label for="r2" class="r2">?????????????????????? ????????</label>

                    <button id="inpg" type="submit">????????????????????????????????????</button>
                    <div id="end">?????????????? ???????????? ????????????????????????????????????, ?? ???????????????????? ???????? ????????????????????????????,
                      ???????????????????????? ?? ?????????????????? ??????????????(??????????)
                      ?? ?????? ???????????????? ???? ?????????????????? ?????????? ???????????????????????? ????????????
                    </div>
                  </div>


                </div>
                </form>

              </div>
            </div>
          </div>
          </div>
    </div>
  </section>
  <footer>
    <div id="parent1">
      <div class="n1">
        <span class="sp"><dark>??????????????????????</dark></span><br >
        <span>???????????????? ??????????</span><br >
        <span>?? ????????</span><br >
        <span>????????????????</span>
      </div>
      <div  class="n2">
        <span class="sp"><dark>????????????????????????????</dark></span><br >
        <span>???????????? ?????????????? ????????????????</span><br >
        <span>?????????????????????? ????????????????</span><br >
        <span>????????????????????????????</span><br >
        <span>?????????????????????? ??????????????????</span><br >
        <span>?????????????? ????????????????</span>
      </div>
      <div class="n1">
        <span class="sp">????????????</span><br >
        <span>?????? ?????????????? ??????????</span><br >
        <span>????????????????</span><br >
        <span>????????????</span><br >
        <span>????????????????</span><br >
        <span>????????????????????????</span>
      </div>
    </div>
    <section id="sect"><span id="pp1">2021</span></section>
  </footer>

  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/reg_mod.js')}}"></script>
  <script>

    @error('login_error')
    $(window).on('load', function () {
            $('#exampleModal').modal('show');
        });
    @enderror

    @error('register_error')
    $(window).on('load', function () {
              $('#exampleModalXl').modal('show');
        });
    @enderror


    function hideShowEye(cl){

      let atType = 'password';
      atType = $('.' + cl).attr('type') == 'password' ? 'text' : 'password';
      $('.' + cl).attr('type',atType);

    }

  </script>
  @yield('script')
</body>

</html>
