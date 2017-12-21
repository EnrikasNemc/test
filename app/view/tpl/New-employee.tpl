<div style="text-align: center">
    <form method="POST" action="?view=employee&action=create">

        <div> Name :</div>
        <input type="text" name="name"> <br>
        <div> Surname :</div>
        <input type="text" name="surname"> <br>
        <div> Birthday :</div>
        <input type="date" name="birthday"> <br>
        <div> Sex :</div>
        <select name="sex">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="other">Other</option>
        </select>
        <div> Picture :</div>
        <input type="file" multiple accept="image/jpeg, image/png" name="picture"> <br><br>
        <div> Position :</div>
        <input type="text" name="position"> <br>
        <div> Notes :</div>
        <input type="text" name="notes"> <br><br>

        <input type="submit" class="btn btn-danger" value="Issaugoti duomenys"> <br><br>

    </form>
</div>