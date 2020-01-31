<?php
$cartOutput = "";
$cartTotal = "";
$pp_checkout_btn = '';
$product_id_array = '';
if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1)
{
    $cartOutput = "<h2 align='center'>Váš nákupní košík je prázdný</h2>";
}
else
{
    // Start the For Each loop
    $i = 0;
    foreach ($_SESSION["cart_array"] as $each_item)
    {
        $item_id = $each_item['item_id'];
        $item_color = $each_item['item_color'];
        $item_size = $each_item['item_size'];
        $sql = mysqli_query($conn, "SELECT * FROM product_type WHERE id='$item_id' LIMIT 1");
        while ($row = mysqli_fetch_array($sql))
        {
            $product_name = $row["product_name"];
            $price = $row["price_after"];
            $details = $row["details"];
        }
        $pricetotal = $price * $each_item['quantity'];
        $finish_price = $price * $each_item['quantity'];
        $cartTotal = (int)$pricetotal + (int)$cartTotal;
        setlocale(LC_MONETARY, "cs_CZ.UTF-8");
        $pricetotal = money_format("%10.2n", $pricetotal);
        // Dynamic Checkout Btn Assembly
        $x = $i + 1;
        // Create the product array variable
        $product_id_array .= "$item_id-" . $each_item['quantity'] . ",";
        // Dynamic table row assembly
        $cartOutput .= "<tr>";
        $cartOutput .= '<td><a href="product.php?id=' . $item_id . '">' . $product_name . '</a><br /></td>';
        $cartOutput .= '<td>' . $item_color . ' </td>';
        $cartOutput .= '<td>' . $item_size . ' </td>';
        $cartOutput .= '<td>' . $pricetotal . '</td>';
        $cartOutput .= '</tr>';
        $i++;
    }
    setlocale(LC_MONETARY, "LC_All");
    $cartTotal = money_format("%10.2n", $cartTotal);
    $cartTotal = "<div><strong>Cena celkem: </strong>" . $cartTotal . " </div>";
}
include "storescripts/connect_to_mysql.php";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['name']))
{

    mysqli_select_db($conn, "Ja12JLJhYu");
    $sql = ("INSERT INTO transactions (name, email, street, city, zip, phone, transport, payment, comment, price) 
VALUES ('$first_name', '$email', '$address', '$city', '$zip', '$phone_number', '$doprava', '$platba', '$comments', '$finish_price')");

    if (mysqli_query($conn, $sql))
    {
        $conn = mysqli_connect($servername, $username, $password, $database);
        $idget = mysqli_query($conn, "SELECT id FROM transactions WHERE email='$email' ORDER BY id DESC LIMIT 1");
        $row = mysqli_fetch_row($idget);
        $id = $row[0];

        $sql = ("INSERT INTO transaction_details (transaction_id, model, size, color, quantity) 
VALUES ('$id', '$product_name', '$each_item['item_size']', '$each_item['item_color']', '$each_item['quantity']')");

    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
