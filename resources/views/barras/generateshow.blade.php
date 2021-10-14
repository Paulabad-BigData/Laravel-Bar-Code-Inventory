<!--
{!! DNS1D::getBarcodeSVG($barcode->code, 'C39', 1, 25, '#2A3239') !!}
<br><br><br>
<img src="data:image/png;base64,{{DMS2D::getBarcodePNG($barcode->code, 'QRCODE')}}" alt="barcode" />
<br>
{{$barcode->code}}
-->