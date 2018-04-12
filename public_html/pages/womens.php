<?php 
    $data = [];
    array_push($data, [
        'category' => 'womens',
        'id' => 'sdkfjsdfksf',
        'cost' => '10',
        'image' => 'images/apples-colors-fashion-185476.jpg'
    ])

?>

<div class="entry">
    <img src="images/apples-colors-fashion-185476.jpg"/>
    <?php 
        for($i=0; $i < count($data); $i++;) {
            echo '<img src="'. $data[$i]['image'] .'" />';
            $form = null;
            $form .= '<form action="/path/to/cart.php" method="post">';
            $form .= '<input type="hidden" name="product-id" value="'. $data[$i]['id'] .'" />';
            //$form .= '<input type="text" name="product-quantity" plaeholder="How many?" />';
            $form .= '<input type="submit" value="Add To Cart" name="submit" />';
            $form .= '</form>'
            
            echo $form;
        }
    
    ?>
</div>
