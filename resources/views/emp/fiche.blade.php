<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/app.min.css">
    <title>Fiche</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-ld-4 offset-lg-4 shadow-md">
                <div class="col-lg-4 text-center">
            
                  
                    <input class="form-control" name="matri" type="number" id="matri" placeholder="Entrer votre matricule"><br>
                    <button value="submit" class="btn btn-success">Calculer</button>
           
                </div>
                <div class="" id="sal">
                <h1 id="tx">votre salaire s'affichera ici*</h1>
                </div>
            </div>
        </div>
    </div>

    <script src="/jquery-3.6.0.min.js"></script>


    <script>
        $('#tx').css('color', 'red')
        $('#imp').hide()

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
           

            $('button').on('click',()=>{
                let id = $('#matri').val(); 

                var deferUrl = 'api/data/'+id;
        
            $.ajax({
            url:deferUrl ,
            type: "GET",
            success:function(data){
            let sal = data.emp;
            if (data.status !==1) {
                    $('#tx').text("ce utilisateur n\'existe pas")
                    $('#imp').hide()
                }else{
            $('#tx').text(sal).css('color','green')
                    $('#tx').css('color', 'red')
                    $('#imp').hide().show()
                }
            },
            error:function(data){
               console.log(data);
            }
            
        
        });
            });
            $('#imp').click(()=>{
                window.print()
            });
       

    </script>
</body>

</html>