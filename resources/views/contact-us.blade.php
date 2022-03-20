@extends('base')

@section('meta')
 <meta name="author" content="ch">


@endsection

@section('title', 'Contact-us')



@section('css')

<style>



</style>
@endsection


@section('content')


<div class='container'>
<nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><a class='text-decoration-none' 
            href="{{ route('home', App::getLocale())}}">{{ __('the shop') }}</a></li>
            <li class="breadcrumb-item  active text-capitalize">{{ __('contact us') }}</li>
          </ol>
    </nav>

</div>

<div class='container  my-5 '>

<div class='row'>
    <div class='col col-md-6 offset-md-3 '>
        
      
        <form action="{{route('auth-register', App::getLocale())}}"
         method="POST" class="row g-3 p-0 p-md-2 bg-light rounded shadow ">

              @csrf
            <span class="fs-5 text-center d-block"> <i class="fas fa-lock fs-4 d-inline-block text-dark "></i> {{ __('contact us') }} </span>

        <div class=" row  g-3">
              
        <div class="col-12 col-md-12">
           <label for="first_name" class="form-label text-capitalize">{{ __('name') }}</label>
                <input type="text" value="{{ old('first_name') ?? '' }}" class="form-control
                        @error('first_name') 'is-invalid' @enderror "  name="first_name">
                        @error('first_name') <span class="form-text text-danger small">{{$message}}.</span>  @enderror
        </div>


       
        <div class="col-md-12">
           <label for="email" class="form-label text-capitalize">{{ __('email') }}</label>
            <input type="email"  style="direction: {{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}" value="{{ old('email') ?? '' }}" class="form-control
                @error('email') 'is-invalid' @enderror "  name="email">
                @error('email') <span class="form-text text-danger small">{{$message}}.</span>  @enderror
        </div>


        <div class="col-md-12">
           <label for="phone1" class="form-label text-capitalize">{{ __('phone') }}</label>
            <input type="text" value="{{ old('phone1') ?? '' }}" class="form-control
                @error('phone1') 'is-invalid' @enderror "  name="phone1">
                @error('phone1') <span class="form-text text-danger small">{{$message}}.</span> @enderror
        </div>

        <div class="col-md-12">
           <label for="address" class="form-label text-capitalize">{{ __('asking for') }}</label>
            <textarea rows="5" type="text" value="{{ old('address') ?? '' }}" class="form-control
                @error('address') 'is-invalid' @enderror "  name="address"></textarea>
                @error('address')<span class="form-text text-danger small">{{$message}}.</span>  @enderror
        </div>
        
       
        <div class="col-12 d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary  text-capitalize">{{ __('send') }} </button>
            <a href='{{ route('login', App::getLocale())}}' 
            class='text-decoration-none text-primary fs-6'> {{ __('') }} </a>
        </div>
    </div>
        </form>

        

    </div>

</div>


</div>

@endsection


@section('js')

<script>

</script>

@endsection