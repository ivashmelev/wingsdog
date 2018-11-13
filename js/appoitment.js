$(document).ready(function(){

    var day, month, year;

    $(function(){
        $.datepicker.setDefaults(
            {
            closeText: 'Закрыть',
            prevText: '',
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
                'Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
            dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
            weekHeader: 'Не',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        })
    });

    $( function() {
        $( "#datepicker" ).datepicker();
    });

$("#datepicker").datepicker({beforeShowDay: $.datepicker.noWeekends});




    $("#datepicker").datepicker({
        onSelect: function(dateText, inst){
            var date=$("#datepicker").datepicker('getDate'),
            day=date.getDate();
            alert(day);
        }
    });

    $(".ui-datepicker").mouseover(function(){
        $("td").on("mousedown", function(){
            $(".form").css("visibility", "unset");
            day=this.innerText;
            month=$(".ui-datepicker-month").text();
            year=$(".ui-datepicker-year").text();
            $(".form-header").html("<p>"+month+" "+day+"</p>");
            $('#day').val(day);
            $('#month').val(month);
            $('#year').val(year);
            
            $("#datepicker").datepicker({
                onSelect: function(dateText, inst){
                    var date=$(this).datepicker('getDate'),
                    day=date.getDate();
                    alert(day);
                }
            });
        });
    });

    $(function(){
        $("td").on("mousedown", function(){
            $(".form").css("visibility", "unset");
            day=this.innerText;
            month=$(".ui-datepicker-month").text();
            year=$(".ui-datepicker-year").text();
            $(".form-header").html("<p>"+month+" "+day+"</p>");
            $('#day').val(day);
            $('#month').val(month);
            $('#year').val(year);
            console.log("td");
            $("#datepicker").datepicker({
                onSelect: function(dateText, inst){
                    var date=$(this).datepicker('getDate'),
                    day=date.getDate();
                    alert(day);
                }
            });
        });

        $(".ui-datepicker-week-end").on('mousedown', function(){
            $(".form").css("visibility", "unset");            
        })

        $(".btn-close, input[type='submit']").on("click", function(){
            $(".form").css("visibility", "hidden");
        });

        $("#sendform").submit(function(event){
            event.preventDefault();
            if ($('#name').val()!="" && $('#phone').val()!="" && $('#email').val()!=""){
                try {
                    $.post('send_mail.php', {'name':$('#name').val(), 'phone':$('#phone').val(),
                        'email':$('#email').val(), 'time':$("#time").val(), 'day':$('#day').val(), 'month':$('#month').val(),
                        'year':$('#year').val()});
                    alert("Ваш запрос отправлен на обработку!");
                }
                catch (err){
                    alert("Форма заполнена не верно!\nЗапрос не был отправлен!");
                    console.log(err);
                }
            }
            else{
                alert("Заполните все поля!");
            }
        });

        

    });
        $.mask.definitions['n']='[0-9]';
        $("#phone").mask("+7 nnn nnn nn nn");   
        $.mask.definitions['H']='[1]';
        $.mask.definitions['h']='[0-7]';
        $.mask.definitions['M']='[0]';
        $.mask.definitions['m']='[0]';
        $("#time").mask("Hh:Mm");
        
        // $("#datapicker").on("mousedown", function(){
        //     console.log("td");
        // });
});