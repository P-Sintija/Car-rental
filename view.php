<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1> ``Cheap rides`` </h1>

<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Model</th>
        <th>Fuel consumption<br> l /100 km </th>
        <th>Price ($) </th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    <?php
    foreach ($carRental->getRentalCars()->getCarsList() as $car) {
        ?>

        <tr>
            <td><?php echo $car->getName() ?></td>
            <td><?php echo $car->getModel() ?></td>
            <td><?php echo $car->getFuelConsumption() ?></td>
            <td><?php echo number_format($car->getPrice()/100,2)  ?></td>
            <td><?php echo $car->getStatus()->getStatus() ?></td>
            <td>
                <form method="post">
                    <input type="submit" name= <?php echo $car->getName(); ?>
                    class="button" value= <?php echo 'rent'; ?>>

                <form method="post">
                    <input type="submit" name= <?php echo $car->getName(); ?>
                    class="button" value= <?php echo 'return'; ?>>
            </td>
        </tr>

    <?php } ?>
</table>

</body>
</html>




