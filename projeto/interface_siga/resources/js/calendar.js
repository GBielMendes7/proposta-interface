let month = new Date().getMonth() + 1;
let year = new Date().getFullYear();
let daysInMonth = new Date(year, month, 0).getDate();

let calendar = document.getElementById('calendar');
let table = document.createElement('table');

// Cabeçalho com mês e ano
let trHeader = document.createElement('tr');
let thHeader = document.createElement('th');
thHeader.colSpan = 7;
thHeader.innerText = new Intl.DateTimeFormat('pt-BR', { month: 'long', year: 'numeric' }).format(new Date(year, month - 1, 1));
trHeader.appendChild(thHeader);
table.appendChild(trHeader);



let day = 1;
for (let i = 1; i <= 6; i++) {
    let tr = document.createElement('tr');
    for (let j = 1; j <= 7; j++) {
        let td = document.createElement('td');
        if (day > daysInMonth) {
            break;
        } else {
            if (day == new Date().getDate() && month == new Date().getMonth() + 1 && year == new Date().getFullYear()) {
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
