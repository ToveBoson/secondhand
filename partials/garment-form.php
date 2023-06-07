


<form action="form-handlers/garment-form-handler.php" method="post">

<div class="formContainer">

<label for="garment">Plagg: </label>
<input type="text" name="garment" id="garment">

<label for="size">Storlek: </label>
<input type="text" name="size" id="size">

<label for="price">Pris: </label>
<input type="text" name="price" id="price">

<div>

    <select name="seller_id" id="seller_id">
        <option value="">--Välj säljare--</option>
            <?php 

            foreach($sellers as $seller) {
            echo "<option value='{$seller['id']}'>{$seller['first_name']} {$seller['last_name']}</option>";
        }    
        ?>
    </select>
</div>

<button type="submit">Lägg till plagg</button>

</div>
</form>