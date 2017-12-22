@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="form-area">
			<form role="form" method="POST" action="{{ route('question::store')}}">
				{{ csrf_field() }}
				<div class="form-group">
			        <label for="question">Question</label>
			        <textarea class="form-control" name="question"></textarea>
			    </div>
                <div class="option-group">
			        <div class="form-group">    
   			            <label for="option-one">Option-1</label>
			            <input class="form-control" type="text" id="option-one" name="option-one"/>
                    </div>

                    <div class="form-group">                
			            <label for="image-option-one">Image-1</label>
			            <input class="form-control" type="file" id="image-option-one" name="image-option-one">
			        </div>   
                
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="answer-one">
                            Answer?
                        </label>
                    </div>
                </div>
                <!--
  				<div class="form-group">                
			        <label for="option-two">Option-2</label>
			        <input class="form-control" type="text" id="option-two" name="option-two"/>
                </div>

                <div class="form-group">                
			        <label for="image-option-two">Image-2</label>
			        <input class="form-control" type="file" id="image-option-two" name="image-option-two">
			    </div>   

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="answer-two">
                        Answer?
                    </label>
                </div>


				<div class="form-group">
			        <label for="option-three">Option-3</label>
			        <input class="form-control" type="text" id="option-three" name="option-three"/>
                </div>

                <div class="form-group">                
			        <label for="image-option-three">Image-3</label>
			        <input class="form-control" type="file" id="image-option-three" name="image-option-three">
			    </div>   

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="answer-three">
                        Answer?
                    </label>
                </div>

                <div class="form-group">
			        <label for="option-four">Option-4</label>
			        <input class="form-control" type="text" id="option-four" name="option-four"/>
                </div>

                <div class="form-group">                
			        <label for="image-option-four">Image-4</label>
			        <input class="form-control" type="file" id="image-option-four" name="image-option-four">
			    </div>   

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="answer-four">
                        Answer?
                    </label>
                </div>                

				<div class="form-group">                
			        <label for="option-five">Option-5</label>
			        <input class="form-control" type="text" id="option-five" name="option-five"/>
                </div>

                <div class="form-group">                
			        <label for="image-option-five">Image-5</label>
			        <input class="form-control" type="file" id="image-option-five" name="image-option-five">
			    </div>   

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="answer-five">
                        Answer?
                    </label>
                </div>

				<div class="form-group">
			        <label for="option-six">Option-6</label>
			        <input class="form-control" type="text" id="option-six" name="option-six"/>
                </div>

                <div class="form-group">                
			        <label for="image-option-six">Image-6</label>
			        <input class="form-control" type="file" id="image-option-six" name="image-option-six">
			    </div>   

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="answer-six">
                        Answer?
                    </label>
                </div>
                -->
				<div class="form-group">
			        <label for="detail-answer">Detail Answer</label>
			        <textarea class="form-control" name="detail-answer"></textarea>
			    </div>

				<div class="form-group">                
			        <label for="detail-answer-image">Detail Answer Image</label>
			        <input class="form-control" type="file" id="detail-answer-image" name="detail-answer-image">
			    </div>

				<div class="form-group">
			        <label for="short-answer">Short Answer</label>
			        <textarea class="form-control" name="short-answer"></textarea>
			    </div>

				<div class="form-group">                
			        <label for="detail-answer-image">Short Answer Image</label>
			        <input class="form-control" type="file" id="short-answer-image" name="short-answer-image">
			    </div>
			    <div class="form-group">
			        <button class="btn" type="submit" id="save" name="save">save</button>
                </div>

		    </form>
		    <span class="input-group-btn">
                <button class="btn btn-success btn-add" type="button">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </span>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {

$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();
      
        var controlForm = $('.form-area form:first'),
            currentEntry = $(this).parents('.option-group:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
            console.log(currentEntry); 
            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});
});
</script>

@stop

