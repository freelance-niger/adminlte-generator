<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}<span class="required">*</span>
    {!! Form::text('name', null, ['id'=>'name','class' => 'form-control','required']) !!}
</div>
<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}<span class="required">*</span>
    {!! Form::email('email', null, ['id'=>'email','class' => 'form-control','required']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('password', 'New Password:') !!}
    <input class="form-control input-group__addon" id="pfNewPassword" type="password"
           name="password">
</div>
<div class="form-group col-sm-3">
    {!! Form::label('password_confirmation', 'Confirm Password:') !!}
    <input class="form-control input-group__addon" id="pfNewConfirmPassword" type="password"
           name="password_confirmation">
</div>
<!-- Phone Field -->
<div class="form-group col-sm-3">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::number('phone', null, ['id'=>'phone','class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-3 ">
    {!! Form::label('photo', 'Photo') !!}
    <div class="input-group-btn">
        <div class="col-sm-1" style="width: 11.333333%;">
            <span class="btn btn-primary btn-file" style="margin-right: 5px;margin-left: -17px;">
                <div id="lb">Upload</div>
                {!! Form::file('photo',['id'=>'editUserImage']) !!}
            </span>
        </div>
    </div>
    <div class="text-right" style="margin-top: -55px; margin-right: 170px;">
        <img id='edit_preview_photos' class="img-thumbnail" width="100px;"
             src="{{asset($user->image_path)}}"/>
    </div>
</div>
<div class="form-group col-sm-12">
    {!! Form::label('role_id', 'Role') !!} <span class="required">*</span>
    {!! Form::select('role_ids[]',$roles, $selectedRoles, ['class' => 'form-control','id'=>'editRoleId','multiple'=>true,'required']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>