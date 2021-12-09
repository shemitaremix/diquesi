<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Di que si</title>
</head>
<style type="text/css">
    .boton {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;	
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
    }


    .boton {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }
    .boton:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
    }

    .boton {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
    }

    .boton:hover {
        background-color: #4CAF50;
        color: white;
    }
</style>
<body>
        <div>
            <h1>¿Te gustaria salir conmigo el domingo por un helado despues del ensayo?</h1>
            <button class="boton" id="btn-si">SI</button>
            <button class="boton" id="btn-no" style="position: absolute;">NO</button>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function(){
        $("#btn-no").mouseenter(function(){
            n = valorAleatorio()+"%";
            $(this).css("right",n);
            $(this).css("top",n);
        });

        function valorAleatorio(min=10,max=80){
            return Math.floor(Math.random() * (max - min +1))+ min;
        }
    })
    $("#btn-si").on("click",myFuncion)

    function myFuncion(){
        Swal.fire({
            title: 'Wujuuuu, veras que te vas a divertir <3, amos a ponernos de acuerdito :3',
            width: 600,
            padding: '3em',
            background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
            backdrop: `
                rgba(0,0,123,0.4)
                url("https://sweetalert2.github.io/images/nyan-cat.gif")
                left top
                no-repeat
            `
            })
    }
</script>
</html>