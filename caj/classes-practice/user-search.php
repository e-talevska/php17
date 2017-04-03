<form action="hiscore.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <br>
    <input type="text" name="agility" placeholder="Agility Lvl">
    <br>
    <input type="text" name="magic" placeholder="Magic Lvl">
    <br>
    <input type="text" name="strenght" placeholder="Strenght Lvl">
    <br>
    <input type="text" name="exp" placeholder="Total EXP">
    <br>
    <label>Double EXP</label>
    <select name="double_exp">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
    <br>
    <input type="submit" name="submit" value="View statistics"> 
</form>