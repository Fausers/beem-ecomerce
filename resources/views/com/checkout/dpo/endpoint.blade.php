<?xml version="1.0" encoding="utf-8"?>
<API3G>
    <CompanyToken>9F416C11-127B-4DE2-AC7F-D5710E4C5E0A</CompanyToken>
    <Request>createToken</Request>
    <Transaction>
        <PaymentAmount>{{$cart->total_price}}</PaymentAmount>
        <PaymentCurrency>TZS</PaymentCurrency>
        <CompanyRef>ct-{{$cart->id}}</CompanyRef>
        <RedirectURL>{{url('/')}}/dpo/response/</RedirectURL>
        <BackURL>{{url('/')}}/dpo/response/</BackURL>
        <CompanyRefUnique>1</CompanyRefUnique>
        <PTL>5</PTL>
    </Transaction>

    <Services>
      <Service>
        <ServiceDescription>Products Payment</ServiceDescription>
        <ServiceType>5525</ServiceType>
        <ServiceDate>{{date('Y/m/d h:i',strtotime($cart->updated_at))}}</ServiceDate>
      </Service>
    </Services>
</API3G>
