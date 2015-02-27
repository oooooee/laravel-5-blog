{{ Form::open() }}

{{ Form::text('name', @$name) }}

{{ Form::password('password') }}

{{ Form::submit('Send') }}

<?php echo Form::close(); ?>