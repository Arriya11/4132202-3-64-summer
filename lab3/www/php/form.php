<form id ="frm_add">
    <div>
        <label> Name : </label>
        <input type="text" name="name"require>
</div>
<div>
    <label> Surname : </label>
    <input type = "text" name="name">
</div>
<div>
    <label> Age : </label>
    <input type = "text" name="age">
</div>
<div>
        <label> Sex : </label>
        <select name="sex">
            <option value="">PLEASESELECT</option>
            <option value="1">MALE</option>
            <option value="2">FEMALE</option>
        </select>
    </div>
    <button type="submit">SAVE</button>
    <button type="reset">RESET</button>
</from>
<script>
$("#frm_add").submit(function(e){
    e.preventDefault();

    let data = $(this).serialize()
    console.log(data);

    $.ajax({
        url: "./query/user_add.php",
        method: "post",
        data: data,
        success: function(msg) {
            console.log(msg);
        }
    });
});
</script>




