import './bootstrap';
import '../css/style.css'; 
import '../js/calendar.js';
import '../js/submenu.js';  
import '../js/barra-progresso.js';

import.meta.glob(['../images/**']);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

