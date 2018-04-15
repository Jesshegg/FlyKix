<?php
    $data = [];
    array_push($data, [
        'category' => 'womens',
        'productid' => 'wshoe1',
        'cost' => '30',
        'description' => 'Brown Boots',
        'quantity' => '1',
        'image' => 'images/apples-colors-fashion-185476.jpg'
    ],
    [
        'category' => 'womens',
        'productid' => 'wshoe2',
        'cost' => '50',
        'description' => 'Grey Nike Tennis Shoes',
        'quantity' => '1',
        'image' => 'images/healthy-light-woman-legs.jpg'
    ],
    [
        'category' => 'womens',
        'productid' => 'wshoe3',
        'cost' => '25',
        'description' => 'Black Sandals',
        'quantity' => '1',
        'image' => 'images/pexels-photo-112285.jpg'
    ])

?>

<div class="entry">
    <!--<img src="images/apples-colors-fashion-185476.jpg" height="400" width="325"/>-->
    <?php
        for($i=0; $i < count($data); $i++) {
            echo '<img src="'. $data[$i]['image'] .'" height="325" width="400"/>';
            $form = null;
            $form .= '<form action="index.php?p=womens&action=add" method="post">';
            $form .= '<input type="hidden" name="productid" value="'. $data[$i]['productid'] .'" />';
            $form .= '<input type="hidden" name="cost" value="'. $data[$i]['cost'] .'" />';
            $form .= '<input type="hidden" name="description" value="'. $data[$i]['description'] .'" />';
            $form .= '<input type="hidden" name="quantity" value="'. $data[$i]['quantity'] .'" />';
            //$form .= '<input type="text" name="product-quantity" plaeholder="How many?" />';
            $form .= '<input type="submit" value="Add To Cart" name="submit" />';
            $form .= '</form>';

            echo $form;
        }

    ?>
</div>


<!--
<div class="entry">
    <img src="images/healthy-light-woman-legs.jpg" height="325" width="400"/>
</div>
<div class="entry">
    <img src="images/pexels-photo-112285.jpg" height="325" width="400"/>
</div>
-->
