$(document).ready(function () {
    $('.half-control').parent().addClass('semi-control');

    //NEW TODO_list

    $('.add_todo').click(function () {
        var todos = $('.todos').val();
        var list = $('.todos_list');

        $.ajax({
            type: "POST",
            url: "/ajaxdatabinding/todos",
            dataType: "json",
            data: todos,
            asynx:true,
            success: function(response) {
                list.append('<li data-id="'+ response.id +'">' + response.data + '</li>');
            }
        });
        $('.todos').val('');
    });

    $('.post_btn').click(function () {
        var post = $('.post_content').val();
        var list = $('.list_of_posts');
        $.ajax({
            type: "POST",
            url: "/ajaxdatabinding/posts",
            dataType: "json",
            data: post,
            asynx:true,
            success: function(response) {
                list.prepend('<div class="one-post">' +
                    '<h3><i class="icon-user"></i> '+ response.name +'</h3><br/>' +
                    '<p>' + response.data + '</p>' +
                    '<span class="label label-default">'+ response.date +'</span>' +
                    '</div>');
            }
        });
        $('.post_content').val('');
    });


    $('.todos_list li').click(function () {
        var id = $(this).attr('data-id');
        $(this).addClass('doo');

        $.ajax({
            type: "POST",
            url: "/ajaxdatabinding/todos/del",
            dataType: "json",
            data: id,
            asynx:true,
            success: function(response) {}
        });
    });

    $('.post-del').click(function () {
        var id = $(this).attr('data-id');

        var parent = $(this).parent();
        $.ajax({
            type: "POST",
            url: "/ajaxdatabinding/posts/del",
            dataType: "json",
            data: id,
            asynx:true,
            success: function(response) {
                if(response.del == true){
                    //alert('moze');
                    parent.hide();
                } else {
                    alert('Ne mozete obrisati objavu koju niste postavili.');
                }
            }
        });
    });

    $('.is_called').change(function () {
        var id = $(this).attr('data-id');
        var cb = $(this);
        $.ajax({
            type: "POST",
            url: "/ajaxdatabinding/address/check",
            dataType: "json",
            data: id,
            asynx:true,
            success: function(response) {
                $('.checkbox_called' + id).append(
                    '<i class="icon-check text-success"></i>' +
                    '<span style="display: none">1</span>'
                );
                cb.hide();
            }
        });
    });
});