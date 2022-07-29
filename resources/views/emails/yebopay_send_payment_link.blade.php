<!DOCTYPE html>
<html>
  <head>
    <title>Pay Now</title>
  </head>
  <body>
    <h2>Dear Customer,</h2>
    <br/>
    Your registered email id is {{$payment['payment_customer_email']}} 
    <br/>
    <br/>
    Statement Period: 17 June - 16 July<br/>
    <br/>
    Due on 28 July 2022
<br/><br/>
    Amount: R588.82<br/><br/>
    We strongly recommend that in order to make your payment experience hassle free
    <br/>
    <a href="{{url('/pay_due', $payment['payment_url'])}}" target="_blank">Pay Now</a>
    <br/><br/>
    Yours sincerely,
    <br/>    
    Smart Debt Collect
  </body>
</html>