@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 50px">




<form method="POST" action="{{ route('calculater.store') }}">
@csrf
<div class="form-group ">
   <label > <h4 class="mr-3" style="color:dodgerblue;">  Nnmber1:</h4> </label> 
    <input name="number1" id="num1" type="text" class="form-control" style="width: 150px; display: inline" />
    <p class="text-danger" id="msg_num1"></p>
</div>
<div class="form-group">
    <label  >  <h5 class="mr-3" style="color:blue;">  Operation:</h5>  </label>
    <select id="operation" name="operation">
        <option value="plus">Plus</option>
        <option value="minus">Minus</option>
        <option value="multiply">Multiply</option>
        <option value="divided by">Devide</option>
    </select>
</div>
<div class="form-group ">
    <label > <h4 class="mr-3" style="color:dodgerblue;">  Nnmber2:</h4> </label>
    <input name="number2" id="num2" type="text" class="form-control" style="width: 150px; display: inline" />

</div>
<div class="row mt-4">
<div class="col-md-12 text-left ml-5">
    <input name="submit" id="calculate" type="submit" value="Calculate" class="btn btn-primary" />
    
</div>
</div>
</form>


</div>
@endsection