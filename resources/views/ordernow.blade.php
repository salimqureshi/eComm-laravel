@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-4 col-sm-offset-4">
        <table class="table">            
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{ $total }}</td>
              </tr>
              <tr>                
                <td>Tax</td>
                <td>0 Rupees</td>
              </tr>
              <tr>
                <td>Delivery Charge</td>
                <td>100 Rupees</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{ $total+100 }}</td>
              </tr>
            </tbody>
          </table>
          <form>
            <div class="form-group">
              <textarea class="form-control" name="address" placeholder="Address"></textarea>             
            </div>
            <div class="form-group">
              <label for="">Payment Method</label>
              <p><input type="radio" name="payment"> <span>Online Payment</span></p>
              <p><input type="radio" name="payment"> <span>EMI Payment</span></p>
              <p><input type="radio" name="payment"> <span>Payment on Delivery</span></p>
            </div>           
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
    </div>

</div>
@endsection