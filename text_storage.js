var display_text = new Array("Say ('Yes')","bag =['wand of wander','fist of fortitude','gun of colour']","bag.remove('wand of wander')","while colour < 100:\n wand of wander.wave","bag.remove('gun of colour')","while colour < 100:\n gun of colour.fire\n if gun of colour.ink < 100:\n gun of colour.refill","fist of fortitude.remove()","while colour < 100:\n fist of fortitude.smash");

var display_counter = 0;


var entry_text = 1;

//var img_src_s = "wEBgIFS/real_animation";
//var img_src_e = ".gif";
function check_text(id) {
    if (document.getElementById(id).value.trim() == display_text[display_counter]) {
        display_counter++;
        entry_text++;
        $('#myModal').modal('hide')
        var n = display_counter.toString();
        
        
        
        switch (display_counter) {
            case 1:
                document.getElementById("viewport").src = "wEBgIFS/real_animation2.gif";
                document.getElementById("code_display").innerHTML = display_text[display_counter];
                break;
            case 2:
                document.getElementById("viewport").src =  "wEBgIFS/real_animation3.gif";
                document.getElementById("code_display").innerHTML = display_text[display_counter];
                break;
            case 3:
                document.getElementById("viewport").src =  "wEBgIFS/real_animation4.gif";
                document.getElementById("code_display").innerHTML = "while colour < 100:<br> wand of wander.wave";
                break;
            case 4:
                document.getElementById("viewport").src =  "wEBgIFS/real_animation5.gif";
                document.getElementById("code_display").innerHTML = display_text[display_counter];
                break;
            case 5:
                document.getElementById("viewport").src =  "wEBgIFS/real_animation6.gif";
                document.getElementById("code_display").innerHTML = "while colour < 100: <br> gun of colour.fire <br> if gun of colour.ink < 100: <br> gun of colour.refill";
                break;
            case 6:
                document.getElementById("viewport").src = "wEBgIFS/real_animation7.gif";
                document.getElementById("code_display").innerHTML = display_text[display_counter];
                break;
            case 7:
                document.getElementById("viewport").src = "wEBgIFS/real_animation8.gif";
                document.getElementById("code_display").innerHTML = display_text[display_counter];
                break;
            case 8:
                document.getElementById("viewport").src = "wEBgIFS/real_animation9.gif";
                document.getElementById("code_display").innerHTML = "THE END"
                break;
            default:
                document.getElementById("code_display").innerHTML = "THE END";
                
                
        }
        
    }
}