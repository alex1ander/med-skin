<div class="content-header">
    <span class="page-title fw-bold">Каталог товаров</span>
    <button class="btn btn-lg">Импорт из 1С</button>
</div>
<div class="content-body">
    <div class="content-block">
        <div class="search-block">
            <input id="search" type="text" placeholder="Поиск товара по артикулу/наименованию">
            <button class="btn btn-md">Поиск</button>
        </div>

        <div class="content mt-5">
            <div class="row">
                <div class="folders-place col-md-3">
                    <h2>Папки</h2>


                    <ul class="level-1 folders">
                        <li><span class="list-element"><img src="/image/folder-icon.svg" alt="">Номенклатура</span>
                            <ul class="level-2">
                                <li><span class="list-element"><img src="/image/folder-icon.svg" alt="">Продукция</span>
                                    <ul class="level-3">
                                        <li><span class="list-element"><img src="/image/folder-icon.svg" alt="">Aprilline</span></li>
                                        <li><span class="list-element"><img src="/image/folder-icon.svg" alt="">DIACO BIOR</span></li>
                                        <li><span class="list-element"><img src="/image/folder-icon.svg" alt="">Dr. Pen USA</span></li>
                                    </ul>
                                </li>
                                <li><span class="list-element"><img src="/image/folder-icon.svg" alt="">Материалы</span></li>
                                <li><span class="list-element"><img src="/image/folder-icon.svg" alt="">Оборудование</span></li>
                            </ul>
                        </li>
                    </ul>



                </div>

                <div  class="col-md-9" >
                    <div id="table-place" class="table-place" style="overflow:auto">
                        <? include 't1.php';?>
                    </div>

                    <div id="detail-table-place" class="detail-table-place" style="overflow:auto">
                        <h3 class="text-detail">Детальная информация про товар ACNOX ACTIVE CREAM</h3>
                        <? include 't2.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
$(document).ready(function(){
    // При нажатии на элемент первого уровня
    $('.level-1 > li').click(function(){
        // Скрываем или показываем дочерние элементы второго уровня
        $(this).children('.level-2').toggleClass('show');
        $(this).children('.list-element').toggleClass('open');
    });

    // При нажатии на элемент второго уровня
    $('.level-2 > li').click(function(){
        // Скрываем или показываем дочерние элементы третьего уровня
        $(this).children('.level-3').toggleClass('show');
        $(this).children('.list-element').toggleClass('open');
    });

    // Отключаем всплытие события, чтобы избежать множественного срабатывания
    $('.level-1 > li, .level-2 > li, .level-3 > li').click(function(event){
        event.stopPropagation();
    });
});

</script>

<style>
    #admin-panel{
        background-color: #EAF1F8;
    }

</style>