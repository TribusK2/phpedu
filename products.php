<?php 
include('data.php');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <style>
        *{
            font-family: arial;
            padding: 0px;
            margin: 0px;
        }
        .list h1{
            padding: 5px;
            margin: 5px;
        }
        .product{
            display: inline-block;
            padding: 3px;
            margin: 3px;
            width: 300px;
        }
        .product h3{
            float: left;
        }
        .btn{
            float: right;
            width: 100px;
            height: 22px;
        }
        .price{
            float: right;
            color: green;
            padding: 3px;
            margin: 3px;
        }
        #result{
            width: 80vw;
            margin: 30px auto;
        }
        #result h1, #result h2{
            width: 50%;
            margin: 5px auto;
            padding: 20px;
            text-align: center;
            background-color: beige;
        }
        #result button{
            width: 20%;
            height: 40px;
            margin: 5px auto;
            display: block;
        }
    </style>
</head>
<body>
    <div class="list">
        <h1>Dostępne produkty</h1>
        <?php foreach($products as $product){
        if($product['availability'] == true){ ?>
        <hr>
        <div class="product"> 
            <h3><?php echo $product['name']; ?></h3>
            <button class="btn">Wybierz</button>
        </div>
        <div class="price">
            <h4><span><?php echo $product['price']; ?></span> PLN</h4>
        </div>
        <?php }} ?>
        <hr> 
    </div>
    <div id="result">
        <h1>Wybrałeś <span></span></h1>
        <h2>Do zapłaty <span></span> PLN</h2>
        <button>Wyślij</button>
    </div>

    <script>
        var btns = document.getElementsByClassName('btn');

        var resultProduct = document.getElementById('result').querySelector('h1').querySelector('span');
        var resultPrice = document.getElementById('result').querySelector('h2').querySelector('span');
        
        resultProduct.innerHTML = sessionStorage.getItem("name");
        resultPrice.innerHTML = sessionStorage.getItem("price");

        if(sessionStorage.getItem("name") == null){
            document.getElementById('result').style.display = 'none';
        };

        for (i=0 ; i<btns.length; i++){
            btns[i].addEventListener("click", function(){
                let selectProduct = this.parentNode.getElementsByTagName('h3');
                let selectPrice = this.parentNode.nextElementSibling.getElementsByTagName('span');
                let chosenProduct = selectProduct[0].innerHTML;
                let productPrice = selectPrice[0].innerHTML;
                sessionStorage.setItem("name", chosenProduct);
                sessionStorage.setItem("price", productPrice);
                resultProduct.innerHTML = sessionStorage.getItem("name");
                resultPrice.innerHTML = sessionStorage.getItem("price");
                document.getElementById('result').style.display = 'block';
            }); 
        }

    </script>
</body>
</html>