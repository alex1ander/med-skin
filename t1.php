<table id="med-table" class="table table-med" cellspacing="0"
                    width="100%">
                  
    <thead class="thead-med">
        <tr>
        <th>№</th>
        <th>Код</th>
        <th>Артикул</th>
        <th>Наименование</th>
        <th>Вид номенклатуры</th>
        <th>Объем</th>
        <th>Цена</th>
        <th>Ставка НДС</th>
        <th>Производитель</th>
        <th>Страна</th>
        <th>Бренд производителя</th>
        <th>Медицинский</th>
        <th>Количество</th>
        <th>Комментарий</th>
        <th>Свободный остаток</th>
        <th>Единица</th>
        </tr>
    </thead>
    <tbody class="tbody-bordered">
        <? for($i = 1; $i <= 20; $i++ ):?>
        <tr>
        <td><?=$i?></td>
        <td>000000652</td>
        <td>UK012222CS</td>
        <td>ACNOX ACTIVE CREAM</td>
        <td>Товар</td>
        <td></td>
        <td>£182.50</td>
        <td>20%</td>
        <td>Loreal</td>
        <td>Франция</td>
        <td>Kerastase</td>
        <td><i class="bi bi-check-circle-fill"></i></td>
        <td>5 000</td>
        <td>102021, 102024</td>
        <td>1 000</td>
        <td>шт</td>
        </tr>
        <? endfor;?>
    </tbody>



</table>




<script>


// document.getElementById("table-place").addEventListener("mousemove", function(event) {
//   if (event.buttons !== 1) return; // Проверяем, нажата ли левая кнопка мыши
//   var delta = (event.clientX - this.getBoundingClientRect().left - this.offsetWidth / 2) / 50;
//   this.scrollLeft += delta;
// });


</script>
