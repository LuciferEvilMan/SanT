
//bootstrap validation
(() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})();

//classess start
$(".autofill").on("keypress keyup blur", function (event) {
    autofill(event);
});

$(".alphabat_something").on("keypress keyup blur", function (event) {
    alphabatWithKey(event);
});


$(".numeric_only").on("keypress keyup blur", function (event) {
    numberOnly(event);
});

// $(".upper_case").on("keypress keyup blur", function (event) {
//     upperCaseLetter(event);
// });

$(".address").on("keypress keyup blur", function (event) {
    address(event);
});

$(".alphabat_only").on("keypress keyup blur", function (event) {
    alphabatOnly(event);
});

$(".alphabat_and_number").on("keypress keyup blur", function (event) {
    alphabatAndNumber(event);
});

$(".email_check").on("keypress keyup blur", function (event) {
    email_check(event);
});
//classess end

function alphabatOnly(event) {
    var key = event.key;
    if (key === "Backspace" || key === "Delete" || key === "Tab" || key === "Escape" || key === "Enter" || event.keyCode === 32) {
        return true;
    }
    if (/^[a-zA-Z]$/.test(key)) {
        var currentInput = event.target.value;
        if (currentInput.length < 40) {
            return true;
        }
    }
    event.preventDefault();
    return false;
}

function numberOnly(event) {
    var key = event.which || event.keyCode;
    if ((key < 48 || key > 57) && key !== 8 && key !== 9) {
        event.preventDefault();
    }
}

function alphabatAndNumber(event) {
    var key = event.which || event.keyCode;
    if (!((key >= 48 && key <= 57) || (key >= 65 && key <= 90) || (key >= 97 && key <= 122))) {
        if (!(event.ctrlKey || event.metaKey)) { // Allow pasting with Ctrl or Command key
            event.preventDefault();
        }
    }
}

// function address(event) {
//     var key = event.which || event.keyCode;
//     // Allow space bar (key code 32) and enter key (key code 13)
//     if (!((key >= 48 && key <= 57) || (key >= 65 && key <= 90) || (key >= 97 && key <= 122) || key === 32 || key === 13)) {
//         event.preventDefault();
//     }
//   }

function address(event) {
    var key = event.which || event.keyCode;
    if (!((key >= 48 && key <= 57) || (key >= 65 && key <= 90) || (key >= 97 && key <= 122) || key === 32 || key === 13 || key === 44 || key === 46 || key === 45)) {
        event.preventDefault();
    }
}


function alphabatWithKey(event) {
    var key = event.key;
    if (key === "Backspace" || key === "Delete" || key === "Tab" || key === "Escape" || key === "Enter" || key === " " || key === "," || key === "." || key === ":" || key === "-") {
        return true;
    }
    if (/^[a-zA-Z]$/.test(key)) {
        var currentInput = event.target.value;
        if (currentInput.length < 40) {
            return true;
        }
    }
    event.preventDefault();
    return false;
}



//only uppercase
// $(".upper_case").on("input", function(event) {
//     var currentValue = event.target.value;
//     event.target.value = currentValue.toUpperCase();
// });

//uppercase with nunmber
// $(".upper_case").on("input", function(event) {
//     var currentValue = event.target.value;
//     var lastChar = currentValue.slice(-1); // Get the last character entered
//     if (/[a-zA-Z]/.test(lastChar)) {
//         event.target.value = currentValue.slice(0, -1) + lastChar.toUpperCase(); // Convert the last character to uppercase
//     }
// });

//uppercase with nunmber not special
// $(".upper_case").on("input", function(event) {
//     var currentValue = event.target.value;
//     var lastChar = currentValue.slice(-1); // Get the last character entered
//     if (/^[a-zA-Z0-9]+$/.test(lastChar)) {
//         event.target.value = currentValue.slice(0, -1) + lastChar.toUpperCase(); // Convert the last character to uppercase
//     } else {
//         event.target.value = currentValue.slice(0, -1); // Remove the last character if it's not alphanumeric
//     }
// });








// function email_check(event) {
//     var key = event.which || event.keyCode;
//     var char = String.fromCharCode(key);
//     var validChars = /^[a-zA-Z0-9.]+$/; 
//     if (!validChars.test(char)) {
//         event.preventDefault();
//     }
// }



// $(document).ready(function(){
//     $(document).keydown(function(event) {
//         if (event.ctrlKey==true && (event.which == '118' || event.which == '86')) {
//             event.preventDefault();
//          }
//     });
// });


// function endsWithSuffix(str, suffix) {
//     return str.endsWith(suffix);
// }

// // Example usage
// // var email = "example@gmail.com";
// // var suffix = "@gmail.com";

// if (endsWithSuffix(email, suffix)) {
//     console.log("The email ends with " + suffix);
// } else {
//     console.log("The email does not end with " + suffix);
// }




function toster(message = '', is_type = 1) {
    $.toast({
        heading: ((is_type) ? 'Success' : 'Error'),
        text: message,
        position: 'top-right',
        showHideTransition: 'plain',
        icon: ((is_type) ? 'success' : 'error')
    });
}

//new change

//HideandShow
function hideAndShow(ids, type = 'hide') {
    if (type === 'show') {
        ids.forEach(function(id) {
            $('#' + id).show();
        });
    } else {
        ids.forEach(function(id) {
            $('#' + id).hide();
        });
    }
}

//fadeinfadeout
function fadeInAndFadeOut(ids, type = "fadeOut", speed = "slow") {
    ids.forEach(function(id) {
        if (type === 'fadeIn') {
            $('#' + id).fadeIn(speed);
        } else {
            $('#' + id).fadeOut(speed);
        }
    });
}

//emptyfield
function emptyInputFields(ids) {
    ids.forEach(function(id) {
        $('#' + id).val('');
    });
}

// function redirectToPage(pageName, filter, path) {
// 	let expirationInSeconds = 5;
// 	let d = new Date();
// 	d.setTime(d.getTime() + (expirationInSeconds * 1000)); // Convert seconds to milliseconds
// 	let expires = "expires=" + d.toUTCString();
// 	document.cookie = pageName + "=" + encodeURIComponent(filter) + ";" + expires + ";path=/";

// 	let cookieExist = getCookie(pageName);

// 	if (cookieExist) {
// 		window.open(path, "_blank");
// 	}
// }


// function getCookie(pageName) {
// 	let page = pageName + "=";
// 	let decodedCookie = decodeURIComponent(document.cookie);
// 	let cookieArray = decodedCookie.split(';');
// 	for (let i = 0; i < cookieArray.length; i++) {
// 		let cookie = cookieArray[i].trim();
// 		if (cookie.indexOf(page) === 0) {
// 			return cookie.substring(page.length, cookie.length);
// 		}
// 	}
// 	return null; // Cookie not found
// }

// function delete_cookie(name) {
// 	document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
// }



// loder 
// jQuery(function($){
//     $(document).ajaxSend(function() {
//       $("#overlay").fadeIn(300);　
//     });
          
//     $('#button').click(function(){
//       $.ajax({
//         type: 'GET',
//         success: function(data){
//           console.log(data);
//         }
//       }).done(function() {
//         setTimeout(function(){
//           $("#overlay").fadeOut(300);
//         },500);
//       });
//     });	
//   });
// $(document).ready(function(){
//     $(document).on('ajaxSend', function() {
//       $("#overlay").fadeIn(300);　
//     });
          
//     $('#button').click(function(){
//       $.ajax({
//         type: 'GET',
//         success: function(data){
//           console.log(data);
//         }
//       }).then(function() {
//         setTimeout(function(){
//           $("#overlay").fadeOut(300);
//         },500);
//       });
//     });	
//   });

// end