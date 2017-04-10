/**
 * Created by zenoo on 4/9/2017.
 */

var table = document.getElementById('game_of_life_table'); // Create the table globally
var size = 35; // allows easy resizing of grid
var generation = 0;
var live_cells;
var output_generation = document.getElementById("generation_value");
var output_population = document.getElementById("population_value");

var system_switch = false;

function createTable() {

    var tbody = document.createElement("tbody"); // Create the body of the table

    table.style.width = '100%';
    table.setAttribute('border', '1');

    for (var index = 0; index < size; index++) { // for every row
        var tr = document.createElement('tr'); // create a row

        for (var index2 = 0; index2 < size; index2++) { //for every column
            if (index == size - 1 && index2 == size) { // if system goes out of bound
                break;
            } else {
                var td = document.createElement('td'); // create cell
                td.appendChild(document.createTextNode(''));
                td.style.padding = '10px';
                td.style.backgroundColor = 'white';

                // Clicking a cell and changing colors.
                td.onclick = function () {
                    if (this.style.backgroundColor == 'white') {
                        this.style.backgroundColor = 'red';
                        this.className = "live";
                        update_population();
                    } else {
                        this.style.backgroundColor = 'white';
                        this.className = "die";
                        update_population();
                    }
                };

                index == size && index2 == size ? td.setAttribute('rowSpan', (size + 1).toString()) : null;
                tr.appendChild(td)
            }
        }
        tbody.appendChild(tr);
    }
    table.appendChild(tbody);
    //body.appendChild(table);
    //div.appendChild(table);
}

function getInformation() {
    console.log(table);
}

// Game of life rules:
// Death: x < 2 Under Population ; x > 3 overcrowding
// Live: 2 or 3
// Create: Dead cell has exactly 3 live cells around it

// if size = 20, then column cannot look left if equal to 0, cannot look right if 19.
// if size = 20, then row cannot look up, if 0, cannot look down if 19


//createTable();
//getInformation();

function tick() {
    generation += 1;
    output_generation.innerHTML = generation.toString();
    //var live_cells;
//        var current_cell;
    // We need to grab every cell, and check around it -- Top Left = row-1, column-1
    for (var row = 0; row < size; row++) { //For every Row
        // Rows then columns
        for (var column = 0; column < size; column++) { //For every Column
            // Reset classes
            table.rows[row].cells[column].className = "";

            live_cells = 0;

            // Check the row
            if (row == 0) { // Don't check upwards

                // Check the column
                if (column == 0) { // don't check left
                    if (table.rows[row].cells[column + 1].style.backgroundColor == 'red') { // right
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column + 1].style.backgroundColor == 'red') { // bottom right
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column].style.backgroundColor == 'red') { // bottom
                        live_cells += 1;
                    }

                } else if (column == size - 1) { // Don't check right
                    if (table.rows[row + 1].cells[column].style.backgroundColor == 'red') { // bottom
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column - 1].style.backgroundColor == 'red') { // bottom left
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column - 1].style.backgroundColor == 'red') { // left
                        live_cells += 1;
                    }
                } else { // check all
                    if (table.rows[row].cells[column + 1].style.backgroundColor == 'red') { // right
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column + 1].style.backgroundColor == 'red') { // bottom right
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column].style.backgroundColor == 'red') { // bottom
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column - 1].style.backgroundColor == 'red') { // bottom left
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column - 1].style.backgroundColor == 'red') { // left
                        live_cells += 1;
                    }
                }

            } else if (row == size - 1) { // Don't check downwards

                // Check the column
                if (column == 0) { // don't check left
                    if (table.rows[row - 1].cells[column].style.backgroundColor == 'red') { // top
                        live_cells += 1;
                    }
                    if (table.rows[row - 1].cells[column + 1].style.backgroundColor == 'red') { // top right
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column + 1].style.backgroundColor == 'red') { // right
                        live_cells += 1;
                    }

                } else if (column == size - 1) { // Don't check right

                    if (table.rows[row - 1].cells[column - 1].style.backgroundColor == 'red') { // top left
                        live_cells += 1;
                    }
                    if (table.rows[row - 1].cells[column].style.backgroundColor == 'red') { // top
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column - 1].style.backgroundColor == 'red') { // left
                        live_cells += 1;
                    }

                } else { // check all

                    if (table.rows[row - 1].cells[column - 1].style.backgroundColor == 'red') { // top left
                        live_cells += 1;
                    }
                    if (table.rows[row - 1].cells[column].style.backgroundColor == 'red') { // top
                        live_cells += 1;
                    }
                    if (table.rows[row - 1].cells[column + 1].style.backgroundColor == 'red') { // top right
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column + 1].style.backgroundColor == 'red') { // right
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column - 1].style.backgroundColor == 'red') { // left
                        live_cells += 1;
                    }
                }

            } else { // Check all

                // Check columns
                if (column == 0) { // Don't check left

                    if (table.rows[row - 1].cells[column].style.backgroundColor == 'red') { // top
                        live_cells += 1;
                    }
                    if (table.rows[row - 1].cells[column + 1].style.backgroundColor == 'red') { // top right
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column + 1].style.backgroundColor == 'red') { // right
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column + 1].style.backgroundColor == 'red') { // bottom right
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column].style.backgroundColor == 'red') { // bottom
                        live_cells += 1;
                    }

                } else if (column == size - 1) { // don't check right

                    if (table.rows[row - 1].cells[column - 1].style.backgroundColor == 'red') { // top left
                        live_cells += 1;
                    }
                    if (table.rows[row - 1].cells[column].style.backgroundColor == 'red') { // top
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column].style.backgroundColor == 'red') { // bottom
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column - 1].style.backgroundColor == 'red') { // bottom left
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column - 1].style.backgroundColor == 'red') { // left
                        live_cells += 1;
                    }


                } else { // check all

                    if (table.rows[row - 1].cells[column - 1].style.backgroundColor == 'red') { // top left
                        live_cells += 1;
                    }
                    if (table.rows[row - 1].cells[column].style.backgroundColor == 'red') { // top
                        live_cells += 1;
                    }
                    if (table.rows[row - 1].cells[column + 1].style.backgroundColor == 'red') { // top right
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column + 1].style.backgroundColor == 'red') { // right
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column + 1].style.backgroundColor == 'red') { // bottom right
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column].style.backgroundColor == 'red') { // bottom
                        live_cells += 1;
                    }
                    if (table.rows[row + 1].cells[column - 1].style.backgroundColor == 'red') { // bottom left
                        live_cells += 1;
                    }
                    if (table.rows[row].cells[column - 1].style.backgroundColor == 'red') { // left
                        live_cells += 1;
                    }

                }
            }

            //Finished checking current cell
            //Check current cell
            if (table.rows[row].cells[column].style.backgroundColor == 'white') { // if current cell is dead cell
                // chcek to see if live_cells == 3
                if (live_cells == 3) {
                    // revive cell
                    //table.rows[row].cells[column].style.backgroundColor = 'red';
                    //table.rows[row].cells[column].addClass("live");
                    table.rows[row].cells[column].className += "live";
                }else{
                    table.rows[row].cells[column].className += "die";
                }
            } else {
                // if current cell is alive
                // Check to see if live_cells < 2 or > 3
                if (live_cells < 2 || live_cells > 3) { // then kill the cell
                    //table.rows[row].cells[column].style.backgroundColor = 'white';
                    //table.rows[row].cells[column].addClass("die");
                    table.rows[row].cells[column].className += "die";
                }else{
                    table.rows[row].cells[column].className += "live";
                }
            }
        }
    }

    live_cells = document.getElementsByClassName("live");
    dead_cells = document.getElementsByClassName("die");

    console.log(live_cells);
    console.log(dead_cells);

    for(var index = 0; index < live_cells.length; index++){
        live_cells[index].style.backgroundColor = 'red';
    }
    for(var index = 0; index < dead_cells.length; index++){
        dead_cells[index].style.backgroundColor = 'white';
    }

    update_population();

}

function clear_board(){ // Resets the grid
    generation = 0;
    output_generation.innerHTML = generation.toString();
    live_cells = [];
    //console.log("testing");
    for(var row=0; row < size; row++){
        for(var column = 0; column < size; column++){
            console.log("resettings");
            table.rows[row].cells[column].className = "";
            table.rows[row].cells[column].style.backgroundColor = "white";
        }
    }
}

function toggle(){
    var toggle_button = document.getElementById("toggle_button");
    if(system_switch == false){
        system_switch = true;

        toggle_button.value = "Pause";

        loop();

    }else{
        system_switch = false;

        toggle_button.value = "Run";
    }

}

function loop(){
    if (system_switch == true) {
        tick();
        setTimeout(function () {
            loop();
        }, 500);
    }else{

    }
}

function update_population(){
    live_cells = document.getElementsByClassName("live");
    output_population.innerHTML = live_cells.length.toString();
}


createTable();
