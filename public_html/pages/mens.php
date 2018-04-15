<?php
    $data = [];
    array_push($data, [
        'category' => 'mens',
        'productid' => 'mshoe1',
        'cost' => '25',
        'description' => 'Blue Shoes',
        'quantity' => '1',
        'image' => 'images/pexels-photo.jpg'
    ],
    [
        'category' => 'mens',
        'productid' => 'mshoe2',
        'cost' => '45',
        'description' => 'Brown Dress Shoes',
        'quantity' => '1',
        'image' => 'images/pexels-photo-186035.jpg'
    ],
    [
        'category' => 'mens',
        'productid' => 'mshoe3',
        'cost' => '50',
        'description' => 'Hiking Shoes',
        'quantity' => '1',
        'image' => 'images/shoes-rock-climbing-hiking-walking-40383.jpg'
    ])

?>

<div class="entry">
    <!--<img src="images/apples-colors-fashion-185476.jpg" height="400" width="325"/>-->
    <?php
        for($i=0; $i < count($data); $i++) {
            echo '<img src="'. $data[$i]['image'] .'" height="325" width="400"/>';
            $form = null;
            $form .= '<form action="index.php?p=mens&action=add" method="post">';
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
    <img src="images/pexels-photo.jpg" height="325" width="475"/>
</div>
<div class="entry">
    <img src="images/pexels-photo-186035.jpg" height="325" width="475"/>
</div>
<div class="entry">
    <img src="images/shoes-rock-climbing-hiking-walking-40383.jpg" height="325" width="475"/>
</div>
-->
