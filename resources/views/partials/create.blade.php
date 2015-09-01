<form action="/mashups/add" method="post">
    <div class="span8">
        <div class="span8">
            <input id="concept_1" name="concept_1" class="form_concept simple_field" type="text" placeholder="Concept 1" value="<?php echo $concepts[0]['concept']; ?>" />
            <input id="concept_2" name="concept_2" class="form_concept simple_field" type="text" placeholder="Concept 2" value="<?php echo $concepts[1]['concept']; ?>" />
            <a id="to-load-new-concepts" class="btn btn-inverse" href="#"><i class="icon-white icon-refresh"></i></a>
        </div>
        <div class="span8">
            <textarea id="mashup" name="mashup" placeholder="What does the mix of the 2 concepts inspire you? Write it down!" class="simple_field" rows="3"></textarea>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p><input id="to-add-mashup" type="submit" class="btn btn-primary" value="Create mashup!"></p>
        </div>
    </div>
</form>

<script type="text/javascript">
    var numConcepts = 2;
</script>