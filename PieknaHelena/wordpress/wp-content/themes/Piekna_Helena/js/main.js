(function($) {

    $(function() {




        //Obsługa akcji click dla modal


         var myButton = document.querySelector('.peel');
        console.log(myButton);

        var checkbox = document.querySelectorAll('input[type=checkbox]');
        console.log(checkbox);

        var txt = document.querySelectorAll('.modalHide');
        console.log(txt);


        if (myButton == null) {
            return false;
        }

         myButton.addEventListener('click', function show(){


             $('#exampleModalCenter').modal();

         });


         myButton.addEventListener('click', function clear(){

             for (var i=0; i < checkbox.length; i++) {

                 checkbox[i].checked = false;
                 txt[i].style.display = 'none'

             }

         });



        //Obsługa checkboxu #ch1

        // document.addEventListener("DOMContentLoaded", function() {


            var checked = document.querySelector('#ch1');


            var Text1 = document.querySelector('.modalHide1');

            checked.addEventListener('click', function(){


                if (this.checked == true){

                    console.log('test2');

                    Text1.style.display = 'block';
                }
                else
                {
                    Text1.style.display = 'none';
                }

            })

        // });


        //Obsługa checkboxu #ch2

        // document.addEventListener("DOMContentLoaded", function() {
        //     console.log('test');

            var checked = document.querySelector('#ch2');


            var Text = document.querySelector('.modalHide2');


            checked.addEventListener('click', function(){

                if (checked.checked == true){

                    Text.style.display = 'block';
                }
                else
                {
                    Text.style.display = 'none';
                }

            })

        // });

    });

})(jQuery);