<?php
$jsonString = '
{
    "product": [
      {
        "name": "Парикмахерское кресло «Норм» гидравлическое",
        "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
        "price": "9900"
      },
      {
        "name": "Парикмахерское кресло «Норм» гидравлическое",
        "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
        "price": "9900"
      },
      {
        "name": "Парикмахерское кресло «Норм» гидравлическое",
        "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
        "price": "9900"
      },
      {
        "name": "Парикмахерское кресло «Норм» гидравлическое",
        "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
        "price": "9900"
      },
      {
        "name": "Парикмахерское кресло «Норм» гидравлическое",
        "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
        "price": "9900"
      },
      {
        "name": "Парикмахерское кресло «Норм» гидравлическое",
        "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
        "price": "9900"
      }
    ]
  }
';

$cart = json_decode( $jsonString );
echo $cart->product[1]->name . "<br>";

?>
