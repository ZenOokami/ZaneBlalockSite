function checkComplete(){
    var form = document.getElementById("register_form");

    //set elements back to black for default
    colorize("id_label", "black");
    colorize("first_name_label", "black");
    colorize("last_name_label", "black");


    // If the ID number is empty
    if(form.id.value.length == 0){
        alert("You need to enter an ID.");
        // Turn section red
        colorize("id_label", "red");
        return false;
    }

    // If the First Name is empty
    if(form.first_name.value.length == 0){
        alert("You need to enter a Name.")
        colorize("first_name_label", "red");
        return false;
    }

    // if last name is empty
    if(form.last_name.value.length == 0){
        alert("You need to enter a Last Name.");
        colorize("last_name_label","red");
        return false;
    }



    // All things passed

    var user_id = document.getElementById("id").value;
    var user_first_name = document.getElementById("first_name").value;
    var user_last_name = document.getElementById("last_name").value;

    id_result.innerHTML = user_id;
    first_name_result.innerHTML = user_first_name;
    last_name_result.innerHTML = user_last_name;

    return true;
}

function colorize(elementName, color){
    document.getElementById(elementName).style.color = color;
}