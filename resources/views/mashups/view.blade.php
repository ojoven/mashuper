@extends('layouts.layout')

@section('title', 'View Mashup')

@section('content')

<div class="separator">&nbsp;</div>
<h1>Mashup</h1>

<div class="circles-container">
    <div class="concept-circle">
        <div><?php echo "Concept 1"; ?></div>
    </div>
    <div class="plus-sign">+</div>
    <div class="concept-circle">
        <div><?php echo "Concept 2"; ?></div>
    </div>
</div>

<div class="mashup-text">
    <?php echo "Mashup"; ?>
</div>

<div class="separator">&nbsp;</div>
<div class="span8">
    <a href="/mashups/create" class="btn btn-info">Create mashup &raquo;</a>
    <a href="/mashups" class="btn btn-primary">View next mashup &raquo;</a>
</div>

@stop