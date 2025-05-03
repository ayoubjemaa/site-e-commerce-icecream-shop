<?php
// Add product to cart
if (isset($_POST['add_to_cart'])) {
    if ($user_id != '') {
        $id = unique_id();
        $product_id = $_POST['product_id'];
        $qty = filter_var($_POST['qty'], FILTER_SANITIZE_STRING);

        $verify_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ? AND product_id = ?");
        $verify_cart->execute([$user_id, $product_id]);

        $max_cart_items = $conn->prepare("SELECT COUNT(*) FROM `cart` WHERE user_id = ?");
        $max_cart_items->execute([$user_id]);
        $cart_count = $max_cart_items->fetchColumn();

        if ($verify_cart->rowCount() > 0) {
            $warning_msg[] = 'Product already exists in your cart';
        } elseif ($cart_count >= 20) {
            $warning_msg[] = 'Your cart is full';
        } else {
            $select_price = $conn->prepare("SELECT * FROM `products` WHERE id = ? LIMIT 1");
            $select_price->execute([$product_id]);
            $fetch_price = $select_price->fetch(PDO::FETCH_ASSOC);

            $insert_cart = $conn->prepare("INSERT INTO `cart` (id, user_id, product_id, price, qty) VALUES (?, ?, ?, ?, ?)");
            $insert_cart->execute([$id, $user_id, $product_id, $fetch_price['price'], $qty]);

            $success_msg[] = 'Product added to your cart successfully!';
        }
    } else {
        $warning_msg[] = 'Please login first!';
    }
}
?>
