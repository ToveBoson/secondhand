<form action="form-handlers/sold-garments-form-handler.php" method="post">

<div class="soldContainer">
    <label for="garment">Plagg:</label>
    <select name="id" id="id">
        <option value="">--Välj plagg--</option>
            <?php 

            foreach($garments as $garment) {

            if($garment['sold_date'] == null) {
                echo "<option value='{$garment['id']}'>{$garment['garment']} {$garment['size']} {$garment['price']} kr</option>";
            }
        }    
        ?>
    </select>
</div>

<button type="submit">Markera som såld</button>

</form>
