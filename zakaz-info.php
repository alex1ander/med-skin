<div class="content-header">
    <span class="page-title">Детали про заказ № 12 
        <div class="icon-bright-gray icon-large mx-1"><img src="/image/print.svg" alt=""></div>
        <div class="icon-dark-gray icon-large mx-1"><img src="/image/trash.svg" alt=""></div>
    </span>
    <div class="buttons-right">
        <button class="btn btn-lg">Сформировать счет</button>
        <button class="btn btn-lg">Сохранить</button>
    </div>
</div>
<span class="sub-title">Номер заказа из 1C: 34569993</span>

<div class="row gx-4 place-forms">
    <div class="col-xl-5">
        <div class="content-body h-100">
            <div class="content-block">
                <h3 class="block-title">Контрагент</h3>
                <div class="input-place">
                    <input class="order-input mt-4" type="text" placeholder="Контрагент">

                    <div class="row">
                        <div class="col-md-5 mt-4"><input class="order-input" type="text" placeholder="Телефон"></div>
                        <div class="col-md-7 mt-4"><input class="order-input" type="text" placeholder="e-mail"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-7">
        <div class="content-body h-100 d-flex">
                <div class="content-block col-xl-8">
                    <h3 class="block-title">Метод оплаты и доставки</h3>
                    <div class="input-place">

                        <div class="row">
                            <div class="col-xl-6">
                                <select class="form-select mt-4" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select mt-4" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <input class="order-input mt-4" type="text" placeholder="Контрагент">
                    </div>
                </div>
                <div class="content-block bill col-xl-4">
                    <p><strong>Сумма заказа:</strong> £725,50</p>
                    <p><strong>Скидка:</strong> 5%</p>
                    <p><strong>НДС:</strong> £25,50</p>
                    <p><strong>Сумма с учетом скидки:</strong> £25,50</p>
                    <p><strong>Общая сумма:</strong> £751</p>
                </div>
        </div>
    </div>

</div>

<div class="content-body">
    <div class="content-block d-flex justify-content-between">
        <span class="block-title">Товары из заказа</span> 
        <div class="buttons-right">
            <div class="icon-red icon-large mx-1"><img src="/image/trash-red.svg" alt=""></div>
            <div class="icon-blue icon-large mx-1"><img src="/image/copy.svg" alt=""></div>

            <button class="btn btn-md d-flex align-items-center justify-content-center"><img style="margin:0 8px" src="/image/plus.svg" alt=""> Добавить товар</button>
        </div>
    </div>
            <div class="row">

                <div  class="col-12" >
                    <div id="table-place" class="table-place" style="overflow:auto">
                        <? include 't4.php';?>
                    </div>

                </div>
            </div>
</div>



