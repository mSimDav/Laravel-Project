@extends('master')



@section('content')
<h1 style="text-align: center">Please sign in</h1>
<?php echo Form::open(array('action'=>'ProjectController@check')) ;?>
<div style="text-align: center">
<?php echo Form::label('unername','Username: ' ) ;?>
<?php echo Form::text('username',null,array('placeholder'=>'Username'))."<br/><br/>";?>


<?php echo Form::label('password', 'Password: ');?>
<?php echo Form::password('password',null,array('placeholder'=>'password'))."<br/><br/>";?>


<?php echo Form::submit('Sign In')."<br/><br/>";?>     
</div>

<?php echo Form::close();?>
@endsection