@extends('principal')
@section('contenidochido')
<template v-if="menu==0">
    <inicio></inicio>
</template>
<template v-if="menu==1">
    <venta></venta>
</template>
<template v-if="menu==2">
    <compra></compra>
</template>
<template v-if="menu==3">
    <h1>Que mas ve</h1>
</template>
@endsection