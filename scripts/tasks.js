var html, htmlString;

$(document).ready(function() {
    document.documentElement.innerHTML = localStorage.getItem('mostRecent');
    $("body").removeClass("model-open")
});

$(document).on("click", ".submitBtn", function() {
    if ($(this).siblings("#prepInput").val() !== '') {
        var taskInput = $(this).siblings("#prepInput").val();
        var task = `<div class="task"><button class="taskcheck"></button><span>` + taskInput + `</span><div class="closeTask"><button class="closeTaskButton"><i class="far fa-times-circle"></i></button></div></div>`;
        $(this).parent().siblings(".taskList").append(task);
        $(this).siblings("#prepInput").val('');
        html = $('html').clone();
        htmlString = html.html();
        localStorage.setItem('mostRecent', htmlString);
    }
});

$(document).on('click', '.taskcheck', function() {
    $(this).toggleClass("checked");
    $(this).toggleClass("fas fa-check");
    $(this).siblings().toggleClass("striked");
    html = $('html').clone();
    htmlString = html.html();
    localStorage.setItem('mostRecent', htmlString);
});

$(document).on('click', '.closeTaskButton', function() {
    $(this).closest(".task").remove();
    html = $('html').clone();
    htmlString = html.html();
    localStorage.setItem('mostRecent', htmlString);
});

$(document).on({
    mouseenter: function() {
        $(this).children(".closeTask").show();
    },
    mouseleave: function() {
        $(this).children(".closeTask").hide();
    }
}, ".task");

$(document).on('click', '.deleteList', function() {

    $(this).closest(".todoWrapper").remove();

    html = $('html').clone();
    htmlString = html.html();
    localStorage.setItem('mostRecent', htmlString);
});

$(document).on('click', '#saveModal', function() {
    //$select_value = $("#newTitle").value();
    var todo = `<div class="todoWrapper">
    <div class="todoHead">
        <h1>` + $('#newTitle').val() + `</h1> <button class="deleteList"><i class="far fa-trash-alt"></i></button><input type="text" name="task" class="todoTextInput" placeholder="Add a new Task..." value="" autocomplete="off" id="prepInput"><button class="submitBtn " id="prepTodo">Submit</button>
    </div><div class="taskList" id="prep"></div></div>`;

    if ($('#newTitle').val() !== '') {
        $(".tasksPageBody").append(todo);
    }
    $('#newTitle').val('');
    $('#exampleModalCenter').modal('hide');
});