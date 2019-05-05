<script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>

<script>
    $(function()
    {
        $(document).on('click', '.btn-add', function(e)
        {
            e.preventDefault();

            var controlForm = $('.controls form:first'),
                currentEntry = $(this).parents('.voca:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);

            newEntry.find('input').val('');
            controlForm.find('.btn-add:not(:last)')
                .removeClass('btn-default').addClass('btn-danger')
                .removeClass('btn-add').addClass('btn-remove')
                
                .html('<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>  ');
        }).on('click', '.btn-remove', function(e)
        {
            $(this).parents('.voca:first').remove();

            e.preventDefault();
            return false;
        });
    });
</script>