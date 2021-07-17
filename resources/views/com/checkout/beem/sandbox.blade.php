<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sample</title>
     <link rel='stylesheet' href='https://checkout.beem.africa/dist/0.1_alpha/bpay.min.css'>
    <script src='https://checkout.beem.africa/dist/0.1_alpha/bpay.min.js'> </script>

</head>
<body>
    <div id='beem-button'
         data-price='1000'
         data-reference='LUXE-222444'
         data-mobile='255716406939'
         data-transaction="{{$code}}"
    >

    </div>
  <div id='beem-page' class='beem-page'></div>


</body>
    <script type="text/javascript">InitializeBeem();</script>
</html>


