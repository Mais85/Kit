@if(session('message'))
<div class="row">
  <div class="col-md-12">
    <div class="c-alert c-alert--success u-mb-medium">
      <span class="c-alert__icon">
        <i class="feather icon-check"></i>
      </span>

      <div class="c-alert__content">
        <h4 class="c-alert__title">Uğurlu!</h4>
        <p>{!!session('message')!!}</p>
      </div>
    </div>
  </div>
</div>
@endif

@if ($errors->any())
<div class="row" style="margin-bottom: 15px;">
  <div class="col-md-12">
    <div class="c-alert c-alert--danger">
      <span class="c-alert__icon">
        <i class="feather icon-slash"></i>
      </span>
      <div class="c-alert__content">
        <h4 class="c-alert__title">Xəta!</h4>
        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endif