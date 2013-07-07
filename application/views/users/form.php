<?php echo validation_errors(); ?>

<form action="<?php echo base_url(); ?>{{form_action}}" class="form-horizontal" method="POST" accept-charset="utf-8">

<div class="control-group">
    <label class="control-label" for="user_id">帳號</label>
    <div class="controls">
        <input type="text" name="user_id"  value="{{user_id}}" placeholder="User ID" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="user_name">名稱</label>
    <div class="controls">
        <input type="text" name="user_name"  value="{{user_name}}" placeholder="User Name" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="user_mail">郵件</label>
    <div class="controls">
        <input type="text" name="user_mail"  value="{{user_mail}}" placeholder="User Mail" />
    </div>
</div>

<div class="control-group">
    <label class="control-label">啓動</label>
    <div class="controls alert alert-info switch" style="width:100px">
        <input id="enabled_on" name="enabled" type="radio" value="1" {{#status}}checked{{/status}} />
        <label for="enabled_on" onclick="">開啓</label>

        <input id="enabled_off" name="enabled" type="radio" value="0" {{^status}}checked{{/status}} />
        <label for="enabled_off" onclick="">關閉</label>
        
        <span class="slide-button btn"></span>
    </div>
</div>

<div class="pull-right">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" type="submit">Save</button>
</div>

</form>
