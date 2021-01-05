<head>
    <?php include_once 'includes/templates/head.php' ?>
    <style>
    body{
        background: white;
        color: black;
    }
    .centrar
    {
        margin-top: 2vw;
        text-align: center;
    }
     .preloader {
         animation-name: girar;
         animation-duration: 2s;
         animation-iteration-count: infinite;
         animation-timing-function: ease;
         border: 10px solid #eee;
         border-radius: 50%;
         border-top: 10px solid #666;
         height: 15vw;
         margin-left: auto;
         margin-right: auto;
         margin-top: 5vw;
         width: 15vw;
        }
        @keyframes girar {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
}
    </style>

</head>
<div class="preloader"></div>
<div class="centrar">
    <h3>The Stars is loading.</h3>
</div>
