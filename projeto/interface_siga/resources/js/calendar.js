let month = new Date().getMonth() + 1;
let year = new Date().getFullYear();
let daysInMonth = new Date(year, month, 0).getDate();
let firstDayOfMonth = new Date(year, month - 1, 1);
let dayOfWeek = firstDayOfMonth.getDay();

let calendar = document.getElementById('calendar');
let table = document.createElement('table');
let tr = document.createElement('tr');
let daysOfWeek = ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'];
for (let i = 0; i < daysOfWeek.length; i++) {
    let th = document.createElement('th');
    th.innerText = daysOfWeek[i];
    tr.appendChild(th);
}
table.appendChild(tr);

let day = 1;
for (let i = 1; i <= 6; i++) {
    let tr = document.createElement('tr');
    for (let j = 1; j <= 7; j++) {
        let td = document.createElement('td');
        if (i == 1 && j < dayOfWeek) {
            td.innerText = '';
        } else if (day > daysInMonth) {
            break;
        } else {
            if (day == new Date().getDate()) {
                td.classList.add('today');
            }
            td.innerText = day;
            day++;
        }
        tr.appendChild(td);
    }
    table.appendChild(tr);
}

calendar.appendChild(table);
