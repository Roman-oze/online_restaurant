@extends('layout._master')

@section('main_content')

    <div class="container">

        <header>
            <h1>Shopping Cart</h1>

            <div class="shopping">
                <img src="../Model/shopping.svg">
                <span class="quantity">
                    <?php echo count($_SESSION['cart']) ?>
                </span>
            </div>
        </header>

        <a href="https://img.freepik.com/free-vector/horizontal-format-digital-restaurant-menu_52683-45248.jpg?w=2000">
            <img src="../Model/down.png" class="menuphoto">
        </a><br>

        <div class="list">
            <?php
                // Check if there are products to display
                if ($products->num_rows > 0) {
                    // Output data of each row
                    while ($row = $products->fetch_assoc()) {
                    echo '<div class="item">';
                    echo '<img src="' . $row["image"] . '">';
                    echo '<div class="title">' . $row["name"] . '</div>';
                    echo '<div class="price">$' . $row["price"] . '</div>';
                    echo '<form method="post">';
                    echo '<input type="hidden" name="product_id" value="' . $row["id"] . '">';
                    echo '<button type="submit" name="add_to_cart">Add To Cart</button>';
                    echo '</form>';
                    echo '</div>';
                    }
                } else {
                    echo "<p>No products found</p>";
                }
        
                // Close the database connection
             
                ?>
        </div>
    </div>
    <div class="card">

        <h1>Card</h1>
        <?php 
         if(count($_SESSION['cart']) > 0){
            // Add a button to clear the cart
            echo '<form method="post" action="">';
            echo '<button style="    padding: 10px;
            min-width: 112px;
            border: 0;
            background: #FF5722;
            color: #FFF;
            font-weight: 700;
            border-radius: 4px;
            cursor: pointer;" type="submit" name="clear_cart">Clear Cart</button>';
            echo '</form>';
         }

        ?>
        <ul class="listCard">
            <?php 
               $totalPrice = 0;
               foreach ($_SESSION['cart'] as $product_id) {
                // Retrieve product details based on the product_id from the cart
                $cartProductQuery = "SELECT * FROM products WHERE id = $product_id";
                $cartProductResult = $conn->query($cartProductQuery);
                $cartProduct = $cartProductResult->fetch_assoc();
            
                // Display cart product information in HTML
                echo '<li>';
                echo '<div><img src="' . $cartProduct["image"] . '"></div>';
                echo '<div>' . $cartProduct["name"] . '</div>';
                echo '<div>';
                echo '<button onclick="changeQuantity(' . $product_id . ', -1)">-</button>';
                echo '<div class="count" id="quantity-' . $product_id . '">1</div>';
                echo '<button onclick="changeQuantity(' . $product_id . ', 1)">+</button>';
                echo '</div>';
                echo '<div data-unit-price="' . $cartProduct["price"] . '" id="price-' . $product_id . '">$' . $cartProduct["price"] . ' = 
                 <span id="total-price-' . $product_id . '">$' . $cartProduct["price"] . '</span>
                </div>';
                echo '</li>';
                $totalPrice += $cartProduct["price"];
            }
            echo ' <hr>';
            echo '<li>';
            echo '<div></div>';
            echo '<div>Total amount</div>';
            echo '<div id="total-products">' .  count($_SESSION['cart']).'</div>';
            echo '<div id="total-sum">$' . number_format($totalPrice, 2).'</div>';
            echo '</li>';
            $conn->close();
           ?>
        </ul>

        <!-- <button type="submit" id="checkoutBtn">Total Bill and Quantity : <span id="gross_total_amount"></span> </button> -->
        <div class="checkOut">
            <div class="closeShopping" style="background:black;color:white;">Close</div>
            <a id="final_total" style="text-decoration: none;color: black;" href="../View/payment.php?amount= <?php echo number_format($totalPrice, 2) ?>">
                <div class="closeShopping">Comfirm order</div>
            </a>
        </div>
    </div>

@endsection