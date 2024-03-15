<div class="content-header">
    <span class="page-title fw-bold">Создать контрагента</span>
    <div class="buttons-right">
        <button class="btn btn-lg">Сохранить</button>
    </div>
</div>

<div class="row gx-4 place-forms mt-4">


    <div class="col-12 col-lg mt-4">
        <div class="content-body h-100">
            <div class="content-block">
                <h3 class="block-title">Общие</h3>
                <div class="input-place">

                    <div class="row">
                        <div class="col-md-6 mt-4"><input class="order-input" type="text" placeholder="ФИО"></div>
                        <div class="col-md-6 mt-4"><input class="order-input" type="text" placeholder="Номер телефона"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <select class="form-select" aria-label="Default select example" >
                                <option selected="">Физ лицо</option>
                                <option value="1">Юр лицо</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-4"><input class="order-input" type="text" placeholder="Email"></div>
                        <div class="col-md-6 mt-4"><button class="btn">Добавить дополнительный email</button></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-4">
                                <form>
                                <div class="multiselect">
                                    <div class="selectBox" onclick="showCheckboxes()">
                                    <select class="form-select">
                                        <option>Выбрать тип</option>
                                    </select>
                                    <div class="overSelect"></div>
                                    </div>
                                    <div id="checkboxes">
                                   
                                    <input class="pretty-input" type="checkbox" id="one" /> 
                                    <label class="pretty-label" for="one">Поставщик</label>

                                    <input class="pretty-input" type="checkbox" id="two" />
                                    <label class="pretty-label" for="two">Покупатель</label>

                                    <input class="pretty-input" type="checkbox" id="three" />
                                    <label class="pretty-label" for="three">Опт</label>

                                    <input class="pretty-input" type="checkbox" id="four" />
                                    <label class="pretty-label" for="four">Поставщик кремов</label>

                                    </div>
                                </div>
                                </form>
                        </div>

                        <div class="col-md-6 mt-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected="" hidden>Язык клиента</option>
                                <option value="1">RU</option>
                                <option value="2">ENG</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mt-4"><input class="order-input" type="text" placeholder="Номер НДС"></div>
                        <div class="col-md-6 mt-4"><input class="order-input" type="text" placeholder="Номер предприятия"></div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg mt-4">
        <div class="content-body h-100">
            <div class="content-block">
                <h3 class="block-title">Адреса</h3>
                <div class="input-place">
                    
                    <div class="row">
                        <div class="col-md-7 mt-4"><input class="order-input" type="text" placeholder="Юридический адрес"></div>
                        <div class="col-md-5 mt-4"><input class="order-input" type="text" placeholder="Индекс"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 mt-4"><input class="order-input" type="text" placeholder="Адрес для корреспонденции"></div>
                        <div class="col-md-5 mt-4"><input class="order-input" type="text" placeholder="Индекс"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 mt-4"><input class="order-input" type="text" placeholder="Фактический адрес"></div>
                        <div class="col-md-5 mt-4"><input class="order-input" type="text" placeholder="Индекс"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 mt-4"><input class="order-input" type="text" placeholder="Адрес клиента с сайта"></div>
                        <div class="col-md-5 mt-4"><input class="order-input" type="text" placeholder="Индекс"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mt-4">
        <div class="content-body h-100">
            <div class="content-block">
                <h3 class="block-title">Привязки</h3>
                <div class="input-place">
                    
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected="" hidden>Выбрать клинику</option>
                                <option value="1">Клиника1</option>
                                <option value="2">Клиника2</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected="" hidden>Выбрать менеджера</option>
                                <option value="1">Менеджер1</option>
                                <option value="2">Менеджер2</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


   

</div>


<div class="row gx-3 place-forms">


<div class="col-12 col-lg mt-4">
        <div class="content-body h-100">
            <div class="content-block">
                <h3 class="block-title">Банковские счета </h3>
                <div class="input-place">

                    <div class="row">
                        <div class="col-md-12 mt-4"><input class="order-input" type="text" placeholder="Номер счета"></div>
                        <div class="col-md-12 mt-4"><input class="order-input" type="text" placeholder="Дополнительный номер счета"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="col-12 col-lg mt-4 void">
        <div class="content-body h-100">
            <div class="content-block">
                <h3 class="block-title">История событий</h3>
                <span>Редактирование адреса</span> <span>12.03.2024 9:30</span><br>
                <span><strong>Менеджер:</strong> Инна 1С</span><br>
                <span>Адрес изменен на “Place de l'Hôtel de Ville 74190 Bordo”</span>
            </div>
        </div>
    </div>
    <!-- void --><div class="col-md-3 mt-4 void"></div><!-- void -->
</div>