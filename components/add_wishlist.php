<?php
// Ajouter un produit à la wishlist
if (isset($_POST['add_to_wishlist']) && $user_id != '') {

    $id = unique_id();
    $product_id = $_POST['product_id'];

    // Vérifier si le produit existe déjà dans la wishlist
    $verify_wishlist = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ? AND product_id = ?");
    $verify_wishlist->execute([$user_id, $product_id]);

    $cart_num=$conn->prepare("SELECT * FROM `cart` WHERE user_id = ? AND product_id = ?");
    $cart_num->execute([$user_id,$product_id]);

    if ($verify_wishlist->rowCount() > 0) {
        $warning_msg[] = 'product already exists in your wishlist';
    } elseif ($cart_num->rowCount() > 0) {
        $warning_msg[] = 'product already exists in your cart';
    } else {
        // Récupérer le prix du produit
        $select_price = $conn->prepare("SELECT * FROM `products` WHERE id = ? LIMIT 1");
        $select_price->execute([$product_id]);
        $fetch_price = $select_price->fetch(PDO::FETCH_ASSOC);

        // Ajouter à la wishlist
        $insert_wishlist = $conn->prepare("INSERT INTO `wishlist` (id, user_id, product_id, price) VALUES (?, ?, ?, ?)");
        $insert_wishlist->execute([$id, $user_id, $product_id, $fetch_price['price']]);

        $success_msg[] = 'product added to your wishlist successfully';
    }

} elseif (isset($_POST['add_to_wishlist'])) {
    $warning_msg[] = 'please login first';
}
?>
