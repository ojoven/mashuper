@extends('layouts.layout')

@section('title', 'Home')

@section('content')

<div class="separator">&nbsp;</div>
<h1>Échale tomate a la canción</h1>
<h3>La mezcla de conceptos como método creativo</h3>
<p>Esta web acompaña a la charla del mismo nombre realizada por <a href="http://ojoven.es" target="_blank">Mikel Torres Ugarte</a> para <a href="http://tedxamara.com" target="_blank">TEDxAmara</a>, que se celebra en Donostia el 15 de Junio de 2013. Así pues, el objetivo de esta web es servir como espacio de práctica de la "mezcla de conceptos".</p>
<p><strong>Con los 2 conceptos que se generan de manera aleatoria, ¿qué se te viene a la cabeza?</strong></p>
<p>Si necesitas inspiración, guía, o quieres valorar y compartir otras, <a href="/mashups">echa un vistazo a las mezclas creadas &raquo;</a>

<div class="line-separator"></div>

@include('partials.create')

@stop