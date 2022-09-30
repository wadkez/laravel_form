<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <title>Форма</title>
</head>
<body>

    <script>
        
    </script>

<section class="contact">
    <div class="container">
        <div class="contact__title title">
            <span>Свяжитесь</span> с нами
        </div>

        <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
            Вы успешно зарегистрировались!
          </div>

        {{-- ClientController errors[] --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="contact__inner">
            <div class="contact__form">
                <form action="{{route('validateForm')}}" method="post" name="form_reg" id="form_reg">
                    {{ csrf_field() }}
                    <div class="form-row row">
                        <div class="col-md-4 input__wrapper">
                            <input type="text" class="form-control" name="name" id="InputName" placeholder="Имя">
                            <span class="text-danger error-text name_error"></span>
                        </div>
                        <div class="col-md-4 input__wrapper">
                            <input type="tel" class="form-control" name="phone" id="InputPhone" placeholder="Телефон">
                            <span class="text-danger error-text phone_error"></span>
                        </div>
                        <div class="col-md-4 input__wrapper">
                            <input type="email" class="form-control" name="email" id="InputEmail" placeholder="Email">
                            <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="input__wrapper">
                            <textarea  class="form-control" name="address" id="InputAdress" placeholder="Адрес"></textarea>
                            <span class="text-danger error-text address_error"></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    
</body>
</html>