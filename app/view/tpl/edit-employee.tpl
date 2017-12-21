<div style="text-align: center">
    <form method="POST" action="?view=employee&action=update&id=[@id]">

        <div> Name :</div>
        <input type="text" name="name" value="[@name]"> <br>
        <div> Surname :</div>
        <input type="text" name="surname" value="[@surname]"> <br>
        <div> Birthday :</div>
        <input type="date" name="birthday" value="[@birthday]"> <br>
        <div> Sex :</div>
        <select name="sex">
            <option value="Male" [@sex_Male]>Male</option>
            <option value="Female" [@sex_Female]>Female</option>
            <option value="other" [@sex_Other]>Other</option>
        </select>
        <div> Picture :</div>
        <input type="file" multiple accept="image/jpeg, image/png" name="picture" value="[@picture]"> <br><br>
        <div> Position :</div>
        <input type="text" name="position" value="[@position]"> <br>
        <div> Notes :</div>
        <input type="text" name="notes" value="[@notes]"> <br><br>

        <input type="submit" class="btn btn-danger" value="Issaugoti duomenys"> <br><br>

    </form>
    <form method="POST" action="?view=employee&action=delete&id=[@id]">
        <input type="submit" class="btn btn-danger" value="delete"> <br><br>
    </form>
</div>