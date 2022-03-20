/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */
function getBotResponse(input) {
    if (input.includes("add book")){
        //m = "add book my last book by arthur conan doyle for below 10th subject Literature copies 10";
let book = "";
let author = "";
let spec = "";
let copies = 0;
let subj = "";
let arr = input.split(' ');

k = 0;
flag = 0;
for(let i=2; i<arr.length; i++){
    if(arr[i] == "by"){
        flag = 1;
        continue;
    }
    if(flag == 0){
        book += arr[i];
        book += ' ';
    }
        
    if(arr[i] == "for"){
        flag = 2;
        continue;
    }
    if(flag == 1){
        author += arr[i];
        author += ' ';
    }
    
    if(arr[i] == "subject"){
        flag = 3;
        continue;
    }
    if(flag == 2){
        spec += arr[i];
        spec += ' ';
    }
    
    if(arr[i] == "copies"){
        flag = 4;
        continue;
    }
    if(flag == 3){
        subj += arr[i];
        subj += ' ';
    }
}
copies = arr[arr.length - 1];
        return "Book successfully added";
    } else if (input.includes("issue book")) {
        //issue book His Last Bow to beta
        let book = "";
        let user = "";
        let arr = input.split(' ');
        k = 0;
        flag = 0;
        for(let i=2; i<arr.length; i++){
            if(arr[i] == "to"){
                flag = 1;
                continue;
            }
            if(flag == 0){
                book += arr[i];
                book += ' ';
            }
        }
        user = arr[arr.length - 1];
        return book;
    }  else if (input.includes("return book")) {
        //return book His Last Bow for beta
        let book = "";
        let user = "";
        let arr = input.split(' ');
        k = 0;
        flag = 0;
        for(let i=2; i<arr.length; i++){
            if(arr[i] == "for"){
                flag = 1;
                continue;
            }
            if(flag == 0){
                book += arr[i];
                book += ' ';
            }
        }
        user = arr[arr.length - 1];
        return user;
    }
    }