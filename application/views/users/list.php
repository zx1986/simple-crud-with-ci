<table class="table table-hover">
    <tr>
        <th>編號</th>
        <th>帳號</th>
        <th>名稱</th>
        <th>郵件</th>
        <th>啓動</th>
    </tr>
    {{#users}}
    <tr>
        <td>{{id}}</td>
        <td>
            <a href="<?php echo base_url(); ?>users/read/{{id}}" data-toggle="modal" data-target="#main_modal">
                {{user_id}}
            </a>
        </td>
        <td>{{user_name}}</td>
        <td>{{user_mail}}</td>
        <td class="status">{{enabled}}</td>
        <td>
            <a href="<?php echo base_url(); ?>users/update/{{id}}" data-toggle="modal" data-target="#main_modal">
                <i class="icon-pencil icon-large"></i>
            </a>
        </td>
        <td>
            <a href="<?php echo base_url(); ?>users/delete/{{id}}">
                <i class="icon-remove icon-large"></i>
            </a>
        </td>
    </tr>
    {{/users}}
</table>
