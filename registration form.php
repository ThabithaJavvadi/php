<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<center>
    <h2>Complete Form Validation</h2>
    <form method="post" action="data_insert.php">
        <label>Username</label>
        <input type="text" name="username" id="username_id">
        <br>
        <br>
        <label>Password</label>
        <input type="password" name="pwd" id="pwd_id">
        <br>
        <br>
        <label>Email</label>
        <input type="email" name="email" id="email_id">
        <br>
        <br>
        <label>Gender : </label>
        <input type="radio" name="gender" id="male_id">Male
        <input type="radio" name="gender" id="female_id">Female
        <br>
        <br>
        <label>Courses : </label>
        <input type="checkbox" name="course_name[]" value="HTML">HTML
        <input type="checkbox" name="course_name[]" value="CSS">CSS
        <input type="checkbox" name="course_name[]" value="JS">JS
        <br>
        <br>
        <label>Colleges : </label>
        <select name="colleges" id="colleges_id">
            <option value="">--Select Colleges --</option>
            <option value="AEC">AEC</option>
            <option value="ACET">ACET</option>
            <option value="ACOE">ACOE</option>
        </select>
        <br>
        <br>
        <input type="submit" name="submit_btn" value="Login" onclick="return form_validation()">
    </form>
</center>
<script type="text/javascript">
function form_validation(){
    let username = document.getElementById('username_id').value;
    let password = document.getElementById('pwd_id').value; 
    let email = document.getElementById('email_id').value;

    let male = document.getElementById("male_id").checked;
    
    let female = document.getElementById("female_id").checked;

    //let courses = document.getElementsByClassName("courses").checked;
    
    var courses = document.getElementsByName('course_name[]');
    console.log(courses);
    
    //alert(courses[0].checked)  // if HTML course checked or not
    //alert(courses[1].checked)  // if CSS course checked or not
    //alert(courses[2].checked) // if JS course checked or not
    
    let HTML = courses[0].checked;
    let CSS = courses[1].checked;
    let JS = courses[2].checked;
    let colleges = document.getElementById('colleges_id').value;
    //alert("colleges : "+colleges);


    if(username == ''){
        alert("Please enter User Name.");
        return false;
    }
    if(password == ''){
        alert("Please enter Password.")
        return false;
    }
    if(email == ''){
        alert("Please enter Email.")
        return false;
    }
    if(male == false && female == false){
        alert("Please select gender.")
        return false;
    }
    if(HTML == false && CSS == false && JS ==false){
        alert("Please select courses.")
        return false;
    }
    if(colleges == ''){
        alert("Please Select Your College.")
        return false;
    }
}   
</script>
</body>
</html>