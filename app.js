/*
1. đặt id cho ul để truy cập
2. truy cập thẻ ul thông qua id đã đặt
3. tạo một biến chứa tất cả công việc dưới dạng là các thẻ HTML -> html = '';
4. duyệt qua danh sách công việc -> TODOS
  4.1. tạo ra một công việc -> todoItem = `<li>......</li>`;
  4.2. Nối công việc (todoItem) vào danh sách công việc (html)
5. hiển thị toàn bộ công việc lên giao diện
*/

/*
R -> read -> hiển thị danh sách
D - >delete -> xoá 
C - >create -> thêm 
U - >update -> sửa
tìm kiếm

*/



let TODOS = ['eat', 'sleep', 'coding', 'learning', 'record videos'];

let todoList = document.getElementById('todoList');
let fix = document.getElementById("fix");
let buttonSave = document.getElementById("buttonSave");
let inpVal = document.getElementById("inpVal");
let buttonSearch = document.getElementById("buttonSearch");
let buttonClearSearch = document.getElementById("buttonClearSearch");
let inpSearch = document.getElementById("inpSearch");
let saveList = document.getElementById("saveList");
renderList(TODOS);


// EVENTS
/*
bắt sự kiện khi người dùng click vào button "Lưu"
    + lấy giá trị người dùng đã nhập vào ô "input" -> todoName
    + Thêm "todoName" vào mảng TODOS -> js add item to array
    + hiển thị lại danh sách
*/

// let operation="";
let idx = -1;
buttonSave.addEventListener('click', function () {
    // if (confirm("chac chan la them khong?") === true) {
    // let check = TODOS.length;
    // TODOS.splice(check, 0, invalue);
    // let invalue = inpVal.value;
    // TODOS.push(invalue);
    // renderList();
    // inpVal.value = '';
    // }
    let invalue = inpVal.value;
    if (idx !== -1) {
        TODOS[idx] = invalue;
        idx = -1;
    } else {
        TODOS.push(invalue);
    }
    renderList(TODOS);
    inpVal.value = '';
})
buttonClearSearch.addEventListener('click', function () {
    inpSearch.value = '';
    renderList(TODOS);
})
/*
bắt sự kiện khi người dùng click vào button "Tim kiem"
    + lấy giá trị người dùng đã nhập vào ô "inpSearch"  -> searchKeyword
    + lọc và lấy ra những phần tử có chứa từ khóa cần tìm (dùng mảng)
    + hiển thị danh sách đã tìm được
*/
buttonSearch.addEventListener('click', function () {
    let newa = [];
    let searchKeyword = inpSearch.value;

    for (let i = 0; i < TODOS.length; i++) {
        // javascript check string contain string
        if (TODOS[i].includes(searchKeyword) === true) {
            newa.push(TODOS[i]);
        }
    }

    renderList(newa, searchKeyword);
})


function renderList(list, keyWord = '') {
    let html = '';
    for (let i = 0; i < list.length; ++i) {
        let item = list[i];

        if (keyWord !== '') {
            item = item.replaceAll(keyWord, `<mark>${keyWord}</mark>`);
        }


        let todoItem = `
        <li>
          <span>${item}</span>
          <button type="button" onclick="fix2(${i})">Sửa</button>
          <button type="button" onclick="deleteTodo(${i})">Xóa</button>
        </li>`;
        html += todoItem;
    }
    todoList.innerHTML = html;
}

// coding -> <mark>co</mark>ding      
function mark(keyWord, newa) {
    let html = '';
    for (let i = 0; i < newa.length; i++) {

        let item = newa[i];
        let itemLength = item.length;
        let length = keyWord.length;
        let index = item.indexOf(keyWord);

        let newName = item.replaceAll(keyWord, `<mark>${keyWord}</mark>`);
        console.log(newName);

        let todoItem = `
        <li>
          <span>${newName}</span>
          <button type="button" onclick="fix2(${i})">Sửa</button>
          <button type="button" onclick="deleteTodo(${i})">Xóa</button>
        </li>`;
        html += todoItem;
    }
    todoList.innerHTML = html;
}

// render
function deleteTodo(index) {
    // phải có được chỉ số của công việc cần xóa
    if (confirm("chan chac xoa chu?") === true) {
        TODOS.splice(index, 1);
        renderList(TODOS);
    }

    //  for (let i=0;i<TODOS.length;i++) {
    //  console.log(TODOS[i]);
    //  }
    //  console.log('\n');
    // 1. xóa công việc ra khỏi mảng thông qua chỉ số (index) -> js remove item from array by index
    // 2. hiển thị lại danh sách công việc

}


function fix2(index) {
    // isFixed = true;
    let item = TODOS[index];
    idx = index;
    inpVal.value = item;
}
// function add() {
//     if (confirm("chac chan la them khong?") === true) {
//         let check = TODOS.length - 1;
//         let invalue = inpVal.value;
//         TODOS.splice(check, 0, invalue);
//         renderList2();
//     }
// }
// function renderList2() {
//     let html = '';
//     let item = TODOS[TODOS.length - 1];
//     let todoItem = `
//         <li>
//           <span>${item}</span>
//           <button type="button">Sửa</button>
//           <button type="button" onclick="deleteTodo(${i})">Xóa</button>
//         </li>`;
//     html += todoItem;
//     todoList.innerHTML = html;
// }

