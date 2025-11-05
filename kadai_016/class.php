<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>
<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            public $name;
            public $price;
            // コンストラクタの定義
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            // メソッドの定義
            public function show_price() {
                // $this->price = $price;
                print_r($this->price);
            }
        }
        $food = new Food('potato', 250);
        print_r($food);
        echo '<br>';

        // クラスを定義する
        class Animal {
            // プロパティを定義する
            public $name;
            public $height;
            public $weight;
            // コンストラクタの定義
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            // メソッドの定義
            public function show_height() {
                print_r($this->height).'<br>';
            }
        }
        $animal = new Animal('dog', 60, 5000);
        print_r($animal);
        echo '<br>';

        $food->show_price();
        echo '<br>';
        $animal->show_height();
        ?>
    </p>
</body>
</html>