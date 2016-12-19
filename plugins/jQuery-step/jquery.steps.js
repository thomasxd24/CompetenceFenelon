
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');

        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });
    var body = $("html, body");

    function check04($input) {
        if (!(parseInt($input.value) <= 4 && parseInt($input.value) >= 0) && !($input.value=="")) {
    $input.value="";
}// The function returns the product of p1 and p2
    }
$changed = false;
    $('table').keydown(function(e){
        var $table = $(this);
        var $active = $('input:focus,select:focus',$table);
        $next = null;
        var focusableQuery = 'input:visible';
        var position = parseInt( $active.closest('td').index()) + 1;
        $key=e.keyCode;
        switch(e.keyCode){

            case 38: // <Up>
                $next = $active
                    .closest('tr')
                    .prev()
                    .find('td:nth-child(' + position + ')')
                    .find(focusableQuery)
                ;

                break;

            case 40: // <Down>
                $next = $active
                    .closest('tr')
                    .next()
                    .find('td:nth-child(' + position + ')')
                    .find(focusableQuery)
                ;
                break;
        }

        if($next && $next.length)
        {
            $next.focus();
            $changed = true;
        }
    });

    $('table').keyup(function() {
        var $table = $(this);
        var $next = null;
        var $active = $('input:focus', $table);
        var focusableQuery = 'input:visible';
        var position = parseInt( $active.closest('td').index()) + 1;
        var $test = $(':focus')[0];
        $active.closest('tr').find('td:eq(3)').addClass("circle-1");
        console.log($active.closest('tr').find('td:eq(3)'));
        if ($test.value.length == $test.maxLength && $key!=38 && !($changed)) {
            $next = $active
                .closest('tr')
                .next()
                .find('td:nth-child(3)')
                .find(focusableQuery)
            ;
            $next.focus();



        }
        $changed = false;

    });



    $('ul.setup-panel li.active a').trigger('click');

    $('#activate-com1-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li').removeClass('disabled');
            $('ul.setup-panel li a[href="#com1-1"]').trigger('click');

        });
        setTimeout(function(){
            $(".inputs")['1'].focus();
        }, 500);

    })
    $('#activate-com1-2').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {

            $('ul.setup-panel li a[href="#com1-2"]').trigger('click');
        });


    })
    $('#activate-com1-3').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com1-3"]').trigger('click');
        });


    })
    $('#activate-com1-4').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com1-4"]').trigger('click');
        });


    })
    $('#activate-com2-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com2-1"]').trigger('click');
        });


    })
    $('#activate-com3-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com3-1"]').trigger('click');
        });
    })
    $('#activate-com4-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com4-1"]').trigger('click');
        });

    })
    $('#activate-com5-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com5-1"]').trigger('click');
        });
    })
    $('#activate-verify').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#verify"]').trigger('click');
        });

    })


