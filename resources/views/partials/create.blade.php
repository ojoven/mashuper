<form action="/mashups/add" method="post">
    <div class="span8">
        <div class="span8">
            <input id="concept1" name="concept1" class="form_concept simple_field" type="text" placeholder="Concept 1" value="" />
            <input id="concept2" name="concept2" class="form_concept simple_field" type="text" placeholder="Concept 2" value="" />
            <a id="to-load-new-concepts" class="btn btn-inverse" href="#"><i class="icon-white icon-refresh"></i></a>
        </div>
        <div class="span8">
            <textarea id="mashup" name="mashup" placeholder="What does the mix of the 2 concepts inspire you? Write it down!" class="simple_field" rows="3"></textarea>
            <p><input id="to-add-mashup" type="submit" class="btn btn-primary" value="Create mashup!"></p>
        </div>
    </div>
</form>

<script type="text/javascript">
    var numConcepts = 2;
</script>