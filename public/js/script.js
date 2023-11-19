const todoList = [];

function checkTodoItem(index) {
    todoList[index].done = !todoList[index].done;
    renderTodoList();
}

function createTodoItemElement(todo, index) {
    const todoItemElement = document.createElement("li");
    todoItemElement.classList.add("list-group-item", "list-group-item-action");
    todoItemElement.setAttribute("role", "button");

    if (todo.done) {
        todoItemElement.style.textDecoration = "line-through";
        todoItemElement.style.backgroundColor = "lightgrey";
    }

    const todoTextElement = document.createElement("span");
    todoTextElement.innerHTML = todo.done
        ? `<del>${todo.text}</del>`
        : todo.text;

    todoItemElement.appendChild(todoTextElement);

    const deleteButton = document.createElement("button");
    deleteButton.innerHTML = "Hapus";
    deleteButton.classList.add("btn", "btn-danger", "btn-sm", "float-end");

    deleteButton.addEventListener("click", (event) => {
        event.stopPropagation(); // Agar fungsi checkTodoItem tidak terpanggil saat mengklik tombol hapus
        deleteTodoItem(index);
    });

    todoItemElement.appendChild(deleteButton);

    todoItemElement.addEventListener("click", () => {
        checkTodoItem(index);
    });

    return todoItemElement;
}

function addTodoItem() {
    const inputTodo = document.querySelector("#inputTodo").value;

    const newTodoItem = {
        text: inputTodo,
        done: false,
    };

    if (!inputTodo.trim()) {
        alert("Input tidak boleh kosong");
        return;
    }

    todoList.push(newTodoItem);

    document.querySelector("#inputTodo").value = "";

    renderTodoList();
}

document.querySelector("#addTodo").addEventListener("click", addTodoItem);

function renderTodoList() {
    const todoListElement = document.querySelector("#todoList");
    todoListElement.innerHTML = "";

    todoList.forEach((todo, index) => {
        const todoItemElement = createTodoItemElement(todo, index);
        todoListElement.appendChild(todoItemElement);
    });

    const footerElement = document.querySelector("footer");
}

function deleteTodoItem(index) {
    todoList.splice(index, 1);
    renderTodoList();
}
