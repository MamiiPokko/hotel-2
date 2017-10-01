@extends('layouts.app')

@section('content')
<style type="text/css">
.center {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
}
</style>
    

<div class="center">
<div class="room">
    <div class="room-image-holder">
        <img src="images/hotel1.jpg">
            <div class="room-gallery-link"><i class="ficon ficon-20 ficon-map-attraction"></div>
        </div>
            <div class="room-info">
                <div class="room-name-with-ellipsis">
                    <div>แกรนด์ จากุซซี่ ดีลักซ์ (Grand Jacuzzi Deluxe)</div>
                </div>
                <div class="room-amenities">
                    <ul class="room-amenities-list">
                        <li class="room-amenitylist-item">
                            <i class="ficon ficon-20 ficon-views"></i>
                            <span>วิว: ภูเขา</span>
                        </li>
                        <li class="room-amenitylist-item">
                            <i class="ficon ficon-20 ficon-sqm"></i>
                            <span>50 ม²/538 ฟุต²</span>
                        </li>
                            <li class="room-amenitylist-item">
                                <i class="ficon ficon-20 ficon-bed"></i>
                                <span>1 เตียงใหญ่</span>
                            </li>
                        </ul>
                        <div class="room-prompt-for-dates">
                            <a href="{{URL('/booking')}}">
                        <button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Booking</button></a>
                        </div>
                    </div>
                </div>
            </div>
</div>


 
@endsection 