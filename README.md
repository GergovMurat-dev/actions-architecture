## Разбор подхода с ActionClass'ами

Суть подхода в вынесении логики с контроллеров,
консольных команд и прочего в специальные классы.
<br>
Моё мнение - подход хороший, для средних и крупных проектов.
Для проектов с конвеерным подходом данная архитектура не имеет смысла,
так как создание новых фич занимает не мало времени, связанных с кол-вом
файлов образующихся при реализации какого-то функционала.
<br>
<br>
Плюсами данного подхода могу выделить следующее: за счёт своеобразной модульности 
код получается изолированным, что позволяет без труда тестировать функционал что способствует
лёгкому внедрению методологии TDD, разработка в команде будет создавать меньше мердж конфликтов, 
за счёт того что, кол-во переплетающихся между собой файлов меньше. 
